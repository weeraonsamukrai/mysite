<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body style = "color: white; background: skyblue;">
    <h1>Mysite.test</h1>
    @include('partials.navlink')
    @yield('content')

   
</body>
</html>