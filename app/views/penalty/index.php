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
        <li class="breadcrumb-item active">Penalty List</li>
      </ol>  
      <div class="card mb-3">
        <div class="card-header">        
          <i class="fa fa-table"></i> CUSTOMER LOAN PENALTY SHEET</div>
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
                              <th>PENALTY_DATE</th>
                              <th>CUSTOMER</th>
                              <th>PHOTO</th>
                              <th>REGIST_NO.</th>
                              <th>LOAN_CODE</th>
                              <th>BALANCE_GHS</th>
                              <th>PENALTY_GHS</th>
                        </tr>
              </thead>
              <tfoot>
                   <tr>
                          <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                              <th>ID</th>
                              <th>PENALTY_DATE</th>
                              <th>CUSTOMER</th>
                              <th>PHOTO</th>
                              <th>REGIST_NO.</th>
                              <th>LOAN_CODE</th>
                              <th>BALANCE</th>
                              <th>PENALTY</th>
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