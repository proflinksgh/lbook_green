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
                    <h2>LOANS</h2>
                    <ul class="nav navbar-right panel_toolbox">
                       <input type="button" id="newLoan" class="btn btn-lg btn-success" value="Create" />
                       <input type="submit" id="validateLoanInfo" class="btn btn-lg btn-info" value="Update" />
                      <input type="submit" id="deleteLoanInfo" class="btn btn-lg btn-danger" value="Delete" />         
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                <div <p id="potential" class="label" style="color:black; font-size: 20px; margin-top: 10px; color: green;"></p></div>
                  <div class="x_content">
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
                              <th>NAME</th>
                              
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

<!-- MODAL TABBED TEST-->




<!-- END OF TEST -->




<form action="" method="POST" id="modal-form">
<div class="container">  
<div class="modal fade" id="modalNewProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">New savings product</p>
      </div>

      <!--Body-->
      <div class="modal-body">

                 
                         <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idProductName" class="form-control col" type="text" placeholder= "Name" name="name" required="required">
                            </div>
                          </div>


                             <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idProductCode" class="form-control col" type="number" placeholder= "Code" name="code" required="required">
                            </div>
                          </div>
      </div>
      <div class="modal-footer flex-center">
        <a id = "btnPostProduct" class="btn btn-success">Create</a>
      </div>
    </div>
  </div>
</div>
</div>
</form>


<form action="" method="POST" id="modal-form">
<div class="container">  
<div class="modal fade" id="popProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <div class="modal-content text-center">
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Success</p>
      </div>
      <div class="modal-body">
      <p><h5>Product added successfully</h5></p>
        <a id = "idAnotherProduct" class="btn btn-primary" style="color: white; background:green" data-dismiss="modal">Add another</a>
        <a id = "idHome" class="btn btn-primary" style="color: white; background:orange" data-dismiss="modal">Go Home</a>
      </div>   
    </div>
  </div>
</div>
</div>
</form>