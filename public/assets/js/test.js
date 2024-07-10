$(document).ready(function(){
    $("#p_name").change(function () {
        var dept_id = $("#p_name option:selected").val();
    
        $("#p_number option[value=" + dept_id + "]").prop("selected", true);
        $("#client_id option[value=" + dept_id + "]").prop("selected", true);
    });
    
    $("#p_number").change(function () {
        var dept_id = $("#p_number option:selected").val();
    
        $("#p_name option[value=" + dept_id + "]").prop("selected", true);
        $("#client_id option[value=" + dept_id + "]").prop("selected", true);
    });

    var i = `<div class="card soil-card"><div class="float-end col-md-12 removesoildiv"><i class="float-end bi bi-x me-2 mt-2 removesoil"></i></div><div class="card-body soil-card-body"><div class="row soil-row-1"><div class=col-md-4><label>Proctor Number <sup class="req-class text-danger"><b>*</b></sup></label> <input class=form-control name=""required></div><div class=col-md-4><label>Soil Type <sup class="req-class text-danger"><b>*</b></sup></label> <input class=form-control name=""required></div><div class=col-md-4><label>USCS Classification <sup class="req-class text-danger"><b>*</b></sup></label> <input class=form-control name=""required></div><div class=col-md-4><label>Corrected Proctor(pcf) <sup class="req-class text-danger"><b>*</b></sup></label> <input class=form-control name=""required step=any type=number></div><div class=col-md-4><label>Corrected Optimum Moisture Content (%) <sup class="req-class text-danger"><b>*</b></sup></label> <input class=form-control name=""required step=any type=number></div><div class=col-md-4><label>Retained #4(%)</label> <input class=form-control name=""required step=any type=number></div></div></div></div>`;
    $("#addsoil").click(function () {
        $(".soil-row").append(i);
    });
    
    $("#soil").on("click", ".removesoil", function () {
        $(this).parent().parent().remove();
    });
    
    
    
    let j = `<div class="card-body cylinder-card" ><div class="card cylinder-detail text-start"><div class="card-header cylinder-close text-danger"><i class="bi bi-x me-2 mt-2 float-end removeconcrete"></i>    </div><div class="card-body"><div class="row"><div class="col-md-3"><label>Curing Type <sup class="text-danger req-class"><b>*</b></sup></label>                           <select name="con_curing_type[0][]" class="form-control select2 conCuringType select2-hidden-accessible" placeholder="select" data-select2-id="5" tabindex="-1" aria-hidden="true"><option data-select2-id="7"></option><option value="1" data-select2-id="1276">Lab</option><option value="2" data-select2-id="1277">Field</option></select></div>    <div class="col-md-3"><label>Cylinders/Cubes <sup class="text-danger req-class"><b>*</b></sup></label><input type="text" step="any" name="con_cylinder_type[0][]" class="form-control conCylinderType"></div>  <div class="col-md-3"><label>Break Schedules <sup class="text-danger req-class"><b>*</b></sup></label><input type="number" step="any" name="con_break_days[0][]" class="form-control conCylinderBreakSche"></div>    <div class="col-md-3"><label>Number of Cylinder <sup class="text-danger req-class"><b>*</b></sup></label><input type="number" step="any" name="con_cylinder_qnty[0][]" class="form-control conCylinderQnty"></div>  </div></div></div></div>`;
    let k = `<div class="card concrete-card"><div class="text-danger col-md-12 float-end"><i class="float-end bi bi-x me-2 mt-2 removeconcretediv"></i></div><div class="card-body concrete-card-body text-end"><div class="row concrete-row-1"><div class=col-md-3><label>Mix Design No. <sup class="text-danger req-class"><b>*</b></sup></label> <input type=hidden value=0> <input class=form-control name=""required></div><div class=col-md-3><label>Mix Description <sup class="text-danger req-class"><b>*</b></sup></label> <input class=form-control name=""required></div><div class=col-md-3><label>Slump (in.) <sup class="text-danger req-class"><b>*</b></sup></label><div class=input-group><input class=form-control name=""step=any type=number placeholder=min required> <input class=form-control name=""step=any type=number placeholder=max required></div></div><div class=col-md-3><label>Air Content (%) <sup class="text-danger req-class"><b>*</b></sup></label><div class=input-group><input class=form-control name=""step=any type=number placeholder=min required> <input class=form-control name=""step=any type=number placeholder=max required></div></div><div class=col-md-3><label>Unit Weight (pcf) <sup class="text-danger req-class"><b>*</b></sup></label><div class=input-group><input class=form-control name=""step=any type=number placeholder=min required> <input class=form-control name=""step=any type=number placeholder=max></div></div><div class=col-md-3><label>Mix Temperature °F <sup class="text-danger req-class"><b>*</b></sup></label><div class=input-group><input class=form-control name=""step=any type=number placeholder=min required> <input class=form-control name=""step=any type=number placeholder=max required></div></div><div class=col-md-3><label>Compresive Strength (psi) <sup class="text-danger req-class"><b>*</b></sup></label> <input class=form-control name=""step=any type=number required></div><div class=col-md-3><label>Flow Slump (in.)</label><div class=input-group><input class=form-control name=""step=any type=number placeholder=min> <input class=form-control name=""step=any type=number placeholder=max></div></div><div class="card text-start mt-2"><div class="text-start card-header cylinder-card-header">Cylinder</div><div class="card-body cylinder-card"><div class="card text-start cylinder-detail"><div class="text-danger card-header cylinder-close"><i class="float-end bi bi-x me-2 mt-2 removeconcrete"></i></div><div class=card-body><div class=row><div class=col-md-3><label>Curing Type <sup class="text-danger req-class"><b>*</b></sup></label> <select aria-hidden=true class=form-control name=""placeholder=select required tabindex=-1><option value="">Lab<option value="">Field</select></div><div class=col-md-3><label>Cylinders/Cubes <sup class="text-danger req-class"><b>*</b></sup></label> <input class=form-control name=""step=any required></div><div class=col-md-3><label>Break Schedules <sup class="text-danger req-class"><b>*</b></sup></label> <input class=form-control name=""step=any type=number required></div><div class=col-md-3><label>Number of Cylinder <sup class="text-danger req-class"><b>*</b></sup></label> <input class=form-control name=""step=any type=number></div></div></div></div></div><div class="card-footer text-body-secondary"><button class="btn btn-primary btnAddCyliner">Add Cylinder</button></div></div></div></div></div>`;

    $(document).on("click", ".btnAddCyliner", function () {
        $(j).insertBefore(
            $(this).parent().parent().children(".card-footer")
        );
    });
    
    $(document).on("click", ".removeconcretediv", function () {
        $(this).parent().parent().remove();
    });
    $("#addconcrete").click(function () {
        $(".concrete-row").append(k);
    });
    $(document).on("click", ".removeconcrete", function () {
        $(this).parent().parent().remove();
    });
    
    
    let m = `<div class="asphalt-card card col-lg-12 p-2 pb-4"><div class="card-header text-end"><i class="text-danger bi bi-x float-end me-2 mt-2 removeasphalt"></i></div><div class=card-body><div class=row><div class=col-md-4><label>Mix Design <sup class="text-danger req-class"><b>*</b></sup></label> <input class=form-control name=""required></div><div class=col-md-4><label>Marshal Value <sup class="text-danger req-class"><b>*</b></sup></label> <input class=form-control name=""required></div><div class=col-md-4><label>A. Void (%) <sup class="text-danger req-class"><b>*</b></sup></label> <input class=form-control name=""required step=any type=number></div><div class=col-md-4><label>Asphalt Description <sup class="text-danger req-class"><b>*</b></sup></label> <input class=form-control name=""required></div><div class=col-md-4><label>Specific Gravity</label> <input class=form-control name=""></div></div></div></div>`;
    $(".addAsphalt").click(function(){
        $(".asphalt-row").append(m);
    });
    $(document).on("click", ".removeasphalt", function () {
        $(this).parent().parent().remove();
    });

    let n = `<div class="card col-lg-12 p-2 pb-4 permit-card"><div class="card-header text-end"><i class="text-danger bi bi-x float-end me-2 mt-2 removepermit"></i></div><div class=card-body><div class=row><div class=col-md-4><label>Permit Number <sup class="text-danger req-class"><b>*</b></sup></label> <input class=form-control name=""required></div><div class=col-md-4><label>Permit File <sup class="text-danger req-class"><b>*</b></sup></label> <input class=form-control name=""required accept=application/pdf type=file></div></div></div></div>`;
    $(".addpermit").click(function(){
        $(".permit-row").append(n);
    });
    $(document).on("click", ".removepermit", function () {
        $(this).parent().parent().remove();
    });
});


