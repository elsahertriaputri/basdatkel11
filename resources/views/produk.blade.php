<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Produk</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{asset('template')}}/assets/css/normalize.css">
    <link rel="stylesheet" href="{{asset('template')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('template')}}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('template')}}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('template')}}/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('template')}}/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="{{asset('template')}}/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="{{asset('template')}}/assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{asset('template')}}/assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src= alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src= alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                <li class="menu-item active ">
                        <a href="/" class="toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Dashboard</a>
                    </li>
                    <li class="menu-item active ">
                        <a href="/" class="toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Produk</a>
                    </li>
                    <li class="menu-item ">
                        <a href="/login" class="toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Produk Masuk</a>
                    </li>
                    <li class="menu-item ">
                        <a href="/" class="toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Produk Keluar</a>
                    </li>
                    <li class="menu-item ">
                        <a href="/" class="toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Pelanggan</a>
                    </li>
                    <li class="menu-item ">
                        <a href="/" class="toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Pesanan</a>
                    </li>
                    <li class="menu-item ">
                        <a href="/" class="toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Pengiriman</a>
                    </li>
                    
                   

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">3</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>

                        
                        
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('template')}}/images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Produk</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Deskripsi</th>
                        <th>Stok</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>t001</td>
                        <td>Produk 1</td>
                        <td>100000</td>
                        <td>150000</td>
                        <td>Produk 1 sangat bagus</td>
                        <td>100</td>
                      </tr>

                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="{{asset('template')}}/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="{{asset('template')}}/assets/js/popper.min.js"></script>
    <script src="{{asset('template')}}/assets/js/plugins.js"></script>
    <script src="{{asset('template')}}/assets/js/main.js"></script>


    <script src="{{asset('template')}}/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="{{asset('template')}}/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('template')}}/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="{{asset('template')}}/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="{{asset('template')}}/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="{{asset('template')}}/assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="{{asset('template')}}/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="{{asset('template')}}/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="{{asset('template')}}/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="{{asset('template')}}/assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="{{asset('template')}}/assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
