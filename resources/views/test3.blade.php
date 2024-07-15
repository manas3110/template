

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css"> -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script> -->
    <script>
    </script>
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <style>
      .table .thead-light th {
        color: #495057;
        background-color: #e9ecef;
        border-color: #dee2e6;
      }
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
     
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
                <h5>Soil Compaction Test Summary </h5>
            </div>
            <div class="card-body mt-3">

            <form method="post" action="">
                <!--table-->
                <div class="col-md-12">
                    <!--table Div-->
                    <div class="table-responsive">
                        <table class="first-table table table-bordered" id="mdispatch" cellpadding="2">
                            <tbody>
                                <tr>
                                    <th>Project Name <span class="text-danger">*</span></th>
                                    <td>
                                        <select class="project-name" id="project-name" data-placeholder="Choose the project" name="">
                                            <!-- <option value="0"></option> -->
                                            <option disabled selected value> -- select an option -- </option>
                                            <option value="1">Project Seven Target</option>
                                            <option value="2">Project Break-in</option>
                                        </select>
                                    </td>
                                    <th colspan="2"><u>Packing List-Attached</u></th>
                                    <th>Soil DFR. No.</th>
                                    <td>
                                        <input type="text" class="form-control" name="" value="" readonly="">
                                    </td>
                                    <th>Date</th>
                                    <td>
                                        <input type="text" class="form-control add-date-more" name="" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Project No.</th>
                                    <td>
                                        <select class="project-number" id="project-number" data-placeholder="Choose the project number" name="">
                                            <!-- <option value="0"></option> -->
                                            <option disabled selected value> -- select an option -- </option>
                                            <option value="1">2544</option>
                                            <option value="2">343</option>
                                        </select>
                                    </td>
                                    <th>Calibration Cert.</th>
                                   <td style="width:65px;">
                                        <select name="" class="form-control" placeholder="Choose">
                                            <option value="1"> Yes</option>
                                            <option value="0" selected=""> No</option>
                                        </select>
                                    </td>
                                    <th>Max. Dry Density In Accordance With</th>
                                    <td>
                                        <input type="text" class="form-control" name="" value="">
                                    </td>
                                </tr>
                                <tr>                                    
                                    <th>Client Name</th>
                                    <td>
                                        <input type="text" class="form-control" name="" id="client_id" value="" readonly="">
                                    </td>
                                    <th>Bill of Lading</th>
                                    <td>
                                        <select name="" class="form-control" placeholder=" Choose">
                                            <option value="1"> Yes</option>
                                            <option value="0" selected=""> No</option>
                                        </select>
                                    </td>
                                    <th>Nuclear Density Used</th>
                                    <td>
                                        <input type="text" class="form-control" name="" value="">
                                    </td>
                                    <th>Serial No.</th>
                                    <td>
                                       <input type="text" class="form-control" name="" value="">                                       
                                   </td>
                               </tr>
                                <tr>
                                    <th>Address</th>
                                    <td><input type="text" class="form-control" name="" value=""></td>
                                    <th>Safety Manual</th>
                                    <td>
                                        <select name="" class="form-control" placeholder=" Choose">
                                            <option value="1"> Yes</option>
                                            <option value="0" selected=""> No</option>
                                        </select>
                                    </td>
                                    <th>DS Count</th>
                                    <td><input type="text" class="form-control" name="" value=""></td>
                                    <th>MS Count:</th>
                                    <td><input type="text" class="form-control" name="" value=""></td>
                                </tr>
                                <tr>
                                    <th>Test Location</th>
                                    <td><input type="text" class="form-control" name="" value=""></td>
                                    <th>Emergency Cont</th>
                                    <td>
                                         <select name="" class="form-control" placeholder=" Choose">
                                            <option value="1"> Yes</option>
                                            <option value="0" selected=""> No</option>
                                        </select>
                                    </td>
                                    <th>Nuke Gauge Make</th>
                                    <td><input type="text" class="form-control" name="" value=""></td>
                                    <th>Model</th>
                                    <td><input type="text" class="form-control" name="" value=""></td>
                                </tr>
                                <tr>
                                        <th></th>
                                        <td></td>
                                        <th>Leak Test Cert.</th>
                                        <td>
                                            <select name="" class="form-control" placeholder="Choose">
                                                <option value="1"> Yes</option>
                                                <option value="0" selected=""> No</option>
                                            </select>
                                        </td>
                                        <th>Test Mode</th>
                                        <td><input type="text" class="form-control" name="" value=""></td>
                                        <th>Test Depth</th>
                                        <td><input type="text" class="form-control" name="" value=""></td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                    <div class="table-responsive table-second-container"> 
                            <table class="table table-bordered table-second custom-tables" cellpadding="2">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="th-align btc bbc"></th>
                                        <th class="th-align btc bbc"></th>
                                        <th class="th-align btc bbc"></th>
                                        <th class="th-align btc bbc"></th>
                                        <th class="th-align btc bbc"></th>
                                        <th class="th-align btc bbc"></th>
                                        <th class="th-align" colspan="3">Field Data</th>
                                        <th class="th-align" colspan="5">Lab Data</th>
                                        <th class="th-align btc bbc"></th>
                                        <th class="th-align btc bbc"></th>
                                        <th class="th-align btc bbc"></th>
                                        <th class="th-align btc bbc"></th>
                                        <th class="th-align btc bbc"></th>                                    
                                        <th class="th-align btc bbc"></th>                                    
                                    </tr>
                                    <tr class="text-center">
                                        <th class="th-align">Action</th>
                                        <th class="th-align">Test&nbsp;<span class="text-danger">*</span></th>
                                        <th class="th-align" width="200px">&nbsp;&nbsp;&nbsp;Date&nbsp;&nbsp;&nbsp;</th>
                                        <th class="th-align">Test Location</th>
                                        <th class="th-align">Layer No.</th>
                                        <th class="th-align">Compacted Thickness (in.)</th>
                                        <th class="th-align">Approx Elev. (ft.)</th>
                                        <th class="th-align">Dry Density (pcf) <span class="text-danger">*</span></th>
                                        <th class="th-align">Moisture Content (%) <span class="text-danger">*</span></th>
                                        <th class="th-align">Total Density (pcf)</th>
                                        <th class="th-align">MDD (pcf)</th>
                                        <th class="th-align">OMC (%)</th>
                                        <th class="th-align">Retained #4(%)</th>
                                        <th class="th-align">Soil Description</th>
                                        <th class="th-align" colspan="2">Proctor Number <span class="text-danger">*</span></th>
                                        <th class="th-align">Rel Comp. (%)</th>
                                        <th class="th-align">Req'd Comp. (%)</th>
                                        <th class="th-align">Result</th>
                                        <th class="th-align">Retest No.</th>         
                                    </tr>
                                </thead>

                                <tbody id="tableAddRow">
                                                                                
                                </tbody>


                            </table>
                                </div> <!-- Div scroll -->
                                <div class="row">
                                    <div class="col-lg-12 pb-3 pt-3">
                                      <button type="button" class="btn btn-primary addrowtimesheet" id="addrowtimesheet">Add Row</button>
                                    </div>
                                </div>                                
                              <div class="table-responsive">
                                <table class="table table-bordered table-fourth" cellpadding="2">
                                    <tbody>
                                         <tr>
                                            <th colspan="3">Test Performed By</th>
                                            <td colspan="3">
                                                <input type="text" name="test_performed_by" class="form-control" value="Lab Technician" readonly="">
                                            </td>
                                          <th>Date</th>
                                          <td colspan="2"><input type="text" class="form-control add-date-more" name="test_performed_date" value="">
                                          </td>
                                          <td colspan="3"></td>
                                          <th colspan="2">Reviewed By</th>
                                          <td colspan="2">
                                            <select class="reviewed-by" id="reviewed-by" data-placeholder="Reviewed By" name="">
                                                <!-- <option value="0"></option> -->
                                                <option disabled selected value> -- select an option -- </option>
                                                <option value="1">VoldyShorts</option>
                                                <option value="2">Old Fool</option>
                                            </select>
                                           </td>
                                            <th>Date</th>
                                            <td colspan="2"><input type="text" class="form-control add-date-more" name="reviewed_by_date" value=""></td>    
                                        </tr>
                                      </tbody>
                                  </table>
                              </div>                              
                          </div>
                          <div class="col-md-12">
                              <input class="btn btn-primary btncus" type="submit" name="submit" value="Save">
                                                              <a class="btn btn-danger btncus" href="https://reporting.dullesgeotechnical.com/test/admin/testing/workorder">Back</a>                                    
                                                            
                          </div>
            </form>
        </div>

    </div>


<link href="https://reporting.dullesgeotechnical.com/test/assets/css/datepicker/datepicker.css" rel="stylesheet" type="text/css">
<link href="https://reporting.dullesgeotechnical.com/test/assets/css/datepicker/custom-datepicker.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="https://reporting.dullesgeotechnical.com/test/assets/js/datepicker/datepicker.js"></script>
<script type="text/javascript" src="https://reporting.dullesgeotechnical.com/test/assets/js/datepicker/custom-datepicker.js"></script>
<link href="https://reporting.dullesgeotechnical.com/test/assets/css/timepicker/mdtimepicker.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="https://reporting.dullesgeotechnical.com/test/assets/js/timepicker/mdtimepicker.js"></script>

<table class="" style="display:none;">
<tbody id="firstDivRow">
    <tr class="">
        <td align="center"><i class="bi bi-x h2 text-danger remove"></i></td>
            <td><input type="text" class="form-control count1" name="" value="" required=""></td>
            <td><input type="text" class="form-control add-date-more" name="" value=""></td>
            <td><input type="text" class="form-control" name=""></td>
            <td><input type="text" class="form-control" name=""></td>
            <td><input type="text" class="form-control" name=""></td>
            <td><input type="text" class="form-control" name=""></td>                
            <td><input type="number" step="any" class="form-control relcomp_cal dry density_cal reqdcomp_cal" name="" required=""></td>
            <td><input type="text" class="form-control density_cal mc" name="" required=""></td>
            <td><input type="text" class="form-control total_density" name="" readonly=""></td>
            <td><input type="text" class="form-control relcomp_cal reqdcomp_cal mdd" name="" readonly=""></td>
            <td><input type="text" class="form-control" name="" readonly=""></td>
            <td>
                <input type="text" class="form-control" name="" readonly="">                    
            </td>
            <td><input type="text" class="form-control" name="" readonly=""></td>                
            <td colspan="2">
                <select class="proctor-number" id="proctor-number" data-placeholder="Proctor No." name="">
                    <!-- <option value="0"></option> -->
                    <option disabled selected value> -- select an option -- </option>
                    <option value="1">941</option>
                    <option value="2">911</option>
                </select>
            </td>
            <td><input type="number" step=".01" class="form-control relcomp reqdcomp_cal" name="" readonly=""></td>
            <td><input type="text" class="form-control reqdcomp reqdcomp_cal" name="" value="95"></td>
            <td><input type="text" class="form-control result" name=""></td>
            <td><input type="text" class="form-control " name=""></td>
        </tr>
    </tbody>
</table> 
<script type="text/javascript">
    $(document).ready(function() {   
        
        
        $( '.project-name' ).select2( {
            theme: 'bootstrap-5',
            allowClear: true                 
        } );
        $( '.project-number' ).select2( {
            theme: 'bootstrap-5',
            allowClear: true                 
        } );
        // $( '.proctor-number' )each()
        // .select2( {
        //     theme: 'bootstrap-5',
        //     allowClear: true                 
        // } );
        $( '.reviewed-by' ).select2( {
            theme: 'bootstrap-5',
            allowClear: true                 
        } );
        // $('.proctor-number').each(function() {
            // $(this).select2({
                // theme: 'bootstrap-5',
                // allowClear: true 
            // });
        // });
        $('body').on('focus', ".add-more-time", function() {
            $(this).mdtimepicker({});
        });

        $('body').on('focus', ".add-date-more", function() {
            $(this).datepicker({
                format: 'mm-dd-yyyy',
            });
        });

        

    });

    
    
    $('body').on("click", "#addrowtimesheet", function() {
        
                      
            $markup = $('#firstDivRow').html();
            $("#tableAddRow").append($markup);
            $('#tableAddRow .proctor-number').each(function() {
                $(this).select2({
                    theme: 'bootstrap-5',
                    allowClear: true 
                });
            });

    });

    $('body').on("click", ".remove", function() {                  
        $(this).parent().parent().remove();
    });
        


        
               
</script>    



</div>
        
    </script>
    <!-- Template Main JS File -->

    
    
</body>
</html>

