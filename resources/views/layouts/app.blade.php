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
    
        
        @include('includes.sidenav')
        @include('includes.messages')

            @yield('home')
            @yield('login')
            @yield('register')
            @yield('content')  <!-- remove this later -->
            @yield('welcome')
            @yield('restPass')  
            @yield('add_menu')
            @yield('view_menu')
            @yield('edit_menu')
            @yield('sweet_dialog')
</body>
</html>