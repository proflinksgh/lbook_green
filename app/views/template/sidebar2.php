<?php 
 $db = $data["initiator"];
?>
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
    <a class="navbar-brand" href="dasboard"><img src="assets/img/logo1.png" data-retina="true" alt="" width="163" height="36"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="daily-record">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Product Sales">-->
        <!--  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#allrec" data-parent="#exampleAccordion">-->
        <!--    <i class="fa fa-fw fa-star"></i>-->
        <!--    <span class="nav-link-text">General Records</span>-->
        <!--  </a>-->
        <!--  <ul class="sidenav-second-level collapse" id="allrec">-->
        <!--     <li>-->
        <!--      <a href="daily-sales">Sales Record</a>-->
        <!--    </li>-->
        <!--    <li>-->
        <!--      <a href="evd">EVD Fee</a>-->
        <!--    </li>-->
        <!--    <li>-->
        <!--      <a href="clerk">Account clerk</a>-->
        <!--    </li>-->
        <!--    <li>-->
        <!--      <a href="mdeposit">Mass Deposit</a>-->
        <!--    </li>-->
        <!--  </ul>-->
        <!--</li>-->
        <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="E-Cash Requisition">-->
        <!--  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#cashpay" data-parent="#exampleAccordion">-->
        <!--    <i class="fa fa-fw fa-users"></i>-->
        <!--    <span class="nav-link-text">Cash Payment</span>-->
        <!--  </a>-->
        <!--  <ul class="sidenav-second-level collapse" id="cashpay">-->
        <!--    <li>-->
        <!--      <a href="cashpay">Add New</a>-->
        <!--    </li>-->
        <!--    <li>-->
        <!--      <a href="cashpay">All Records</a>-->
        <!--    </li>-->
        <!--  </ul>-->
        <!--</li>-->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Staff Report">
            <a class="nav-link" href="staff-report">
            <i class="fa fa-fw fa-gear"></i>
            <span class="nav-link-text">Report Centre</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#logoutModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>