<body class="fixed-nav sticky-footer" id="page-top">
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="mcustomers">All MOMO Customer</a>
        </li>
        <li class="breadcrumb-item active">Register New Customer</li>
      </ol>
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-user"></i>Register New Customer</h2>
      </div>
      <div class="col-md-12 add_top_30">
      <div class="row">
        <div class="col-md-12 add_top_30">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Full Name <span style="color:red">*</span></label>
                <input type="text" class="form-control momo" id="idMomoName"  placeholder="Full Name" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Phone Number <span style="color:red">*</span></label>
                <input type="tel" class="form-control momo" id="idMomoPhone"  placeholder="Enter Other name(s)">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>City/Town <span style="color:red">*</span></label>
                <input type="text" class="form-control momo" id="idMomoTown" placeholder="Enter City/Town">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Category <span style="color:red">*</span></label>
                <select id="idMomoCat" class="form-control form">
                      <option disabled selected>Choose Category</option>
                      <option value="1">Agent</option>
                      <option value="2">Bulk Transfer</option>
                      <option value="3">EVD</option>
                      </select>
              </div>
            </div>
            <div class="col-md-6" style="display:none" id="shAgentName">
              <div class="form-group">
                <label>Agent Name <span style="color:red">*</span></label>
                <input type="text" class="form-control" id="idAgentName" placeholder="Agent Name">
              </div>
            </div>
            <div class="col-md-6" style="display:none" id="shAgent">
              <div class="form-group">
                <label>Agent Number <span style="color:red">*</span></label>
                <input type="text" class="form-control" id="idAgentNo" placeholder="Agent Number">
              </div>
            </div>
            <div class="col-md-6" style="display:none" id="shEvd">
              <div class="form-group">
                <label>EVD Number <span style="color:red">*</span></label>
                <input type="text" class="form-control" id="idEvdNo" placeholder="EVD Number">
              </div>
            </div>
            <div class="col-md-6" style="display:none" id="shAgentCust">
              <div class="form-group">
                <label>Target Customers <span style="color:red">*</span></label>
                  <textarea id="idMomoCust" class="form-control" col="6" row="10" type="text" placeholder="Agent number and press Enter"></textarea>
              </div>
            </div>             
            <p><a href="#0" class="btn_1 medium btnSubmitMomoCust"><i class="spinner"></i>Submit</a></p>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
  </body>