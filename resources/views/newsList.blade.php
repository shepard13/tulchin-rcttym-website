@extends('loyouts.app')

@section('content')
    <div class="container">
        <h1 class="text-left">News</h1>


        @foreach($newsItems as $newsItem)
            <h2>{{$newsItem->getTitle()}}</h2>
            {!! $newsItem->getShortBody() !!}

            <p><a class="btn btn-secondary" href="/news/{{$newsItem->getId()}}" role="button">Докладніше
                    &raquo;</a></p>
        @endforeach
        <hr>
    </div>



@endsection