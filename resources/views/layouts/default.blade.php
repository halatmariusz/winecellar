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
        @hasSection('breadcrumbs')
            <div class="row">
                <div class="col-12 breadcrumbs">
                    @yield('breadcrumbs')
                </div>
            </div>
        @endif
        @hasSection('pageHeader')
            <div class="row col col-12">
                <div class="page-header">
                    <div class="">
                        @yield('pageHeader')
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            @yield('content')
        </div>
    </div>

    <footer>
        @include('includes.footer')
    </footer>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    @hasSection('scripts')
        @yield('scripts')
    @endif

</body>
</html>
