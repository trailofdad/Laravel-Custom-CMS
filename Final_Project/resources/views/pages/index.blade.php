@extends('app')

@section('content')

        <h1 style="margin-top: 40px">Pages</h1>
        <hr/>
        @foreach($pages as $page)

                <article>

                        <h2>
                            <a href="{{action('PageController@show', [$page->id])}}">{{$page->name}}</a>
                        </h2>

                        <h3>Alias: {{$page->alias}}</h3>

                        <div class="description">{{$page->description}}</div>

                </article>

            @endforeach

    @stop
