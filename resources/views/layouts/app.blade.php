<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('inc.navbar')
<div class="text-center">
    @yield('content')
</div>

</body>
</html>