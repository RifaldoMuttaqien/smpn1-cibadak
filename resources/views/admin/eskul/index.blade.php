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
                <li class="breadcrumb-item active">Simple Tables</li>
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
                      Data Eskul
                    </div>
                    <div class="col">
                      <div class="data-guru-tambah d-flex flex-row-reverse">
                        <a href="{{route('eskul.create')}}" class="btn btn-success ">Tambah Data Eskul</a>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Nama Kegiatan</th>
                          <th>Deskripsi</th>
                          <th>Foto_Kegiatan</th>
                          <th style="width: 40px">Label</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($ekstrakulikuler as $ekstrakulikulers)
                        <tr>
                          <td>{{$ekstrakulikulers->id}}</td>
                          <td>{{$ekstrakulikulers->nama_kegiatan}}</td>
                          <td>
                            {{$ekstrakulikulers->deskripsi}}
                          </td>
                          <td>
                            <img src="{{asset('storage/foto_kegiatan/'. $ekstrakulikulers->foto_kegiatan)}}" alt="" style="width: 150px;">
                          </td>
                          <td class="project-actions text-right">
                          <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('eskul.destroy', $ekstrakulikulers->id) }}" method="POST">
                          <div class="d-flex justify-content-end ">
                              <a class="btn btn-info btn-sm mr-2" href="{{route('eskul.edit', $ekstrakulikulers->id)}}">
                                <i class="fas fa-pencil-alt">
                                </i>

                              </a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm">
                <i class="fas fa-trash"></i>
            </button>
                            </div>
                         
                        </form>
                            
                          </td>
                        </tr>


                        @empty
                        <div class="alert alert-danger">
                          Data Products belum Tersedia.
                        </div>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div>
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

</body>

</html>