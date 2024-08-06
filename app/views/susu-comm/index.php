<?php
 $db = $data['initiator'];
 $user = $_SESSION['id'];
 $month = $db->get_full_month(date('M'));
 $year = date('Y');
?>
<body class="fixed-nav sticky-footer" id="page-top">
   <div id="clLoad" style="display: none;">
    <div data-loader="circle-side"></div>
   </div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
                <?php
                    if($_SESSION['status'] == '1'){
                        ?>
                         <a href="dashboard2">Dashboard</a>
                        <?php
                    }else if($_SESSION['status'] == '7'){
                        ?>
                         <a href="daily-record">Dashboard</a>
                        <?php
                    }else{
                    	?>
                         <a href="dashboard3">Dashboard</a>
                        <?php
                    }
                ?>
        </li>
        <li class="breadcrumb-item active">Daily Deposit Commission</li>
      </ol>  
      <div class="row">               
       <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-heart"></i>
              </div>
              <div class="mr-5">
              <h5 class="clSalesToday">
              </h5>
              <h4>Today's Deposit</h4>
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Deposits</span>
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
              <h5 class="clComm">
              </h5>
              <h4><?= $db->get_full_month(date("M")); ?></h4>
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Commission</span>
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
                <i class="fa fa-fw fa-heart"></i>
              </div>
              <div class="mr-5">
              <h5 class="clOverral">
              </h5>
              <h4>Overral</h4>
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Deposit</span>
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
                <i class="fa fa-fw fa-heart"></i>
              </div>
              <div class="mr-5">
              <h5 class="clOveralcomm">
              </h5>
              <h4>Overral</h4>
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Commission</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
</div>
 
 
      <div class="card mb-3">
        <div class="card-header">        
          <i class="fa fa-table"></i> DAILY DEPOSIT COMMISSION SHEET</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                          <tr>
                              <th>#</th>
                              <th>DATE</th>
                              <th>AMOUNT</th>
                              <th>COMMISSION</th>
                              <th>POSTED_BY</th>
                        </tr>  
              </thead>
              <tfoot>
                        <tr>
                              <th>#</th>
                              <th>DATE</th>
                              <th>AMOUNT</th>
                              <th>COMMISSION</th>
                              <th>POSTED_BY</th>
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
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
</body>    