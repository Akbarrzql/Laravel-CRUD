@extends('layout.main')

@section('content')
                    <center><h1 class="mt-3">Tambah Article</h1></center>
                    <div  class="col-lg-8">
                        <form method="post" action="/article/add">
                            @csrf
                            <div class="mb-3">
                                <label for="tittle" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="tittle" name="tittle" placeholder="Judul Artikel" value= "{{old('tittle')}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="abstract" class="form-label">Abstrak Artikel</label>
                                <input type="text" class="form-control" id="abstract" name="abstract" placeholder="Judul Artikel" value= "{{old('abstract')}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Deksripsi Artikel</label>
                                <textarea type="text" class="form-control" id="description" name="description" placeholder="Judul Artikel" value= "{{old('description')}}" required cols="30" rows="10"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="author" class="form-label">Author</label>
                                <input type="text" class="form-control" id="author" name="author" placeholder="Pengarang Artikel" value= "{{old('author')}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="Publisher" class="form-label">Perusahaan</label>
                                <select name="publisher_id" id="" class="form-select">
                                    <option value="">Pilih Perusahaan</option>
                                    @foreach($publisher as $publish)
                                        <option name="publisher_id" value="{{$publish->id}}">{{$publish->name}}</option>
                                    @endforeach
                                </select>
                            </div>    

                            <div class="mb-3">
                                <label for="article_date" class="form-label">Release</label>
                                <input type="date" class="form-control" id="article_date" name="article_date" placeholder="Release Buku" value= "{{old('article_date')}}" required>
                            </div>  
                            
                           
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>

@endsection   