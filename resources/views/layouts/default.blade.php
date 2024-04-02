
<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
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
=======
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="GenIT Bangladesh">
    <!-- Favicon icon -->
        <link rel="icon" type="image/ico" href="{{asset('assets/images/logo1.png')}}">
    <title>Employee Information System</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/2.0.46/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="{{ asset('assets/plugins/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/css/print.css')}}" rel="stylesheet" media='print'>
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('assets/css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <link href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/switchery/dist/switchery.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/clockpicker/dist/jquery-clockpicker.min.css')}}" rel="stylesheet">
    <!-- Daterange picker plugins css -->
    <link href="{{asset('assets/plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
    
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <link href="{{asset('assets/plugins/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css" />   
    <link href="{{asset('assets/plugins/calendar/dist/fullcalendar.css')}}" rel="stylesheet" type="text/css" />  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

>>>>>>> d1eb4f5d62aef340304eafb457f7a76636734725
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
<<<<<<< HEAD
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
=======
        </header>
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                                        
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="{{asset('assets/images/users/userav-min.png')}}" alt="user" />
                        <!-- this is blinking heartbit-->
                        <!-- <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div> -->
                    </div>

                    <!-- User profile text-->
                    <div class="profile-text">
                        @if(Auth::check())
                        <h5 style="color: #ffffff;">{{ Auth::user()->name }}</h5>
                        @endif
                        <a href="{{ route('setting.account')}}" class="dropdown-toggle u-dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                        <a href="{{ route('signout') }}" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li> <a href="{{ route('admindashboard')}}" ><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a></li>
                        <li> <a href="{{ route('employee.employees') }}" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Employees</span></a></li>          
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span class="hide-menu">Attendance </span></a>
                            <ul aria-expanded="false" class="collapse">
                             <li><a href="{{ route('printdtr.index') }}">Print DTR </a></li>
                             <li><a href="{{ route('attendances') }}">Attendances </a></li>
                                <!-- <li><a href="http://192.168.254.114/HRSystem-CI/attendance/Save_Attendance">Add Attendance </a></li>
                                <li><a href="http://192.168.254.114/HRSystem-CI/attendance/Attendance_Report">Attendance Report </a></li> -->
                            </ul>
                        </li>


                        <li> <a href="{{ route('leave.holiday') }}" aria-expanded="false"><i class="mdi mdi-account-off"></i><span class="hide-menu">Holiday </span></a>
                        </li>
                        
                        <li> <a href="{{ route('notice') }}" ><i class="mdi mdi-clipboard"></i><span class="hide-menu">Notice <span class="hide-menu"></a></li>
                        <li> <a href="{{ route('register') }}" ><i class="mdi mdi-account"></i><span class="hide-menu">Add User <span class="hide-menu"></a></li>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>      

        <div class="page-wrapper">
            @yield('content')

            <footer class="footer"> eis&dtris © 2023 | </footer>

        </div>

    </div>


    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('assets/js/custom.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <!-- ============================================================== -->
    <!--sparkline JavaScript -->
    <script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--morris JavaScript -->
    <script src="{{asset('assets/plugins/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('assets/plugins/morrisjs/morris.js')}}"></script>
    <!-- Chart JS -->




    <!-- CHART COMMENTED....UNCOMMENT WHEN DONE -->
    <!-- <script src="http://192.168.254.114/HRSystem-CI/assets/js/dashboard1.js"></script> -->




    
 <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>  
   
    <script src="{{asset('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>

    <!-- Editable -->
    <script src="{{asset('assets/plugins/jsgrid/db.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/jsgrid/dist/jsgrid.min.js')}}"></script>
    <!-- This is data table -->

    <script type="text/javascript" src="{{asset('assets/plugins/multiselect/js/jquery.multi-select.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <script src="{{asset('assets/export/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/export/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/export/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js')}}"></script>
    <script src="{{asset('assets/export/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/export/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/export/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/export/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js')}}"></script>

   
    <!-- Clock Plugin JavaScript -->
    <script src="{{asset('assets/plugins/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>                        
    <!-- Date range Plugin JavaScript -->
    <script src="{{asset('assets/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>     
    <!-- end - This is for export functionality only -->
    <script src="{{asset('assets/plugins/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/multiselect/js/jquery.multi-select.js')}}"></script>
    



    <!-- CALENDAR -->
    <!-- <script type="text/javascript" src="http://192.168.254.114/HRSystem-CI/assets/plugins/calendar/jquery-ui.min.js"></script> -->
    <script type="text/javascript" src="{{asset('assets/plugins/calendar/dist/fullcalendar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/calendar/dist/cal-init.js')}}"></script>

    <script type="text/javascript">
        $(function () {
            $('.mydatetimepicker').datepicker({
            format: "mm-yyyy",
            viewMode: "years", 
            minViewMode: "months"   
            });
        });
        $(function () {
            $('.mydatetimepickerFull').datepicker({
            format: "MM-DD-YYYY"   
            });
        });
    </script>      
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $(function () {
  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
});
    jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });        
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    $('.clockpicker').clockpicker({
        donetext: 'Done',
    }).find('input').change(function() {
        console.log(this.value);
    });
    $('#check-minutes').click(function(e) {
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show').clockpicker('toggleView', 'minutes');
    });



    
    $(function() {
    $('#datetimepicker2').datetimepicker({
      language: 'en',
      pick12HourFormat: true
    });
  });
  
    $(".select2").select2();
    </script>
<script type="text/javascript">
// $('form').each(function() {
//     $(this).validate({
//     submitHandler: function(form) {
//         var formval = form;
//         var url = $(form).attr('action');

//         // Create an FormData object
//         var data = new FormData(formval);
//         $.ajax({
//             type: "POST",
//             enctype: 'multipart/form-data',
//             // url: "crud/Add_userInfo",
//             url: url,
//             data: data,
//             processData: false,
//             contentType: false,
//             cache: false,
//             timeout: 600000,
//             success: function (response) {
//                 console.log(response);            
//                 $(".message").fadeIn('fast').delay(3000).fadeOut('fast').html(response);
//                 $('form').trigger("reset");
//                 window.setTimeout(function(){location.reload()},3000);
//             },
//             error: function (e) {
//                 console.log(e);
//             }
//         });
//     }
// });
// });

    </script>     

    <script src="{{asset('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
>>>>>>> d1eb4f5d62aef340304eafb457f7a76636734725
</body>

</html>