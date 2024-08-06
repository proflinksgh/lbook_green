<input type="hidden" id="cdate" value="<?= date("Y-m-d"); ?>">
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
        <li class="breadcrumb-item active">All Loan</li>
      </ol>  
      <div class="card mb-3">
        <div class="card-header">        
          <i class="fa fa-table"></i> LOAN TRANSACTION LEDGER</div>
          <div align="right" style="margin-top:1%">
           <a href="#" class="btn btn-primary medium" id="btnNewLoan"><i class="fa fa-user-plus"></i> Create Loan </a> 
             <a href="#" class="btn btn-success medium btnRepayLoan"><i class="fa fa-dollar"></i> Repay Loan </a> 
           <a href="#" class="btn btn-danger medium btnDeleteLoan"><i class="fa fa-remove"></i> Delete</a>
           </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                    <tr>
                          <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                              <th>ID</th>
                              <th>DATE_APPLIED</th>
                              <th>CUSTOMER_PROFILE</th>
                              <th>REGISTRATION_NO.</th>
                              <th>CAPACITY</th>
                              <th>LOAN_AMOUNT</th>
                              <th>MATURITY</th>
                              <th>DAYS_LEFT</th>
                              <th>INTEREST</th>
                              <th>AMOUNT_TO_PAY</th>
                              <th>REPAYMENT</th>
                              <th>PENALTY</th>
                              <th>BALANCE_GHS</th>
                              <th class="lnstatus">LOAN_STATUS_TAKE_ACTION</th>
                        </tr>
              </thead>
              <tfoot>
                   <tr>
                          <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                              <th>ID</th>
                              <th>DATE_APPLIED</th>
                              <th>CUSTOMER_PROFILE</th>
                              <th>REGISTRATION_NO.</th>
                              <th>CAPACITY</th>
                              <th>LOAN_AMOUNT</th>
                              <th>MATURITY</th>
                              <th>DAYS_LEFT</th>
                              <th>INTEREST</th>
                              <th>AMOUNT_TO_PAY</th>
                              <th>REPAYMENT</th>
                              <th>PENALTY</th>
                              <th>BALANCE</th>
                              <th class="lnstatus">LOAN_STATUS_TAKE_ACTION</th>
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






<div class="modal fade" id="modalNewLoan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Loan</h5>
            <button class="close closePop" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
          <input type="hidden" id="idAppLoan">
                      <div align="center"><img id="dispImg" style="display: none;" width="160" height="160"></div>
                       <div class="form-group">
                          <label> Application Date <span style="color:red">*</span></label>
                          <input id="crdate" class="form-control lreq" type="date">
                        </div>
                      <div class="form-group">
                        <label>Choose Applicant <span style="color:red">*</span></label>
                           <select id="applicant" class="form-control lreq">
                            <option disabled="disabled" selected="selected">--Choose Applicant--</option>
                                    <?php
                                      $db = $data['initiator'];
                                      $query =$db->getAllData("SELECT * from loanreg_tb");
                                      if($query!==0){
                                      foreach($query as $row)
                                      {
                                          echo "<option data-image='".$row['image']."' data-id='".$row['regtype']."' data-value='".$row['code']."' value='".$row['id']."'>".$row['surname']." ".$row["othername"]."</option>";
                                          }
                                        }
                                    ?>
                              </select>
                        </div>
                        <div class="form-group shLoanCode" style="display: none;">
                             <label> Applicant Code <span style="color:red">*</span></label>
                              <input id="loancode" disabled class="form-control" type="text">
                        </div>
                         <div class="form-group shRegType" style="display: none;">
                             <label> Loan Product <span style="color:red">*</span></label>
                             <input id="lprod" disabled class="form-control" type="text">
                        </div>
                         <div class="form-group">
                             <label> Requested Amount (GHS) <span style="color:red">*</span></label>
                              <input id="reqamt" disabled class="form-control lreq" type="number" placeholder="Enter Requested Amount">
                              <p style="color:red" id="shAmtErr"></p>
                        </div>
                        <div class="form-group">
                        <label>Repayment Capacity <span style="color:red">*</span></label>
                          <select id="capacity" class="form-control lreq">
                              <option disabled="disabled" selected="selected">Select Capcity</option>
                              <option value="1">  1 Week</option>
                              <option value="2"> 2 Weeks</option>
                          </select>
                        </div>
                        <div class="form-group">
                        <label>Maturity <span style="color:red">*</span></label>
                          <select id="maturity" class="form-control lreq">
                              <option disabled="disabled" selected="selected">Select Maturity</option>
                              <option value="1">  1 Month</option>
                              <option value="2"> 2 Months</option>
                              <option value="3"> 3 Months</option>
                          </select>
                        </div>
                         <div class="form-group">
                             <label> Proposed Collaterals <span style="color:red">*</span></label>
                              <textarea rows="5" class="form-control lreq" id="colat" style="height:100px;" placeholder="Enter Proposed Collaterals"></textarea>
                        </div>
                        <div class="form-group">
                        <label>Loan Form & Processing Fee <span style="color:red">*</span></label>
                          <select id="pstatus" class="form-control lreq">
                              <option disabled="disabled" selected="selected">Choose Payment Status</option>
                              <option value="1">Paid</option>
                              <option value="2">Not Paid</option>
                          </select>
                        </div>
                           <div class="form-group shPayAmt" style="display: none;">
                             <label> Amount Paid (GHS)<span style="color:red">*</span></label>
                              <input id="amtpaid" class="form-control lreq" type="text">
                        </div>


              </div>
            <div class="modal-footer">
            <p><button href="#" class="btn_1 medium btnSubmitLoanReq"><i class="spinner"></i><i class="fa fa-pencil-square-o"></i> Submit Request </button></p>
          </div>
        </div>
      </div>
</div>




<div class="modal fade modalRepay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Repay Loan <i class="fa fa-dollar"></i></h5>
            <button class="close closePop" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
                          <label> Date Paid <span style="color:red">*</span></label>
                          <input id="paydate" class="form-control lpay" type="date">
                        </div>
                <div class="form-group shLoanCode">
                        <label> Applicant Name <span style="color:red">*</span></label>
                          <input id="appName" disabled class="form-control" type="text">
                        </div>
                         <div class="form-group">
                             <label> Registration No. <span style="color:red">*</span></label>
                             <input id="regNo" disabled class="form-control" type="text">
                        </div>
                         <div class="form-group">
                             <label> Enter Amount (GHS) <span style="color:red">*</span></label>
                              <input id="payAmt" class="form-control lpay" type="number" placeholder="Enter Amount to Pay">
                              <p style="color:red" id="shExceed"></p>
                        </div>
              </div>
            <div class="modal-footer">
            <p><button href="#" class="btn_1 medium btnPayLoan"><i class="spinner"></i><i class="fa fa-pencil-square-o"></i> Submit Payment </button></p>
          </div>
        </div>
      </div>
</div>





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
      <p><h5>Loan added successfully</h5></p>
        <a id = "idAnotherProduct" class="btn btn-primary" style="color: white; background:green" data-dismiss="modal">Add another</a>
        <a id = "idHome" class="btn btn-primary" style="color: white; background:orange" data-dismiss="modal">Go Home</a>
      </div>   
    </div>
  </div>
</div>
</div>
</form>