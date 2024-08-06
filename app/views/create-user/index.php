<body class="fixed-nav sticky-footer" id="page-top">
<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Create User</li>
      </ol>
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-user"></i>New User</h2>
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
                <input type="text" class="form-control col" id="idSurname" placeholder="Surname" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>First name <span style="color:red">*</span></label>
                <input type="text" class="form-control col" id="idOthername" placeholder="Othername(s)">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Other name </label>
                <input type="text" class="form-control" id="idOthername" placeholder="Enter Other name(s)">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Phone number </label>
                <input type="tel" class="form-control col" id="idUserContact" placeholder="Phone number">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Username </label>
                <input type="text" class="form-control col" id="idUsername" placeholder="Username">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Password </label>
                <input type="text" class="form-control col" id="idPassword" placeholder="Password">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Choose Role <span style="color:red">*</span></label>
                  <select id="idRole" class="form-control col">
                                    <option value="" disabled="disabled">Select role</option>
                                    <?php
                                      $db = $data['initiator'];
                                      $result = $db->getAllData("SELECT ID, ROLE from role_tb");
                                      if($result != 0){
                                      foreach($result as $row)
                                      {
                                       echo "<option value='".$row['ID']."'>". $row['ROLE']."</option>";
                                      }
                                    }
                                    ?>
                                </select>
                            </div>
                      </div>
            <p><a href="#0" class="btn_1 medium" id = "btnPostUser"><i class="spinner"></i>Submit</a></p>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
  </body>