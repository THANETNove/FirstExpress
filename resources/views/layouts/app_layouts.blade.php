
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('layouts.head_footer.head')
</head>

<body class="hold-transition login-page">
    <main class="py-4">
        @yield('content')
    </main>

    @include('layouts.head_footer.script')
</body>

</html>