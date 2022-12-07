@extends('layout.main')

@section('content')
    <div class="container">
        <!-- INTRO -->
        <div id="page-intro">
            <div class="intro">
                <img src="/assets/intro-img.jpg" alt="">
            </div>
        </div>
        <!-- End INTRO -->

        <!-- tentang -->
        <div id="page-tentang">
            <div class="tentang">
                <div class="container-title">
                <div class="box">
                    <div class="box-title">
                        <h2>Apa itu Micro Academy</h2>
                    </div>
                </div>             
                </div>
                <div class="container-content">
                    <div class="box-content">
                        <div class="box-content-isi">
                            <p>Micro Academy adalah sebuah website yang berisi artikel-artikel tentang teknologi, khususnya tentang dunia pemrograman. Website ini dibuat untuk memenuhi tugas akhir mata kuliah Pemrograman Web.</p>
                        </div>
                    </div>                
                </div>
            </div>
        </div>
        <!-- End Tentang -->

        <!-- Artikel -->
        <div id="page-artikel">
            <div class="artikel">
                <div class="text-title">
                    <h1>Artikel</h1>
                    <p>Artikel Terbaru DiMicro Academy</p>
                </div>
                <div class="column">
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
                <div class="see-more">
                    <a href="/article/allarticle">Lihat lebih banyak</a>
                    <img src="assets/iconmonstr-arrow-right-thin.svg" alt="">
                </div>
            </div>
        </div>
        <!-- end artikel -->

        <!-- footer -->
        <footer>
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="assets/logo_transparent.png" alt="">
                </div>
                <div class="footer-bottom">
                    <p>Micro Academy &copy; 2021</p>
                </div>
            </div>
        </footer>
        <!-- end footer -->

    </div>
    
@endsection    