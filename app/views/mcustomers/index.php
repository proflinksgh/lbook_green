  <body class="fixed-nav sticky-footer" id="page-top">
  <div class="content-wrapper">
     <input type="hidden" id="rotator" name="rotator" value="34" />
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">All MOMO Customers</li>
      </ol>  
      <div class="card mb-3">
        <div class="card-header">        
          <i class="fa fa-table"></i> Mobile Money Customers</div>
            <div align="right" style="margin-top:1%">
           <a href="momo-cust" class="btn btn-primary medium"><i class="fa fa-user-plus"></i> Add New Customer</a> 
           <a href="#" class="btn btn-success medium updtCust"><i class="fa fa-pencil-square-o"></i> Edit</a>
           <a href="#" class="btn btn-danger medium delCust"><i class="fa fa-remove"></i> Delete</a>
           </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Category</th>
                    <th>Agent Name</th>
                    <th>Agent No.</th>
                    <th>Mass Numbers</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Category</th>
                    <th>Agent Name</th>
                    <th>Agent No.</th>
                    <th>Mass Numbers</th>
                </tr>
              </tfoot>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted"></div>
      </div>
    </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
</body>


<div class="modal fade modalEditMCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Record New Transaction</h5>
            <button class="close closePop" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label>Customer Id <span style="color:red">*</span></label>
                <input type="text" class="form-control" disabled id="idMomoId"  placeholder="Customer Id" required>
               </div>
               <div class="form-group">
                <label>Customer Name <span style="color:red">*</span></label>
                <input type="text" class="form-control momo" id="idMomoName"  placeholder="Full Name" required>
               </div>
               <div class="form-group">
                <label>Phone number <span style="color:red">*</span></label>
                 <input type="tel" class="form-control momo" id="idMomoPhone"  placeholder="Enter Other name(s)">
               </div>
                <div class="form-group">
                <label>City <span style="color:red">*</span></label>
                 <input type="text" class="form-control momo" id="idMomoTown" placeholder="Enter City/Town">
               </div>
                  <div class="form-group">
                        <label>Category <span style="color:red">*</span></label>
                      <select id="idMomoCat" class="form-control momo">
                      <option disabled selected>Choose Category</option>
                      <option value="1">Agent</option>
                      <option value="2">Mass Transfer</option>
                      <option value="3">EVD</option>
                      </select>
                      </div>

                      <div class="form-group">
                        <label>Agent Name <span style="color:red">*</span></label>
                        <input type="text" class="form-control momo" id="idAgentName" placeholder="Agent Name">
                      </div>
                      <div class="form-group">
                        <label>Agent Number <span style="color:red">*</span></label>
                        <input type="text" class="form-control momo" id="idAgentNo" placeholder="Agent Number">
                      </div>

                       <div class="form-group" style="display:none" id="shAgentCust">
                        <label>Agent Numbers <span style="color:red">*</span></label>
                          <textarea id="idMomoCust" class="form-control" col="6" row="10" type="text" placeholder="Agent number and press Enter"></textarea>
                      </div>   
          </div>
          <div class="modal-footer">
            <p><a href="#" class="btn_1 medium btnEdMomoCust"><i class="spinner"></i><i class="fa fa-pencil-square-o"></i> Save Changes </a></p>
          </div>
        </div>
      </div>
</div>









