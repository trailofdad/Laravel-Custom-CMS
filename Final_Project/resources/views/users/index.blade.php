@extends('app')

@section('content')

    <h1 style="margin-top: 40px">Users</h1>
    <hr/>
    @foreach($users as $user)

        <article>

            <h2>
                <a href="{{action('UserController@show', [$user->id])}}">{{$user->FirstName}}</a>
            </h2>

            <div class="description">{{$user->description}}</div>

        </article>
        <br>
        <a href="{{ route('contentAreas.edit', $contentArea->id) }}" class="btn btn-primary">Edit Content Area</a>
    @endforeach

@stop