@extends('layouts.default')

@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="GenIT Bangladesh">
    <!-- Favicon icon -->
        <link rel="icon" type="image/ico" sizes="16x16" href="http://hrsystem-ci.test\/assets/images/favicn.ico">
    <title>H R System (CI)</title>
    <!-- Bootstrap Core CSS -->
    <link href="http://hrsystem-ci.test\/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/2.0.46/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="http://hrsystem-ci.test\/assets/plugins/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="http://hrsystem-ci.test\/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    
    <link href="http://hrsystem-ci.test\/assets/css/style.css" rel="stylesheet" media="all">
    <link href="http://hrsystem-ci.test\/assets/css/print.css" rel="stylesheet" media='print'>
    <!-- You can change the theme colors from here -->
    <link href="http://hrsystem-ci.test\/assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <link href="http://hrsystem-ci.test\/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="http://hrsystem-ci.test\/assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="http://hrsystem-ci.test\/assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link href="http://hrsystem-ci.test\/assets/plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Daterange picker plugins css -->
    <link href="http://hrsystem-ci.test\/assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    
    <script src="http://hrsystem-ci.test\/assets/plugins/jquery/jquery.min.js"></script>
     <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <link href="http://hrsystem-ci.test\/assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />   
    <link href="http://hrsystem-ci.test\/assets/plugins/calendar/dist/fullcalendar.css" rel="stylesheet" type="text/css" />   
</head>


         
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="fa fa-users" aria-hidden="true"></i> Employee</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Employee</li>
                    </ol>
                </div>
            </div>
            <!-- <div class="message"></div>
            <div class="container-fluid">
                <div class="row m-b-10"> 
                    <div class="col-12">
                        <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a href="http://hrsystem-ci.test\/employee/Add_employee" class="text-white"><i class="" aria-hidden="true"></i> Add Employee</a></button>
                        <button type="button" class="btn btn-primary"><i class="fa fa-bars"></i><a href="http://hrsystem-ci.test\/employee/Disciplinary" class="text-white"><i class="" aria-hidden="true"></i>  Disciplinary List</a></button>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"><i class="fa fa-user-o" aria-hidden="true"></i> Employee List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table id="employees123" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>

                                                <th>Employee Name</th>
                                                <th>Employee ID</th>
                                                <th>Department </th>
                                                <th>Contact </th>
                                                <th>Position</th>
                                                <th >Action</th>

                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                                               <tr>
                                                <th>Employee Name</th>
                                                <th>PIN</th>
                                                <th>Email </th>
                                                <th>Contact </th>
                                                <th>User Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot> -->
                                        <tbody>
                                                                                       <tr>
                                                <td title="Thom Anderson">Thom Anderson</td>
                                                                                <td>99</td>
                                                <td>thoma@mail.com</td>
                                                <td>7856587870</td>
                                                <td>SUPER ADMIN</td>
                                             <td class="jsgrid-align-center ">
                                                  <!--               <script src="http://hrbontoc.test/printdtr"></script>
                                                <button id="printButton">Print</button>
                                                <script>
                                                  $(document).ready(function() {
                                                    $('#printButton').click(function() {
                                                      var htmlContent = $('html').html();
                                                      var printWindow = window.open('', '_blank');
                                                      printWindow.document.open();
                                                      printWindow.document.write(htmlContent);
                                                      printWindow.document.close();
                                                      printWindow.print();
                                                    });
                                                  });
                                                </script>
                                                      <style>
                                                      @media print {
                                                        /* Your print-specific CSS styles */
                                                      }
                                                    </style> -->

                                                                                                    <a href="Save_Attendance?A=1015" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light" data-value="Approve" ><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td title="Will Williams">Will Williams</td>
                                                                                <td>123456</td>
                                                <td>admin@mail.com</td>
                                                <td>999999900</td>
                                                <td>ADMIN</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="http://hrbontoc.test/printdtr\/employee/view?I=RG9lMTc1Mw==" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td title="John Greenwood">John Greenwood</td>
                                                                                <td>123444</td>
                                                <td>employee@mail.com</td>
                                                <td>1111110010</td>
                                                <td>EMPLOYEE</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="http://hrbontoc.test/printdtr\/employee/view?I=RG9lMTc1NA==" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td title="Liam Moore">Liam Moore</td>
                                                                                <td>6969</td>
                                                <td>liam@mail.com</td>
                                                <td>7124589965</td>
                                                <td>EMPLOYEE</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="http://hrbontoc.test/printdtr\/employee/view?I=TW9vMTQwMg==" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td title="Stephany Robs">Stephany Robs</td>
                                                                                <td>1058</td>
                                                <td>stephany@mail.com</td>
                                                <td>7850001111</td>
                                                <td>EMPLOYEE</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="http://hrbontoc.test/printdtr\/employee/view?I=Um9iMTQ3Mg==" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td title="Chris Thompson">Chris Thompson</td>
                                                                                <td>8877</td>
                                                <td>chris@mail.com</td>
                                                <td>7852140000</td>
                                                <td>EMPLOYEE</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="http://hrbontoc.test/printdtr\/employee/view?I=VGhvMTA0NA==" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td title="Colin Smith">Colin Smith</td>
                                                                                <td>3008</td>
                                                <td>colin@mail.com</td>
                                                <td>7400001450</td>
                                                <td>EMPLOYEE</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="http://hrbontoc.test/printdtr\/employee/view?I=U21pMTI2Ng==" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td title="Christine Moore">Christine Moore</td>
                                                                                <td>6661</td>
                                                <td>christine@mail.com</td>
                                                <td>1010140000</td>
                                                <td>EMPLOYEE</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="http://hrbontoc.test/printdtr\/employee/view?I=TW9vMTYzNA==" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td title="Michael Johnson">Michael Johnson</td>
                                                                                <td>8829</td>
                                                <td>michael@mail.com</td>
                                                <td>7801450000</td>
                                                <td>EMPLOYEE</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="http://hrbontoc.test/printdtr\/employee/view?I=Sm9oMTQ3NA==" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td title="Emily Denn">Emily Denn</td>
                                                                                <td>6600</td>
                                                <td>emily@mail.com</td>
                                                <td>7410144470</td>
                                                <td>EMPLOYEE</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="http://hrbontoc.test/printdtr\/employee/view?I=RGVuMTc0NQ==" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer"> © 2023 | Developed By GenIT Bangladesh </footer>

        </div>

    </div>


    <!-- Bootstrap tether Core JavaScript -->
    <script src="http://hrsystem-ci.test\/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="http://hrsystem-ci.test\/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="http://hrsystem-ci.test\/assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="http://hrsystem-ci.test\/assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="http://hrsystem-ci.test\/assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="http://hrsystem-ci.test\/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="http://hrsystem-ci.test\/assets/js/custom.min.js"></script>

    <!-- ============================================================== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <!-- ============================================================== -->
    <!--sparkline JavaScript -->
    <script src="http://hrsystem-ci.test\/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--morris JavaScript -->
    <script src="http://hrsystem-ci.test\/assets/plugins/raphael/raphael-min.js"></script>
    <script src="http://hrsystem-ci.test\/assets/plugins/morrisjs/morris.js"></script>
    <!-- Chart JS -->




    <!-- CHART COMMENTED....UNCOMMENT WHEN DONE -->
    <!-- <script src="http://hrsystem-ci.test\/assets/js/dashboard1.js"></script> -->




    
 <script src="http://hrsystem-ci.test\/assets/plugins/moment/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>  
   
    <script src="http://hrsystem-ci.test\/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

    <!-- Editable -->
    <script src="http://hrsystem-ci.test\/assets/plugins/jsgrid/db.js"></script>
    <script type="text/javascript" src="http://hrsystem-ci.test\/assets/plugins/jsgrid/dist/jsgrid.min.js"></script>
    <!-- This is data table -->

    <script type="text/javascript" src="http://hrsystem-ci.test\/assets/plugins/multiselect/js/jquery.multi-select.js"></script>
    <script src="http://hrsystem-ci.test\/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="http://hrsystem-ci.test\/assets/export/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="http://hrsystem-ci.test\/assets/export/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="http://hrsystem-ci.test\/assets/export/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="http://hrsystem-ci.test\/assets/export/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="http://hrsystem-ci.test\/assets/export/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="http://hrsystem-ci.test\/assets/export/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="http://hrsystem-ci.test\/assets/export/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

   
    <!-- Clock Plugin JavaScript -->
    <script src="http://hrsystem-ci.test\/assets/plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>                        
    <!-- Date range Plugin JavaScript -->
    <script src="http://hrsystem-ci.test\/assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="http://hrsystem-ci.test\/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>     
    <!-- end - This is for export functionality only -->
    <script src="http://hrsystem-ci.test\/assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="http://hrsystem-ci.test\/assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="http://hrsystem-ci.test\/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://hrsystem-ci.test\/assets/plugins/multiselect/js/jquery.multi-select.js"></script>
    



    <!-- CALENDAR -->
    <!-- <script type="text/javascript" src="http://hrsystem-ci.test\/assets/plugins/calendar/jquery-ui.min.js"></script> -->
    <script type="text/javascript" src="http://hrsystem-ci.test\/assets/plugins/calendar/dist/fullcalendar.min.js"></script>
    <script type="text/javascript" src="http://hrsystem-ci.test\/assets/plugins/calendar/dist/cal-init.js"></script>

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
            format: "yyyy-mm-dd"   
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
$('form').each(function() {
    $(this).validate({
    submitHandler: function(form) {
        var formval = form;
        var url = $(form).attr('action');

        // Create an FormData object
        var data = new FormData(formval);
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            // url: "crud/Add_userInfo",
            url: url,
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (response) {
                console.log(response);            
                $(".message").fadeIn('fast').delay(3000).fadeOut('fast').html(response);
                $('form').trigger("reset");
                window.setTimeout(function(){location.reload()},3000);
            },
            error: function (e) {
                console.log(e);
            }
        });
    }
});
});

    </script>     

    <script src="http://hrsystem-ci.test\/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
<!-- <script>
    $('#employees123').DataTable({
        "aaSorting": [[1,'asc']],
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script> -->
@endsection