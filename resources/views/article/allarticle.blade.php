@extends('layout.main')

@section('content') 

                     <!-- Artikel -->
        <div id="page-artikel">
            <div class="artikel">
                <div class="text-title">
                    <h1>Artikel</h1>
                    <p>Artikel Terbaru Di Micro Academy</p>
                    <div class="btn-add">
                        <a href="/article/createarticle">Tambah Artikel</a>
                    </div>
                </div>
                <div class="column-artikel">
                @foreach ($articles as $article)
                    <div class="card">
                        <div class="card-content">
                            <h3><a href="/article/detailarticle/{{$article->tittle}}" style="text-decoration: none;color: black; font-weight: bold; font-size: 20px;">{{$article->tittle}}</a></h3>
                            <p ><a href="/article/detailarticle/{{$article->tittle}}" style="font-weight: normal;">{{$article->description}}</a></p>
                            <div class="edit-tidakTertarik">
                            <form action="/article/delete/{{$article->id}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <div class="btn-tidakTertarik">
                                        <button onClick="return confirm('Apakah Kamu yakin? ')" >Tidak Tertarik</button>
                                        </div>
                                        </form>
                               <div class="edit">
                                <a href="/article/editarticle/{{$article->id}}"><i title="Edit Artikel" class="uil uil-edit"></i></a>
                               </div>
                              </div>
                        </div>
                    </div>
                 
                    @endforeach
                </div>
            </div>
        </div>
        <!-- end artikel -->
    
@endsection   