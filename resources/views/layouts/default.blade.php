<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Sample')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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