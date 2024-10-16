<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 1 Cibadak Sukabumi Unggul</title>
    <link rel="icon" href="{!! asset('front/assets/gambar1.png') !!}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('front/style.css')}}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <!-- Logo -->
                <div class="navbar-brand">
                    <img src="{{asset('front/assets/gambar1.png')}}" alt="Logo" class="img-fluid" style="max-height: 60px;">
                </div>

                <!-- Navbar button for mobile -->
                <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation links -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/teachers')}}">Guru</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/ekstrakulikuler')}}">Ekstrakulikuler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/kontak')}}">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Lainya</a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid  satu ">
            <div class="text">
                <h6 class="text-white">SMP N 1 Cibadak (Cerdas Beretika) Ceria, Empati,<br> Rasional, Damai, Aktif,
                    Sabar, Bersih, Elok, Tulus, Iman,<br> Konsiste, Amanah.</h6>
            </div>
            <div class="button mt-5">
                <button class="btn btn-primary">Contact us</button>
            </div>
        </div>
    </header>
    <main style="">
        <div class="container page2">
            <div class="row text-center">
                <div class="col play ">
                    <div class="video-frame position-relative" style="display: inline-block;">
                        <img src="{{asset('front/assets/imagevidio.png')}}" alt="" class="img-fluid">
                        <img src="{{asset('front/assets/iconplay.png')}}" alt="" class="play-button"
                            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); ">
                    </div>
                </div>
                <div class="col text-start">
                    <h2>Sambutan Kepala Sekolah
                        SMP Negeri 1 Cibadak</h2>
                    <p class="mt-5" style="color: gray;">Puji dan syukur mari kita panjatkan kehadirat Allah SWT. Yang
                        senantiasa dengan sifat kasih dan sayangnya banyak memberikan nikmat ...</p>
                    <button class="btn btn-primary mt-4">Lebih Lanjut</button>
                </div>

            </div>

            <div class="container-fluid ">
                <div class="page3 text-center">
                    <div class="row ">
                        <div class="col ">
                            <div class="text__profile text-start">
                                <h3 class="mt-3">Profil Sekolah</h3>
                                <p class="mt-5">Di samping adalah profil sekolah kami secara<br>
                                    keseluruhan dari mulai bagian depan hingga seluruh<br>
                                    fasilitas yang terdapat disekolah kami kami akan ...</p>
                                <button class="btn  btn-sm btn-primary mt-4">Lebih Lanjut</button>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="row">
                                <div class="col">

                                    <div class="box1">
                                        <div class="box1-gambar position position-relative">
                                            <div class="box1-gambar position-relative" style="display: inline-block;">
                                            </div>
                                            <img src="{{asset('front/assets/Ellipse 1.svg')}}" alt="" class="img-fluid">
                                            <img src="{{asset('front/assets/Group 30.svg')}}" alt="gambar1"
                                                style="position: absolute; top: 40%; left: 29%; transform: translate(-50%, -50%); ">
                                        </div>
                                        <div class="box-text">
                                            <h6 clas>Faslitas</h6>
                                            <p style="font-size: 12px;">Lorem ipsum dolor sit amet adipcing
                                                aqua lorem ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="box3">
                                        <div class="box3-gambar position position-relative">
                                            <div class="box2-gambar position-relative" style="display: inline-block;">
                                                <img src="{{asset('front/assets/Ellipse 1.svg')}}" alt="" class="img-fluid">
                                                <img src="{{asset('front/assets/Group 32.svg')}}" alt="gambar2"
                                                    style="position: absolute; top: 45%; left: 55%; transform: translate(-50%, -50%); ">
                                            </div>
                                        </div>
                                        <div class="box-text">
                                            <h6 clas>Lokasi</h6>
                                            <p style="font-size: 12px;">Lorem ipsum dolor sit amet adipcing
                                                aqua lorem ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col mt-5">
                                    <div class="box2">
                                        <div class="box2-gambar position-relative">
                                            <div class="box2-gambar position-relative" style="display: inline-block;">
                                                <img src="{{asset('front/assets/Ellipse 1.svg')}}" alt="" class="img-fluid">
                                                <img src="{{asset('front/assets/Group 32.svg')}}" alt="gambar2"
                                                    style="position: absolute; top: 45%; left: 55%; transform: translate(-50%, -50%); ">
                                            </div>
                                        </div>
                                        <div class="box-text">
                                            <h6 clas>Sejarah</h6>
                                            <p style="font-size: 12px;">Lorem ipsum dolor sit amet adipcing
                                                aqua lorem ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="col mt-5">
                                        <div class="box2">
                                            <div class="box2-gambar position-relative">
                                                <div class="box2-gambar position-relative"
                                                    style="display: inline-block;">
                                                    <img src="{{asset('front/assets/Ellipse 1.svg')}}" alt="" class="img-fluid">
                                                    <img src="{{asset('front/assets/Group 32.svg')}}" alt="gambar2"
                                                        style="position: absolute; top: 45%; left: 55%; transform: translate(-50%, -50%); ">
                                                </div>
                                            </div>
                                            <div class="box-text">
                                                <h6 clas>Sejarah</h6>
                                                <p style="font-size: 12px;">Lorem ipsum dolor sit amet adipcing
                                                    aqua lorem ipsum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="page4">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="judul_berita">
                                    <h5>Berita dan Agenda </h5>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group has-search">
                                    <span class="fa fa-search form-control-feedback"></span>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>
                        </div>
                        <div class="news__page4">
                            <!--Section: News of the day-->
                            <div class="row gx-5 mt-5">
                                <div class="col-md-4 mb-4 ">
                                    <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5"
                                        data-mdb-ripple-color="light">
                                        <img src="https://mdbcdn.b-cdn.net/img/new/slides/080.webp" width="100%" height="10%" class="img-fluidaaa" />

                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-8 mb-4">
                                    <div class="text__berita">
                                        
                                    <h4><strong>Belajar di Rumah</strong></h4>
                                    <p class="text-muted mt-4">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
                                        eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi
                                        laborum
                                        sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
                                    </p>
                                    <div class="row mt-5">
                                        <div class="col-6 d-none d-lg-block">20 Juni 2024</div>
                                        <div class="col-6">
                                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-sm btn-primary">Read more</button>
                                        </div>
                                      </div>
                                    
                                </div>
                                    </div>
                                    
                            </div>

                            <!--Section: News of the day-->
                        </div>
                    </div>

                </div>

                

    </main>
<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4">
   
 
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
          <img src="{{asset('front/assets/gambar1.png')}}" alt="Logo" class="img-fluid" style="max-height: 60px;">
          </h6>
          <p>
          Jl. Siliwangi No 123, Cibadak, Cibadak, Sukabumi,
          Jawa Barat 43351, Indonesia, (0266)531333
          
          </p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
          Jelajah
          </h6>
          <p>
            <a href="#!" class="text-reset">Sambutan</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Profil Sekolah</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Berita</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Galeri</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
          Halaman Umum
          </h6>
          <p>
            <a href="{{url('/teachers')}}" class="text-reset">Data Guru</a>
          </p>
          <p>
            <a href="#!" class="text-reset">PPDB SMPN 1 Cibadak</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Panduan PPDB</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Lokasi</a>
          </p>
          <p>
            <a href="{{url('/kontak')}}" class="text-reset">Kontak</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Media Sosial</h6>
          <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-start p-4" style="background-color: rgba(0, 0, 0, 0.05);">
  Copyright © SMP Negeri 1 Cibadak. 
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">All right Reserved. Hosting By IDCloudHost</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>