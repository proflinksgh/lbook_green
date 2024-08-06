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
        <li class="breadcrumb-item active">All Users</li>
      </ol>  
      <div class="card mb-3">
        <div class="card-header">        
          <i class="fa fa-user-plus"></i> User Accounts</div>
            <div align="right" style="margin-top:1%">
           <a href="create-user" class="btn btn-primary medium"><i class="fa fa-user-plus"></i> Create New</a> 
           <a href="#" class="btn btn-success medium" id="idUpdateUser"><i class="fa fa-pencil-square-o"></i> Edit</a>
           <a href="#" class="btn btn-danger medium" id="idDeleteAccount"><i class="fa fa-remove"></i> Delete</a>
           </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                    <th>#</th>
                    <th>Username</th>
                    <th>Password (Hash)</th>
                    <th>Full Name</th>
                    <th>Contact</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Biometric</th>
                    <th>Date Created</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                    <th>#</th>
                    <th>Username</th>
                    <th>Password (Hash)</th>
                    <th>Full Name</th>
                    <th>Contact</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Biometric</th>
                    <th>Date Created</th>
                </tr>
              </tfoot>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
  </body>
