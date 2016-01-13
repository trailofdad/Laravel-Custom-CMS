@extends('frontEnd')

@section('content')
    @foreach($contentAreas as $area)
        <section id="{{ $area->alias }}">
            @foreach($pageContent as $article)
                @if ($article->area == $area->id)
                    @include('partials.siteArea', ['article' => $article, 'contentArea' => $area, 'page' => $page])
                @endif
            @endforeach
        </section>
    @endforeach
@stop