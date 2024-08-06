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
                    <h2>SAVINGS ACCOUNT</h2></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                <div> <p id="potential" class="label" style="color:black; font-size: 20px; margin-top: 10px; color: green;"></p></div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                              <th>ID</th>
                              <th>ACCOUNT NUMBER</th>
                              <th>CLIENT</th>
                              <th>PRODUCT</th>
                              <th>DESCRIPTION</th>
                              <th>DEPOSITS</th>
                              <th>WITHDRAWALS</th>
                              <th>FEES</th>
                              <th>BALANCE</th>
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



<form action="" method="POST" id="modal-form">
<div class="container">  
<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">New client</p>
      </div>

      <!--Body-->
      <div class="modal-body">

                 
                         <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="client" class="form-control col" type="text" placeholder= "Client name" name="client" required="required">
                            </div>
                          </div>


                             <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="contact" class="form-control col" type="phone" placeholder= "Phone number" name="phone" required="required">
                            </div>
                          </div>
                          
                          
                         <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="project" class="form-control col" type="text" placeholder= "Enter project" name="project" required="required">
                            </div>
                          </div>
                          
                          
                        <div class="form-group row">
                         <div class="col-md-6 col-sm-6 ">
                           <input type="date" id="date" id="name" required="" class="form-control" placeholder="Choose estimated date">
                        </div>
                     </div>

      </div>
      <div class="modal-footer flex-center">
        <a id = "recordClient" class="btn btn-info">Record</a>
      </div>
    </div>
  </div>
</div>
</div>
</form>



<form action="" method="POST" id="modal-form">
<div class="container">  
<div class="modal fade" id="modalValidate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Validate client</p>
      </div>

      <!--Body-->
      <div class="modal-body">

                 
                         <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="requestId" class="form-control col" type="text" placeholder= "Enter Request ID" name="client" required="required">
                            </div>
                          </div>
      </div>
      <div class="modal-footer flex-center">
          
           <button type="submit" id="validClient" class="btn btn-info" value="validate">validate</button>
          
        <!--<input type="submit" id = "validClient" class="btn btn-info" value="Validate">-->
      </div>
    </div>
  </div>
</div>
</div>
</form>




<form action="" method="POST" id="modal-form">
<div class="container">  
<div class="modal fade" id="popClient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    Content
    <div class="modal-content text-center">
      Header
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Success</p>
      </div>

      Body
      <div class="modal-body">

    <p id="clientInfo" class="label" style="color:black"></p>

      <div class="modal-footer flex-center">
        <a id = "continueClient" class="btn btn-primary" style="color: white">continue</a>
      </div>

      </div>   
    </div>
  </div>
</div>
</div>
</form>


