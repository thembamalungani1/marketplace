<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="flex flex-col min-h-screen">
    <x-top-nav-bar></x-top-nav-bar>
        <div class="flex flex-col h-screen justify-between main-page bg-fixed overflow-y-scroll p-5">
            <div class="flex">
                @yield('content')
            </div>

        </div>
    <footer class="bg-gray-900 text-center p-5 opacity-70 border-t border-l text-white border-gray-900">Social media icons</footer>
</body>
</html>
