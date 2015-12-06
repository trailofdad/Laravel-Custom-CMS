@extends('app')

@section('content')

    <h1>{{$user->FirstName}}</h1>
    <hr/>
    <article>
        <div class="body">{{$user->description}}</div>
        <br/>
        <a href="{{action('UserController@index')}}">&lt;&lt;Go Back</a>
    </article>


@stop