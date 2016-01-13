<head>
    <link href="{{ url('vendor/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet">
    <script type="text/javascript" src='{{ url("js/main.js") }}'></script>
    <script type="text/javascript" src='//code.jquery.com/jquery-1.10.2.min.js'></script>
    <script type="text/javascript" src='{{ url("vendor/selectize/js/standalone/selectize.min.js") }}'></script>
</head>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


            <a class="navbar-brand" href="/frontEnd">Welcome @if(Auth::user()) {{ Auth::user()->FirstName }} @endif</a>

        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @foreach($pages as $page)
                    <li><a href="{{ url('/frontEnd/' . $page->alias) }}">{{ $page->name }}</a></li>
                @endforeach
            </ul>
            {{--insert if statement for if Auth show this--}}
            @if(Auth::user())
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/auth/logout">Logout</a></li>
            </ul>
            @endif

            @if(Auth::guest())
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/auth/login">Login</a></li>
                </ul>
            @endif


        </div><!--/.nav-collapse -->
    </div>
</nav>
<br/>
<br/>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>

    tinymce.init({
        selector: 'textarea#tiny' // change this value according to your HTML
    });</script>



