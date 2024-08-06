<body class="fixed-nav sticky-footer" id="page-top">
   <div id="clLoad" style="display: none;">
    <div data-loader="circle-side"></div>
   </div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Attendance Commission</li>
      </ol>  
      <div class="card mb-3">
        <div class="card-header">        
          <i class="fa fa-table"></i> STAFF ATTENDANCE COMMISSION/DEDUCTION SHEET </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                    <tr>
                              <th>#</th>
                              <th>CODE</th>
                              <th>FULLNAME</th>
                              <th>LOGIN_DATE</th>
                              <th>LOGIN_TIME</th>
                              <th>AMOUNT(GH¢)</th>
                              <th>Action</th>
                              <th>Action</th>
                        </tr>
              </thead>
              <tfoot>
                     <tr>
                              <th>#</th>
                              <th>CODE</th>
                              <th>FULLNAME</th>
                              <th>LOGIN_DATE</th>
                              <th>LOGIN_TIME</th>
                              <th>AMOUNT(GH¢)</th>
                              <th>Action</th>
                               <th>Action</th>
                        </tr>
              </tfoot>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
</body>  
  



<div class="modal fade modalEditComm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Commission</h5>
            <button class="close closePop" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">                          
                   <div class="form-group">
                      <label> #Id <span style="color:red">*</span></label>
                        <input disabled id="idEdComm" class="form-control" placeholder="" type="text">
                  </div>
                  <div class="form-group">
                      <label> Staff Name <span style="color:red">*</span></label>
                        <input id="idStname" disabled class="form-control" placeholder="" type="text">
                  </div>
                  <div class="form-group">
                      <label> Login Date <span style="color:red">*</span></label>
                        <input id="idLogDate" disabled class="form-control" placeholder="" type="text">
                  </div>
                   <div class="form-group">
                      <label> Login Time <span style="color:red">*</span></label>
                        <input id="idLogTime" disabled class="form-control" placeholder="" type="text">
                  </div>
                   <div class="form-group">
                      <label> Amount <span style="color:red">*</span></label>
                        <input id="idLogAmt" class="form-control comm" placeholder="" type="number">
                  </div>                       
          </div>
          <div class="modal-footer">
            <p><a href="#" class="btn_1 medium btnSavEdComm"><i class="spinner"></i><i class="fa fa-pencil-square-o"></i> Submit </a></p>
          </div>
        </div>
      </div>
</div>



<div class="modal fade" id="modalDeduction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Deduction</h5>
            <button class="close clCloseUpdt" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
                       <div class="form-group">
                        <label> Choose Employee <span style="color:red">*</span></label>
                              <select name="idStaff" id="idStaff" class="form-control form-staff">
                                <option disabled="disabled" selected="selected">Choose Employee</option>
                                <?php
                                 $db=$data['initiator'];
                                 $result = $db->getAllData("SELECT CONCAT(SURNAME,' ',OTHERNAME) AS NAME, adt.ID, ROLE FROM admin_tb adt JOIN role_tb rt ON adt.USER_ROLE = rt.ID");
                                 
                                    foreach($result as $row)
                                          {
                                    $role = $row['ROLE'];
                                              
                                    if($row['ID'] != '2'){
                                            echo "<option value='".$row['ID']."'>". $row['NAME']." -- ".$role."</option>";
                                            }
                                        }
                                    ?>
                            </select>
                      </div>

                          <div class="form-group">
                             <label> Select Type <span style="color:red">*</span></label>
                               <select name="idType" id="idType" class="form-control form-staff">
                                <option disabled="disabled" selected="selected">Select Type</option>
                                 <option value="Debt">Debt</option>
                                 <option value="Income Tax">Income Tax</option>
                                 <option value="Staff Uniform">Staff Uniform</option>
                                 <option value="Salary Advance">Salary Advance</option>
                            </select>
                          </div>
                          
                           <div class="form-group">
                               <label> Deduction <span style="color:red">*</span></label>
                               <input id="idDeduction" class="form-control form-staff" placeholder="Enter Amount (GH¢)" type="number">
                          </div>

                          <div class="form-group">
                             <label> Choose Distribution <span style="color:red">*</span></label>
                              <select name="idDist" id="idDist" class="form-control form-staff">
                                <option disabled="disabled" selected="selected">Select Distribution</option>
                                 <option value="all">All</option>
                                 <option value="1">One time</option>
                                 <option value="2">Two times</option>
                                 <option value="3">Three times</option>
                                 <option value="4">Four times</option>
                                 <option value="5">Five times</option>
                                 <option value="6">Six times</option>
                                 <option value="7">Seven times</option>
                                 <option value="8">Eight times</option>
                                 <option value="9">Nine times</option>
                                 <option value="10">Ten times</option>
                            </select>
                          </div>
                          
          </div>
          <div class="modal-footer">
            <p><a href="#" class="btn_1 medium" id="btnDeductionRecord"><i class="spinner"></i><i class="fa fa-pencil-square-o"></i> Submit </a></p>
          </div>
        </div>
      </div>
</div>






<div class="modal fade" id="modalDeductionUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Updated Deduction</h5>
            <button class="close clCloseUpdt" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
                       <div class="form-group">
                        <label> Staff Name <span style="color:red">*</span></label>
                          <input id="idStaffDeduct" class="form-control form-staffup" placeholder="Staff Name" type="text" disabled>
                      </div>
  
                           <div class="form-group">
                              <input id="idStafftype" class="form-control form-staffup" placeholder="Enter Amount (GH¢)" type="text" disabled>
                          </div>

                            <div class="form-group">
                             <label> Enter Amount <span style="color:red">*</span></label>
                              <input id="idDedAmount" class="form-control form-staffup" placeholder="Enter Amount (GH¢)" type="number">
                          </div>

                          <div class="form-group">
                             <label> Choose Distribution <span style="color:red">*</span></label>
                              <select name="idDist" id="idDistribution" class="form-control form-staffup">
                                <option disabled="disabled" selected="selected">Select Distribution</option>
                                 <option value="all">All</option>
                                 <option value="1">One time</option>
                                 <option value="2">Two times</option>
                                 <option value="3">Three times</option>
                                 <option value="4">Four times</option>
                                 <option value="5">Five times</option>
                                 <option value="6">Six times</option>
                                 <option value="7">Seven times</option>
                                 <option value="8">Eight times</option>
                                 <option value="9">Nine times</option>
                                 <option value="10">Ten times</option>
                            </select>
                          </div>
                          
          </div>
          <div class="modal-footer">
            <p><a href="#" class="btn_1 medium" id="btnDeductionUpdate"><i class="spinner"></i><i class="fa fa-pencil-square-o"></i> Save Changes </a></p>
          </div>
        </div>
      </div>
</div>


<!-- <form action="" method="POST" id="modal-form">
<div class="container">  
<div class="modal fade" id="modalDeductionUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <div class="modal-content text-center">
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Update Staff Deduction</p>
      </div>
      <div class="modal-body">
                   
        
                            <div class="form-group row">
                            <div class="col-md-6 col-sm-6 ">
                              
                            </div>
                          </div>
                            <div class="form-group row">
                            <div class="col-md-6 col-sm-6 ">
                              <input id="idDistribution" class="form-control form-staffup" placeholder="Enter Amount (GH¢)" type="text">
                            </div>
                          </div>
                          
      </div>
        <div class="modal-footer justify-content-center">
        <a type="button" class="btn btn-outline-info waves-effect" id="btnDeductionUpdate"><i class="spinner"></i><span class="state">Update</span></a>
        <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">Cancel</a>
      </div>
    </div>
  </div>
</div>
</div>
</form> -->




<form action="" method="POST" id="modal-form">
<div class="container">  
<div class="modal fade" id="modalUpdateSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <div class="modal-content text-center">
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Message</p>
      </div>
      <div class="modal-body">
          <h5>Update successful</h5>
        </div>
      <div class="modal-footer flex-center">
        <a id = "btnUpdateContinue" class="btn btn-info" type="button" data-dismiss="modal">Continue</a>
      </div>
    </div>
  </div>
</div>
</div>
</form>



<form action="" method="POST" id="modal-form">
<div class="container">  
<div class="modal fade" id="modalConfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <div class="modal-content text-center">
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Message</p>
      </div>
      <div class="modal-body">
          <h5>Are you sure you want to delete?</h5>
      <div class="modal-footer flex-center">
        <a id = "yes" class="btn btn-danger" style="color:white" data-dismiss="modal">Yes</a>
        <a type="button"  class="btn btn-outline-info waves-effect" data-dismiss="modal">No</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
</div>
</form>




<form action="" method="POST" id="modal-form">
<div class="container">  
<div class="modal fade" id="modalDeleteSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <div class="modal-content text-center">
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Message</p>
      </div>
      <div class="modal-body">
          <h5>Record(s) Deleted successful</h5>
        </div>
      <div class="modal-footer flex-center">
        <a id = "btnDeleteContinue" class="btn btn-info" type="button" data-dismiss="modal">Continue</a>
      </div>
    </div>
  </div>
</div>
</div>
</form>


<form action="" method="POST" id="modal-form">
<div class="container">  
<div class="modal fade" id="popImageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <div class="modal-content text-center">
      <div class="modal-header d-flex justify-content-center">
        <p class="heading" id="imageHead"></p>
      </div>
      <div class="modal-body">
             <div id="idImage"></div>
        </div>
      <!--<div class="modal-footer flex-center">-->
      <!--  <a id = "btnDeleteContinue" class="btn btn-info" type="button" data-dismiss="modal">Continue</a>-->
      <!--</div>-->
    </div>
  </div>
</div>
</div>
</form>





