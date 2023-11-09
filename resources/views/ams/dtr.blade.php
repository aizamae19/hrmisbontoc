@if(isset($employees))
    @foreach($employees as $employee)
    @endforeach
@endif
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    th{
        padding: 5px;
        font-size: small;
    }
    .row{
        display: flex;
        align-content: center;
        justify-content: space-evenly;
    }
    .row-header{
        display: flex;
        flex-direction: column;
    }
    .card-body{
        display: inline-block;
        padding: 1rem;
    }
    .control-form{
        display: block;
        padding-bottom: .5rem;
    }
    .control-input{
        align-items: center;
        padding-bottom: .5rem;
    }
    .container-row{
        display: flex;
    }
</style>
<body>
    <div class="row">
        <div class="card-body">
            <div class="row-header">
                <div class="control-form">
                    <label for="" style="font-style: italic;">Civil Service Form No. 48</label>
                </div>
                <div style="position: absolute;margin-top: 2rem;margin-left: 1rem;">
                    <img class="" style="width: 6rem;" alt="" src="{{ asset('assets/css/dstyle/logo.JPG')}}" />
                </div>
                <div class="row control-input" style="align-items: center;padding-bottom: .5rem;">
                    <label for="">Republic of the Philippines</label>
                </div>
                <div class="row control-input" style="align-items: center;padding-bottom: .5rem;">
                    <label for="">Province of Southern Leyte</label>
                </div>
                <div class="row control-input" style="align-items: center;padding-bottom: .7rem;font-weight: 900">
                    <label for="">MUNICIPALITY OF BONTOC</label>
                </div>
                <div class="row control-input" style="align-items: center;padding-bottom: 2rem;font-weight: bolder;">
                    <label for="">DAILY TIME RECORD</label>
                </div>
                <div class="row control-input" style="border-bottom: 1px solid black">
                    <label for="" style="font-weight: 900;">{{ $employee->firstname }} {{ strtoupper($employee->middlename[0]) }}.  {{ $employee->lastname }} </label>
                </div>
                <div class="row control-input">
                    <label for="">(Name)</label>
                </div>
                <div class="control-form">
                    <div style="display: flex; width: 100%;">
                        <label for="" style="font-size: 1rem;" >For the month of: </label>
                        <div class="container-row" style="flex-grow: 1; justify-content: center;border-bottom: 1px solid black">
                            <label for="" style="font-weight: 900; padding-left: 5px;">{{ date ('F', strtotime("2023-$month-01")) }}</label>
                        </div>
                    </div>
                </div>
                <div class="control-form">
                    <div style="display: flex; width: 100%;">
                        <label for="" style="font-size: smaller; padding-right: .3rem;" >Office hours of arrival and departure</label>
                        <label for="" style="font-size: smaller; padding-right: .3rem;" >(Regular days)</label>
                        <div class="container-row" style="flex-grow: 1; justify-content: center;border-bottom: 1px solid black">
                            <label for="" style="font-size: smaller;padding-left: 5px;">8:00am-12:00pm;1:00pm-5:00pm</label>
                        </div>
                    </div>
                </div>
                <div class="control-form">
                    <div style="display: flex; width: 100%; justify-content: flex-end;">
                        <label for="" style="font-size: smaller; padding-right: .3rem;" >(Saturdays)</label>
                        <div class="" style="width: 200px; justify-content: center;border-bottom: 1px solid black">
                            <label for="" style="font-size: smaller;padding-left: 5px;">                            </label>
                        </div>
                    </div>
                </div>
                <br>
                
            </div>

            <table id="IDtable" border="1" style="border-collapse: collapse;" width="480" height="400" align="center">
                <tr>
                    <th rowspan="2">Day</th>
                    <th colspan="2">A.M.</th>
                    <th colspan="2">P.M.</th>
                    <th colspan="2">Undertime</th>
                </tr>

                <tr>
                    <th>Arrival</th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th>Departure</th>
                </tr>
                <script>
                    var attendances = @json($attendanceList);
                    var employee = @json($employees);
                    var count = Object.keys(attendances).length;
                    var x=0
                    if(employee[0]['position'] == "Job Order" || employee[0]['position'] == "Casual"){
                        for(i=1; i<=15; i++){
                            document.write("<tr>");
                            document.write("<th>"+i+"</th>");
                            var present = false;
                            for(x=0; x<count; x++){
                                var am_in = attendances[x]['am_in'];
                                var am_out = attendances[x]['am_out'];
                                var pm_in = attendances[x]['pm_in'];
                                var pm_out = attendances[x]['pm_out'];
                                var dte = attendances[x]['date'];
                                dte = new Date(dte).getDate();
                                if(i == dte){
                                    document.write("<th>"+am_in+"</th>");
                                    document.write("<th>"+am_out+"</th>");
                                    document.write("<th>"+pm_in+"</th>");
                                    document.write("<th>"+pm_out+"</th>");
                                    present = true;
                                    break;
                                }
                            }
                            if(!present){
                                document.write("<th></th>");
                                document.write("<th></th>");
                                document.write("<th></th>");
                                document.write("<th></th>");
                            }
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<tr>");
                        }
                        for(i=16; i<=31; i++){
                            document.write("<tr>");
                            document.write("<th>"+i+"</th>");
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<tr>");
                        }     
                    }else{
                        for(i=1; i<=31; i++){
                            document.write("<tr>");
                            document.write("<th>"+i+"</th>");
                            var present = false;
                            for(x=0; x<count; x++){
                                var am_in = attendances[x]['am_in'];
                                var am_out = attendances[x]['am_out'];
                                var pm_in = attendances[x]['pm_in'];
                                var pm_out = attendances[x]['pm_out'];
                                var dte = attendances[x]['date'];
                                dte = new Date(dte).getDate();
                                if(i == dte){
                                    document.write("<th>"+am_in+"</th>");
                                    document.write("<th>"+am_out+"</th>");
                                    document.write("<th>"+pm_in+"</th>");
                                    document.write("<th>"+pm_out+"</th>");
                                    present = true;
                                    break;
                                }
                            }
                            if(!present){
                                document.write("<th></th>");
                                document.write("<th></th>");
                                document.write("<th></th>");
                                document.write("<th></th>");
                            }
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<tr>");
                        }
                    }
                    
                    
                </script>
            </table>
            <div class="row-header">
                <div class="col-md-12">
                    <div class="control-form" style="padding-top: .7rem;">
                        <div style="display: flex; width: 100%; justify-content: flex-end;">
                            <label for="" style="font-size: smaller; padding-right: .3rem;" >Total:</label>
                            <div class="" style="width: 200px; justify-content: center;border-bottom: 1px solid black">
                                <label for="" style="font-size: smaller;padding-left: 5px;">                            </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="control-form">
                        <label for="" style="font-style: italic;">I CERTIFY on my honor that the above is a true and correct report of the </label>
                    </div>
                    <div class="control-form">
                        <label for="" style="font-style: italic;"> hours of work performed, record of which was made daily at the time of</label>
                    </div>
                    <div class="control-form" style="padding-bottom: 3rem;">
                        <label for="" style="font-style: italic;">arrival and departure from office.</label>
                    </div>
                    <div class="row control-input" style="border-bottom: 2px solid black">
                        <label for="" style="font-weight: 900;"></label>
                    </div>
                    <div class="row control-input" style="padding-bottom: 3rem;">
                        <label for="">Verified as to the prescribed office hours</label>
                    </div>
                    <div class="row control-input" style="border-bottom: 2px solid black">
                        <label for="" style="font-weight: 900;"></label>
                    </div>
                    <div class="row control-input">
                        <label for="">In Charge</label>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="row-header">
                <div class="control-form">
                    <label for="" style="font-style: italic;">Civil Service Form No. 48</label>
                </div>
                <div style="position: absolute;margin-top: 2rem;margin-left: 1rem;">
                    <img class="" style="width: 6rem;" alt="" src="{{ asset('assets/css/dstyle/logo.JPG')}}" />
                </div>
                <div class="row control-input" style="align-items: center;padding-bottom: .5rem;">
                    <label for="">Republic of the Philippines</label>
                </div>
                <div class="row control-input" style="align-items: center;padding-bottom: .5rem;">
                    <label for="">Province of Southern Leyte</label>
                </div>
                <div class="row control-input" style="align-items: center;padding-bottom: .7rem;font-weight: 900">
                    <label for="">MUNICIPALITY OF BONTOC</label>
                </div>
                <div class="row control-input" style="align-items: center;padding-bottom: 2rem;font-weight: bolder;">
                    <label for="">DAILY TIME RECORD</label>
                </div>
                <div class="row control-input" style="border-bottom: 1px solid black">
                    <label for="" style="font-weight: 900;">{{ $employee->firstname }} {{ strtoupper($employee->middlename[0]) }}.  {{ $employee->lastname }} </label>
                </div>
                <div class="row control-input">
                    <label for="">(Name)</label>
                </div>
                <div class="control-form">
                    <div style="display: flex; width: 100%;">
                        <label for="" style="font-size: 1rem;" >For the month of: </label>
                        <div class="container-row" style="flex-grow: 1; justify-content: center;border-bottom: 1px solid black">
                            <label for="" style="font-weight: 900; padding-left: 5px;">{{ date('F', strtotime("2023-$month-01")) }}</label>
                        </div>
                    </div>
                </div>
                <div class="control-form">
                    <div style="display: flex; width: 100%;">
                        <label for="" style="font-size: smaller; padding-right: .3rem;" >Office hours of arrival and departure</label>
                        <label for="" style="font-size: smaller; padding-right: .3rem;" >(Regular days)</label>
                        <div class="container-row" style="flex-grow: 1; justify-content: center;border-bottom: 1px solid black">
                            <label for="" style="font-size: smaller;padding-left: 5px;">8:00am-12:00pm;1:00pm-5:00pm</label>
                        </div>
                    </div>
                </div>
                <div class="control-form">
                    <div style="display: flex; width: 100%; justify-content: flex-end;">
                        <label for="" style="font-size: smaller; padding-right: .3rem;" >(Saturdays)</label>
                        <div class="" style="width: 200px; justify-content: center;border-bottom: 1px solid black">
                            <label for="" style="font-size: smaller;padding-left: 5px;">                            </label>
                        </div>
                    </div>
                </div>
                <br>
                
            </div>
            <table id="IDtable" border="1" style="border-collapse: collapse;" width="350" height="400" align="center">
                <tr>
                    <th rowspan="2">Day</th>
                    <th colspan="2">A.M.</th>
                    <th colspan="2">P.M.</th>
                    <th colspan="2">Undertime</th>
                </tr>

                <tr>
                    <th>Arrival</th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th>Departure</th>
                </tr>
                <script>
                    var attendances = @json($attendanceList);
                    var employee = @json($employees);
                    var count = Object.keys(attendances).length;
                    var x=0
                    if(employee[0]['position'] == "Job Order" || employee[0]['position'] == "Casual"){
                        for(i=1; i<=15; i++){
                            document.write("<tr>");
                            document.write("<th>"+i+"</th>");
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<tr>");
                        }     
                        for(i=16; i<=31; i++){
                            document.write("<tr>");
                            document.write("<th>"+i+"</th>");
                            var present = false;
                            for(x=0; x<count; x++){
                                var am_in = attendances[x]['am_in'];
                                var am_out = attendances[x]['am_out'];
                                var pm_in = attendances[x]['pm_in'];
                                var pm_out = attendances[x]['pm_out'];
                                var dte = attendances[x]['date'];
                                dte = new Date(dte).getDate();
                                if(i == dte){
                                    document.write("<th>"+am_in+"</th>");
                                    document.write("<th>"+am_out+"</th>");
                                    document.write("<th>"+pm_in+"</th>");
                                    document.write("<th>"+pm_out+"</th>");
                                    present = true;
                                    break;
                                }
                            }
                            if(!present){
                                document.write("<th></th>");
                                document.write("<th></th>");
                                document.write("<th></th>");
                                document.write("<th></th>");
                            }
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<tr>");
                        }
                    }else{
                        for(i=1; i<=31; i++){
                            document.write("<tr>");
                            document.write("<th>"+i+"</th>");
                            var present = false;
                            for(x=0; x<count; x++){
                                var am_in = attendances[x]['am_in'];
                                var am_out = attendances[x]['am_out'];
                                var pm_in = attendances[x]['pm_in'];
                                var pm_out = attendances[x]['pm_out'];
                                var dte = attendances[x]['date'];
                                dte = new Date(dte).getDate();
                                if(i == dte){
                                    document.write("<th>"+am_in+"</th>");
                                    document.write("<th>"+am_out+"</th>");
                                    document.write("<th>"+pm_in+"</th>");
                                    document.write("<th>"+pm_out+"</th>");
                                    present = true;
                                    break;
                                }
                            }
                            if(!present){
                                document.write("<th></th>");
                                document.write("<th></th>");
                                document.write("<th></th>");
                                document.write("<th></th>");
                            }
                            document.write("<th></th>");
                            document.write("<th></th>");
                            document.write("<tr>");
                        }
                    }
                </script>
            </table>
            <div class="row-header">
                <div class="col-md-12">
                    <div class="control-form" style="padding-top: .7rem;">
                        <div style="display: flex; width: 100%; justify-content: flex-end;">
                            <label for="" style="font-size: smaller; padding-right: .3rem;" >Total:</label>
                            <div class="" style="width: 200px; justify-content: center;border-bottom: 1px solid black">
                                <label for="" style="font-size: smaller;padding-left: 5px;">                            </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="control-form">
                        <label for="" style="font-style: italic;">I CERTIFY on my honor that the above is a true and correct report of the </label>
                    </div>
                    <div class="control-form">
                        <label for="" style="font-style: italic;"> hours of work performed, record of which was made daily at the time of</label>
                    </div>
                    <div class="control-form" style="padding-bottom: 3rem;">
                        <label for="" style="font-style: italic;">arrival and departure from office.</label>
                    </div>
                    <div class="row control-input" style="border-bottom: 2px solid black">
                        <label for="" style="font-weight: 900;"></label>
                    </div>
                    <div class="row control-input" style="padding-bottom: 3rem;">
                        <label for="">Verified as to the prescribed office hours</label>
                    </div>
                    <div class="row control-input" style="border-bottom: 2px solid black">
                        <label for="" style="font-weight: 900;"></label>
                    </div>
                    <div class="row control-input">
                        <label for="">In Charge</label>
                    </div>
                </div>
            </div>
        </div>      
    </div>
</body>
</html>
<script type="text/javascript">
    var table = document.getElementById("IDtable");
    
</script>