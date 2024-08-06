<body class="fixed-nav sticky-footer" id="page-top">
   <div id="clLoad" style="display: none;">
    <div data-loader="circle-side"></div>
   </div>
  <div class="content-wrapper">
     <input type="hidden" id="rotator" name="rotator" value="34" />
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">All Accounts</li>
      </ol>  
      <div class="card mb-3">
        <div class="card-header">        
          <i class="fa fa-table"></i> Accounts Broadsheet</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                     <th>#</th>
                      <th>Customer</th>
                      <th>Account #</th>
                      <th>Product</th>
                      <th>Subscription</th>
                      <th>Fees</th>
                      <th>Deposits</th>
                      <th>Interest</th>
                      <th>Withdrawal</th>
                      <th>Balance</th>
                      <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                      <th>#</th>
                      <th>Customer</th>
                      <th>Account #</th>
                      <th>Product</th>
                      <th>Subscription</th>
                      <th>Fees</th>
                      <th>Deposits</th>
                      <th>Interest</th>
                      <th>Withdrawal</th>
                      <th>Balance</th>
                      <th>Action</th>
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
                              <input id="idAccountName" class="form-control form-deposit" type="text" placeholder= "Account name" disabled="disabled" name="idAccountName">
                            </div>
                          </div>


                             <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idAccountNumber" class="form-control form-deposit" type="text" placeholder= "Account number" name="idAccountNumber" disabled="disabled">
                            </div>
                          </div>
                          
                          
                         <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idProduct" class="form-control form-deposit" type="text" placeholder= "Saving product" name="idProduct" disabled="disabled">
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
                        <h6 style="color:green" id="idAccBalance"></h6>
                        </div>
                     </div>
                     
                       <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idAmount" class="form-control form-deposit" type="number" placeholder= "Enter amount" name="idAmount" required="required" min="0">
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
                               <input type="date" id="idDate30" required="required" class="form-control form-withdrawal" placeholder="Choose estimated date">
                            </div>
                         </div>
                         <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idAccountNameWithdraw"  class="form-control form-withdrawal" type="text" placeholder= "Account name" disabled="disabled" name="idAccountName">
                            </div>
                          </div>


                             <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idAccountNumberWithdraw"  class="form-control form-withdrawal" type="text" placeholder= "Account number" name="idAccountNumber" disabled="disabled">
                            </div>
                          </div>
                          
                          
                         <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idProductWithdraw" class="form-control form-withdrawal" type="text" placeholder= "Saving product" name="idProduct" disabled="disabled">
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
      Header
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
        <a id = "idAddDepositSavings" class="btn btn-primary" style="color: white;" data-dismiss="modal">Add another</a>
      

      </div>   
    </div>
  </div>
</div>
</div>
</form>



<form action="" method="POST" id="modal-form">
<div class="container">  
<div class="modal fade" id="popWithdrawalSuccessSavings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <div class="modal-content text-center">
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Success</p>
      </div>
      <div class="modal-body">
      <p><h5>Withdrawal successful</h5></p>
       <p><h6 id="idNewBalanceSav"></h6></p>
        <a id = "idHome" class="btn btn-primary" style="color: white; background:orange" data-dismiss="modal">Go Home</a>
        <a id = "idWithdrawalAnotherSavings" class="btn btn-primary" style="color: white;" data-dismiss="modal">Withdraw another</a>
      </div>   
    </div>
  </div>
</div>
</div>
</form>