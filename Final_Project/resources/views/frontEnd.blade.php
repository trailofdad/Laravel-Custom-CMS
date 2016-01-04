<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Some Website</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    {{--add the custom template--}}
    <style>{{ $style = \App\Template::where('active', '1')->get()[0]->css }}</style>
</head>
<body>

        @include('partials.navFrontEnd', ['pages' => $pages])

<div class="container">

    @yield('content')

</div>
<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
