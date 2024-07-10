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

    <!-- Template Main CSS File -->
    <!-- <link href="{{asset('assets/css/style.css')}}" rel="stylesheet"> -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- =======================================================
    * Template Name: NiceAdmin
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Updated: Apr 20 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Construction Matrerial Portal for Project Manager
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col">
                        <label class="form-label">Project Name <sup class="text-danger"><b>*</b></sup> </label>
                        <select class="form-select" id="p_name" aria-label="Default select example" required>
                            <option selected>Select Project Name</option>
                            <option value="503" data-select2-id="8">(Peachtree Mechanical Inc.)FAA Warrenton (Concrete Break Testing)</option>
                            <option value="460" data-select2-id="9">1 North King St Leesburg - kmprowessinc.com</option>
                            <option value="545" data-select2-id="10">100 K ST SE - Zack Randles</option>
                            <option value="247" data-select2-id="11">1004 Dogue Hill Lane-Griffin Moran Fine Homes</option>
                            <option value="592" data-select2-id="12">10042 DARNESTOWN RDROCKVILLE, MD 20850</option>
                            <option value="276" data-select2-id="13">1016 Bladensburg Rd, NE - Impact Remodeling</option>
                            <option value="322" data-select2-id="639">You are off</option>
                        </select>
                    </div>
                    <div class="col">
                        <label class="form-label">Project Number <sup class="text-danger"><b>*</b></sup> </label>
                        <select class="form-select" id="p_number" aria-label="Default select example" required>
                            <option selected>Select Project Number</option>
                            <option value="503" data-select2-id="642">22360</option>
                            <option value="460" data-select2-id="643">22194</option>
                            <option value="545" data-select2-id="644">22451</option>
                            <option value="247" data-select2-id="645">20257</option>
                            <option value="592" data-select2-id="646">23057</option>
                            <option value="276" data-select2-id="647">20389</option>
                            <option value="322" data-select2-id="1273">21046</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Client <sup class="text-danger"><b>*</b></sup></label>
                        <select class="form-select" id="client_id" aria-label="Default select example" disabled required>
                            <option selected></option>
                            <option value="503" data-select2-id="642">Ram</option>
                            <option value="460" data-select2-id="643">Shyam</option>
                            <option value="545" data-select2-id="644">Seeta</option>
                            <option value="247" data-select2-id="645">Geeta</option>
                            <option value="592" data-select2-id="646">Ganesh</option>
                            <option value="276" data-select2-id="647">Ramesh</option>
                            <option value="322" data-select2-id="1273">Kishan</option>
                        </select>
                    </div>
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="soil-tab" data-bs-toggle="tab" data-bs-target="#soil" type="button" role="tab" aria-controls="soil" aria-selected="true">Soils</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="concrete-tab" data-bs-toggle="tab" data-bs-target="#concrete" type="button" role="tab" aria-controls="concrete" aria-selected="false">Concrete</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="asphalt-tab" data-bs-toggle="tab" data-bs-target="#asphalt" type="button" role="tab" aria-controls="asphalt" aria-selected="false">Asphalt</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="permit-tab" data-bs-toggle="tab" data-bs-target="#permit_number" type="button" role="tab" aria-controls="permit-tab-pane" aria-selected="false">Permit Number</button>
                    </li>
                </ul>
                
                <div class="tab-content mt-1" id="myTabContent">
                        
                    <div class="tab-pane fade show active text-end" id="soil" role="tabpanel" aria-labelledby="soil-tab" tabindex="0">
                        <div class="row text-start soil-row">
                            <div class="card soil-card">
                                <div class="card-body soil-card-body">
                                    
                                    <div class="row soil-row-1">
                                        
                                        <div class="col-md-4">
                                            <label>Proctor Number <sup class="text-danger req-class"><b>*</b></sup></label>
                                            <input type="text" name="" class="form-control" required> </div>
                                        <div class="col-md-4">
                                            <label>Soil Type <sup class="text-danger req-class"><b>*</b></sup></label>
                                            <input type="text" name="" class="form-control" required> </div>
                                        <div class="col-md-4">
                                            <label>USCS Classification <sup class="text-danger req-class"><b>*</b></sup></label>
                                            <input type="text" name="" class="form-control" required> </div>
                                        <div class="col-md-4">
                                            <label>Corrected Proctor(pcf) <sup class="text-danger req-class"><b>*</b></sup></label>
                                            <input type="number" step="any" name="" class="form-control" required> </div>
                                        <div class="col-md-4">
                                            <label>Corrected Optimum Moisture Content (%) <sup class="text-danger req-class"><b>*</b></sup></label>
                                            <input type="number" step="any" name="" class="form-control" required> 
                                        </div>
                                        <div class="col-md-4">
                                            <label>Retained #4(%) </label>
                                            <input type="number" step="any" name="" class="form-control" required>
                                        </div>
                                        
                                    </div>
                                    

                                </div>
                                    
                            </div>
                           
                        </div>
                        <div class="col-12 addbtn my-3">
                            <button class="btn btn-primary  addsoil" id="addsoil">Add Row</button>
                        </div>
                    </div>
                    <div class="tab-pane fade text-end" id="concrete" role="tabpanel" aria-labelledby="concrete-tab" tabindex="0">
                        <div class="row concrete-row">
                            <div class="card concrete-card">
                                
                                <div class="card-body text-end concrete-card-body">      
                                    <div class="row concrete-row-1">
                                        <div class="col-md-3">
                                            <label>Mix Design No. <sup class="text-danger req-class"><b>*</b></sup></label>
                                            <input type="hidden" class="" value="0">
                                            <input type="text" name="" class="form-control" required>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Mix Description <sup class="text-danger req-class"><b>*</b></sup></label>
                                            <input type="text" name="" class="form-control" required>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Slump (in.) <sup class="text-danger req-class"><b>*</b></sup></label>                            
                                            <div class="input-group">
                                                <input type="number" step="any" name="" class="form-control" placeholder="min" required>
                                                <input type="number" step="any" name="" class="form-control" placeholder="max" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">                           
                                            <label>Air Content (%) <sup class="text-danger req-class"><b>*</b></sup></label>
                                            <div class="input-group">
                                                    <input type="number" step="any" name="" class="form-control" placeholder="min" required>
                                                    <input type="number" step="any" name="" class="form-control" placeholder="max" required>
                                            </div>            
                                        </div>
                                        <div class="col-md-3">
                                            <label>Unit Weight (pcf) <sup class="text-danger req-class"><b>*</b></sup></label>                            
                                            <div class="input-group">
                                                <input type="number" step="any" name="" class="form-control" placeholder="min" required>
                                                <input type="number" step="any" name="" class="form-control" placeholder="max">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Mix Temperature °F <sup class="text-danger req-class"><b>*</b></sup></label>                            
                                            <div class="input-group">
                                                <input type="number" step="any" name="" class="form-control" placeholder="min" required>
                                                <input type="number" step="any" name="" class="form-control" placeholder="max" required>
                                            </div>
                                        </div> 
                                        <div class="col-md-3">
                                            <label>Compresive Strength (psi) <sup class="text-danger req-class"><b>*</b></sup></label>
                                            <input type="number" step="any" name="" class="form-control" required>
                                        </div>    
                                        <div class="col-md-3">
                                            <label>Flow Slump (in.)</label>                            
                                            <div class="input-group">
                                                <input type="number" step="any" name="" class="form-control" placeholder="min">
                                                <input type="number" step="any" name="" class="form-control" placeholder="max">
                                            </div>
                                        </div>
                                        <div class="card mt-2 text-start">
                                            <div class="card-header cylinder-card-header text-start">
                                                Cylinder
                                            </div>
                                            <div class="card-body cylinder-card" >
                                                <div class="card cylinder-detail text-start">
                                                    <div class="card-header cylinder-close text-danger">
                                                        <i class="bi bi-x me-2 mt-2 float-end removeconcrete"></i>    
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">                                                        
                                                            <div class="col-md-3">
                                                                <label>Curing Type <sup class="text-danger req-class"><b>*</b></sup></label>                           
                                                                <select name="" class="form-control" placeholder="select"  aria-hidden="true" tabindex="-1" required>
                                                                    <option value="" >Lab</option>
                                                                    <option value="">Field</option>
                                                                </select>
                                                            </div>    
                                                            <div class="col-md-3">
                                                                <label>Cylinders/Cubes <sup class="text-danger req-class"><b>*</b></sup></label>
                                                                <input type="text" step="any" name="" class="form-control" required>                                                                    
                                                            </div>  
                                                            <div class="col-md-3">
                                                                <label>Break Schedules <sup class="text-danger req-class"><b>*</b></sup></label>
                                                                <input type="number" step="any" name="" class="form-control" required>
                                                            </div>    
                                                            <div class="col-md-3">
                                                                <label>Number of Cylinder <sup class="text-danger req-class"><b>*</b></sup></label>
                                                                <input type="number" step="any" name="" class="form-control">
                                                            </div>  
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="card-footer text-body-secondary">
                                                <button class="btn btn-primary btnAddCyliner">Add Cylinder</button>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-12 addbtn my-3">
                            <button class="btn btn-primary  addconcrete" id="addconcrete">Add Row</button>
                        </div>
                    </div>
                    <div class="container-fluid tab-pane fade border" id="asphalt" role="tabpanel" aria-labelledby="asphalt-tab" aria-expanded="false">
                        <div class="row asphalt-row">

                            <div class="card asphalt-card col-lg-12 p-2 pb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Mix Design  <sup class="text-danger req-class"><b>*</b></sup></label>
                                            <input type="text" name="" class="form-control" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Marshal Value <sup class="text-danger req-class"><b>*</b></sup></label>
                                            <input type="text" name="" class="form-control" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>A. Void (%) <sup class="text-danger req-class"><b>*</b></sup></label>
                                            <input type="number" name="" class="form-control" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Asphalt Description <sup class="text-danger req-class"><b>*</b></sup></label>
                                            <input type="text" name="" class="form-control" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Specific Gravity</label>
                                            <input type="text" name="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12  my-3">
                            <button class="btn btn-primary  addAsphalt">Add Row</button>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="permit_number" role="tabpanel" aria-labelledby="permit-tab" tabindex="0">
                        <div class="row permit-row">
                            <div class="card permit-card col-lg-12 p-2 pb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Permit Number <sup class="text-danger req-class"><b>*</b></sup></label>
                                            <input type="text" name="" class="form-control" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Permit File <sup class="text-danger req-class"><b>*</b></sup></label>
                                            <input type="file" name="" class="form-control" accept="application/pdf" required> 
                                        </div>   

                                    </div>
                                </div>
                            </div>
                                         
                        </div>
                        <div class="col-12 text-start my-3">
                            <button class="btn btn-primary addpermit" id="addpermit">Add Row</button>
                        </div>
                    </div>
                <div class="col-12">
                    <input class="btn  mx-4 my-3 btn-primary btncus" id="submit" type="submit" name="submit" value="Save"><i><label style="color:#9E9E9E;">( Fill All Required Fields In The Tab Menu Then Click ) <sup class="text-danger req-class"><b>*</b></sup></label></i>
                </div>
            </div>
        </div>
    </div>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
    <script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('assets/vendor/quill/quill.js')}}"></script>
    <script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script>
        
    </script>
    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/test.js')}}"></script>
</body>
</html>
