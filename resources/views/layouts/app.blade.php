<html>
<head>
    <title>Pothole Tracking & Repair System</title>
    <link href="{{ URL::asset('css/css.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>

<body>

    @yield('background')
    <div id="container">
        @include('partials.navigation')
        <div class="content">
            @yield('content')
        </div>
    </div>

    @include('partials.footer')

</body>
</html>