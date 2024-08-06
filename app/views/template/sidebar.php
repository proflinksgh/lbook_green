<?php 
 $db = $data["initiator"];
?>

    <div class="modal fade modalLoadApp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Attention!</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Please upload Signed Loan Agreement document to proceed</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary btnUplAgree" href="#">Click to Upload</a>
          </div>
        </div>
      </div>
    </div>


 <div class="modal fade" id="modalReg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Verification</h5>
            <button class="close closePendPop" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
               <h5>Pending verification. Please wait!</h5>
               <p>(This window will close automatically)</p>
          </div>
          <span class="loader"></span>
          <style>
            .loader {
              margin-left: 100px;
              width: 30px;
              height: 30px;
              position: relative;
              border-radius: 50%;
              color: #6610f2;
              animation: fill 1s ease-in infinite alternate;
            }
            .loader::before , .loader::after {
              content: '';
              position: absolute;
              height: 100%;
              width: 100%;
              border-radius: 50%;
              left: 48px;
              top: 0;
              animation: fill 0.9s ease-in infinite alternate;
            }
            
            .loader::after {
              left: auto;
              right: 48px;
              animation-duration: 1.1s;
            }
            
             @keyframes fill {
             0% {  box-shadow: 0 0 0 2px inset }
             100%{ box-shadow: 0 0 0 10px inset }
            }
          </style>
          <div class="modal-footer">
            <a class="btn btn-danger" style="color:white" data-dismiss="modal">Close</a>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade clModalSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Successful!</h5>
            <button class="close clClose" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body"></div>
          <div class="modal-footer">
            <a class="btn btn-primary" data-dismiss="modal" style="color:white">Okay</a>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="auth">Logout</a>
          </div>
        </div>
      </div>
    </div>

   
  <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="dasboard"><img src="assets/img/nlogo.png" width="40" height="40"><strong>GREEN STAR</strong></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        
        <?php 
          if($db->register_role($_SESSION["role"])=="0"){
            ?>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseProfile" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Customers</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseProfile">
            <li>
              <a href="register">Register SUSU</a>
            </li>
             <li>
              <a href="loan_account">Register Loan</a>
            </li>
            <li>
              <a href="clients">All SUSU Customers</a>
            </li>
            <li>
              <a href="loan_members">All Loan Customers</a>
            </li>
          </ul>
        </li>
        <?php
          }
        ?>


          <?php 
          if($_SESSION['role'] == "1"){
            ?>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Product list">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#product" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-cart-arrow-down"></i>
            <span class="nav-link-text">Products</span>
          </a>
          <ul class="sidenav-second-level collapse" id="product">
            <li>
              <a href="product">SUSUS | Saving Product</a>
            </li>
            <li>
              <a href="loan-products">Loan Product</a>
            </li>
          </ul>
        </li>
          <?php
          }
        ?>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Customer Transactions">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#trans" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-search"></i>
            <span class="nav-link-text">Transaction</span>
          </a>
          <ul class="sidenav-second-level collapse" id="trans">
            <li>
            <?php 
              if($db->deposit_role($_SESSION["role"])=="0"){
              ?>
              <a href="deposit">Deposits</a>
              <?php
              }
             ?>
            </li>
            <li>
            <?php 
              if($db->withdrawal_role($_SESSION["role"])=="0"){
              ?>
              <a href="withdrawal">Withdrawals</a>
              <?php
              }
             ?>
            </li>
            <li>
            <?php 
              if($db->transfer_role($_SESSION["role"])=="0"){
              ?>
              <a href="">Transfers</a>
              <?php
              }
             ?>
            </li>
            <li>
            <?php 
              if($db->withdrawal_role($_SESSION["role"])=="0"){
              ?>
              <!-- <a href="fees">Fees</a> -->
              <?php
              }
             ?>
            </li>
            <li>
            <?php 
              if($_SESSION["role"]=="1"){
              ?>
               <a href="interest">Interests</a>
              <?php
              }
             ?>
            </li>
          </ul>
        </li>
        
          <?php 
          if($_SESSION['role'] == "1"){
            ?>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Account list">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#account" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Accounts</span>
          </a>
          <ul class="sidenav-second-level collapse" id="account">
             <li>
              <a href="pending">Pending</a>
            </li>
            <li>
              <a href="openaccount">Open account</a>
            </li>
             <li>
              <a href="decaccount">Declined</a>
            </li>
            <li>
              <a href="savings">All Accounts</a>
            </li>
<!--              <li>
              <a href="matured">Matured Accounts</a>
            </li> -->
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Loan Management">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#loan" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Loan Management</span>
          </a>
          <ul class="sidenav-second-level collapse" id="loan">
            <li>
              <a href="create_loan">Create Loan</a>
            </li>
            <li>
              <a href="create_loan">All Loans</a>
            </li>
             <li>
              <a href="formfee">Form & Processing Fees</a>
            </li>
            <li>
              <a href="repayment">Repayment List</a>
            </li>
            <li>
              <a href="finloan">Completed Loan List</a>
            </li>
            <li>
            <a href="penalty" class="penalty">Penalty List</a>
            </li>
            <li>
              <a href="http://localhost/lbook_green/forms/form.pdf" target="blank" class="agree">Agreement Form</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Account Statement">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#statement" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-bars"></i>
            <span class="nav-link-text">Report</span>
          </a>
          <ul class="sidenav-second-level collapse" id="statement">
            <li>
              <a href="custreport">Account Statement</a>
            </li>
            <li>
              <a href="report">Admin Report</a>
            </li>
            <li>
              <a href="chart">Balance Chart</a>
            </li>
            <li>
              <a href="https://sendquicksms.com">SMS Report</a>
            </li>
          </ul>
        </li>

        <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Account Statement">-->
        <!--  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#payroll" data-parent="#exampleAccordion">-->
        <!--    <i class="fa fa-fw fa-wrench"></i>-->
        <!--    <span class="nav-link-text">Staff Payroll</span>-->
        <!--  </a>-->
        <!--  <ul class="sidenav-second-level collapse" id="payroll">-->
        <!--    <li><a href="deduction">Staff Deduction</a></li>-->
        <!--    <li><a href="susu-comm">Daily SUSU Commission</a></li>-->
        <!--         <li>-->
        <!--          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#detail">Monthly commission</a>-->
        <!--          <ul class="sidenav-second-level collapse" id="detail">-->
        <!--          <li><a href="staff-commission" >Cashier & Mobile bankers</a></li>-->
        <!--          <li><a href="momo-commission" >MOMO Agents</a></li>-->
        <!--          </ul>-->
        <!--          </li>-->
        <!--        <li><a href="payroll">Payroll</a></li>-->
        <!--  </ul>-->
        <!--</li>-->
        
        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Account Statement">-->
        <!--  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#attendance" data-parent="#exampleAccordion">-->
        <!--    <i class="fa fa-fw fa-wrench"></i>-->
        <!--    <span class="nav-link-text">Attendance</span>-->
        <!--  </a>-->
        <!--  <ul class="sidenav-second-level collapse" id="attendance">-->
        <!--     <li><a href="atreport">Report</a></li>-->
        <!--    <li><a href="attcomm">Commission</a></li>-->
                 <!--<li>-->
                 <!-- <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#detail">Monthly commission</a>-->
                 <!-- <ul class="sidenav-second-level collapse" id="detail">-->
                 <!-- <li><a href="staff-commission" >Cashier & Mobile bankers</a></li>-->
                 <!-- <li><a href="momo-commission" >MOMO Agents</a></li>-->
                 <!-- </ul>-->
                 <!-- </li>-->
        <!--  </ul>-->
        <!--</li>-->
        
      
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="System Users">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#user-account" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Management</span>
          </a>
          <ul class="sidenav-second-level collapse" id="user-account">
            <li>
              <a href="create-user">Create User</a>
            </li>
            <li>
              <a href="management">User Accounts</a>
            </li>
          </ul>
        </li>


         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Settings">
          <a class="nav-link" href="settings">
            <i class="fa fa-fw fa-gear"></i>
            <span class="nav-link-text">Settings</span>
          </a>
        </li>

        <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Settings">-->
        <!--  <a class="nav-link" href="settings#sync">-->
        <!--    <i class="fa fa-fw fa-cloud"></i>-->
        <!--    <span class="nav-link-text">Synchronisation</span>-->
        <!--  </a>-->
        <!--</li>-->
            <?php
          }else if($_SESSION['role'] == "5"||$_SESSION['role'] == "6"){
              ?>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Account list">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#account" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-file"></i>
                <span class="nav-link-text">Accounts</span>
              </a>
              <ul class="sidenav-second-level collapse" id="account">
                <li>
                  <a href="openaccount">Open account</a>
                </li>
                <li>
                 <a href="decaccount">Declined</a>
                </li>
              </ul>
            </li>
            <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Agent Ledger">-->
            <!--  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#ledger" data-parent="#exampleAccordion">-->
            <!--    <i class="fa fa-fw fa-users"></i>-->
            <!--    <span class="nav-link-text">Agent Ledger</span>-->
            <!--  </a>-->
            <!--  <ul class="sidenav-second-level collapse" id="ledger">-->
            <!--    <li>-->
            <!--      <a href="ledger">Add New</a>-->
            <!--    </li>-->
            <!--    <li>-->
            <!--      <a href="ledger">All Records</a>-->
            <!--    </li>-->
            <!--  </ul>-->
            <!--</li>-->

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Staff Report">
            <a class="nav-link" href="staff-report">
            <i class="fa fa-fw fa-gear"></i>
            <span class="nav-link-text">Report Centre</span>
          </a>
        </li>
           <?php
          }
        ?>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown clShowAlert" style="display:none">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning clAlerts"></span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header"><span class="clAlerts"></span> Pending Approval:</h6>
            <div class="dropdown-divider"></div>
            <div class="clAppRev"></div>
            <div class="dropdown-divider"></div>
            <?php 
             if($page_parse==="ledger"){
              ?>
               <a class="dropdown-item small" href="ledger">View all request</a>
              <?php
             }else{
              ?>
               <a class="dropdown-item small" href="pendinbg">View all alerts</a>
              <?php
             }
            ?>
           

          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control search-top chksearch" type="text" placeholder="Enter Account No...">
              <span class="input-group-btn">
                <button class="btn btn-primary btnSearchCust">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#logoutModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>