<html>
<head>
    @livewireStyles
</head>
<body>
    @yield('content')
    {{ $slot }}
    @livewireScripts
</body>
</html>
