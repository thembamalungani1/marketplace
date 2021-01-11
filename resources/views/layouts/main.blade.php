<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="flex flex-col h-screen justify-between main-page">
    <x-top-nav-bar></x-top-nav-bar>
    <div class="flex">
        @yield('content')
    </div>
    <footer class="bg-gray-200 text-center p-5">Social media icons</footer>
</div>
</body>
</html>
