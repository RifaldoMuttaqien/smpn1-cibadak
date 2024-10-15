<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                            <a class="nav-link " aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">About</a>
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
                <h6 class="text-white text-center">Data Guru</h6>
                <p class=" text-white text-center">Data Guru - Guru SMP Negeri 1 Cibadak</p>
            </div>

        </div>
    </header>
    <main>
        <div class="container page2">
            <div class="row d-flex justify-content-end">
                <div class="col-sm-6">
                    <div class="form-group has-search ">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </div>
            </div>
            <hr>
            <!-- For demo purpose -->
            


            <div class="container ">
                
                <div class="row text-center">
               
                    <!-- Team item -->
                    @forelse($guru as $gurus)
                    <div class="col-xl-4 col-sm-6 ">
                    
                        <div class="bg-gray rounded shadow-sm py-5 px-4 mt-2"><img
                                src="{{ asset('storage/guru/' . $gurus->foto) }}"
                                alt=""  class="img-fluid  " style="width: 150px; height: 100px;" >
                            <h5 class="mt-2">{{$gurus->nama_guru}}</h5><span class="small text-uppercase text-muted">{{$gurus->nip}}</span>
                           <div class="mt-2">
                            <h6>{{$gurus->mapel}}</h6>
                           </div>
                        </div>
                       
                    </div><!-- End -->

                    @empty
                                    <div class="alert alert-danger">
                                        Data Products belum Tersedia.
                                    </div>
                                @endforelse
                </div>
              
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>