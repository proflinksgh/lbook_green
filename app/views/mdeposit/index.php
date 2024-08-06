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
                         <a href="mdeposit">Mass Deposit</a>
                        <?php
                    }else{
                    	?>
                         <a href="dashboard3">Dashboard</a>
                        <?php
                    }
                ?>
        </li>
        <li class="breadcrumb-item active">Mass Deposit</li>
      </ol>  
      <div class="row">               
       <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-heart"></i>
              </div>
              <div class="mr-5">
              <h5 class="clMassToday">
              </h5>
              <h4>Today's Mass Deposit</h4>
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Mass Deposit</span>
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
              <span class="float-left">Mass Desposit</span>
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
              <h4>Overall</h4>
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Mass Deposit</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
</div>
 
 
      <div class="card mb-3">
        <div class="card-header">        
          <i class="fa fa-table"></i> MASS DEPOSIT SHEET</div>
          <div align="right" style="margin-top:1%">
          <a href="#" class="btn btn-primary medium addMass"><i class="fa fa-user-plus"></i> Add Mass Deposit </a> 
                             <?php
                             if($_SESSION['status'] !== '7'){
                             ?>
                             <a href="#" class="btn btn-danger medium" id="iddelmass"><i class="fa fa-remove"></i> Delete</a> 
                                 <?php
                             }
                        ?>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                          <tr>
                              <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                              <th>#</th>
                              <th>DATE</th>
                              <th>COMMISSION</th>
                              <th>AMOUNT GHS</th>
                              <th>POSTED BY</th>
                        </tr>  
              </thead>
              <tfoot>
                        <tr>
                              <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                              <th>#</th>
                              <th>DATE</th>
                              <th>COMMISSION</th>
                              <th>AMOUNT GHS</th>
                              <th>POSTED BY</th>
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



<div class="modal fade modalMass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Record Mass Deposit</h5>
            <button class="close closePop" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
                      <div class="form-group">
                        <label>Date <span style="color:red">*</span></label>
                        <input disabled id="massDate" class="form-control form-mass" type="text" value="<?= date("Y-m-d"); ?>" required>
                      </div>
                      <div class="form-group">
                        <label>Amount <span style="color:red">*</span></label>
                        <input id="massAmount" class="form-control form-mass" type="number" required="required">
                      </div>
          </div>
          <div class="modal-footer">
            <p><a href="#" class="btn_1 medium btnMass"><i class="spinner"></i><i class="fa fa-pencil-square-o"></i> Submit </a></p>
          </div>
        </div>
      </div>
</div>