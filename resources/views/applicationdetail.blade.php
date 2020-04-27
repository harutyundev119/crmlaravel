<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashboard</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

</head>

<body>
  <section id="container">
   
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
                 
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="small" href="{{url('logout')}}">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
  
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered"id="name">   Անուն {{ ucfirst(Auth()->user()->name) }}
            <br>
                    Պաշտոն{{ucfirst(Auth()->user()->group)}} </h5>

 
 @if ( ucfirst(Auth()->user()->group) == "Ներտնային սպասարկող")
                          
                                        @verbatim
          <li class="mt">
            <a href="/date">
              <i class="fa fa-dashboard"> Գրանցված չկատարված Հայտեր</i> 
            </a>
          </li>

          <li class="mt">
            <a href="/date">
              <i class="fa fa-dashboard"> Գրանցված Հայտեր</i> 
            </a>
          </li>

  

                @endverbatim


                      @elseif ( ucfirst(Auth()->user()->group)  == "Ներտնային սպասարկման ավագ մասնագետ")
                          
                                        @verbatim
           <li class="mt">
            <a href="/date">
              <i class="fa fa-dashboard"> Գրանցված Հայտեր</i> 
            </a>
          </li>
           <li class="mt">
            <a href="/data">
              <i class="fa fa-dashboard"> Հայտեր Բաժանում</i>
             
              </a>
          </li>          
                @endverbatim
                      @else
          <li class="mt">
            <a href="/dashboard">
              <i class="fa fa-dashboard"> Հայտի գրանցում </i>
             
              </a>
          </li>
                      
          <li class="mt">
            <a href="/date">
              <i class="fa fa-dashboard"> Գրանցված Հայտեր</i> 
            </a>
          </li>
                      @endif

      </div>
    </aside>
 
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h1>Բաժանորդի տվյալներ</h1>
        <form  id="carform" action="{{url('insert-update-problem')}}" method="post">
              {{ csrf_field() }}
            @foreach($applications as $application)

             <input type="hidden" class="form-control"  name="id" value="{{ $application->id }}" readonly>
            Մարզ<input type="text" class="form-control"  name="" value="{{ $application->state }}" readonly>
            Համայնք<input type="text" class="form-control"  name="" value="{{ $application->region }}" readonly>
            Փողոց<input type="text" class="form-control"  name="" value="{{ $application->street }}" readonly>
            Բնակարան/Տուն<input type="text" class="form-control"  name="" value="{{ $application->apartment }}" readonly>
            Հեռախոս<input type="text" class="form-control"  name="" value="{{ $application->phone }}" readonly>
            Մեկնաբանություն
            <textarea rows="4" class="form-control"  cols="50" name="" placeholder="{{ $application->problem}}" readonly></textarea>
            @endforeach
            <hr>
            <input type="hidden" class="form-control"  name="username" value="{{ ucfirst(Auth()->user()->name) }}" readonly>  

            <input style="display: none;" type="text" class="form-control" id="coment"  name="comments" value="{{ $application->comment}}" id="coment1" readonly>
            
            <div id="histore">
                

                  <script>
                              var monthString = document.getElementById("coment").value;
                              var text = monthString.split("##");
                              var lengr = text.length-2;
                              var i;
                              for (var i = 0 ; i <lengr; i++) {
                                  let p = document.createElement('p');  
                               document.write("<p>"+text[i]+"</p>");
                            }
                        </script>

            </div>

            <textarea id="comment2" rows="4" class="form-control"  cols="50" name="comment" placeholder="Մեկնաբանություն"  required></textarea>
            


            <script type="text/javascript">
               

              
                function start(){

                x = document.getElementById("coment1").value
                y= document.getElementById("coment2").value
                document.getElementById("comment2").innerHTML = x

                        }


            </script>








            <label   for="status" required> Կարգավիճակ:</label>
                    <select id="status" name="status" form="carform">
                      <option value="Կարգավորված է">Կարգավորված է</option>
                      <option value="Կարգավորված չէ">Կարգավորված չէ</option>
                      <option value="Մոտենալ հետո">Մոտենալ հետո</option>
                       <option value="Տանը չի եղել">Տանը չի եղել</option>
                       <option value="Զանգին չի պատասխանել">Զանգին չի պատասխանել</option>
                    </select>
             <input onclick="comment2" class="form-control" type="submit" name="injiner" value="Փողել կարգավիճակը">
        </form>
           
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
 <!--    <footer class="site-footer">
    
    </footer> -->
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>




