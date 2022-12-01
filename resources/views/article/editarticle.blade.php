@extends('layout.main')

@section('content')
                    <center><h1 class="mt-3">Edit Artikel</h1></center>
                    <div  class="col-lg-8">
                        <form method="post" action="/article/update/{{$article->id}}">
                            @csrf
                            <div class="mb-3">
                                <label for="tittle" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="tittle" name="tittle" placeholder="Judul Artikel" value= "{{old('tittle', $article->tittle)}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="abstract" class="form-label">Abstak Article</label>
                                <input type="text" class="form-control" id="abstract" name="abstract" placeholder="Abstrak Artikel" value= "{{old('abstract', $article->abstract)}}" required>
                            </div>

                            <div class="from-group">
                                <label for="description">Deskripsi Artikel</label>
                                <textarea type="text" class="form-control" id="description" name="description" cols="30" rows="10" >{{$article['description']}}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="article_date" class="form-label">Release</label>
                                <input type="date" class="form-control" id="article_date" name="article_date" placeholder="Release Buku" value= "{{old('article_date', $article->article_date)}}" required>
                            </div>  
                            
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>

@endsection   