
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Document Tracking System</title>
   <link rel="icon" type="image/ico" href="{{asset('assets/img/MaasinCity.png')}}">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
   <link rel="stylesheet" href="{{asset('assets/tables/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
   <style type="text/css">
      td a.btn{
         font-size: 0.7rem;
      }
      th{
         padding: 0.5rem !important;
      }
      table tr td {
         padding: 0.3rem !important;
      }
   </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">
      <nav class="main-header navbar navbar-expand navbar-light" style="background-color: #ee7699">
         <!-- Left navbar links -->
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"></a>
            </li>
         </ul>
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a class="nav-link" href="#" role="button">
                  <img src="{{asset('assets/img/avatar.png')}}" class="img-circle" alt="User Image" width="40" style="margin-top: -8px;">
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-widget="fullscreen" href="{{ route('signout') }}">
                  <i class="fas fa-sign-out-alt"></i>
               </a>
            </li>
         </ul>
      </nav>
      <aside class="main-sidebar sidebar-light-primary">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
         <img src="{{asset('assets/img/logo.png')}}" alt="DSMS Logo" width="200">
         </a>
         <div class="sidebar">
            <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                     <a href="{{ route('admindashboard') }}" class="nav-link">
                        <img src="{{asset('assets/img/dashboard.png')}}" width="30">
                        <p>
                           Dashboard
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('categorydashboard') }}" class="nav-link">
                        <img src="{{asset('assets/img/category.png')}}" width="30">
                        <p>
                           Category
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('documenttrackerdashboard') }}" class="nav-link">
                        <img src="{{asset('assets/img/tracker.png')}}" width="30">
                        <p>
                           Document Tracker
                        </p>
                     </a>
                  </li>
                  <!-- <li class="nav-item">
                     <a href="files.html" class="nav-link">
                        <img src="{{asset('assets/img/file.png')}}" width="30">
                        <p>
                           Files
                        </p>
                     </a>
                  </li> -->
                  <!-- <li class="nav-item">
                     <a href="#" class="nav-link">
                        <img src="{{asset('assets/img/commit.png')}}" width="30">
                        <p>
                           Commit
                        </p>
                        <i class="right fas fa-angle-left"></i>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="commit-file.html" class="nav-link">
                              <i class="nav-icon far fa-circle"></i>
                              <p>Commit Files</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="commit-details.html" class="nav-link">
                              <i class="nav-icon far fa-circle"></i>
                              <p>Commit Details</p>
                           </a>
                        </li>
                     </ul>
                  </li> -->
                  <!-- <li class="nav-item">
                     <a href="#" class="nav-link">
                        <img src="{{asset('assets/img/logs.png')}}" width="30">
                        <p>
                           Logs
                        </p>
                        <i class="right fas fa-angle-left"></i>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="document-logs.html" class="nav-link">
                              <i class="nav-icon far fa-circle"></i>
                              <p>Document Logs</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="user-logs.html" class="nav-link">
                              <i class="nav-icon far fa-circle"></i>
                              <p>User Logs</p>
                           </a>
                        </li>
                     </ul>
                  </li> -->
                  <li class="nav-item">
                     <a href="{{ route('usersdashboard') }}" class="nav-link">
                        <img src="{{asset('assets/img/users.png')}}" width="30">
                        <p>
                           Users
                        </p>
                     </a>
                  </li>
                  <!-- <li class="nav-item">
                     <a href="database.html" class="nav-link">
                        <img src="{{asset('assets/img/db.png')}}" width="30">
                        <p>
                           Database
                        </p>
                     </a>
                  </li> -->
                  <!-- <li class="nav-item">
                     <a href="settings.html" class="nav-link">
                        <img src="{{asset('assets/img/settings.png')}}" width="30">
                        <p>
                           Office Settings
                        </p>
                     </a>
                  </li> -->
               </ul>
            </nav>
         </div>
      </aside>
      <div class="content-wrapper">
         @yield('content')
      </div>
   </div>
   <!-- jQuery -->
   <script src="{{asset('assets/jquery/jquery.min.js')}}"></script>
   <script src="{{asset('assets/js/adminlte.js')}}"></script>
   <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('assets/tables/datatables/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('assets/tables/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
   <script src="{{asset('assets/tables/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
   <script src="{{asset('assets/tables/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
   <script>
      $(function () {
         $("#example1").DataTable();
      });
   </script>
</body>

</html>