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
                             <a href="#">&nbsp;Welcome <?= $_SESSION["fullname"]." (".$db->get_data_here_value("SELECT ROLE FROM role_tb WHERE ID = ".$_SESSION["role"]."","ROLE").")"; ?></a>
                        <?php
                    }else{
                    	?>
                         <a href="dashboard3">Dashboard</a>
                        <?php
                    }
                ?>
        </li>
        <li class="breadcrumb-item active">Daily MOMO Record</li>
      </ol>  
      <div class="row">               
        <?php
          if($_SESSION['status'] == '7'){                
        ?>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-envelope-open"></i>
              </div>
              <div class="mr-5">
               <h5>
              		 <?php
							      $depcomm = $db->get_data_here_value("SELECT SUM(DEPOSIT_COMM) as DEPOSITCOMM FROM momo_trans_tb where POSTED_BY = '$user' AND monthname(DATE_CREATED) = '$month'", "DEPOSITCOMM");
							      if(isset($depcomm)){
							         echo 'GH¢'.$depcomm; 
							      }else{
							          echo 'GH¢0.00';
							      }
							   ?>
							  </h5>
							<h4><?php echo date("M") ?></h4>
							<h4>
							    <?php
							    echo "Deposit Commission";
							 ?>
							</h4>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="deposit">
              <span class="float-left">Cash In Commission</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
		<?php
                        
     }else{
       ?>
         <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-envelope-open"></i>
              </div>
              <div class="mr-5">
              	<h5>
              		 <?php
							     $depcomm = $db->get_data_here_value("SELECT SUM(DEPOSIT_COMM) as DEPOSITCOMM FROM momo_trans_tb where monthname(DATE_CREATED) = '$month'", "DEPOSITCOMM");
							      if(isset($depcomm)){
							         echo 'GH¢'.$depcomm; 
							      }else{
							         echo 'GH¢0.00';
							      }
							   ?>
							 </h5>
							<h4><?php echo date("M") ?></h4>
            </div>
          </div>
            <a class="card-footer text-white clearfix medium z-1" href="deposit">
              <span class="float-left">Overall Cash In Commission</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
       <?php                      
      }
                        
   
      if($_SESSION['status'] == '7'){                 
         ?>
          <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-heart"></i>
              </div>
              <div class="mr-5">
                <h5>
                	 <?php							      
							      $cashoutcomm = $db->get_data_here_value("SELECT SUM(CASHOUT_COMM) as CASH FROM momo_trans_tb where POSTED_BY = '$user' AND monthname(DATE_CREATED) = '$month'", "CASH");
							     if(isset($cashoutcomm)){
							         echo 'GH¢'.$cashoutcomm; 
							      }else{
							          echo 'GH¢0.00';
							      }
							   ?>
                  </h5>
                	<h4><?php echo date("M") ?></h4>
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="withdrawal">
              <span class="float-left">Cash Out Commission</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
			  <?php
          }else{
           ?>

           <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-heart"></i>
              </div>
              <div class="mr-5">
                <h5>
                	 <?php							      
							      $cashoutcomm = $db->get_data_here_value("SELECT SUM(CASHOUT_COMM) as CASH FROM momo_trans_tb where monthname(DATE_CREATED) = '$month'", "CASH");
							     if(isset($cashoutcomm)){
							         echo 'GH¢'.$cashoutcomm; 
							      }else{
							          echo 'GH¢0.00';
							      }
							       
							   ?>
                  </h5>
                	<h4><?php echo date("M") ?></h4>
              </div>
            </div>
            <a class="card-footer text-white clearfix medium z-1" href="withdrawal">
              <span class="float-left">Overall Cash Out Commission</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>				
					 <?php
         }
                        
          ?>

         <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-star"></i>
              </div>
        <div class="mr-5">
          <h5>
          	 <?php
							   	 
							      $db = $data['initiator'];
							      $user = $_SESSION['id'];
							      $status = $_SESSION['status'];
							      
							      if($status != '1'){
							         $deposit = $db->get_data_here_value("SELECT SUM(DEPOSIT) as DEPO FROM momo_trans_tb where POSTED_BY = '$user'", "DEPO"); 
							      }else{
							          $deposit = $db->get_data_here_value("SELECT SUM(DEPOSIT) as DEPO FROM momo_trans_tb", "DEPO");
							      }
							      
							      if(isset($deposit)){
							         echo 'GH¢'.$deposit; 
							      }else{
							          echo 'GH¢0.00';
							      }
							   ?>
          </h5>
        </div>
            </div>
            <a class="card-footer text-white clearfix medium z-1">
              <span class="float-left">Overall Cash In</span>
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
                <h5>
							   	  <?php
							      $user = $_SESSION['id'];
							      $role = $_SESSION['status'];
							      if($role == '7'){
							         $cashout = $db->get_data_here_value("SELECT SUM(CASHOUT) as CASH FROM momo_trans_tb where POSTED_BY = '$user'", "CASH"); 
							      }else{
							          $cashout = $db->get_data_here_value("SELECT SUM(CASHOUT) as CASH FROM momo_trans_tb", "CASH");
							      }
							      
							      if(isset($cashout)){
							         echo 'GH¢'.$cashout; 
							      }else{
							          echo 'GH¢0.00';
							      }
							   ?>
                </h5>
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="interest">
              <span class="float-left">Overall Cashout</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
				</div>
 
      <div class="card mb-3">
        <div class="card-header">        
          <i class="fa fa-table"></i> DAILY MOMO TRANSACTION SHEET</div>
          <div align="right" style="margin-top:1%">
                            <?php
                             if($_SESSION['status'] == '1'){
                               ?>
                               <a href="#" class="btn btn-primary medium" disabled id="momoAddRecord"><i class="fa fa-user-plus"></i> Add New Record </a> 
                               <?php
                             }else{
                                 ?>
                                   <a href="#" class="btn btn-primary medium" id="momoAddRecord"><i class="fa fa-user-plus"></i> Add New Record </a> 
                               <?php
                               }
                              ?>
                             <?php
                             if($_SESSION['status'] !== '7'){
                             ?>
                             <a href="#" class="btn btn-success medium" id="iduptrecord"><i class="fa fa-pencil-square-o"></i> Edit</a>
                             <a href="#" class="btn btn-danger medium" id="iddelrecord"><i class="fa fa-remove"></i> Delete</a> 
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
                              <th>ID</th>
                              <th>DATE</th>
                              <th>CASH IN(GH¢)</th>
                              <th>COMMISSION(GH¢)</th>
                              <th>CASH OUT(GH¢)</th>
                              <th>COMMISSION(GH¢)</th>
                              <th>AGENT</th>
                        </tr>  
              </thead>
              <tfoot>
                        <tr>
                              <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                              <th>ID</th>
                              <th>DATE</th>
                              <th>CASH IN(GH¢)</th>
                              <th>COMMISSION(GH¢)</th>
                              <th>CASH OUT(GH¢)</th>
                              <th>COMMISSION(GH¢)</th>
                              <th>AGENT</th>
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



<div class="modal fade" id="modaluptrecord" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update record</h5>
            <button class="close clCloseUpdt" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
                      <div class="form-group">
                        <label>Date <span style="color:red">*</span></label>
                        <input id="momoDate1" class="form-control form-up" type="date" required="required">
                      </div>

                        <div class="form-group">
                        <label>Cash In <span style="color:red">*</span></label>
                        <input id="momoDeposit1" class="form-control form-up" type="number" required="required">
                      </div>

                       <div class="form-group">
                        <label>Cash Out <span style="color:red">*</span></label>
                        <input id="momoCashout1" class="form-control form-up" type="number" required="required">
                      </div>
          </div>
          <div class="modal-footer">
            <p><a href="#" class="btn_1 medium" id = "btnDailyRecord"><i class="spinner"></i><i class="fa fa-pencil-square-o"></i> Save Changes </a></p>
          </div>
        </div>
      </div>
</div>


<div class="modal fade" id="modalAddMomo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Daily Record<</h5>
            <button class="close clCloseUpdt" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
                      <div class="form-group">
                        <label>Date <span style="color:red">*</span></label>
                        <input id="momoDate" class="form-control form-momo" type="date" required="required">
                      </div>

                        <div class="form-group">
                        <label>Cash In<span style="color:red">*</span></label>
                        <input id="momoDeposit" class="form-control form-momo" type="number" required="required">
                      </div>

                       <div class="form-group">
                        <label>Cash Out <span style="color:red">*</span></label>
                        <input id="momoCashout" class="form-control form-momo" type="number" required="required">
                      </div>
          </div>
          <div class="modal-footer">
            <p><a href="#" class="btn_1 medium" id="btnMomoRecord"><i class="spinner"></i><i class="fa fa-pencil-square-o"></i> Submit </a></p>
          </div>
        </div>
      </div>
</div>