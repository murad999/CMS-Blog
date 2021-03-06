<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'Hospital') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    @yield('styles')
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/Mainstyle.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top NavColor">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand hospitalBrand" href="{{ url('/') }}">
                        {{ config('', 'Hospital') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->

                        @if (Auth::guest())
                            {{-- <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li> --}}
                        @else
                            <li><a href="{{ route('index') }}" target="_blank">Visit Website</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                @if(Auth::check())
                    <div class="col-md-3">
                        <ul class="list-group">
                            <li class="list-group-item itemColor" ><a class="glyphicon glyphicon-home"  href="{{route('home')}}"> Home</a></li>
                                
                                @if(Auth::user()->admin)
                                     <li class="list-group-item itemColor"><a href="{{route('users')}}" class="glyphicon glyphicon-user"> Users</a></li>
                                    <li class="list-group-item itemColor"><a href="{{route('users.create')}}" class="glyphicon glyphicon-plus-sign"> Create User</a></li>
                                @endif

                            {{-- <li class="list-group-item"><a href="{{route('users.profile')}}">My Profile</a></li> --}}
                            {{-- <li class="list-group-item"><a href="{{route('categories.create')}}">Create Category</a></li> --}}
                            {{-- <li class="list-group-item"><a href="{{route('departments.create')}}">Create Department</a></li> --}}
                            <li class="list-group-item itemColor"><a class="glyphicon glyphicon-th-list" href="{{route('blogs')}}"> Blogs</a></li>
                            <li class="list-group-item itemColor"><a class="glyphicon glyphicon-tint" href="{{route('appointments')}}"> Appointments</a></li>
                            <li class="list-group-item itemColor"><a class="glyphicon glyphicon-th-list" href="{{route('sliders')}}"> Sliders</a></li>
                            <li class="list-group-item itemColor"><a class="glyphicon glyphicon-th-list" href="{{route('departments')}}"> Departments</a></li>
                            <li class="list-group-item itemColor"><a class="glyphicon glyphicon-tint" href="{{route('doctors')}}"> Doctors</a></li>
                            <li class="list-group-item itemColor"><a class="glyphicon glyphicon-indent-right" href="{{route('depServices')}}"> Department Services</a></li>
                            <li class="list-group-item itemColor"><a class="glyphicon glyphicon-eye-open" href="{{route('abouts')}}">  About</a></li>
                            <li class="list-group-item itemColor"><a class="glyphicon glyphicon-tasks" href="{{route('services')}}"> Services</a></li>
                            <li class="list-group-item itemColor"><a class="glyphicon glyphicon-envelope" href="{{route('contacts')}}"> Contacts</a></li>
                            @if(Auth::user()->admin)
                                 <li class="list-group-item itemColor"><a class="glyphicon glyphicon-cog" href="{{route('siteSettings')}}"> Site Setting</a></li>
                            @endif
                            {{-- <li class="list-group-item"><a href="{{route('categories')}}">Categories</a></li>
                            <li class="list-group-item"><a href="{{route('posts')}}">All Posts</a></li>
                            <li class="list-group-item"><a href="{{route('posts.trashed')}}">All Trashed Posts</a></li>
                            <li class="list-group-item"><a href="{{route('posts.create')}}">Create Post</a></li>
                            <li class="list-group-item"><a href="{{route('tags')}}">All Tags</a></li>
                            <li class="list-group-item"><a href="{{route('tags.create')}}">Create Tags</a></li>
                            
                            <li class="list-group-item">This our navgation</li> --}}
                        </ul>
                    </div>
                @endif
               
                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script>

        @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}")
        @endif

         @if(Session::has('info'))
            toastr.info("{{Session::get('info')}}")
        @endif

    </script>
    @yield('scripts')
</body>
</html>
