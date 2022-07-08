
@include('Dashboard.head')

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!--Side Bar -->
    @include('Dashboard.sideBar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div id="nav" class="content-header" >
        <div id="nav"class="container-fluid" >
          <div class="row mb-2">
            <div class="col-sm-6">
             
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

      <!-- Main content -->
      <section class="content" style="background-color: #fff;">
        <div class="container-fluid" >
          <!-- Small boxes (Stat box) -->
          @yield('content')
     
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('Dashboard.footer')
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <script type="text/javascript" src="/js/app.js"></script>

 <script type="text/javascript" src="/js/cep.js"></script>
 
 <script type="text/javascript" src="/js/create.js"></script>

 <script type="text/javascript" src="/js/drop.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/datatables.min.js"></script>

  <script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>

  <script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="https://adminlte.io/themes/v3/dist/js/adminlte.js?v=3.2.0"></script>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/datatables.min.css"/>

 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/datatables.min.js"></script>

</body>
</html>
