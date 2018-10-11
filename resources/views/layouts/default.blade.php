<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('includes.head')
</head>

@hasSection('bodyClass')
<body class="@yield('bodyClass')">
@else
<body>
@endif
    @include('includes.header')

    <div class="container-fluid">
        <div class="row">
            @yield('content')
        </div>
    </div>

    <footer>
        @include('includes.footer')
    </footer>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</body>
</html>
