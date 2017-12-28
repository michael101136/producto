<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Spaziour.com</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="{{ asset("js/jquery.js") }}"></script>
        <script type="text/javascript" src="{{ asset("js/bootstrap.js") }}"></script>
        <link rel="stylesheet"  href="{{ asset("css/app.css") }}"> 
        <link rel="stylesheet" href="{{ asset("AdminLT/css/bootstrap.min.css") }}">
        <link rel="stylesheet" href="{{ asset("AdminLT/css/font-awesome.min.css") }}">
        <link rel="stylesheet" href="{{ asset("AdminLT/css/ionicons.min.css") }}">
        <link rel="stylesheet" href="{{ asset("AdminLT/css/AdminLTE.min.css") }}">
        <link rel="stylesheet" href="{{asset("AdminLT/css/skins/skin-blue.min.css") }}">

    </head>
    
<body class="hold-transition skin-blue sidebar-mini">
    <?php function activeMenu($url)
                {
                    return request()->is($url) ? 'active' : '';
                } ?>
<div class="wrapper">

  <header class="main-header">
    <a href="index2.html" class="logo">
      <span class="logo-mini"><b>A</b>LT</span>
      <span class="logo-lg"><b>ProDU</b>CE</span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown tasks-menu">
             <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav">
                            

                                @if(auth()->check())
                                    
                                        <li class= "{{ activeMenu('mensajes') }}">
                                            <a  href="{{ route('mensajes.index')}}">mensajes</a>
                                        </li>
                                        @if(auth()->user()->hasRoles(['admin','estudiante']))
                                                 <li class= "{{ activeMenu('usuarios') }}"> 
                                                        <a  href="{{ route('usuarios.index')}}">usuarios</a>
                                                 </li>
                                        @endif

                                           

                                @endif

                            </ul>

                            </li>
                                 <ul class="nav navbar-nav navbar-left">
                                    @if(auth()->guest())

                                        <li class= "{{ activeMenu('login') }}">
                                            <a  href="{{ URL::to('login') }}">login</a> 
                                        </li> 

                                    @else 
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ auth()->user()->name }} <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="logout"> cerrar </a></li>
                                            </ul>
                                        </li>

                                    @endif

                                
              </ul>
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Michael </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Productos</span>
               <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          
          </ul>                
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
       @yield('contenido')
    </section>

    <section class="content container-fluid">

    </section>
  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
     Copyrigth {{ date('y')}}
  </footer>

</div>


<script src="{{asset("AdminLT/jquery/jquery.min.js") }}"></script>
<script src="{{asset("AdminLT/js/bootstrap.min.js") }}"></script>
<script src="{{asset("AdminLT/js/adminlte.min.js") }}"></script>

</body>

</html>
