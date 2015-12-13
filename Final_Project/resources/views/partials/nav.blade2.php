<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Christian/Findlay Rule!</a>
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
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><select id="searchbox" name="q" placeholder="Search products or categories..." class="form-control"></select></li>



            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>

    tinymce.init({
        selector: 'textarea#tiny' // change this value according to your HTML
    });</script>

// Activate Selectize
<script>
    $(document).ready(function(){
        $('#searchbox').selectize();
    });
</script>