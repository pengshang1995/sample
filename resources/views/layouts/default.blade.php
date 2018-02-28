<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Sample')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts._header')
    <div class="container">
        @yield('content')
    </div>
    @include('layouts._footer')
    <script src="/js/app.js"></script>
</body>
</html>