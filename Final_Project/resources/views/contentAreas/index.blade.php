@extends('app')

@section('content')

    <h1 style="margin-top: 40px">Content Areas</h1>
    <hr/>
    @foreach($contentAreas as $contentArea)

        <article>

            <h2>
                <a href="{{action('ContentAreaController@show', [$contentArea->id])}}">{{$contentArea->name}}</a>
            </h2>

            <h3>Alias: {{$contentArea->alias}}</h3>

            <div class="description">{{$contentArea->description}}</div>

        </article>
<br>
        <a href="{{ route('contentAreas.edit', $contentArea->id) }}" class="btn btn-primary">Edit Content Area</a>
    @endforeach

@stop
