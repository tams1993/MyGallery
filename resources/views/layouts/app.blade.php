<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{url('plugins/uikit/css/uikit.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/uikit/css/uikit.almost-flat.css')}}">
    {{--<link rel="stylesheet" href="{{url('plugins/uikit/css/uikit.gradient.css')}}">--}}
    <link rel="stylesheet" href="{{url('plugins/uikit/css/components/slideshow.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/uikit/css/components/slider.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/uikit/css/components/slidenav.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/uikit/css/components/upload.css')}}">
    {{--<link rel="stylesheet" href="{{url('plugins/uikit/css/components/upload.gradient.css')}}">--}}
    <link rel="stylesheet" href="{{url('plugins/uikit/css/components/upload.css')}}">
    <link rel="stylesheet" href="{{url('plugins/uikit/css/components/upload.almost-flat.css')}}">
    <link rel="stylesheet" href="{{url('css/app.css')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.js"></script>
    <script src="{{url('plugins/uikit/js/uikit.min.js')}}"></script>
    <script src="{{url('plugins/uikit/js/components/slideshow.min.js')}}"></script>
    <script src="{{url('plugins/uikit/js/components/slideshow-fx.min.js')}}"></script>
    <script src="{{url('plugins/uikit/js/components/slideshow-fx.js')}}"></script>




</head>

@include('frontend.partials.nav')


    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
