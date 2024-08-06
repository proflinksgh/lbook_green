<?php 
  $db=$data["initiator"];
 ?>
<body class="fixed-nav sticky-footer" id="page-top">
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">General Settings</li>
      </ol>
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-fw fa-gear"></i>General Settings</h2>
      </div>
      <div class="row">
    <div class="container margin_60_35">
      <div class="row">
        <aside class="col-lg-3" id="sidebar">
            <div class="box_style_cat" id="faq_box">
              <ul id="cat_nav">
                <li><a href="#company" class="active"><i class="icon_document_alt"></i>Company Settings</a></li>
                <li><a href="#user"><i class="icon_document_alt"></i>User Settings</a></li>
                <li><a href="#qapi"><i class="icon_document_alt"></i>API Integration</a></li>
                <li><a href="#sms"><i class="icon_document_alt"></i>SMS Settings</a></li>
                <li><a href="#auth"><i class="icon_document_alt"></i>Authentication</a></li>
                <li><a href="#sync"><i class="icon_document_alt"></i>Backup & Synchronization</a></li>
                <li><a href="#about"><i class="icon_document_alt"></i>About</a></li>
              </ul>
            </div>
        </aside>
        <div class="col-lg-9" id="faq">
           
           <div role="tablist" class="add_bottom_45 accordion_2" id="company">
            <div class="card">
              <div class="card-header" role="tab">
                <h5 class="mb-0">
                  <a data-bs-toggle="collapse" href="#collapseOne_payment" aria-expanded="true"><i class="indicator ti-minus"></i>Profile</a>
                </h5>
              </div>
              <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-bs-parent="#company">
              <div class="card-body">
                <div class="form-group row">
                                 <label for="to" class="col-sm-2 col-form-label">Company</label>
                                 <div class="col-md-6">
                                  <input class="form-control compc" id="idComp" disabled value="<?php echo $db->company(); ?>">
                                </div>
                              </div>
                               <div class="form-group row">
                                <label for="to" class="col-sm-2 col-form-label">Phone number</label>
                                 <div class="col-md-6">
                                  <input class="form-control compc" id="idCompPhone" value="<?php echo $db->company_phone(); ?>">
                                </div>
                              </div>
                                 <div class="form-group row">
                                <label for="to" class="col-sm-2 col-form-label">Email</label>
                                 <div class="col-md-6">
                                  <input class="form-control compc" id="idCompEmail"  value="<?php echo $db->company_email(); ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="to" class="col-sm-2 col-form-label">Business Type</label>
                                 <div class="col-md-6">
                                  <input class="form-control" disabled value="<?php echo $db->company_business(); ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="to" class="col-sm-2 col-form-label">#PROPERTY TAG</label>
                                 <div class="col-md-6">
                                  <input class="form-control" disabled value="<?php echo $_COOKIE['ccode']; ?>">
                                </div>
                              </div>
                               <div class="form-group row">
                                <label for="to" class="col-sm-2 col-form-label">PLAN</label>
                                 <div class="col-md-6">
                                  <input class="form-control" disabled value="Subscription">
                                </div>
                              </div>
                                <div class="form-group row">
                                <label for="to" class="col-sm-2 col-form-label">DAYS LEFT</label>
                                 <div class="col-md-6">
                                  <input class="form-control" disabled value="<?php echo $_COOKIE['ccode']==="233211"?"UNLIMITED":$db->days_left($_COOKIE['ccode'])?>">
                                </div>
                              </div>
                               <div class="form-group row">
                                <label for="to" class="col-sm-2 col-form-label">Acc. # String</label>
                                 <div class="col-md-6">
                                  <input class="form-control" id="idCompString" value="<?php echo $db->account_string(); ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="to" class="col-sm-2 col-form-label">Next Count</label>
                                 <div class="col-md-6">
                                  <input class="form-control" disabled value="<?php echo $db->account_count(); ?>">
                                </div>
                              </div>
                                <div class="form-group row">
                                 <label for="to" class="col-sm-2 col-form-label"></label>
                                 <div class="col-md-6">
                                 <p><button class="btn_1 medium btnCompChange"><i class="spinner"></i>Apply Changes</button></p> 
                                </div>
                              </div>
                </div>
              </div>
            </div>
          </div>



          <div role="tablist" class="add_bottom_45 accordion_2" id="user">
            <div class="card">
              <div class="card-header" role="tab">
                <h5 class="mb-0">
                  <a data-bs-toggle="collapse" href="#collapseOne_general" aria-expanded="true"><i class="indicator ti-minus"></i>General User Settings</a>
                </h5>
              </div>
              <div id="collapseOne_general" class="collapse show" role="tabpanel" data-bs-parent="#user">
              <div class="card-body">
                          <?php 
                          $getRoles = $db->getAllData("SELECT * FROM role_settings WHERE CCODE = ".$_COOKIE["ccode"]."");
                          foreach($getRoles as $row){
                            $role_id = $row["ROLE"];
                            $role = $db->get_data_here_value("SELECT ROLE from role_tb WHERE ID = $role_id","ROLE");
                             ?>
                             <div class="form-group row" style="margin-top:8%">
                                <label for="to" class="col-sm-2 col-form-label" style="color:green">ROLE</label>
                                 <div class="col-md-6">
                                         <select class="form-control <?php echo $role_id; ?>" required>
                                           <option value="<?php echo $role_id; ?>" selected><?php echo $role; ?></option>
                                          </select>
                                   </div>
                              </div>

                          <div class="form-group row">
                                 <label for="to" class="col-sm-2 col-form-label">Register</label>
                                 <div class="col-md-6">
                                   <select class="form-control register<?php echo $role_id; ?>" <?php echo $role_id == '1'?'disabled':''?>>
                                     <?php 
                                      if($db->register_role($role_id) == 0){
                                        ?>
                                        <option value="0" selected>Enabled</option>
                                        <option value="1">Disabled</option>
                                        <?php 
                                      }else{
                                        ?>
                                        <option value="1" selected>Disabled</option>
                                        <option value="0">Enabled</option>
                                        <?php
                                      }
                                    ?> 
                                    </select>
                                </div>
                                </div>


                           <div class="form-group row">
                                 <label for="to" class="col-sm-2 col-form-label">Deposit</label>
                                 <div class="col-md-6">
                                   <select class="form-control deposit<?php echo $role_id; ?>" <?php echo $role_id == '1'?'disabled':''?>>
                                     <?php 
                                      if($db->deposit_role($role_id) == 0){
                                        ?>
                                        <option value="0" selected>Enabled</option>
                                        <option value="1">Disabled</option>
                                        <?php 
                                      }else{
                                        ?>
                                        <option value="1" selected>Disabled</option>
                                        <option value="0">Enabled</option>
                                        <?php
                                      }
                                    ?> 
                                    </select>
                                </div>
                              </div>

                               <div class="form-group row">
                                 <label for="to" class="col-sm-2 col-form-label">Withdrawal</label>
                                 <div class="col-md-6">
                                   <select class="form-control withdrawal<?php echo $role_id; ?>" <?php echo $role_id == '1'?'disabled':''?>>
                                     <?php 
                                      if($db->withdrawal_role($role_id) == 0){
                                        ?>
                                        <option value="0" selected>Enabled</option>
                                        <option value="1">Disabled</option>
                                        <?php 
                                      }else{
                                        ?>
                                        <option value="1" selected>Disabled</option>
                                        <option value="0">Enabled</option>
                                        <?php
                                      }
                                    ?> 
                                    </select>
                                </div>
                              </div>


                                <div class="form-group row">
                                 <label for="to" class="col-sm-2 col-form-label">Transfer</label>
                                 <div class="col-md-6">
                                   <select class="form-control transfer<?php echo $role_id; ?>" <?php echo $role_id == '1'?'disabled':''?>>
                                     <?php 
                                      if($db->transfer_role($role_id) == 0){
                                        ?>
                                        <option value="0" selected>Enabled</option>
                                        <option value="1">Disabled</option>
                                        <?php 
                                      }else{
                                        ?>
                                        <option value="1" selected>Disabled</option>
                                        <option value="0">Enabled</option>
                                        <?php
                                      }
                                    ?> 
                                    </select>
                                </div>
                              </div>


                                 <div class="form-group row">
                                 <label for="to" class="col-sm-2 col-form-label">History</label>
                                 <div class="col-md-6">
                                   <select class="form-control history<?php echo $role_id; ?>" <?php echo $role_id == '1'?'disabled':''?>>
                                     <?php 
                                      if($db->transfer_role($role_id) == 0){
                                        ?>
                                        <option value="0" selected>Enabled</option>
                                        <option value="1">Disabled</option>
                                        <?php 
                                      }else{
                                        ?>
                                        <option value="1" selected>Disabled</option>
                                        <option value="0">Enabled</option>
                                        <?php
                                      }
                                    ?> 
                                    </select>
                                    </div>
                                  </div>

                                 <div class="form-group row">
                                 <label for="to" class="col-sm-2 col-form-label">Loan</label>
                                 <div class="col-md-6">
                                   <select class="form-control loan<?php echo $role_id; ?>" <?php echo $role_id == '1'?'disabled':''?>>
                                     <?php 
                                      if($db->transfer_role($role_id) == 0){
                                        ?>
                                        <option value="0" selected>Enabled</option>
                                        <option value="1">Disabled</option>
                                        <?php 
                                      }else{
                                        ?>
                                        <option value="1" selected>Disabled</option>
                                        <option value="0">Enabled</option>
                                        <?php
                                      }
                                    ?> 
                                    </select>
                                    </div>
                                  </div>

                            <?php
                            }
                          ?>

                       <div class="form-group row">
                                 <label for="to" class="col-sm-2 col-form-label"></label>
                                 <div class="col-md-6">
                                 <p><button class="btn_1 medium" id = "btnUserChanges"><i class="spinner"></i>Apply Changes</button></p> 
                                </div>
                              </div>

            </div>
          </div>
            </div>
          </div>
            <div role="tablist" class="add_bottom_45 accordion_2" id="qapi">
            <div class="card">
              <div class="card-header" role="tab">
                <h5 class="mb-0">
                  <a data-bs-toggle="collapse" href="#collapseOne_payment" aria-expanded="true"><i class="indicator ti-minus"></i>QuickSMS API Integration</a>
                </h5>
              </div>
              <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-bs-parent="#qapi">
              <div class="card-body">
                <div class="form-group row">
                                 <label for="to" class="col-sm-2 col-form-label">Public Key</label>
                                 <div class="col-md-6">
                                  <input class="form-control api" value="<?php echo $db->api_key(); ?>" placeholder="Enter Public Key" id="idApiKey">
                                </div>
                              </div>
                              <div class="form-group row">
                                 <label for="to" class="col-sm-2 col-form-label">Sender ID</label>
                                 <div class="col-md-6">
                                  <input class="form-control api" value="<?php echo $db->sid(); ?>" placeholder="Approved Sender ID" id="idSenderID">
                                </div>
                              </div>
                                 <div class="form-group row">
                                 <label for="to" class="col-sm-2 col-form-label"></label>
                                 <div class="col-md-6">
                                 <p><button class="btn_1 medium" id = "btnAPIChanges"><i class="spinner"></i>Apply Changes</button></p> 
                                </div>
                              </div>
                </div>
              </div>
            </div>
          </div>
          <div role="tablist" class="add_bottom_45 accordion_2" id="sms">
            <div class="card">
              <div class="card-header" role="tab">
                <h5 class="mb-0">
                  <a data-bs-toggle="collapse" href="#collapseOne_payment" aria-expanded="true"><i class="indicator ti-minus"></i>General SMS notification settings</a>
                </h5>
              </div>
              <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-bs-parent="#sms">
              <div class="card-body">
              <div class="form-group row">
                                 <label for="to" class="col-sm-2 col-form-label">Welcome SMS</label>
                                 <div class="col-md-6">
                                   <select class="form-control clWelcomeSMS" required>
                                    <?php 
                                      if($db->welcome_sms() == 0){
                                        ?>
                                        <option value="0" selected>Enabled</option>
                                        <option value="1">Disabled</option>
                                        <?php 
                                      }else{
                                        ?>
                                        <option value="1" selected>Disabled</option>
                                        <option value="0">Enabled</option>
                                        <?php
                                      }
                                    ?>   
                                    </select>
                                </div>
                              </div>

                              <div class="form-group row clWMess" style="display:none">
                                 <label for="to" class="col-sm-2 col-form-label">Welcome Message</label>
                                 <div class="col-md-6">
                                  <textarea rows="5" class="form-control" id="idWelcomeMess" style="height:100px;" placeholder="Enter Welcome Message Here"><?php echo $db->welcome_mess(); ?></textarea>
                                </div>
                              </div>

                              <div class="form-group row">
                                 <label for="to" class="col-sm-2 col-form-label">Deposit SMS</label>
                                 <div class="col-md-6">
                                   <select class="form-control clDepositSMS" required>
                                     <?php 
                                      if($db->deposit_sms() == 0){
                                        ?>
                                        <option value="0" selected>Enabled</option>
                                        <option value="1">Disabled</option>
                                        <?php 
                                      }else{
                                        ?>
                                        <option value="1" selected>Disabled</option>
                                        <option value="0">Enabled</option>
                                        <?php
                                      }
                                    ?> 
                                    </select>
                                </div>
                              </div>

                               <div class="form-group row clDMess" style="display:none">
                                 <label for="to" class="col-sm-2 col-form-label">Deposit Message</label>
                                 <div class="col-md-6">
                                  <textarea rows="5" class="form-control" id="idDepositMess" style="height:100px;" placeholder="Enter Welcome Message Here"><?php echo $db->deposit_mess(); ?></textarea>
                                </div>
                              </div>


                                <div class="form-group row">
                                 <label for="to" class="col-sm-2 col-form-label">Withdrawal SMS</label>
                                 <div class="col-md-6">
                                   <select class="form-control clWithdrawalSMS" required>
                                     <?php 
                                      if($db->withdrawal_sms() == 0){
                                        ?>
                                        <option value="0" selected>Enabled</option>
                                        <option value="1">Disabled</option>
                                        <?php 
                                      }else{
                                        ?>
                                        <option value="1" selected>Disabled</option>
                                        <option value="0">Enabled</option>
                                        <?php
                                      }
                                    ?> 
                                    </select>
                                </div>
                              </div>

                                <div class="form-group row clWithMess" style="display:none">
                                 <label for="to" class="col-sm-2 col-form-label">Withdrawal Message</label>
                                 <div class="col-md-6">
                                  <textarea rows="5" class="form-control" id="idWithMess" style="height:100px;" placeholder="Enter Welcome Message Here"><?php echo $db->withdrawal_mess(); ?></textarea>
                                </div>
                              </div>


                              <div class="form-group row">
                                 <label for="to" class="col-sm-2 col-form-label">Transfer SMS</label>
                                 <div class="col-md-6">
                                   <select class="form-control clTransferSMS" required>
                                     <?php 
                                      if($db->transfer_sms() == 0){
                                        ?>
                                        <option value="0" selected>Enabled</option>
                                        <option value="1">Disabled</option>
                                        <?php 
                                      }else{
                                        ?>
                                        <option value="1" selected>Disabled</option>
                                        <option value="0">Enabled</option>
                                        <?php
                                      }
                                    ?> 
                                    </select>
                                </div>
                              </div>

                               <div class="form-group row clTMess" style="display:none">
                                 <label for="to" class="col-sm-2 col-form-label">Transfer Message</label>
                                 <div class="col-md-6">
                                  <textarea rows="5" class="form-control" id="idTransferMess" style="height:100px;" placeholder="Enter Welcome Message Here"><?php echo $db->transfer_mess(); ?></textarea>
                                </div>
                              </div>
                                <div class="form-group row">
                                 <label for="to" class="col-sm-2 col-form-label"></label>
                                 <div class="col-md-6">
                                 <p><button class="btn_1 medium" id = "btnSMSChanges"><i class="spinner"></i>Apply Changes</button></p> 
                                </div>
                              </div>

                </div>
              </div>
            </div>
          </div>


           <div role="tablist" class="add_bottom_45 accordion_2" id="auth">
            <div class="card">
              <div class="card-header" role="tab">
                <h5 class="mb-0">
                  <a data-bs-toggle="collapse" href="#collapseOne_payment" aria-expanded="true"><i class="indicator ti-minus"></i>Authentication Settings</a>
                </h5>
              </div>
              <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-bs-parent="#company">
              <div class="card-body">
                <div class="form-group row">
                      <label for="to" class="col-sm-2 col-form-label">Enable Two Factor Authentication</label>
                      <div class="col-md-6">
                               <select class="form-control" disabled>
                                        <option value="0" selected>Disabled</option>
                                        <option value="1">Enabled</option>
                                    </select>

                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

           <div role="tablist" class="add_bottom_45 accordion_2" id="sync">
            <div class="card">
              <div class="card-header" role="tab">
                <h5 class="mb-0">
                  <a data-bs-toggle="collapse" href="#collapseOne_payment" aria-expanded="true"><i class="indicator ti-minus"></i>Backup & Synchronization settings</a>
                </h5>
              </div>
              <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-bs-parent="#company">
              <div class="card-body">
                <div class="form-group row">
                      <label for="to" class="col-sm-2 col-form-label">Settings</label>
                      <div class="col-md-6">
                               <select class="form-control">
                                        <option value="0" selected>Enabled</option>
                                        <option value="1">Disabled</option>
                                    </select>

                      </div>
                  </div>
                  <div id="syncPic" style="margin-top: -100px;" align="center"><a href="center"><img width="300" height="300" src="assets/img/sync.png"></a></div>
                  <div style="display: none;margin-top: -100px;" align="center" id="syncGif"><a href="center"><img width="300" height="300" src="assets/img/synch.gif"></a></div>
                  <div align="center" style="margin-top: -50px;margin-bottom: 20px;"><button class='btn btn-lg btn-primary btnSyncNow' style="color:white"><i class="spinner"></i> Sync Now</button></div>
                  <div id="idLastSync" align="center" style="margin-bottom: 20px;">Last Sync: <?php echo $db->last_sync_date()." ".$db->last_sync_time(); ?></div>
                </div>
              </div>
            </div>
          </div>

          <div role="tablist" class="add_bottom_45 accordion_2" id="about">
            <div class="card">
              <div class="card-header" role="tab">
                <h5 class="mb-0">
                  <a data-bs-toggle="collapse" href="#collapseOne_payment" aria-expanded="true"><i class="indicator ti-minus"></i>About L-Book</a>
                </h5>
              </div>
              <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-bs-parent="#company">
              <div class="card-body">
                <div class="form-group row">
                  <label for="to" class="col-sm-2 col-form-label">Version</label>
                      <div class="col-md-6">
                       <input class="form-control" disabled value="2.0">
                      </div>
                  </div>
                  <div class="form-group row">
                   <label for="to" class="col-sm-2 col-form-label">Developer</label>
                      <div class="col-md-6">
                       <input class="form-control" disabled value="Links Engineering Ltd">
                      </div>
                  </div>
                   <div class="form-group row">
                   <label for="to" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-md-6">
                       <input class="form-control" disabled value="info@linksengineering.net">
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>      
    </div>
    </div>
    </div>
    </div>
  </body>
    