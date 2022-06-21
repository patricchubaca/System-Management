  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link">Siscota</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <div class="input-group-append">
              
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link buttons are-medium" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <button class="button is-link"><i class="fa-solid fa-person-walking-dashed-line-arrow-right"></i></button>
      </li>
    </ul>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" >
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <img src="/AdminLTE/dist/img/siscota.jpeg" alt="Siscota Logo" class="brand-image img-circle ">


      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link">
              <i class="fa-solid fa-chart-line"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="pages/widgets.html" class="nav-link">
                <i class="fa-solid fa-user-group"></i>
                <p>
                  Clientes
                </p>
              </a>
            </li>
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="pages/widgets.html" class="nav-link">
                <i class="fa-solid fa-earth-asia"></i>
                <p>
                  Produtos
                </p>
              </a>
            </li>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="pages/widgets.html" class="nav-link">
                   <i class="fa-solid fa-truck-fast"></i>
                  <p>
                    Fornecedores
                  </p>
                </a>
              </li>
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="pages/widgets.html" class="nav-link">
                   <i class="fa-solid fa-comment-dollar"></i>
                  <p>
                    Marcas
                  </p>
                </a>
              </li>
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                  <a href="pages/widgets.html" class="nav-link">
                   <i class="fa-solid fa-coins"></i>
                   <p>
                    Canais de Compras
                  </p>
                </a>
              </li>
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                  <a href="pages/widgets.html" class="nav-link">
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <p>
                      Cotação
                    </p>
                  </a>
                </li>
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                  <a href="pages/widgets.html" class="nav-link">
                   <i class="fa-solid fa-house"></i>
                   <p>
                    Empresas Cadastradas
                  </p>
                </a>
              </li>
                <!-- /.sidebar-menu -->
              </div>
              <!-- /.sidebar -->
            </aside>
