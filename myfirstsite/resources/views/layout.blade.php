<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laracast')</title>
</head>
<body>


    <ul>
            <li><a href="http://localhost/Laravel_Laracast/myfirstsite/public/contact">contact</a> </li>
            <li><a href="http://localhost/Laravel_Laracast/myfirstsite/public/about">  about</a> </li>
            <li><a href="http://localhost/Laravel_Laracast/myfirstsite/public">  home</a> </li>

        </ul>
        @yield('content')


    
</body>
</html>