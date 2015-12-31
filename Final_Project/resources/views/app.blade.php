<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>PHP Final</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css"/>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css"/>
        <link href="{{ url('vendor/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet">

</head>

<body>

@include('partials.nav')

<div class="container">

    @yield('content')

</div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
@yield('footer')
<script type="text/javascript">
    var root = '{{url("/")}}';
</script>
<script language="JavaScript" type="text/javascript" src='//code.jquery.com/jquery-1.10.2.min.js'></script>
<script language="JavaScript" type="text/javascript" src='{{ url("vendor/selectize/js/standalone/selectize.min.js") }}'></script>
<script language="JavaScript" type="text/javascript" src='{{ url("js/main.js") }}'></script>
@yield('scripts')


</body>


</html>