@extends('app')

@section('content')

    <h1 style="margin-top: 40px">Templates</h1>
    <hr/>
    @foreach($templates as $template)

        <article>

            <h2>
                <a href="{{action('TemplateController@show', [$template->id])}}">{{$template->name}}</a>
            </h2>

            <div class="description">{{$template->description}}</div>

        </article>
        <br>
        <a href="{{ route('templates.edit', $template->id) }}" class="btn btn-primary">Edit Template</a>
    @endforeach

@stop