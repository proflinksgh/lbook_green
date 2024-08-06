<body class="fixed-nav sticky-footer" id="page-top">
  <div class="content-wrapper">
     <input type="hidden" id="rotator" name="rotator" value="34" />
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Products</li>
      </ol>  
      <div class="card mb-3">
        <div class="card-header">        
          <i class="fa fa-table"></i> All Product</div>
            <div align="right" style="margin-top:1%">
           <a href="#" class="btn btn-primary medium btnNewLoan"><i class="fa fa-user-plus"></i> New Loan Product</a> 
           <a href="#" class="btn btn-success medium btnUpdateLoanProd"><i class="fa fa-pencil-square-o"></i> Edit</a>
           <a href="#" class="btn btn-danger medium delLoanProd"><i class="fa fa-remove"></i> Delete</a>
           </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                     <th>ID</th>
                     <th>NAME</th>
                     <th>CODE</th>
                     <th>MIN_AMOUNT</th>
                     <th>MAX_AMOUNT</th>
                     <th>FORM_FEE</th>
                     <th>PROCESSING_FEE</th>
                     <th>INTEREST_RATE</th>
                     <th>MONTHLY_PENALTY_RATE</th>
                     <th>DATE_CREATED</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                     <th>ID</th>
                     <th>NAME</th>
                     <th>CODE</th>
                     <th>MIN_AMOUNT</th>
                     <th>MAX_AMOUNT</th>
                     <th>FORM_FEE</th>
                     <th>PROCESSING_FEE</th>
                     <th>INTEREST_RATE</th>
                     <th>MONTHLY_PENALTY_RATE</th>
                     <th>DATE_CREATED</th>
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





<div class="modal fade modalLoanProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Loan Product</h5>
            <button class="close closePop" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
                         <div class="form-group">
                             <label> Product Name <span style="color:red">*</span></label>
                              <input id="loanName" class="form-control form-loan" type="text" placeholder="Enter Loan Product Name">
                        </div>
                         <div class="form-group">
                            <label> Minimum Amount (GHS) <span style="color:red">*</span></label>
                            <input id="loanMinAmnt" class="form-control form-loan" type="number" placeholder="Enter Minimum Amount" value="0">
                        </div>
                        <div class="form-group">
                            <label> Maximum Amount (GHS) <span style="color:red">*</span></label>
                            <input id="loanMaxnAmnt" class="form-control form-loan" type="number" placeholder="Enter Maximum Amount" value="0">
                        </div>
                        <div class="form-group">
                            <label> Entry/Application Fee (GHS) <span style="color:red">*</span></label>
                            <input id="loanFormFee" class="form-control form-loan" type="number" placeholder="Enter Entry Fee" value="0">
                        </div>
                        <div class="form-group">
                            <label> Processing Fee (GHS) <span style="color:red">*</span></label>
                            <input id="loanProcessFee" class="form-control form-loan" type="number" placeholder="Enter Processing Fee" value="0">
                        </div>
                        <div class="form-group">
                            <label> Interest Rate <span style="color:red">*</span></label>
                            <input id="loanInterest" class="form-control form-loan" type="number" placeholder="Enter Processing Fee" value="0">
                        </div>
                        <div class="form-group">
                            <label> Monthly Penalty Rate <span style="color:red">*</span></label>
                            <input id="loanPenalty" class="form-control form-loan" type="number" value="0">
                        </div>

            </div>
            <div class="modal-footer">
            <p><a href="#" class="btn_1 medium btnPostLoan"><i class="spinner"></i> Submit Request</a></p>
          </div>
        </div>
      </div>
</div>



<div class="modal fade modalLoanEdProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Loan Product <i class="fa fa-edit"></i></h5>
            <button class="close closePop" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
                         <div class="form-group">
                             <label> Product Name <span style="color:red">*</span></label>
                              <input id="edloanName" class="form-control eform-loan" type="text" placeholder="Enter Loan Product Name">
                        </div>
                            <div class="form-group">
                             <label> Product Code <span style="color:red">*</span></label>
                              <input id="prodcode" disabled class="form-control eform-loan" type="text" placeholder="Enter Loan Product Name">
                        </div>
                         <div class="form-group">
                            <label> Minimum Amount (GHS) <span style="color:red">*</span></label>
                            <input id="edloanMinAmnt" class="form-control eform-loan" type="number" placeholder="Enter Minimum Amount" value="0">
                        </div>
                        <div class="form-group">
                            <label> Maximum Amount (GHS) <span style="color:red">*</span></label>
                            <input id="edloanMaxnAmnt" class="form-control eform-loan" type="number" placeholder="Enter Maximum Amount" value="0">
                        </div>
                        <div class="form-group">
                            <label> Entry/Application Fee (GHS) <span style="color:red">*</span></label>
                            <input id="edloanFormFee" class="form-control eform-loan" type="number" placeholder="Enter Entry Fee" value="0">
                        </div>
                          <div class="form-group">
                            <label> Processing Fee (GHS) <span style="color:red">*</span></label>
                            <input id="edloanProcessFee" class="form-control eform-loan" type="number" placeholder="Enter Processing Fee" value="0">
                        </div>
                           <div class="form-group">
                            <label> Interest Rate <span style="color:red">*</span></label>
                            <input id="edloanInterest" class="form-control eform-loan" type="number" placeholder="Enter Processing Fee" value="0">
                        </div>
                          <div class="form-group">
                            <label> Monthly Penalty Rate <span style="color:red">*</span></label>
                            <input id="edloanPenalty" class="form-control eform-loan" type="number" value="0">
                        </div>

            </div>
            <div class="modal-footer">
            <p><a href="#" class="btn_1 medium btnPostEdLoan"><i class="spinner"></i> Submit Request</a></p>
          </div>
        </div>
      </div>
</div>

