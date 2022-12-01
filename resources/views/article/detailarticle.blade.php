@extends('layout.main')

@section('content')
                <!-- Detail Book from data -->
                <div class="from" style="margin-top: 100px;">
                    <div class="card" style="width: 50rem; margin: auto;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 2.5rem;">{{$article->tittle}}</h5>
                            <p class="card-text">{{$article->abstract}}</p>
                            <hr>    
                            <p class="card-text"><a href="/publisher/detail/{{$article->publisher->name_publisher}}" style="text-decoration: none; color: black;">dipubliskasikan oleh: <b>{{$article->publisher->name_publisher}}</b> | {{$article->article_date}}</a></p>
                            <hr>
                            <p class="card-text">{{$article->description}}</p>
                            <a href="/article/allarticle" class="btn btn-primary mt-3">Kembali</a>
                            <a class="btn btn-warning mt-3" href="/article/editarticle/{{$article->id}}">Suting</a> 
                        </div>
                    </div>          
                </div>
    
@endsection   