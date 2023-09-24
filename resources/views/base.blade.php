<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>CALC GPOLUENTES APP</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport">
	
    <link rel="stylesheet" href={{ asset('libs/css/bootstrap.min.css') }}>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href={{ asset('libs/css/ready.css') }} >
	<link rel="stylesheet" href={{ asset('libs/css/demo.css') }} >
</head>

<body>
    <div class="wrapper">
        @include('components.header')
        
        @include('components.sidebar')

        <main role="main" class="main-panel">
            @yield('root')
            @include('components.footer')
        </main>
    </div>

    <script src={{ asset('libs/js/core/jquery.3.2.1.min.js') }}></script>
    <script src={{ asset('libs/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}></script>
    <script src={{ asset('libs/js/core/popper.min.js') }}></script>
    <script src={{ asset('libs/js/core/bootstrap.min.js') }}></script>
    <script src={{ asset('libs/js/plugin/chartist/chartist.min.js') }}></script>
    <script src={{ asset('libs/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js') }}></script>
    <script src={{ asset('libs/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}></script>
    <script src={{ asset('libs/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}></script>
    <script src={{ asset('libs/js/plugin/jquery-mapael/jquery.mapael.min.js') }}></script>
    <script src={{ asset('libs/js/plugin/jquery-mapael/maps/world_countries.min.js') }}></script>
    <script src={{ asset('libs/js/plugin/chart-circle/circles.min.js') }}></script>
    <script src={{ asset('libs/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}></script>
    <script src={{ asset('libs/js/ready.min.js') }}></script>
    <script src={{ asset('libs/js/demo.js') }}></script>

    <div
        style="left: -1000px; overflow: scroll; position: absolute; top: -1000px; border: none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;">
        <div style="border: none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;">
        </div>
    </div>
</body>

</html>
