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
                    <div class="card">
                        <div class="card-content">
                            <h3>1. Meditasi</h3>
                            <p>Berolahraga secara teratur dapat membantu meningkatkan mood dan mengurangi stres. Olahraga juga dapat membantu mengurangi depresi dan meningkatkan kesehatan fisik.</p>
                            <div class="edit-tidakTertarik">
                              <div class="btn-tidakTertarik">
                                 <button href="#">Tidak Tertarik</button>
                              </div>
                             <div class="edit">
                                <a href="edit.html"><i title="Edit Artikel" class="uil uil-edit"></i></a>
                             </div>
                            </div>

                            
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <h3>2. Berpikiran Positif</h3>
                            <p>Berolahraga secara teratur dapat membantu meningkatkan mood dan mengurangi stres. Olahraga juga dapat membantu mengurangi depresi dan meningkatkan kesehatan fisik.</p>
                            <div class="edit-tidakTertarik">
                                <div class="btn-tidakTertarik">
                                   <button href="#">Tidak Tertarik</button>
                                </div>
                               <div class="edit">
                                <a href="edit.html"><i title="Edit Artikel" class="uil uil-edit"></i></a>
                               </div>
                              </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <h3>3. Olahraga</h3>
                            <p>Berolahraga secara teratur dapat membantu meningkatkan mood dan mengurangi stres. Olahraga juga dapat membantu mengurangi depresi dan meningkatkan kesehatan fisik.</p>
                            <div class="edit-tidakTertarik">
                                <div class="btn-tidakTertarik">
                                   <button href="#">Tidak Tertarik</button>
                                </div>
                               <div class="edit">
                                <a href="edit.html"><i title="Edit Artikel" class="uil uil-edit"></i></a>
                               </div>
                              </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <h3>4. Istirahat Cukup</h3>
                            <p>Berolahraga secara teratur dapat membantu meningkatkan mood dan mengurangi stres. Olahraga juga dapat membantu mengurangi depresi dan meningkatkan kesehatan fisik.</p>
                            <div class="edit-tidakTertarik">
                                <div class="btn-tidakTertarik">
                                   <button href="#">Tidak Tertarik</button>
                                </div>
                               <div class="edit">
                                <a href="edit.html"><i title="Edit Artikel" class="uil uil-edit"></i></a>
                               </div>
                              </div>
                        </div>
                    </div>
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