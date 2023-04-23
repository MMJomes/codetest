<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials.front-head')
</head>

<body class="home-01">
    @include('layouts.partials.front-loader')
    @include('layouts.partials.front-header')
    <div class="row">
        <div class="col-md-12">
            @yield('content')
        </div>
    </div>
    @include('layouts.partials.front-footer')
    <!-- SCRIPTS -->
    @include('layouts.partials.front-script')
    <script>
        function gotohomePage() {
            window.location.href = "{{ url('/') }}";
        }
    </script>
</body>

</html>
