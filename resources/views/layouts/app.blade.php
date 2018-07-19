<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/custom.css') }}">
    

</head>
<body>
    <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.0';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    @guest

    @else
    <div id="app">
    	<nav class="navbar navbar-expand-md navbar-light navbar-laravel navbar-custom">
            @guest

            @else
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
            </button>
            @endguest
		    <div class="collapse navbar-collapse collapse-custom" id="navbarSupportedContent">
				<!-- Right Side Of Navbar -->
				
                <ul class="navbar-nav ml-auto pull-right">
                    <!-- Authentication Links -->
                    @guest

                        <!--<li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li> -->
                    @else


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tags.index') }}">Tags</a>
                        </li> &nbsp;

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('categories.index') }}">Categorias</a>
                        </li> &nbsp;

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
                        </li> &nbsp;
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('campeonatosAdmin.index') }}">Campeonatos</a>
                        </li>
                        &nbsp; &nbsp; &nbsp;

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
			</div>
		</nav>
        @endguest
       
        <nav style="background-color: #111111;top: 0;left: 0;width: 100%;height: 100px;padding-top: 22px;box-sizing: border-box;">
            <div class="container">
            <div class="col-md-12" style="padding:0;">
            <div class="logo"><a href="{{ url('/') }}"> <img src="http://192.168.1.4/lume/public/image/lume.png" style="width: 158px;float: left;margin-bottom: 20px;margin-top: -18px;"> </a></div>
            <ul style="list-style: none;float: right;margin: -10px 0; padding: 0; display: flex;">
                <li style="list-style: none;"><a style="color: white;text-decoration: none;line-height: 80px;padding: 12px 10px;    text-transform: uppercase;font-size: 18px;" href="{{ url('/noticias') }}">Noticias</a></li>
                <li style="list-style: none;"><a style="color: white;text-decoration: none;line-height: 80px;padding: 12px 10px;    text-transform: uppercase;font-size: 18px;" href="{{ url('/campeonatos') }}">Campeonatos</a></li>              
                <li style="list-style: none;"><a style="color: white;text-decoration: none;line-height: 80px;padding: 12px 10px;    text-transform: uppercase;font-size: 18px;" href="{{ url('/noticias') }}">Contato</a></li>
            </ul>
            </div>
            </div>
        </nav>



        @if(session('info'))
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-success" style="font-size: 2rem;">
                            {{ session('info') }}
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if(count($errors))
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-danger" style="font-size: 2rem;">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <main class="py-4" style="font-size: 1.9rem;">
            @yield('content')
        </main>
    </div>


    <footer>
        <div class="col-md-12" style="background-color: #111111;  height: 200px; margin-top: 50px;">
            <div style="margin-top: 60px;">
                <p style="color:white; font-size: 16px; text-align: center;">Liga Universitária Maranhense de e-Sports.</p>
                <hr style="color: white; width: 100%; border-top: 1px solid;">
                <p style="color:white; font-size: 16px; text-align: center;">©Copyright. Todos os direitos Reservados.</p>

            </div>
        </div>
    </footer>


    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
    
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    @yield('js')

</html>
