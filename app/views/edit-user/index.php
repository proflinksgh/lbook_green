<body class="fixed-nav sticky-footer" id="page-top">
<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard">Dashboard</a>
        </li>
          <li class="breadcrumb-item">
          <a href="management">All users</a>
        </li>
        <li class="breadcrumb-item active">Edit User</li>
      </ol>
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-user"></i>Edit User</h2>
      </div>
       <div class="col-md-8 add_top_30">
      <div class="row">
        <div class="col-md-2">
        </div>

        <div class="col-md-8 add_top_30">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Surname <span style="color:red">*</span></label>
                <input type="text" class="form-control upd" id="idFullnameupdate" placeholder="Surname" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Phone number </label>
                <input type="tel" class="form-control upd" id="idUserContactupdate" placeholder="Phone number">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Username </label>
                <input type="text" class="form-control upd" id="idUsernameupdate" placeholder="Username">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Password (Hashed)</label>
                <input type="text" class="form-control upd" id="idPasswordupdate" placeholder="Password">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Role <span style="color:red">*</span></label>
                  <select id="idRoleupdate" class="form-control col">
                      <option value="" disabled="disabled">Select role</option>
                      </select>
                      </div>
                  </div>
            <p><a href="#0" class="btn_1 medium" id = "btnPostUserUpdate"><i class="spinner"></i>Submit</a></p>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
  </body>