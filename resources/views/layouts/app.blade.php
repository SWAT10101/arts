<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('includes.csslib')
    @include('includes.jslib')

</head>
<body>
    
        @include('includes.navbar')
        
        <div class="container">
            @include('includes.messages')
        </div>

            @yield('home')
            @yield('login')
            @yield('register')
            @yield('content')
            @yield('welcome')
</body>
</html>