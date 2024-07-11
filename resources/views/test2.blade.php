

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
    <!-- <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script> -->
    <script>
    </script>
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
<div class="card mt-4 mb-4">
    <div class="card-header">
      <h5 class="card-title">Construction Material Testing Work Order</h5>
    </div>
    <div class="card-body pl-3 pr-3 pt-2 pb-3">
      <form method="post" action="" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-4 form-group">
            <div class="form-inline">
            <label class="label-custom">
                Work Order:
                <span class="text-danger req-star">*
                </span>
            </label>
            <input class="form-control datepicker" type="text" name="dispatch_date" value="07-11-2024">
            </div>
        </div>
        <div class="col-sm-3">
          <p class="card-text">Copy Work Order from Previous Date:</p>
          <select class="form-select">
            <option value="">Select Copy Work Order from Previous Date</option>
          </select>
        </div>
        <div class="col-sm-6">
          ... </div>
      </div>
      <div class="row">
        <div style="overflow-x:scroll; overflow-y: hidden;" class="col-sm-12">
          <table class="table text-nowrap table-responsive table-bordered">
            <thead class="thead-light">
              <tr>
                <th>Action</th>
                <th>Project Name <span class="text-danger req-star">*</span></th>
                <th>Project Number <span class="text-danger req-star">*</span></th>
                <th>Street</th>
                <th>City</th>
                <th>State</th>
                <th>Project Manager</th>
                <th>Technician/Inspector <span class="text-danger req-star">*</span></th>
                <th>Date For Service</th>
                <th>Starting Time At Site</th>
                <th>Estimate Hours On Site</th>
                <th>Tasks <span class="text-danger req-star">*</span></th>
                <th>Nuclear Gauge</th>
                <th>Equipment Needed</th>
                <th>Special Inspection <span class="text-danger req-star">*</span></th>
                <th>Notes <span class="text-danger req-star">*</span></th>
              </tr>
            </thead>
            <tbody>
              <tr class = input-rows>
                <td class="text-center">
                  <i class="bi bi-x h2 text-danger remove"></i>  
                </td>
                <td class="td-project-name" >
                  <select class="form-select" placeholder="Choose">
                    <option value="1">It works</option>
                    <option value="2">Does it?</option>
                  </select>
                </td>
                <td >
                  <select class="form-select" placeholder="Choose">
                    <option value="1">It works</option>
                    <option value="2">Does it?</option>
                  </select>
                </td>
                <td><input class="form-control" name="" readonly></td>
                <td><input class="form-control" name="" readonly></td>
                <td><input class="form-control" name="" readonly></td>
                <td><input class="form-control" name="" readonly></td>
                <td >
                  <select class="form-select" placeholder="Choose">
                    <option value="1">It works</option>
                    <option value="2">Does it?</option>
                  </select>
                </td>
                <td><input type="text" name="" class="form-control datepicker"></td>
                <td >
                  <div class="input-group" >
                    <input type="number" name="" class="form-control start-time-site-hour" placeholder="Hour" min="1" max="12">
                    <input type="number" name="" class="form-control  start-time-site-min" placeholder="Min" min="0" max="59">
                    <select name="" class="form-control start-time-site-meridian">
                      <option value="AM">AM</option>
                      <option value="PM">PM</option>
                    </select>
                  </div>
                </td>
                <td >
                  <div class="input-group" >
                    <input type="number" name="" class="form-control start-time-site-hour" placeholder="Hour" min="1" max="12">
                    <input type="number" name="" class="form-control  start-time-site-min" placeholder="Min" min="0" max="59">
                  </div>
                </td>
                <td class="" >
                  <select class="form-select" placeholder="Choose">
                    <option value="1">It works</option>
                    <option value="2">Does it?</option>
                  </select>
                </td>
                <td class="td-project-name" >
                  <select class="form-select" placeholder="Choose">
                    <option value="1">It works</option>
                    <option value="2">Does it?</option>
                  </select>
                </td>
                <td class="td-project-name" >
                  <select class="form-select" placeholder="Choose">
                    <option value="1">It works</option>
                    <option value="2">Does it?</option>
                  </select>
                </td>
                <td class="td-project-name" >
                  <select class="form-select" placeholder="Choose">
                    <option value="1">It works</option>
                    <option value="2">Does it?</option>
                  </select>
                </td>
                <td>
                  <input class="form-control" type="text" name="">
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="mt-3 col-12">
          <button type="button" class="btn btn-primary addRow">Add Row</button>
        </div>
        <div class="mt-3 col-12">
            <button type="button" class="btn btn-secondary">Save</button>
            <button type="button" class="btn btn-secondary">Back</button>
        </div>
      </div>
      </form>
    </div>
  </div>


  <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
    <script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('assets/vendor/quill/quill.js')}}"></script>
    <script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script>
        // $(document).on("click", ".removepermit", function () {
        $(document).ready(function(){
          var rowToInsert = `<tr class = input-rows>
                <td class="text-center">
                  <i class="bi bi-x h2 text-danger remove"></i>  
                </td>
                <td class="td-project-name" >
                  <select class="form-select" placeholder="Choose">
                    <option value="1">It works</option>
                    <option value="2">Does it?</option>
                  </select>
                </td>
                <td >
                  <select class="form-select" placeholder="Choose">
                    <option value="1">It works</option>
                    <option value="2">Does it?</option>
                  </select>
                </td>
                <td><input class="form-control" name="" readonly></td>
                <td><input class="form-control" name="" readonly></td>
                <td><input class="form-control" name="" readonly></td>
                <td><input class="form-control" name="" readonly></td>
                <td >
                  <select class="form-select" placeholder="Choose">
                    <option value="1">It works</option>
                    <option value="2">Does it?</option>
                  </select>
                </td>
                <td><input type="text" name="" class="form-control datepicker"></td>
                <td >
                  <div class="input-group" >
                    <input type="number" name="" class="form-control start-time-site-hour" placeholder="Hour" min="1" max="12">
                    <input type="number" name="" class="form-control  start-time-site-min" placeholder="Min" min="0" max="59">
                    <select name="" class="form-control start-time-site-meridian">
                      <option value="AM">AM</option>
                      <option value="PM">PM</option>
                    </select>
                  </div>
                </td>
                <td >
                  <div class="input-group" >
                    <input type="number" name="" class="form-control start-time-site-hour" placeholder="Hour" min="1" max="12">
                    <input type="number" name="" class="form-control  start-time-site-min" placeholder="Min" min="0" max="59">
                  </div>
                </td>
                <td class="" >
                  <select class="form-select" placeholder="Choose">
                    <option value="1">It works</option>
                    <option value="2">Does it?</option>
                  </select>
                </td>
                <td class="td-project-name" >
                  <select class="form-select" placeholder="Choose">
                    <option value="1">It works</option>
                    <option value="2">Does it?</option>
                  </select>
                </td>
                <td class="td-project-name" >
                  <select class="form-select" placeholder="Choose">
                    <option value="1">It works</option>
                    <option value="2">Does it?</option>
                  </select>
                </td>
                <td class="td-project-name" >
                  <select class="form-select" placeholder="Choose">
                    <option value="1">It works</option>
                    <option value="2">Does it?</option>
                  </select>
                </td>
                <td>
                  <input class="form-control" type="text" name="">
                </td>
              </tr>`;
              $(".addRow").click(function(){
                $("tbody").append(rowToInsert);
              });
              $(document).on("click", ".remove", function () {
                $(this).parent().parent().remove();
              });
        });
          
          // $(this).parent().parent().remove();
        
    </script>
    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    
    
</body>
</html>
