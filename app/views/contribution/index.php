  <style>
  
  .custom{
    margin-left: 70px;
    margin-right: 40px;
  }
  
  .icustom{
      
      width:200px;
  }
  </style>
  
  
  <form action="" method="POST" id="update_form">
    <input type="hidden" id="rotator" name="rotator" value="34" />
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <!--div class="x_panel"-->
                  <div class="x_content">
                  <!--put your page content starts here-->
                  <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>STAFF CONTRIBUTION SHEET</h2></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        
                      <button id="idNewCont" name="idNewCont" type="button" class="btn btn-primary" > <i class="fa fa fa-plus"></i> <span style="color:white">Add contribution</span> </button>
                      <input type="button" id="idUpdateCont" class="btn btn-info" value="Update"/>
                      <button type="button" id="idDeleteCont" class="btn btn-danger"/><i class="fa fa-remove"></i><span style="color:white">Delete</span> </button> 
                        
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                               <div class="loader_container_sector" style="display: none;">
                                  <span class="fa fa-spin fa-spinner" id="spinner"></span>
                              </div>
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                              <th>ID</th>
                              <th>EMPLOYEE</th>
                              <th>SSNIT EMPLOYEE</th>
                              <th>SSNIT EMPLOYER</th>
                              <th>WELFARE</th>
                              <th>BONUS</th>
                              <th>DEDUCTION</th>
                              <th>DATE CREATED</th>
                              <th>DATE MODIFIED</th>
                        </tr>   
                      </thead>
                      <tbody>    
                     </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>
                <!--your inserted page ends here-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>

 <!--ADD CONTRIBUTION MODAL-->

<form action="" method="POST" id="modal-form">
<div class="container">  
<div class="modal fade" id="modalAddContribution" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Add contribution</p>
      </div>

      <!--Body-->
      <div class="modal-body custom">

                    <div class="form-group row">
                        <label class="col-md-2"> Select  </label>
                         <div class="col-md-6 col-sm-6 ">
                            
                             <select name="idStaffCont" id="idStaffCont" class="form-control form-contr icustom">
                                <option disabled="disabled" selected="selected"> Employee</option>
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
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2"> Employee  </label>
                            <div class="col-md-6 col-sm-6 ">
                            <input id="idSsnitEmployee" class="form-control form-contr icustom" placeholder="Employee SSNIT" type="text">
                            </div>
                          </div>
                          <div class="form-group row">
                                 <label class="col-md-2"> Employer  </label>
                            <div class="col-md-6 col-sm-6 ">
                            <input id="idSsnitEmployer" class="form-control form-contr icustom" placeholder="Employer SSNIT" type="text">
                            </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-md-2"> Welfare  </label>
                            <div class="col-md-6 col-sm-6 ">
                            <input id="idWelfCont" class="form-control form-contr icustom" placeholder="Enter welfare" type="number">
                            </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-md-2"> Bonus  </label>
                            <div class="col-md-6 col-sm-6 ">
                            <input id="idBonusCont" class="form-control form-contr icustom" placeholder="Enter contribution" type="number">
                            </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-md-2"> Deduction  </label>
                            <div class="col-md-6 col-sm-6 ">
                            <input id="idDedCont" class="form-control form-contr icustom" placeholder="Employee Deduction" type="number" disabled>
                            </div>
                          </div>
                          
      </div>
        <div class="modal-footer justify-content-center">
        <a type="button" class="btn btn-outline-info waves-effect" id="btnContributionRecord"><i class="spinner"></i><span class="state">Create</span></a>
        <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">Cancel</a>
      </div>
    </div>
  </div>
</div>
</div>
</form>

<!--UPDATE CONTRIBUTION MODAL-->

<form action="" method="POST" id="modal-form">
<div class="container">  
<div class="modal fade" id="modaluptContribution" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Update contribution</p>
      </div>

      <!--Body-->
      <div class="modal-body custom">

                         <div class="form-group row">
                             <label class="col-md-2">Name</label>
                            <div class="col-md-6 col-sm-6 ">
                            <input id="idContClient" class="form-control form-staff icustom" placeholder="SSNIT contributor" type="text">
                            </div>
                          </div>
                          
                            <div class="form-group row">
                                <label class="col-md-2">Employee</label>
                            <div class="col-md-6 col-sm-6 ">
                            <input id="iduptSsnitEmployee" class="form-control form-staff icustom" placeholder="SSNIT" type="text">
                            </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-md-2">Employer</label>
                            <div class="col-md-6 col-sm-6 ">
                            <input id="iduptSsnitEmployer" class="form-control form-staff icustom" placeholder="SSNIT" type="text">
                            </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-md-2">Welfare</label>
                            <div class="col-md-6 col-sm-6 ">
                            <input id="iduptWelfCont" class="form-control form-staff icustom" placeholder="Enter Welfare" type="number">
                            </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-md-2">Welfare</label>
                            <div class="col-md-6 col-sm-6 ">
                            <input id="iduptBonusCont" class="form-control form-staff icustom" placeholder="Enter bonus" type="number">
                            </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-md-2">Deduction</label>
                            <div class="col-md-6 col-sm-6 ">
                            <input id="iduptDedCont" class="form-control form-staff icustom" placeholder="Employee Deduction" type="number" disabled>
                            </div>
                          </div>
                          
                          
                      
                        
                          
                          
      </div>
        <div class="modal-footer justify-content-center">
        <a type="button" class="btn btn-outline-info waves-effect" id="btnuptDeductionRecord"><i class="spinner"></i><span class="state">Update</span></a>
        <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">Cancel</a>
      </div>
    </div>
  </div>
</div>
</div>
</form>


<form action="" method="POST" id="modal-form">
<div class="container">  
<div class="modal fade" id="modalUpdateClient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Update client</p>
      </div>

      <!--Body-->
      <div class="modal-body">
            <div id="idImage2" style="margin-bottom:10px"></div>
            
             <div>
                   <input type="file" name="file" id="file">
                 <a id = "uploadfile" class="btn btn-info" style="background:green;color:white;margin-bottom:20px" type="button"> <i class="spinner"></i><span class="state"></span></a></div>
             
             
                         <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idClientName" class="form-control form" type="text" placeholder= "Client name" name="client" required="required">
                            </div>
                          </div>


                             <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idClientDob" class="form-control form" type="text" placeholder= "Date of birth" name="idClientDob" required="required">
                            </div>
                          </div>
                          
                             <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idClientContact" class="form-control form" type="phone" placeholder= "Contact" name="idClientContact" required="required">
                            </div>
                          </div>
                          
                          
                          
                         <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idNextofKin" class="form-control form" type="text" placeholder= "Next of kin" name="idNextofKin">
                            </div>
                          </div>
                          
                            <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idNextofKinContact" class="form-control form" type="phone" placeholder= "Next of kin contact" name="idNextofKinContact">
                            </div>
                          </div>
                          
                            <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idCity" class="form-control form" type="text" placeholder= "City" name="idCity" required="required">
                            </div>
                          </div>
                          
                            <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idArea" class="form-control form" type="text" placeholder= "Area" name="idArea" required="required">
                            </div>
                          </div>
                          
                            <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idOccupation" class="form-control form" type="text" placeholder= "Occupation" name="idOccupation" required="required">
                            </div>
                          </div>

      </div>
      <div class="modal-footer flex-center">
        <a id = "idPostClientUpdate" class="btn btn-success" type="button"> <i class="spinner"></i><span class="state">Update</span></a>
      </div>
    </div>
  </div>
</div>
</div>
</form>
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
    <!--/Content-->
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





