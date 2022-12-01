@extends('layout.main')

@section('content')
                    <center><h1 class="mt-3">Daftar publisher</h1></center>
                    <div class="container container-fluid">
                    <table class="table  table-info table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Perusahaan</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Artikel</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($publishers as $publisher): ?>
                            <tr>
                                <th scope="row"><?= $publisher['id']; ?></th>
                                <td><?= $publisher['name']; ?></td>
                                <td><?= $publisher['name_publisher']; ?></td>
                                <td><?= $publisher['email']; ?></td>
                                <td><?= $publisher['alamat']; ?></td>
                                <td><?= $publisher['age']; ?></td>
                                <td>
                                    <?php foreach($publisher->article as $article): ?>
                                        <li><?= $article->tittle; ?></li>
                                    <?php endforeach; ?>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="/publisher/detail/{{$publisher->name_publisher}}">Detail</a>
                                 </td>
                            </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                    </div>
    
@endsection   