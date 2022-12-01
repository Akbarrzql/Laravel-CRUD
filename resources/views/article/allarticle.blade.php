@extends('layout.main')

@section('content')
                    <center><h1 class="mt-3">Daftar Article</h1></center>

                    @if(session() -> has('success'))
                        <div class="alert alert-success col-lg 12" role="alert">
                            {{session() -> get('success')}}
                        </div>
                    @endif    

                    <div class="container container-fluid">
                    <a href="/article/createarticle" class="btn btn-primary mb-3" role="button">Tambah Artikel</a>
                    <div class="row">
                    @foreach ($articles as $article)
                    <div class="card m-3" style="width: 18rem;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><a href="/article/detailarticle/{{$article->tittle}}" style="text-decoration: none; color: black;">{{$article->tittle}}</a></h5>
                            <p class="card-text"><a href="/article/detailarticle/{{$article->tittle}}" style="text-decoration: none; color: black;">{{$article->description}}</a></p>
                            <div class="mt-auto">   
                            <form action="/article/delete/{{$article->id}}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" onClick="return confirm('Apakah Kamu yakin? ')" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Tidak Tertarik</button>
                                        </form>
                        </div>
                    </div>
                 </div>
                    @endforeach
                    </div>
                    </div>
    
@endsection   