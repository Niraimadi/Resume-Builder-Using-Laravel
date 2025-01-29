<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MakeMyCV</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .active{
            font-weight:bolder;
        }
        .modal-footer{
            justify-content:left;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container col-lg-8">
                <a class="navbar-brand mb-0 h1" href="{{ url('/') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-diamond-fill icon-blue" viewBox="0 0 16 16">
                    <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L4.047 3.339 8 7.293l3.954-3.954L9.049.435zm3.61 3.611L8.708 8l3.954 3.954 2.904-2.905c.58-.58.58-1.519 0-2.098l-2.904-2.905zm-.706 8.614L8 8.708l-3.954 3.954 2.905 2.904c.58.58 1.519.58 2.098 0l2.905-2.904zm-8.614-.706L7.292 8 3.339 4.046.435 6.951c-.58.58-.58 1.519 0 2.098l2.904 2.905z"/>
                    </svg>
                    &nbsp;MakeMyCV
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                        <!-- Button trigger modal  -->
                            <button type="button" id="prevBtn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Preview
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Resume Preview</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <iframe id="resumeFrame" src="{{route('resume.index')}}" width="100%" height="900"></iframe>
                                </div>
                                <div class="modal-footer">
                                <div class="templates">
                                    <button type="button" class="btn btn-outline-dark" onclick="temp1func()">Template 1</button>
                                    <button type="button" class="btn btn-outline-dark" onclick="temp2func()">Template 2</button>
                                    <button type="button" class="btn btn-outline-dark" onclick="temp3func()">Template 3</button>
                                </div>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <a class="btn btn-primary" id="downloadBtn" href="{{route('resume.download')}}" role="button">Download</a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </ul>
                        <!-- Right Side Of Navbar-->
                        <ul class="nav navbar-nav ms-auto">
                            <!-- Authentication Links-->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                      
                                        <a class="dropdown-item" href="{{ url('/user-detail/create') }}" 
                                        onclick="event.preventDefault();
                                            document.getElementById('delete-form-{{Auth::user()->User_id}}').submit();">
                                        New Resume
                                        </a>
                                   
                                        <form id="delete-form-{{Auth::user()->User_id}}" 
                                            + action="{{route('users.destroy', Auth::user()->User_id)}}"
                                            method="post">
                                            @csrf @method('DELETE')
                                        </form>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                </div>
            </div>
        </nav> 

        <main class="container px-5 py-3 col-md-10 col-lg-6">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item {{request()->is('user-detail') ? 'active':''}}"><a href="{{route('user-detail.index')}}" class="text-decoration-none">Heading</a></li>
                <li class="breadcrumb-item {{request()->is('education') ? 'active':''}}"><a href="{{route('education.index')}}" class="text-decoration-none">Education</a></li>
                <li class="breadcrumb-item {{request()->is('experience') ? 'active':''}}"><a href="{{route('experience.index')}}" class="text-decoration-none">Work History</a></li>
                <li class="breadcrumb-item {{request()->is('skill') ? 'active':''}}"><a href="{{route('skill.index')}}" class="text-decoration-none">Skills</a></li>
                <li class="breadcrumb-item {{request()->is('project') ? 'active':''}}"><a href="{{route('project.index')}}" class="text-decoration-none">Projects</a></li>
                <li class="breadcrumb-item {{request()->is('certification') ? 'active':''}}"><a href="{{route('certification.index')}}" class="text-decoration-none">Certifications</a></li>
            </ol>
        </nav>
            <div>
            @if(session()->has('errors'))

                @foreach($errors->all() as $e)
                    
                    <div class="alert alert-danger" role="alert">
                        <p>{{$e}}</p>
                    </div>

                @endforeach
            
            @endif

        </div>
            @yield('content')
        </main>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        
        <script>
        function temp1func()
            {
                document.getElementById("resumeFrame").src="{{route('resume.index')}}";
                document.getElementById("downloadBtn").href="{{route('resume.download')}}";
            }
            function temp2func()
            {
                document.getElementById("resumeFrame").src="{{route('resume1.index')}}";
                document.getElementById("downloadBtn").href="{{route('resume1.download')}}";
            }
            function temp3func()
            {
                document.getElementById("resumeFrame").src="{{route('resume2.index')}}";
                document.getElementById("downloadBtn").href="{{route('resume2.download')}}";
            }
        </script>
    </div>
</body>
</html> 
