<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css"> -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script> -->
    <script>
    </script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
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
        /* .input-group {
            display: flex;
            align-items: center; Center align the items vertically
        } */

        /* .input-group .form-control { */
            /* margin-right: 5px; Add some space between inputs */
        /* } */

        /* td,th {
            white-space: nowrap; 
            
        } */
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
                <h5>Concrete Test Summary Report</h5>
            </div>
            <div class="card-body mt-3">

                <form action="">
                    <!--table-->
                    <div class="col-md-12">
                        <!--table Div-->
                        <div class="table-responsive">
                            <table class="first-table table table-bordered" cellpadding="2">
                                <tbody>
                                    <tr>
                                        <th colspan="3">Project Name <span class="text-danger">*</span></th>
                                        <td colspan="2">
                                            <select  class="project-name" id="project-name"
                                                data-placeholder="Choose the project" name="">
                                                <option disabled selected value> -- select an option -- </option>
                                                <option value="1">Project Seven Target</option>
                                                <option value="2">Project Break-in</option>
                                            </select>
                                        </td>
                                        <th colspan="3">Conc. DFR. No.</th>
                                        <td colspan="2">
                                            <input type="text" class="form-control" name="" value="" readonly="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">Project No.</th>
                                        <td colspan="2">
                                            <select class="project-number" id="project-number"
                                                data-placeholder="Choose the project number" name="">
                                                <option disabled selected value> -- select an option -- </option>
                                                <option value="1">2544</option>
                                                <option value="2">343</option>
                                            </select>
                                        </td>
                                        <th colspan="3">Weather</th>
                                        <td colspan="2">
                                            <select class="weather" id="weathers" data-placeholder="Choose the weather"
                                                name="">
                                                <option disabled selected value> -- select an option -- </option>
                                                <option value="Rainy">Rainy</option>
                                                <option value="Spring">Spring</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">Date</th>
                                        <td colspan="2">
                                            <input type="text" class="form-control add-date-more" name="" value="">
                                        </td>
                                        <th colspan="3">Concrete Pour Location</th>
                                        <td colspan="2">
                                            <input type="text" class="form-control" name="" id="concrete-pour-location"
                                                value="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">Concrete Technician</th>
                                        <td colspan="2">
                                            <select class="concrete-techincian" id="concrete-technician"
                                                data-placeholder="Choose the project number" name="">
                                                <option disabled selected value> -- select an option -- </option>
                                                <option value="007">007</option>
                                                <option value="1935">1935</option>
                                            </select>
                                        </td>
                                        <th colspan="3">Total Quantity Of Concrete Placed( YD<sup>3</sup> )</th>
                                        <td><input type="text" class="form-control" name=""></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">Mix Designation</th>
                                        <td colspan="2"><input type="text" class="form-control" name=""></td>
                                        <th colspan="3">Min Specified Compressive Strength @ 28days ( psi )</th>
                                        <td colspan="2"><input type="text" class="form-control" name=""></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">Project Location</th>
                                        <td colspan="2"><input type="text" class="form-control proj_loc" readonly="">
                                        </td>
                                        <th colspan="3">Concrete Supplier</th>
                                        <td colspan="2"><input type="text" class="form-control" name=""></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive text-nowrap table-second-container">
                            <table class="table table-bordered table-second custom-tables" cellpadding="2">
                                <tbody>
                                    <tr class="text-center">
                                        <th class="th-align">Action</th>
                                        <th class="th-align">Truck #</th>
                                        <th class="th-align">Delivery Ticket #</th>
                                        <th class="th-align">Batched Time</th>
                                        <th class="th-align">Sampled Time</th>
                                        <th class="th-align">Truck Finish Time</th>
                                        <th class="th-align">Slump, in. (ASTM C-143)</th>
                                        <th class="th-align">Air Content, % (ASTM C-231)</th>
                                        <th class="th-align">Unit Weight, pcf (ASTM C-138)</th>
                                        <th class="th-align">Air Temp, °F</th>
                                        <th class="th-align">Mix Temp, °F (ASTM C-1064)</th>
                                        <th class="th-align">Cylinder Set No.</th>
                                        <th class="th-align">Number of Cylinders Cast</th>
                                        <th colspan="3" class="th-align">Extra Water</th>
                                        <th class="th-align">Authorized By</th>
                                        <th class="th-align">Mix Design No.</th>
                                        <th class="th-align">Remarks</th>
                                    </tr>
                                </tbody>
                                <tbody id="tableAddRow">

                                </tbody>

                            </table>
                        </div>
                        <!-- </div> Div scroll -->

                        <div class="row">
                            <div class="col-lg-12 pb-3 pt-3">
                                <button class="btn btn-primary addrowtimesheet" type="button" id="addrowtimesheet">Add Row</button>
                            </div>

                            <div class="col-md-4">
                                <label>Note:</label>
                                <input type="text" class="form-control" name="note">
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="col-lg-12">
                                <label>Mix Specifications</label>
                            </div>
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table id="tbMixSpec" class="table thired-table" cellpadding="3">
                                        <thead>
                                            <tr class="text-center">
                                                <th class="th-align">Mix Design No.</th>
                                                <th class="th-align">Mix Description</th>
                                                <th class="th-align">Max. Slump In</th>
                                                <th class="th-align">Air Content %</th>
                                                <th class="th-align">Unit Weight (pcf)</th>
                                                <th class="th-align">Mix Temperature °F</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table><!--close table-->
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="col-lg-4 form-group">
                                <label>Reviewed By: </label><br>
                                <select data-width="100%" class="reviewed-by" id="reviewed-by" data-placeholder="Reviewed By" name="">
                                    <option value=""></option>
                                    <option value="1">VoldyShorts</option>
                                    <option value="2">Old Fool</option>
                                </select>
                            </div>
                        </div>
                        <div class="my-3">
                            <div class="col-lg-4 form-group">
                                <label>Date: </label>
                                <input type="text" name="" class="form-control datepicker" value="">
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                              <input class="btn btn-primary btncus" type="submit" name="submit" value="Save">
                                                              <a class="btn btn-danger btncus" href="https://reporting.dullesgeotechnical.com/test/admin/testing/workorder">Back</a>                                                          
                          </div>
                            
                        
                    </div>
                </form>
            </div>
        </div>

    </div>


    <link href="https://reporting.dullesgeotechnical.com/test/assets/css/datepicker/datepicker.css" rel="stylesheet"
        type="text/css">
    <link href="https://reporting.dullesgeotechnical.com/test/assets/css/datepicker/custom-datepicker.css"
        rel="stylesheet" type="text/css">
    <script type="text/javascript"
        src="https://reporting.dullesgeotechnical.com/test/assets/js/datepicker/datepicker.js"></script>
    <script type="text/javascript"
        src="https://reporting.dullesgeotechnical.com/test/assets/js/datepicker/custom-datepicker.js"></script>
    <link href="https://reporting.dullesgeotechnical.com/test/assets/css/timepicker/mdtimepicker.css" rel="stylesheet"
        type="text/css">
    <script type="text/javascript"
        src="https://reporting.dullesgeotechnical.com/test/assets/js/timepicker/mdtimepicker.js"></script>

    <table class="" style="display:none;">
        <tbody id="firstDivRow">
            <tr class="text-center">
                <td align="center"><i class="bi bi-x h2 text-danger remove"></i></td>
                <td><input type="text" class="form-control" name="truck[]"></td>
                <td><input type="text" class="form-control" name="del_ticket[]"></td>
                <td>
                    <div class="input-group flex-nowrap">
                        <input type="number" name="" class="form-control dfr-time-hour" placeholder="Hour" min="1"
                            max="12" style="min-width: 61px;">
                        <input type="number" name="" class="form-control dfr-time-min" placeholder="Min" min="0"
                            max="59" style="min-width: 61px;">
                        <select name="" class="form-control" style="min-width: 61px;">
                            <option value="AM">AM</option>
                            <option value="PM">PM</option>
                        </select>
                    </div>
                </td>
                <td>
                    <div class="input-group flex-nowrap">
                        <input type="number" name="" class="form-control dfr-time-hour" placeholder="Hour" min="1"
                            max="12" style="min-width: 61px;">
                        <input type="number" name="" class="form-control dfr-time-min" placeholder="Min" min="0"
                            max="59" style="min-width: 61px;">
                        <select name="" class="form-control" style="min-width: 61px;">
                            <option value="AM">AM</option>
                            <option value="PM">PM</option>
                        </select>
                    </div>
                </td>
                <td>
                    <div class="input-group flex-nowrap">
                        <input type="number" name="" class="form-control dfr-time-hour" placeholder="Hour" min="1"
                            max="12" style="min-width: 61px;">
                        <input type="number" name="" class="form-control dfr-time-min" placeholder="Min" min="0"
                            max="59" style="min-width: 61px;">
                        <select name="" class="form-control" style="min-width: 61px;">
                            <option value="AM">AM</option>
                            <option value="PM">PM</option>
                        </select>
                    </div>
                </td>
                <td><input type="text" class="form-control" name=""></td>
                <td><input type="text" class="form-control" name=""></td>
                <td><input type="text" class="form-control" name=""></td>
                <td><input type="text" class="form-control" name=""></td>
                <td><input type="text" class="form-control" name=""></td>
                <td><input type="text" class="form-control" name=""></td>
                <td><input type="text" class="form-control" name=""></td>
                <td colspan="3">
                    <select data-width="100%" name="" class="form-control ext-water" placeholder="Select">
                        <option value=""></option>
                        <option value="yes">YES</option>
                        <option value="no">NO</option>
                    </select>
                </td>
                <td><input name="" type="text" class="form-control"></td>
                <td>
                    <select name="" data-width="100%" class="form-control mix-design-no" placeholder="Select">
                        <option value=""></option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </td>
                <td><input type="text" class="form-control" name=""></td>
            </tr>
        </tbody>
    </table>

    <table id="addTbMixSpec" style="display: none;">
        <tbody>
            <tr class="text-center">
                <td><input type="text" name="" class="form-control ms-mix-design-no" readonly=""></td>
                <td><input type="text" name="" class="form-control ms-mix-desc" readonly=""></td>
                <td><input type="text" name="" class="form-control ms-max-slump" readonly=""></td>
                <td><input type="text" name="" class="form-control ms-air-cont" readonly=""></td>
                <td><input type="text" name="" class="form-control ms-unit-weight" readonly=""></td>
                <td><input type="text" name="" class="form-control ms-mix-temp" readonly=""></td>
            </tr>
        </tbody>
    </table>
    <script type="text/javascript">
        $(document).ready(function () {


            $('.project-name').select2({
                theme: 'bootstrap-5',
                allowClear: true
            });
            $('.project-number').select2({
                theme: 'bootstrap-5',
                allowClear: true
            });
            $('.weather').select2({
                theme: 'bootstrap-5',
                allowClear: true
            });
            $('.concrete-techincian').select2({
                theme: 'bootstrap-5',
                allowClear: true
            });


            $('.reviewed-by').select2({
                theme: 'bootstrap-5',
                allowClear: true
            });

            $('body').on('focus', ".add-more-time", function () {
                $(this).mdtimepicker({});
            });

            $('body').on('focus', ".add-date-more", function () {
                $(this).datepicker({
                    format: 'mm-dd-yyyy',
                });
            });



        });



        $('body').on("click", "#addrowtimesheet", function () {


            $markup = $('#firstDivRow').html();
            $("#tableAddRow").append($markup);
            $("#tbMixSpec tbody").append($("#addTbMixSpec tbody").html())
            $('#tableAddRow .ext-water').each(function () {
                $(this).select2({
                    theme: 'bootstrap-5',
                    allowClear: true,
                    placeholder: 'select..'
                });
            });
            $('#tableAddRow .mix-design-no').each(function () {
                $(this).select2({
                    theme: 'bootstrap-5',
                    allowClear: true,
                    placeholder: 'select..'
                });
            });
            

        });

        $('body').on("click", ".remove", function () {
            // $(this).parent().parent().remove();
            $row = $(this).closest("tr").index() + 1;   
         	
            $(this).parent().parent().remove();
            $('#tbMixSpec > tbody > tr:nth-child('+$row+')').remove();
        });            
    </script>
</body>

</html>