@extends('frontEnd')

@section('content')
    @foreach($contentArea as $area)
        <section class="row {{ $area->name }}">
            @foreach($pageContent as $article)
                @if ($article->area == $area->id)
                    @include('partials.siteArea', ['article' => $article, 'contentArea' => $area, 'page' => $page])
                @endif
            @endforeach
        </section>
    @endforeach
@stop