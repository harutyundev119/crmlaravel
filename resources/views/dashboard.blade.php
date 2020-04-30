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
          <h5 class="centered">   Անուն {{ ucfirst(Auth()->user()->name) }}
            <br>
                    Պաշտոն {{ ucfirst(Auth()->user()->group) }}</h5>
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
           <li class="mt">
            <a href="/օtherquestions">
              <i class="fa fa-dashboard">Այլ հարցեր</i> 
            </a>
          </li>
                      @endif
      </div>
    </aside>
 
 
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
         
              <div style="width: 100%"  id="question"><center><h2 style="align-content: center;">Դուք մեր բաժանորդն եք ?</h2></center> 
                <hr>
                


              <div class="container">
  <div class="row">
    <div class="col-sm-12"><button onclick="quetion()"  class="btn-success">Այո</button><button onclick="qayl3()" style="margin-left: 10px;" class="btn-success">Ոչ</button></div>
   
  </div>
</div>
                
 </div>


<hr>

  <div id="qayl2" style="display: none" class="container">
  <div class="row">
    <div class="col-sm-6"><button onclick="qayl2()" id="save" class="btn-success"><h2>Ունեք Գանգատ</h2></button></div>
    <div class="col-sm-6"><button onclick="qayl2()" id="addnew" class="btn-success"><h2>Ցանկանում ենք ծառաություն ավելացնել</h2></button></div>
  </div>
</div>
<script type="text/javascript">
          function quetion(){
           document.getElementById("qayl2").style.display="block";
            document.getElementById("question").style.display="none";
          }


            function qayl2(){
           document.getElementById("hayt").style.display="block";
            document.getElementById("qayl2").style.display="none";

          }
          function qayl3(){
           document.getElementById("qayl3").style.display="block";
            document.getElementById("question").style.display="none";

          }
           function qayl4(){
           document.getElementById("qayl4").style.display="block";
            document.getElementById("qayl3").style.display="none";

          }

           function qayl5(){
           document.getElementById("qayl5").style.display="block";
            document.getElementById("qayl3").style.display="none";

          }




         </script>


     <div id="hayt" style="display: none">
        <h1>Գրանցել նոր հայտ</h1>
             <form action="{{url('insert-new-problem')}}" method="POST" id="logForm">
 
                 {{ csrf_field() }}
 

                   <div class="form-label-group">
                  <input type="hidden" name="mane" value="{{url('insert-new-problem')}}">
               
                </div> 

                <div class="form-label-group">
                  <input type="text" name="state" id="inputEmail" class="form-control" placeholder="Մարզ" >
                  <label for="inputEmail">Մարզ</label>
                </div> 
                <div class="form-label-group">
                  <input type="text" name="region" id="inputEmail" class="form-control" placeholder="Համայնք" >
                  <label for="inputEmail">Համայնք</label>
                </div> 
                <div class="form-label-group">
                  <input type="text" name="street" id="inputEmail" class="form-control" placeholder="Փողոց" >
                  <label for="inputEmail">Փողոց</label>
                </div> 
                 <div class="form-label-group">
                  <input type="text" name="shenq" id="inputEmail" class="form-control" placeholder="Շենք" >
                  <label for="inputEmail">Շենք</label>
                </div>
                <div class="form-label-group">
                  <input type="text" name="apartment" id="inputEmail" class="form-control" placeholder="Բնակարան" >
                  <label for="inputEmail">Բնակարան/Տուն</label>
                </div> 
                <div class="form-label-group">
                  <input type="Namber" name="phone" id="inputEmail" class="form-control" placeholder="Բջջային" >
                  <label for="inputEmail">Բջջային</label>
                </div> 
                 <div class="form-label-group">
                  <input type="text" name="meknabanutyun" id="inputEmail" class="form-control" placeholder="Մեկնաբանություն" >
                  <label for="inputEmail">Մեկնաբանություն</label>
                </div> 
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Գրանցել հայտ</button>
              </form>
            </div>
            </section>
          </div>
        </div>
              
                   <div class="row" id="qayl3" style="display: none;">
                        <div class="col-sm-6"><button onclick="qayl5()" id="save" class="btn-success"><h2>Ցանկանում եք բաժանորդագրվել</h2></button></div>
                        <div class="col-sm-6"><button onclick="qayl4()" id="addnew" class="btn-success"><h2>Այլ Հարցերով</h2></button></div>
                      </div>
                    </div>





       

                    <div class="row" on id="qayl4" style="display: none; width: 75%;margin-left: 30px;">
                       
                        <h1>Գրանցել այլ հարց</h1>
             <form  id="whom" action="{{url('insert-new-questions')}}" method="POST" >
 
                 {{ csrf_field() }}
 

                   <div class="form-label-group">
                  <input type="hidden" name="mane" value="{{url('insert-new-questions')}}">
               
                </div> 

                <div class="form-label-group">
                  <input type="text" name="name" id="inputEmail" class="form-control" placeholder="Անուն Ազգանուն" >
                  <label for="inputEmail">Անուն Ազգանուն</label>
                </div> 
                <div class="form-label-group">
                  <input type="text" name="campnineam" id="inputEmail" class="form-control" placeholder="Որտեղից են զանգում (կազմակերպություն)" >
                  <label for="inputEmail">Որտեղից են զանգում</label>
                </div> 
                <div class="form-label-group">
                  <input type="text" name="whoproblem" id="inputEmail" class="form-control" placeholder="Ինչ հարցով" >
                  <label for="inputEmail">Ինչ հարցով</label>
                </div> 
                <label for="whom">Ում</label>
                    <select id="whom" name="whom" form="whom">
                      <option value="Տնօրինություն">Տնօրինություն</option>
                      <option value="Տեխնիկական">Տեխնիկական</option>
                      <option value="Իրավաբան">Իրավաբան</option>
                    </select>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Գրանցել հայտ</button>
              </form>
                      </div>
                    </div>




                    <div class="row" on id="qayl5" style="display: none; width: 75%;margin-left: 30px;">
                       
                        <h1>Նոր Բաժանորդ</h1>
            
                     <form action="{{url('insert-new-available')}}" method="POST" id="logForm">
 
                 {{ csrf_field() }}
 

                   <div class="form-label-group">
                  <input type="hidden" name="mane" value="{{url('insert-new-problem')}}">
               
                </div> 

                <div class="form-label-group">
                  <input type="text" name="state" id="inputEmail" class="form-control" placeholder="Մարզ" >
                  <label for="inputEmail">Մարզ</label>
                </div> 
                <div class="form-label-group">
                  <input type="text" name="region" id="inputEmail" class="form-control" placeholder="Համայնք" >
                  <label for="inputEmail">Համայնք</label>
                </div> 
                <div class="form-label-group">
                  <input type="text" name="street" id="inputEmail" class="form-control" placeholder="Փողոց" >
                  <label for="inputEmail">Փողոց</label>
                </div> 
                 <div class="form-label-group">
                  <input type="text" name="shenq" id="inputEmail" class="form-control" placeholder="Շենք" >
                  <label for="inputEmail">Շենք</label>
                </div>
                <div class="form-label-group">
                  <input type="text" name="apartment" id="inputEmail" class="form-control" placeholder="Բնակարան" >
                  <label for="inputEmail">Բնակարան/Տուն</label>
                </div> 
                <div class="form-label-group">
                  <input type="Namber" name="phone" id="inputEmail" class="form-control" placeholder="Բջջային" >
                  <label for="inputEmail">Բջջային</label>
                </div> 
                 <div class="form-label-group">
                  <input type="text" name="meknabanutyun" id="inputEmail" class="form-control" placeholder="Մեկնաբանություն" >
                  <label for="inputEmail">Մեկնաբանություն</label>
                </div> 


                <input type="radio" id="male" name="available" value="Հասանելի">
                <label for="male">Հասանելի</label><br>
                <input type="radio" id="female" name="available" value="Ոչ հասանելի">
                <label for="female">Ոչ հասանելի</label><br>



                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Գրանցել նոր բաժանորդին</button>

              </form>
                      </div>
                    </div>



 














      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <!-- <footer class="site-footer">
    
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
