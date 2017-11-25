@extends('loyouts.app')

@section('content')

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            @foreach($posts_news as $newsItem)
                <h2>{{$newsItem['title']}}</h2>
                {!! $newsItem['short_body'] !!}

                <p><a class="btn btn-secondary" href="/news/{{$newsItem['id']}}" role="button">Докладніше &raquo;</a></p>
            @endforeach

            <hr>
        </div>
    </div>

@endsection