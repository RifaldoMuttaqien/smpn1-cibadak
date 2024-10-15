<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('lte/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    
  </nav>
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Guru</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              <div class="row">
    <div class="col">
      Edit Guru
    </div>
    <div class="col">
      <div class="data-guru-tambah d-flex flex-row-reverse">
        <a href="{{route('guru.index')}}" class="btn btn-success ">Kembali</a>
      </div>
    </div>
              </div>
              <!-- /.card-header -->
             <div class="col-md-12 mt-3">
             <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Masukkan Tambah Guru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label for="nama_guru">Nama Guru</label>
            <input type="text" class="form-control" id="nama_guru" placeholder="Masukkan Nama Guru" name="nama_guru" value="{{ old('nama_guru', $guru->nama_guru) }}">
        </div>
        <div class="form-group">
            <label for="nip">NIP</label>
            <input type="number" class="form-control" id="nip" placeholder="Nip" name="nip" value="{{ old('nip', $guru->nip) }}">
        </div>
        <div class="form-group">
            <label for="mapel">Mapel</label>
            <input type="text" class="form-control" id="mapel" placeholder="mapel" name="mapel" value="{{ old('mapel', $guru->mapel) }}">
        </div>
        <div class="form-group">
            <label for="foto">File input</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="foto" name="foto" onchange="showNameFile()">
                    <label class="custom-file-label" for="foto">Pilih File</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Unggah</span>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

            </div>
             </div>
              <!-- /.card-body -->
             
            <!-- /.card -->

          
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- /.row -->
       
        <!-- /.row -->
        
        <!-- /.row -->
       
        <!-- /.row -->
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{url('lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{url('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('lte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('lte/dist/js/demo.js')}}"></script>
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
<script>
    function showNameFile(){
        let input = document.getElementById('foto');
        let label = input.nextElementSibling;
        let nameFile = input.files[0] ? input.files[0].name : "Pilih File";
        label.textContent = nameFile;
    }

</script>
</body>
</html>
