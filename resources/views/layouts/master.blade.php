<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Larastart</title>

  <link rel="stylesheet" href="/css/app.css">

</head>

<body class="hold-transition sidebar-mini">
  <div id="app" class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #cacaca">
      <!-- Left navbar links -->
      <ul class="navbar-nav" style="display: flex; flex-direction: row; justify-content: space-between; width: 100%">
        <li class="nav-item">
          <!-- Brand Logo -->
          <a href="index3.html" class="brand-link">
            <img src="./img/logo.png" alt="larastart logo" class="brand-image img-circle elevation-3"
              style="opacity: .8; max-width: 40px; max-height: auto">
          </a>
          {{-- <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a> --}}
        </li>
        <li>
          <!-- SEARCH FORM -->
          <form class="form-inline ml-3" style="margin-top: 5px">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>
        </li>
      </ul>



    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="margin-top: 32.5px">
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="./img/profile.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <router-link to="/dashboard" class="nav-link">
                <i class="nav-icon fas fa-th blue" style="margin-right: 7.5px"></i>
                <p style="display: inline">
                  Dashboard
                  {{-- <span class="right badge badge-danger">New</span> --}}
                </p>
              </router-link>
            </li>
            <li class="nav-item">
                <router-link to="/users" class="nav-link">
                  <i class="nav-icon fas fa-users blue" style="margin-right: 7.5px"></i>
                  <p style="display: inline">
                    Users
                  </p>
                </router-link>
              </li>
            <li class="nav-item">
              <router-link to="/profile" class="nav-link">
                <i class="nav-icon fas fa-user blue" style="margin-right: 7.5px"></i>
                <p style="display: inline">
                  Profile
                </p>
              </router-link>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-cog blue" style="margin-right: 7.5px"></i>
                <p style="display: inline">
                  Management
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-power-off red" style="margin-right: 7.5px"></i>
                <p style="display: inline;">
                  {{ __('Logout') }}
                </p>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>

            </li>


          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="content">
        <div class="container-fluid">
          <router-view></router-view>
        </div>
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <script src="/js/app.js"></script>
</body>

</html>
