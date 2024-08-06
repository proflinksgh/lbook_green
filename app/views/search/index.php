  <form action="" method="POST" id="update_form">
    <input type="hidden" id="rotator" name="rotator" value="34" />
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                    <input id="btnSwitchDash" type="button" style="width:200px; background:transparent; margin-left:100px" class="btn btn-lg btn-info" value="Go Home"/>
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
                    <h2>SEARCH RESULT</h2></h2>
                    <ul class="nav navbar-right panel_toolbox">
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
                              <th>ID</th>
                              <th>FULL NAME</th>
                              <th>ACC NO.</th>
                              <th>PRODUCT</th>
                              <th>SUBSCRIBTION</th>
                              <th>FEES</th>
                              <th>DEPOSIT</th>
                              <th>INTEREST</th>
                              <th>WITHDRAWAL</th>
                              <th>BALANCE</th>
                              <th>ACTION</th>
                              <th>ACTION</th>
                              <th>SMS STATUS</th>
                              <th>ACC STATUS</th>
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
<div class="modal fade" id="modalDeposit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Deposit into account</p>
      </div>

      <!--Body-->
      <div class="modal-body">
                    <div class="form-group row">
                         <div class="col-md-6 col-sm-6 ">
                           <input type="date" id="idDate" required="" class="form-control form-deposit" placeholder="Choose estimated date">
                        </div>
                     </div>

                 
                         <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idAccountName" class="form-control col" type="text" placeholder= "Account name" disabled="disabled" name="idAccountName">
                            </div>
                          </div>


                             <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idAccountNumber" class="form-control col" type="text" placeholder= "Account number" name="idAccountNumber" disabled="disabled">
                            </div>
                          </div>
                          
                          
                         <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idProduct" class="form-control col" type="text" placeholder= "Saving product" name="idProduct" disabled="disabled">
                            </div>
                          </div>
                          
                          
                        <div class="form-group row">
                        <div class="col-md-6 col-sm-6 ">
                        <h6 id="idInitial"></h6>
                        </div>
                     </div>
                        <div class="form-group row">
                        <div class="col-md-6 col-sm-6 ">
                        <h6 id="idInitialMax"></h6>
                        </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-md-6 col-sm-6 ">
                        <h6 id="idAccBalance"></h6>
                        </div>
                     </div>
                     
                       <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idAmount" class="form-control form-deposit" type="number" placeholder= "Enter amount" name="idAmount" required="required">
                            </div>
                          </div>

      </div>
      <div class="modal-footer flex-center">
        <button id="btnPostSavings" style="width:250px" type="button"  class="btn btn-lg btn-success col-md-6 col-sm-6" value="submit"><i class="fa fa-pencil-square-o"></i>Record</button>
      </div>
    </div>
  </div>
</div>
</div>
</form>




<form action="" method="POST" id="modal-form">
<div class="container">  
<div class="modal fade" id="modalWithdrawal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Withdraw from account</p>
      </div>

      <!--Body-->
      <div class="modal-body">
                        <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                               <input type="date" id="idDate30" required="" class="form-control form-withdrawal" placeholder="Choose estimated date">
                            </div>
                         </div>
                         <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idAccountNameWithdraw" class="form-control col" type="text" placeholder= "Account name" disabled="disabled" name="idAccountName">
                            </div>
                          </div>


                             <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idAccountNumberWithdraw" class="form-control col" type="text" placeholder= "Account number" name="idAccountNumber" disabled="disabled">
                            </div>
                          </div>
                          
                          
                         <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idProductWithdraw" class="form-control col" type="text" placeholder= "Saving product" name="idProduct" disabled="disabled">
                            </div>
                          </div>
                          
                          
                        <div class="form-group row">
                        <div class="col-md-6 col-sm-6 ">
                        <h6 id="idMinimumBalWithdraw" style="color:green"></h6>
                        </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-md-6 col-sm-6 ">
                        <h6 id="idAccountBalance" style="color:green"></h6>
                        </div>
                     </div>
                         <div class="form-group row">
                        <div class="col-md-6 col-sm-6 ">
                        <h6 id="idWithdrawalFee" style="color:green"></h6>
                        </div>
                     </div>
                     
                       <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idAmountWithdraw" class="form-control form-withdrawal" type="number" placeholder= "Enter amount" name="idAmount" required="required">
                            </div>
                          </div>
                          
                     
      </div>
      <div class="modal-footer flex-center">
        <button id="btnPostWithdrawal" style="width:250px" type="button"  class="btn btn-lg btn-success col-md-6 col-sm-6" value="submit"><i class="fa fa-pencil-square-o"></i>Record</button>
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
    <div class="modal-content text-center">
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Success</p>
      </div>
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



    
<form action="" method="POST" id="modal-form">
<div class="container">  
<div class="modal fade" id="popDepositSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <div class="modal-content text-center">
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Success</p>
      </div>
      <div class="modal-body">
      <p><h5>Amount deposited successfully</h5></p>

   
       <p><h6 id="idNewBalance"></h6></p>
      
     
        <a id = "idHome" class="btn btn-primary" style="color: white; background:orange" data-dismiss="modal">Go Home</a>
        <a id = "idAddDeposit" class="btn btn-primary" style="color: white;" data-dismiss="modal">Add another</a>
      

      </div>   
    </div>
  </div>
</div>
</div>
</form>



<form action="" method="POST" id="modal-form">
<div class="container">  
<div class="modal fade" id="popWithdrawalSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <div class="modal-content text-center">
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Success</p>
      </div>
      <div class="modal-body">
      <p><h5>Withdrawal successful</h5></p>
       <p><h6 id="idNewBalanceSearch"></h6></p>
        <a id = "idHome" class="btn btn-primary" style="color: white; background:orange" data-dismiss="modal">Go Home</a>
        <a id = "idWithdrawAnother" class="btn btn-primary" style="color: white;" data-dismiss="modal">Reload</a>
      </div>   
    </div>
  </div>
</div>
</div>
</form>