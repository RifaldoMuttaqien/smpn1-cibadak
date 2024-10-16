<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header with Logo and Navigation</title>
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
        <div class="container-fluid  satu text-center">
            <div class="text">
                <h6 class="text-white">Kontak Kami</h6>
            </div>
            <div class="text-white mt-5">
                <p>Jika Memiliki Pertanyaan Bisa Langsung isi Form Dibawah Ini</p>
            </div>
        </div>
    </header>

    <main>
        <div class="container page2">
        <!-- Contact 1 - Bootstrap Brain Component -->

    
  
    <div class="container">
      <div class="row justify-content-lg-center">
        <div class="col-12 col-lg-9">
          <div class="bg-white border rounded shadow-sm overflow-hidden">
  
            <form action="{{route('kontak.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                <div class="col-12">
                  <label for="fullname" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="" required>
                </div>
                <div class="col-12 col-md-6">
                  <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <span class="input-group-text">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                      </svg>
                    </span>
                    <input type="email" class="form-control" id="email" name="email" value="" required>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <label for="phone" class="form-label">No HP</label>
                  <div class="input-group">
                    <span class="input-group-text">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                      </svg>
                    </span>
                    <input type="number" class="form-control" id="no_hp" name="no_hp" value="">
                  </div>
                </div>
                <div class="col-12">
                  <label for="message" class="form-label">Isi Pesan <span class="text-danger">*</span></label>
                  <textarea class="form-control" id="isi_pesan" name="isi_pesan" rows="3" required></textarea>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                  </div>
                </div>
              </div>
            </form>
  
          </div>
        </div>
      </div>
    </div>
 
    <div class="d-flex justify-content-center mt-5">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.8063338581455!2d106.78986!3d-6.8943996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68316af442641b%3A0x96edb366f22211d5!2sSMP%20NEGERI%201%20CIBADAK!5e0!3m2!1sen!2sid!4v1697048450173!5m2!1sen!2sid" 
            width="100%" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
        <script>
    //message with sweetalert
    @if(session('success'))
    Swal.fire({
      icon: "success",
      title: "BERHASIL",
      text: "{{ session('success') }}",
      showConfirmButton: false,
      timer: 2000
    });
    @elseif(session('error'))
    Swal.fire({
      icon: "error",
      title: "GAGAL!",
      text: "{{ session('error') }}",
      showConfirmButton: false,
      timer: 2000
    });
    @endif
  </script>
</body>
</html>