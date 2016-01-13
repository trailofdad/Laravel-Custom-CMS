<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>PHP Final</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css"/>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css"/>
    {{--<link href="{{ url('vendor/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet">--}}
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
</head>

<body>

@include('partials.nav')

<div class="container">

    @if (Session::has('flash_message'))
        <div class="alert alert-success">{{Session::get('flash_message')}}</div>
    @endif
    @yield('content')

</div>
<script language="JavaScript" type="text/javascript" src='{{ url("js/main.js") }}'></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

@yield('footer')
<script type="text/javascript">
    var root = '{{url("/")}}';
</script>
{{--<script language="JavaScript" type="text/javascript" src='{{ url("vendor/selectize/js/standalone/selectize.min.js") }}'></script>--}}
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>

@yield('scripts')


</body>


</html>