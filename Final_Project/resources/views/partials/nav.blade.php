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


            <a class="navbar-brand" href="/">Welcome @if(Auth::user()) {{ Auth::user()->FirstName }} @endif</a>

        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="/articles">Articles<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/articles">View Articles</a></li>
                        <li><a href="/articles/create">Create Article</a></li>
                    </ul>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="/templates">Templates<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/templates">View Templates</a></li>
                        <li><a href="/templates/create">Create Template</a></li>
                    </ul>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="/contentAreas">Content Areas<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/contentAreas">View Content Areas</a></li>
                        <li><a href="/contentAreas/create">Create Content Area</a></li>
                    </ul>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="/Pages">Pages<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/pages">View Pages</a></li>
                        <li><a href="/pages/create">Create Page</a></li>
                    </ul>
                {{--Need if statement for if Admin how this--}}

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="/users">Users<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/users">View & Edit</a></li>
                        <li><a href="/users/create">Create User</a></li>
                    </ul>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/auth/logout">Logout</a></li>
            </ul>


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



