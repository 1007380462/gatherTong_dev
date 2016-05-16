<!DOCTYPE html>
<html lang="en">
<head>
    @include('UEditor::head')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GT</title>

    <!-- Fonts -->
    <link href="{{URL::asset('/')}}css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('/')}}css/googleapis.css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{URL::asset('/')}}css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 6px;
        }
    </style>
    {{--javascript--}}
    {{--<script src="{{URL::asset('/')}}js/jquery-1.8.3.min.js"></script>--}}
    <script src="{{URL::asset('/')}}js/jquery-1.11.1.min.js?version=01"></script>
    <script src="{{URL::asset('/')}}js/bootstrap.min.js?version=01"></script>
    {{--javascript--}}

    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ URL::asset('/')}}vendor/jsvalidation/js/jsvalidation.js"></script>

</head>

<body id="app-layout" >
<nav class="navbar navbar-default">
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
            <a class="navbar-brand" href="{{ url('/') }}">
                GT
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}">Home</a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li><a href="{{ url('front/activity/show-activity') }}">Activity</a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li><a href="{{ url('front/organization/show-organization') }}">Organization</a></li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('front/login/login') }}">Login</a></li>
                    <li><a href="{{ url('front/register/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="container ">
    <p>&copy; Company 2012</p>
</footer>
</body>
</html>
