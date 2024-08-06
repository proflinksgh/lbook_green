  <body class="fixed-nav sticky-footer" id="page-top">
  <div class="content-wrapper">
     <input type="hidden" id="rotator" name="rotator" value="34" />
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Customers</li>
      </ol>  
      <div class="card mb-3">
        <div class="card-header">        
          <i class="fa fa-table"></i> All Customers</div>
            <div align="right" style="margin-top:1%">
           <a href="register" class="btn btn-primary medium"><i class="fa fa-user-plus"></i> New Customer</a> 
           <a href="#" class="btn btn-success medium" id="idUpdateClient"><i class="fa fa-pencil-square-o"></i> Edit</a>
           <?php
            if($_SESSION["id"]==="1"){
              ?>
              <a href="#" class="btn btn-danger medium" id="idDeleteClient"><i class="fa fa-remove"></i> Delete</a>
              <?php
            }
           ?>
           </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                    <th>Date</th>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Photo</th>
                    <th>DOB</th>
                    <th>Contact</th>
                    <th>Next of Kin</th>
                    <th>Next Kin Contact</th>
                    <th>City</th>
                    <th>Area</th>
                    <th>Work</th>
                    <th>ID Type</th>
                    <th>ID NO.</th>
                    <th>Posted by</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                  <th>Date</th>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Photo</th>
                    <th>DOB</th>
                    <th>Contact</th>
                    <th>Next of Kin</th>
                    <th>Next Kin Contact</th>
                    <th>City</th>
                    <th>Area</th>
                    <th>Work</th>
                    <th>ID Type</th>
                    <th>ID NO.</th>
                    <th>Posted by</th>
                </tr>
              </tfoot>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    <!-- /tables-->
    </div>
    <!-- /container-fluid-->
    </div>
    <!-- /container-wrapper-->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
</body>


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


  <div class="modal fade" id="modalConfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirm!</h5>
            <button class="close clClose2" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
               <h5>Are you sure you want to remove?</h5>
          </div>
          <div align="center"><h5 class="clShow" style="display:none"></h5></div>
          <div class="modal-footer">
            <a class="btn btn-danger" style="color:white" data-dismiss="modal">Close</a>
            <a class="btn btn-primary" id="yes" href="#"><i class="spinner"></i>Yes, remove</a>
          </div>
        </div>
      </div>
    </div>


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





