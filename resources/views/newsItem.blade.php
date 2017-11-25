@extends('loyouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h2>{{$newsItem['title']}}</h2>
            {!! $newsItem['body'] !!}
            <p><a class="btn btn-default btn-lg" href="/news" role="button">Новини &raquo;</a></p>
            <hr>
        </div>
    </div>

@endsection
