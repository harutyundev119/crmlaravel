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
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
           <div class="container">
  <input class="form-control"  id="myInput" type="text" >
  <br>
  <table class="table table-bordered table-striped">
    <thead>  
    
   <form id="carform" action="{{url('insert-engineer-problem')}}" method="post" >
     {{ csrf_field() }}
      <tr>
        <th>Անուն Ազգանուն</th>
        <th>Որ կազմակերպությունից են զանգել</th>
        <th>Ինչ հարցով</th>
        <th>Գրանցող</th>
        <th>գրամցման ժամ</th>
        <th>Կարգավիճակ</th>
      </tr>
    </thead>
      @foreach($infos as $info)
    <tbody>

      <tr>
        
        <td>{{ $info->name }}</td>
        <td>{{ $info->campnineam }}</td>
        <td>{{ $info->whoproblem }}</td>
        <td>{{ $info->registrar}}</td>
        <td>{{ $info->date }}</td>
        <td>{{ $info->status }}</td>
        
        
      </tr>
 
                      
         
  @endforeach 
     
       
    </thead>   
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
   <!--  <footer class="site-footer">
    
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
















