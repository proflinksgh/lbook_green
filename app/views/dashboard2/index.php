<?php 
   $db=$data['initiator'];
   $month = date('m');
   $update_record = $db->updateFunction("UPDATE month_tb SET SELECTION = '1' WHERE CODE !='$month'");
   $update_record = $db->updateFunction("UPDATE month_tb SET SELECTION = '0' WHERE CODE ='$month'");
   $year = date('Y');
?>
<body class="fixed-nav sticky-footer" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">&nbsp;Welcome <?= $_SESSION["fullname"]." (".$db->get_data_here_value("SELECT ROLE FROM role_tb WHERE ID = ".$_SESSION["role"]."","ROLE").")"; ?></a>
        </li>
        <li class="breadcrumb-item active"><strong><?= isset($_SESSION['company'])?$_SESSION['company']:""; ?></strong></li>
      </ol> 
    </div>    
    <?php 
     if($_SESSION["role"]==1){
         ?>
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-envelope-open"></i>
              </div>
              <div class="mr-5">
                <h5 class="amtDeposit"></h5></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="deposit">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
          <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-heart"></i>
              </div>
              <div class="mr-5">
                <h5 class="amtWith"></h5></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="withdrawal">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-star"></i>
              </div>
        <div class="mr-5">
          <h5 class="amtFees"></h5></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="fees">
              <span class="float-left">View Details</span>
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
                <i class="fa fa-fw fa-calendar-check-o"></i>
              </div>
              <div class="mr-5">
                <h5 class="amtInterest"></h5>
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="interest">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
    </div>
         <?php
     }
    ?>
    <div class="features clearfix">
      <div class="container">
        <ul>
          <?php 
          
           if($db->register_role($_SESSION["role"])=="0"){
            ?>
              <li><a href="register"><i class="pe-7s-user"></i></a>
              <h4><span style="color:#FFC107">Open Account</span></h4><span>Register Customer</span>
              </li>
              <li><a href="clients"><i class="pe-7s-users"></i></a>
              <h4><span style="color:#FFC107"><span id="idCustomers"></span> customers</span></h4><span>All Customers</span>
              </li>
          <?php
           }

           if($_SESSION["role"]=="1"){
               ?>
                 <li><a href="savings"><i class="pe-7s-cash"></i></a>
                   <h4><span style="color:#FFC107"><span id="idAccounts"></span> Accounts</span></h4><span>All Accounts</span>          
                 </li>
               <?php
           }else{
                ?>
                 <li><a href="#"><i class="pe-7s-cash"></i></a>
                   <h4><span style="color:#FFC107"><span id="idProduct"></span> Products</span></h4><span>All Products</span>          
                 </li>
               <?php
           }
          ?>
        </ul>
      </div>
    </div>
    <!-- /cards -->
    <h2></h2>
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-bar-chart"></i>Statistic</h2>
                <div class="col-md-10">
            <div align="right" class="form-group">
                <label>Filter</label>
                  <select class="clSel">
                    <option value="today">Today</option>
                    <option value="yesterday">Yesterday</option>
                    <option value="thisweek">This Week</option>
                    <option value="lastweek">Last Week</option>
                    <option value="thismonth">This Month</option>
                    <option value="lastmonth">Last Month</option>
                    <option value="thisyear">This Year</option>
                    <option value="lastyear">Last Year</option>
                    <option value="custom">Custom</option>
                  </select>
              </div>
              </div>
      </div>
     <canvas id="myAreaChart" width="100%" height="30" style="margin:45px 0 15px 0;"></canvas>
    </div>
    </div>
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</body> 