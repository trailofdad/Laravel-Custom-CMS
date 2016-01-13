<article>
    <h3><a href="{{ url('frontEnd/' . $page->alias . '/' . $article->id) }}">{{ $article->title }}</a></h3>
    {!! $article->html !!}
</article>
