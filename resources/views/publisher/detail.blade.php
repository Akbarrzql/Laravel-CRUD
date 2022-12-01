@extends('layout.main')

@section('content')
                <!-- Detail Book from data -->
                <h1 class="mt-3" align="center">Detail publisher</h1>
                <div class="from">
                    <div class="list-group-item">
                        <label for="name">Nama Perusahaan</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$publisher['name']}}" readonly>
                    </div>

                    <div class="list-group-item">
                        <label for="name_publisher">Nama Publisher</label>
                        <input type="text" class="form-control" id="name_publisher" name="name_publisher" value="{{$publisher['name_publisher']}}" readonly>
                    </div>

                    <div class="from-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{$publisher['email']}}" readonly>
                    </div>
                    
                    <div class="from-group">
                        <label for="age">Age</label>
                        <input type="text" class="form-control" id="age" name="age" value="{{$publisher['age']}}" readonly>
                    </div>

                    <div class="from-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{$publisher['alamat']}}" readonly>
                    </div>
                    

                    <a href="/publisher/allpublisher" class="btn btn-primary mt-3">Kembali</a>
                </div>
    
@endsection   