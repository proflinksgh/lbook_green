<?php 
 $db=$data["initiator"];
?>
<input type="hidden" id="sid1" value="<?= isset($_GET["sid1"])?$_GET["sid1"]:"none"; ?>">
<body class="fixed-nav sticky-footer" id="page-top">
    <div id="clLoad" style="display: none;">
    <div data-loader="circle-side"></div>
   </div>
<div class="content-wrapper cust-body">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Manage Account</li>
      </ol>
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        
      <div class="row">
        <div class="col-md-2">
          <div class="form-group">
            <div id="idImage2" style="margin-bottom:10px"></div>
            </div>
        </div>
        <div class="col-md-8 add_top_10" style="margin-left: 1%;">
          <div class="row">
            <h2><i class="fa fa-bar-chart"></i>Account #: <span id="idAccNoClient" style="color:green"></span></h2><br>
            <h2><i class="fa fa-user"></i>Name: <span id="idAccName" style="color:green"></span></h2><br>
            <h2><i class="fa fa-dollar"></i>Product: <span id="idAccProduct" style="color:green"></span></h2>
            <h2 style="display: none;"><i class="fa fa-dollar"></i>Subscription: <span id="idAccSub" style="color:green"></span></h2>
            <h2><i class="fa fa-calendar"></i>Opening date: <span id="idAccDate" style="color:green"></span></h2>
            
            <?php 
             if($_SESSION["id"]==="1"){
              ?>
               <a href="#" style="font-size: 18px; margin-top: 2%;"><i class="fa fa-print"></i> Print Statement</a>
              <?php
             }
            ?>
            <a class="edProfile" href="#" style="font-size: 18px"><i class="fa fa-pencil-square-o"></i> Edit Profile</a>
            <p class="shAccStatus" style="font-size: 18px;display: none;color:red"><i class="fa fa-stop"></i><strong>Account is Disabled</strong></p>
          </div>
        </div>
      </div>
      </div>
    </div>
      <div class="row">
      <div class="col-md-6">
        <div class="box_general padding_bottom">
          <div class="header_box version_2">
           <!--  <h2><i class="fa fa-money"></i><b>Operation</b></h2> -->
            <ul class="nav nav-pills mb-3 nav-fill" id="pills-tab-1" role="tablist">
                        <?php 
                          if($db->deposit_role($_SESSION["role"])=="0"){
                            ?>
                            <li class="nav-item">
                           <a class="nav-link active" id="pills-home-tab-fill" data-toggle="pill" href="#pills-home-fill" role="tab" aria-controls="pills-home" aria-selected="true"><b>DEPOSIT</b></a>
                           </li>
                         <?php
                          }
                           if($db->withdrawal_role($_SESSION["role"])=="0"){
                            ?>
                             <li class="nav-item">
                              <a data-toggle="pill" data-placement="top" title="Use Existing Email template" class="nav-link" id="pills-profile-tab-fill" href="#pills-profile-fill" role="tab" aria-controls="pills-profile" aria-selected="false"><b>WITHDRAWAL</b></a>
                             </li>
                            <?php
                           }

                          if($db->transfer_role($_SESSION["role"])=="0"){
                          ?>
                            <!--<li class="nav-item">-->
                            <!--   <a data-toggle="pill" data-placement="top" title="Make Settings" class="nav-link" id="pills-transfer-tab-fill" href="#pills-transfer-fill" role="tab" aria-controls="pills-transfer" aria-selected="false"><b>TRANSFER</b></a>-->
                            <!--</li>-->
                          <?php
                            }


                          if($db->history_role($_SESSION["role"])=="0"){
                          ?>
                            <li class="nav-item">
                             <a data-toggle="pill" data-placement="top" title="Account History" class="nav-link" id="pills-history-tab-fill" href="#pills-history-fill" role="tab" aria-controls="pills-history" aria-selected="false"><b>HISTORY</b></a>
                             </li>
                          <?php
                            }


                          if($_SESSION["role"]=="1"){
                          ?>
                          <li class="nav-item">
                             <a data-toggle="pill" data-placement="top" title="Make Settings" class="nav-link" id="pills-settings-tab-fill" href="#pills-settings-fill" role="tab" aria-controls="pills-settings" aria-selected="false"><b>ACCOUNT SETTINGS</b></a>
                          </li>
                          <?php
                            }

                          ?>         
                     </ul>
                 </div>

            
                <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-home-fill" role="tabpanel">
                  <h6 style="margin-bottom: 3%;color:green"><span style="color:green">Deposit/Credit Account</span></h6>
                    <div class="form-group">
                    <label>Date</label>
                     <input class="form-control checkDep" id="idDate" type="date" placeholder="Enter Date">
                  </div>
                  <div class="form-group">
                    <label>Amount (GH¢) <span class="clTo"></span></label>
                    <input class="form-control checkDep" type="number" id="idAmount" placeholder="Enter Amount">
                  </div>
                    <p><a href="#" class="btn_1 medium" id = "btnPostSavings"><i class="spinner"></i><i class="fa fa-plus"></i> Deposit</a></p>               
                    </div>
                    
                    <div class="tab-pane fade show" id="pills-profile-fill" role="tabpanel">
                    <h6 style="margin-bottom: 3%;color:green"><span style="color:red">Withdraw/Debit Account</span></h6>
                    <div class="form-group">
                    <label>Date</label>
                     <input class="form-control checkWith" id="idDate30" type="date" placeholder="Enter Date">
                  </div>
                  <div class="form-group">
                    <label>Amount (GH¢) <span class="clTo"></span><span style="display:none" id="idWithdrawalFee"></span></label>
                    <input class="form-control checkWith" type="number" id="idAmountWithdraw" placeholder="Enter Amount">
                  </div>
                  <div class="form-group">
                    <label>Upload Photo <span style="color:red">*</span></label>
                    <!-- <input class="form-control" type="file" id="idCustPhoto"> -->
                    <a style="margin-top: 10px;" href="https://linksengineering.net/gupload?url=https://lbook.linksengineering.net/acc-manage" class="btn_1 medium">Upload Photo</a>
                    <p id="idPhotoProgress"></p>
                    <div id="dispImage" style="margin-top: 20px;display: none;"><img id="uplPhoto" width="100" height="100"></div>
                  </div>

                     <p class="clShowBtn" style="display: none;"><a disabled href="#" class="btn_1 medium bg-danger"><i class="spinner fa fa-minus clWithdraw"></i>Disabled</a></p> 

                    <p class="clShowAct"><a href="#" class="btn_1 medium bg-danger" id = "btnPostWithdrawal"><i class="spinner fa fa-minus clWithdraw"></i>Withdraw</a></p> 
                    </div>
                     
                     <div class="tab-pane fade show" id="pills-history-fill" role="tabpanel">
                       
                      <ul class="nav nav-pills mb-3 nav-fill" id="pills-tab-1" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="pills-deposit-history" data-toggle="pill" href="#vpills-deposit-history" role="tab" aria-controls="pills-deposit" aria-selected="true"><b>CREDIT/DEPOSITS</b></a>
                        </li>
                        <li class="nav-item">
                           <a data-toggle="pill" data-placement="top" title="Use Existing Email template" class="nav-link" id="pills-withdrawal-history" href="#wpills-withdrawal-history" role="tab" aria-controls="pills-profile" aria-selected="false"><b>DEBIT/WITHDRAWALS</b></a>
                        </li>
                         <li class="nav-item">
                           <a data-toggle="pill" data-placement="top" title="Make Settings" class="nav-link" id="pills-fees-history" href="#wpills-fees-history" role="tab" aria-controls="pills-transfer" aria-selected="false"><b>FEES</b></a>
                        </li>
                        <li class="nav-item">
                           <a data-toggle="pill" data-placement="top" title="Make Settings" class="nav-link" id="pills-interest-history" href="#wpills-interest-history" role="tab" aria-controls="pills-interest" aria-selected="false"><b>INTEREST</b></a>
                        </li>
                     </ul>


                     <div class="tab-content">
                      <div class="tab-pane fade show active" id="vpills-deposit-history" role="tabpanel">
                       <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Date</th>
                                  <th>Operation</th>
                                  <th>Amount</th>
                                  <th>Posted by</th>
                                </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                  <th>#</th>
                                  <th>Date</th>
                                  <th>Operation</th>
                                  <th>Amount</th>
                                  <th>Posted by</th>
                              </tr>
                            </tfoot>
                            <tbody>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      </div>

                      <div class="tab-pane fade show" id="wpills-withdrawal-history" role="tabpanel">
                       <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered" id="dataTableW" width="100%" cellspacing="0">
                            <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Date</th>
                                  <th>Operation</th>
                                  <th>Amount</th>
                                  <th>Posted by</th>
                                  <th>Photo</th>
                                </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                  <th>#</th>
                                  <th>Date</th>
                                  <th>Operation</th>
                                  <th>Amount</th>
                                  <th>Posted by</th>
                                  <th>Photo</th>
                              </tr>
                            </tfoot>
                            <tbody>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      </div>


                      <div class="tab-pane fade show" id="wpills-fees-history" role="tabpanel">
                       <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered" id="dataTableF" width="100%" cellspacing="0">
                            <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Date</th>
                                  <th>Fee Type</th>
                                  <th>Amount</th>
                                </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                  <th>#</th>
                                  <th>Date</th>
                                  <th>Fee Type</th>
                                  <th>Amount</th>
                              </tr>
                            </tfoot>
                            <tbody>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      </div>

                      
                      <div class="tab-pane fade show" id="wpills-interest-history" role="tabpanel">
                       <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered" id="dataTableI" width="100%" cellspacing="0">
                            <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Date</th>
                                  <th>Year</th>
                                  <th>Month</th>
                                  <th>Amount</th>
                                </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                  <th>#</th>
                                  <th>Date</th>
                                  <th>Year</th>
                                  <th>Month</th>
                                  <th>Amount</th>
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
                     

                    <div class="tab-pane fade show" id="pills-settings-fill" role="tabpanel">
                    <h6 style="margin-bottom: 3%"><span><b>ACCOUNT SETTINGS</b></span></h6>
                    <div class="form-group">
                    <label>Status</label>
                          <div class="col-md-10">
                                    <div class="radio d-inline-block mr-2">
                                    <input type="radio" name="bsradio" id="accStatusRadio1">
                                    <label for="radio1">Active</label>
                                     </div>
                                    <div class="radio d-inline-block mr-2">
                                    <input type="radio" name="bsradio" id="accStatusRadio2">
                                    <label for="radio2">Inactive</label>
                                 </div> 
                                 </div>
                        </div>
                    <h6 style="margin-bottom: 3%"><span><b>SMS ALERTS</b></span></h6>
                    <div class="form-group">
                    <label>Status</label>
                          <div class="col-md-10">
                                    <div class="radio d-inline-block mr-2">
                                    <input type="radio" name="ssradio" id="smsStatusRadio1">
                                    <label for="radio3">Active</label>
                                     </div>
                                    <div class="radio d-inline-block mr-2">
                                    <input type="radio" name="ssradio" id="smsStatusRadio2">
                                    <label for="radio4">Inactive</label>
                                 </div> 
                                 </div>
                        </div>
                     </div>
                    </div>

        </div>
      </div>

        <div class="col-md-6">
        <div class="box_general padding_bottom">
          <div class="header_box version_2">
            <h2><i class="fa fa-bar-chart"></i><b>Account Information</b></h2>
          </div>
          <table>
            <tr>
            <td style="font-size: 24px;"><h2>A/C Bal:</h2></td>
            <td></td>
            <td></td>
            <td></td>
             <td><h2><span style="color:green;font-weight: bold;" id="idbalance"></span></h2></td> 
            </tr>
            </table>

            <table style="margin-top:3%">
            <tr>
            <td><h5>Last Deposit:</h5></td>
            <td></td>
            <td></td>
            <td></td>
             <td><h5>GH¢ <span id="idDep"></span></h5></td>
            </tr>
             <tr>
            <td><h5>Date Created:</h5></td>
            <td></td>
            <td></td>
            <td></td>
             <td style="color:green"><h5> <span id="idDepDate"></span></h5></td>
            </tr>
            <tr>
            <td><h5>Posted by:</h5></td>
            <td></td>
            <td></td>
            <td></td>
             <td style="color:green"><h5> <span id="idDepPost"></span></h5></td>
            </tr>
            </table>

            <table style="margin-top:3%">
            <tr>
            <td><h5>Last Withdrawal:</h5></td>
            <td></td>
            <td></td>
            <td></td>
             <td style="color:green"><h5>GH¢ <span id="idWith"></span></h5></td>
            </tr>
             <tr>
            <td><h5>Date Created:</h5></td>
            <td></td>
            <td></td>
            <td></td>
             <td style="color:green"><h5> <span id="idWithDate"></span></h5></td> 
            </tr>
            <tr>
            <td><h5>Posted by:</h5></td>
            <td></td>
            <td></td>
            <td></td>
             <td style="color:green"><h5> <span id="idWithPost"></span></h5></td>
            </tr>
            </table>
   <!--          <a href="#" class="btn_1 medium" id = "btnViewTrans"><i class="spinner fa fa-folder-open"></i> View Transactions</a> -->

        </div>
      </div>
    </div>
    </div>
    </div>
  </body>
    


    <div class="modal fade" id="popRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registration is successful!</h5>
            <button class="close clClose" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
          <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3" class="idOpenAccount">
          <div class="card dashboard text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-wrench"></i>
              </div>
              <div class="mr-5"><h6><a href="#" class="idOpenAccount" style="color:white">Open Account</a></h6></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#" class="idOpenAccount">
              <span class="float-left">Open SUSU, Savings Account for Customer</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
          <div class="col-xl-3 col-sm-6 mb-3" class="idAnother">
          <div class="card dashboard text-white bg-info o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-user"></i>
              </div>
              <div class="mr-5"><h6><a href="#" class="idAnother" style="color:white">Register Another</a></h6></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#" class="idAnother">
              <span class="float-left">Click to Register Another customer</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
          <div class="col-xl-3 col-sm-6 mb-3" class="idHome">
          <div class="card dashboard text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-gear"></i>
              </div>
              <div class="mr-5"><h6><a href="#" class="idHome" style="color:white">Go Home</a></h6></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#" class="idHome">
              <span class="float-left">Click to the Dashboard</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

         <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-sign-out"></i>
              </div>
              <div class="mr-5"><h6><a href="auth" style="color:white">Logout</a></h6></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="auth">
              <span class="float-left">Click to Signout Account</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>