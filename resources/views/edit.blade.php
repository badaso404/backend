<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AdminLTE 3 | General Form Elements</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="{{asset('AdminLTE')}}/plugins/fontawesome-free/css/all.min.css"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('AdminLTE')}}/dist/css/adminlte.min.css" />
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"
              ><i class="fas fa-bars"></i
            ></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
            <a
              class="nav-link"
              data-widget="navbar-search"
              href="#"
              role="button"
            >
              <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input
                    class="form-control form-control-navbar"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                  />
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    <button
                      class="btn btn-navbar"
                      type="button"
                      data-widget="navbar-search"
                    >
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>

          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-comments"></i>
              <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img
                    src="{{asset('AdminLTE')}}/dist/img/user1-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 mr-3 img-circle"
                  />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Brad Diesel
                      <span class="float-right text-sm text-danger"
                        ><i class="fas fa-star"></i
                      ></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted">
                      <i class="far fa-clock mr-1"></i> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img
                    src="{{asset('AdminLTE')}}/dist/img/user8-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 img-circle mr-3"
                  />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      John Pierce
                      <span class="float-right text-sm text-muted"
                        ><i class="fas fa-star"></i
                      ></span>
                    </h3>
                    <p class="text-sm">I got your message bro</p>
                    <p class="text-sm text-muted">
                      <i class="far fa-clock mr-1"></i> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img
                    src="{{asset('AdminLTE')}}/dist/img/user3-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 img-circle mr-3"
                  />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Nora Silvester
                      <span class="float-right text-sm text-warning"
                        ><i class="fas fa-star"></i
                      ></span>
                    </h3>
                    <p class="text-sm">The subject goes here</p>
                    <p class="text-sm text-muted">
                      <i class="far fa-clock mr-1"></i> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer"
                >See All Messages</a
              >
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header"
                >15 Notifications</span
              >
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer"
                >See All Notifications</a
              >
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              data-widget="control-sidebar"
              data-slide="true"
              href="#"
              role="button"
            >
              <i class="fas fa-th-large"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/" class="brand-link">
          <img
            src="{{asset('AdminLTE')}}/dist/img/AdminLTELogo.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
          />
          <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img
                src="{{asset('AdminLTE')}}/dist/img/user2-160x160.jpg"
                class="img-circle elevation-2"
                alt="User Image"
              />
            </div>
            <div class="info">
              <a href="#" class="d-block">Alexander Pierce</a>
            </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input
                class="form-control form-control-sidebar"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-sidebar flex-column"
              data-widget="treeview"
              data-accordion="false"
            >
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li>
                <a href="/" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/forms" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Forms</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/table" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/table/agama" class="nav-link">
                  <i class="far fa-moon nav-icon"></i>
                  <p>Agama</p>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="/table/jenisp" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p>Jenis Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/table/statusp" class="nav-link">
                  <i class="far fa-address-card nav-icon"></i>
                  <p>Status Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/table/pendidikan" class="nav-link">
                  <i class="far fa-hospital nav-icon" ></i>
                  <p>Pendidikan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/table/kelamin" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Jenis Kelamin</p>
                </a>
              </li>

              
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Halaman Forms</h1>
              </br>

              {{-- menampilkan error validasi --}}
              @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif

              <br/>


              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">General Form</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">ISI DATA DIRI</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="./table/{{ $data->id }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    
                    <div class="card-body">
                      <div class="form-group">
                        <label for="nama">Nama</label>
                        <input class="form-control" type="text" name="nama" value="{{ old('nama')  ?? $data->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input class="form-control" type="number" name="nik" value="{{ old('nik')  ?? $data->nik}}">
                    </div>
                    <div class="form-group">
                        <label for="jenis_pegawai">Jenis Pegawai</label>
                        <select name="jenis_pegawai" class="form-control" >
                          <option value="null" selected disabled>-- Select Jenis Pegawai --</option>
                            <option value="Tenaga Pendidik" {{ $data->jenis_pegawai == 'Tenaga Pendidik' ? 'selected' : '' }}>Tenaga Pendidik</option>
                            <option value="Tenaga Kependidikan" {{ $data->jenis_pegawai == 'Tenaga Kependidikan'?'selected':'' }}>Tenaga Kependidikan</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="status_pegawai">Status Pegawai</label>
                      <select name="status_pegawai" class="form-control" >
                        <option value="null" selected disabled>-- Select Status Pegawai --</option>
                          <option value="NonPNS"{{ $data->status_pegawai == 'NonPNS' ? 'selected' : '' }}>Non PNS</option>
                          <option value="PNS"{{ $data->status_pegawai == 'PNS' ? 'selected' : '' }}>PNS</option>
                      </select>
                  </div>
                    <div class="form-group">
                        <label for="unit">Unit</label>
                        <input class="form-control" type="text" name="unit" value="{{ old('unit')  ?? $data->unit}}">
                    </div>
                    <div class="form-group">
                        <label for="sub_unit">Sub.Unit</label>
                        <input class="form-control" type="text" name="sub_unit" value="{{ old('sub_unit') ?? $data->sub_unit }}">
                    </div>
                    <div class="form-group">
                      <label for="pendidikan">Pendidikan</label>
                      <select name="pendidikan" class="form-control" >
                        <option value="null" selected disabled>-- Select Pendidikan --</option>
                          <option value="SLTA"{{ $data->pendidikan == 'SLTA' ? 'selected' : '' }}>SLTA</option>
                          <option value="S1"{{ $data->pendidikan == 'S1' ? 'selected' : '' }}>S1</option>
                          <option value="S2"{{ $data->pendidikan == 'S2' ? 'selected' : '' }}>S2</option>
                          <option value="S3"{{ $data->pendidikan == 'S3' ? 'selected' : '' }}>S3</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input class="form-control" type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') ?? $data->tanggal_lahir }}">
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input class="form-control" type="text" name="tempat_lahir" value="{{ old('tempat_lahir')  ?? $data->tempat_lahir}}">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" >
                          <option value="null" selected disabled>-- Jenis Kelamin --</option>
                          <option value="Laki-laki"{{ $data->jenis_kelamin == 'Laki-laki' ? 'selected' : ''}}>Laki-laki</option>
                            <option value="Perempuan"{{ $data->jenis_kelamin == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                            <option value="Waria"{{ $data->jenis_kelamin == 'Waria' ? 'selected' : ''}}>Waria</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="agama">Agama</label>
                      <select name="agama" class="form-control" >
                        <option value="null" selected disabled>--Agama--</option>
                        @foreach ($agama as $item)
                          <option value="{{$item->nama_agama}}" {{ $item->nama_agama == $data->agama ? 'selected' : ''}}>{{ $item->nama_agama }}</option>
                        @endforeach
                      </select>
                    </div>
                    <td>
                      @if ($data->foto)
                      <div class="mb-3">
                          <img style="max-width:50px; max-height:30px" src="{{ url('foto')."/".$data->foto }}"/>
                        </div>
                      @endif
                    </td>
                    <div class="form-group">
                      <label for="foto">Foto KTP</label>
                      <br>
                      <input type="file" name="foto" class="" id="foto" value="{{ old('foto') }}">
                    </div>
                    <!-- /.card-body -->

                      <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Proses">
                    </div>
                    </div>
                  </form>
                </div>
        </section>

        

  
       
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block"><b>Version</b> 3.2.0</div>
        <strong
          >Copyright &copy; 2014-2021
          <a href="https://adminlte.io">AdminLTE.io</a>.</strong
        >
        All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{asset('AdminLTE')}}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('AdminLTE')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="{{asset('AdminLTE')}}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('AdminLTE')}}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('AdminLTE')}}/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
      $(function () {
        bsCustomFileInput.init();
      });
    </script>
  </body>
</html>
