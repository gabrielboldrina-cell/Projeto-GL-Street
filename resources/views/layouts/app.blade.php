<!DOCTYPE html>
<html lang="pt-BR" @hasSection('bs_theme') data-bs-theme="@yield('bs_theme')" @endif>
<head>
    @yield('head')
</head>
<body>
    @yield('navbar')

    @yield('content')
</body>
</html>
