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
        <li class="breadcrumb-item">
          <a href="create_loan">All Loans</a>
        </li>
        <li class="breadcrumb-item active">Loan Repayment</li>
      </ol>  
      <div class="card mb-3">
        <div class="card-header">        
          <i class="fa fa-table"></i> CUSTOMER LOAN REPAYMENT SHEET</div>
       <!--    <div align="right" style="margin-top:1%">
           <a href="#" class="btn btn-primary medium" id="btnNewLoan"><i class="fa fa-user-plus"></i> Create Loan </a> 
             <a href="#" class="btn btn-success medium btnRepayLoan"><i class="fa fa-dollar"></i> Repay Loan </a> 
           <a href="#" class="btn btn-danger medium btnDeleteLoan"><i class="fa fa-remove"></i> Delete</a>
           </div> -->
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                    <tr>
                          <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                              <th>ID</th>
                              <th>DATE_PAID</th>
                              <th>CUSTOMER</th>
                              <th>PHOTO</th>
                              <th>REGIST_NO.</th>
                              <th>LOAN_CODE</th>
                              <th>AMOUNT PAID</th>
                              <th>RECEIVED_BY</th>
                        </tr>
              </thead>
              <tfoot>
                   <tr>
                          <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                              <th>ID</th>
                              <th>DATE_PAID</th>
                              <th>CUSTOMER</th>
                              <th>PHOTO</th>
                              <th>REGIST_NO.</th>
                              <th>LOAN_CODE</th>
                              <th>AMOUNT_PAID</th>
                              <th>RECEIVED_BY</th>
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
                      <div align="center"><img id="dispImg" style="display: none;" width="160" height="160"></div>
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
                              <input id="reqamt" class="form-control lreq" type="number" placeholder="Enter Requested Amount">
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
                              <p style="color:red" id="shAmtErr"></p>
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