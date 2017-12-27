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

    </head>
    
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
                
                <?php function activeMenu($url)
                {
                    return request()->is($url) ? 'active' : '';
                } ?>
                <nav class="navbar navbar-inverse navbar-fixed-top">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                           
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav">
                                <li  class="{{ activeMenu('/') }}"> <a  href=" {{ route('inicio')}}"> Inicio</a> </li>

                                <li  class="{{activeMenu('visitarTemplos')}}"> <a href="{{route('visitarTemplos')}}">Visitar Templos</a> </li>

                                <li  class="{{ activeMenu('nosotros')  }}"> <a href="{{ route('nosotros') }}">Nosotros</a> </li>
                               
                                <li  class= "{{ activeMenu('mensajes/create') }}" ><a href="{{ route('mensajes.create')}}">Contacto</a>  </li>
                            
                            
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
                           
                            <ul class="nav navbar-nav navbar-right">
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
                        </div><!-- /.navbar-collapse -->
                    </div>
                </nav>
    
              
        <div class="container" style="margin-top: 100px;">
               @yield('contenido')
        <footer>
                <a href="https://laravel.com/docs">spaziour.com</a>
                Copyrigth {{ date('y')}}
        </footer>
        </div>
        <script type="text/javascript" src="{{ ("js/all.js") }} "></script> 
    </body>
</html>
