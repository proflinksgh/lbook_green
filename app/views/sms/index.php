<?php
     $db = $data['initiator'];
  $deposit = 0;
  $withdraw = 0;
  $subscribed = 500;
  $other = 0;
                                      $query = "SELECT count(CONTACT) AS USED from sms_tb WHERE MESSAGE LIKE '%deposited%'";
                                      $stmt = $db->link->prepare($query);
                                      $stmt->execute();
                                      $result = $stmt->fetchAll();
                                      foreach($result as $row)
                                          {
                                       $deposit = $row['USED'];
                                          }
                                          
                                          
                                        $query = "SELECT count(CONTACT) AS USED from sms_tb WHERE MESSAGE LIKE '%withdrawn%'";
                                      $stmt = $db->link->prepare($query);
                                      $stmt->execute();
                                      $result = $stmt->fetchAll();
                                      foreach($result as $row)
                                          {
                                       $withdraw = $row['USED'];
                                          }
                                          
                                          
                                     $query = "SELECT count(CONTACT) AS USED from sms_tb WHERE MESSAGE NOT LIKE '%withdrawn%' AND MESSAGE NOT LIKE '%deposited%'";
                                      $stmt = $db->link->prepare($query);
                                      $stmt->execute();
                                      $result = $stmt->fetchAll();
                                      foreach($result as $row)
                                          {
                                       $other = $row['USED'];
                                          }
                                          
                                          

$remaining = $subscribed - $deposit - $withdraw - $other;
$consumed = $subscribed - $remaining;

 ?>

<div class="content-wrapper" style="min-height: 300px;">
	<section class="content-header">
		<h1>
			SMS STATISTICS
			<small></small>
		</h1>
		<hr style="border:1px solid #000;">
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="md-col-12">
			</div>
			<div class="md-col-12">
				<div class="md-col-12">
				<div class="col-lg-4 col-xs-4">
					<!-- small box -->
					<div class="small-box bg-blue">
						<div class="inner">
							<h3><?php echo $subscribed ?></h3>
							<p>Subscribed Units</p>
						</div>
						<div class="icon">
							<i class="ion ion-ios-people"></i>
						</div>
					</div>
				</div>
				<!-- ./col -->

					<!-- ./col -->
				<div class="col-lg-4 col-xs-4">
					<!-- small box -->
					<div class="small-box bg-blue">
						<div class="inner">
						<h3><?php echo $remaining ?></h3>
						<p>Remaining</p>
						</div>
						<div class="icon">
							<i class="ion ion-ios-people"></i>
						</div>
						<!--<a href="<?php echo $ROOT_LINK;?>foreign_master" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-4 col-xs-4">
					<!-- small box -->
					<div class="small-box bg-blue">
						<div class="inner">
						  <h3>
							<?php echo $consumed ?>
							</h3>
							<p>Consumed</p>
						</div>
						<div class="icon">
							<i class="ion ion-ios-people"></i>
						</div>
					</div>
					<!-- ./col -->
				</div>


				<div class="col-lg-4 col-xs-4">
					<!-- small box -->
					<div class="small-box bg-blue">
						<div class="inner">
							<h3>
					        <?php echo $withdraw ?>
							</h3>

							<p>Withdrawal</p>
						</div>
						<div class="icon">
							<i class="ion ion-ios-people"></i>
						</div>
						 <!--<a href="<?php echo $ROOT_LINK;?>foreign_phd" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
					</div>
					<!-- ./col -->
				</div>

				<!-- End here -->
			</div>
			<!-- End of the md-col-12 -->

			<div class="md-col-12">

				<!-- Start here -->
				<!-- ./col -->
				<div class="col-lg-4 col-xs-6 animated fadeInUp">
					<!-- small box -->
					<div class="small-box bg-green">
						<div class="inner">
							<h3>
							     <?php echo $deposit?>
							</h3>

							<p>Deposit</p>
						</div>
						<div class="icon">
							<i class="ion ion-person-add"></i>
						</div>
						<!--<a href="<?php echo $ROOT_LINK;?>admitted" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-4 col-xs-6 animated fadeInUp">
					<!-- small box -->
					<div class="small-box bg-orange">
						<div class="inner">
							<h3>
							     <?php echo $other ?>
							</h3>

							<p>Others</p>
						</div>
						<div class="icon">
							<i class="ion ion-pie-graph"></i>
						</div>
						<!--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
					</div>
					<!-- ./col -->
				</div>
                <div style="margin-left:20px;font-size:18px;">
                 <a href="#">Click here to topup</a> 
                </div>
			</div>
		</div>
	</section>
</div>
</div>
<!-- /.content-wrapper -->


<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<!--<div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>-->

  <form action="" method="POST" id="update_form">
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <!--div class="x_panel"-->
                  <div class="x_content">
                  <!--put your page content starts here-->
                  <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                    </p>
                    <table id="smsTable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                              <th>ID</th>
                              <th>DATE</th>
                              <th>ACCOUNT NUMBER</th>
                              <th>CONTACT</th>
                              <th>MESSAGE</th>
                              <th>TYPE</th>
                        </tr>   
                      </thead>
                      <tbody>    
                     </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>
                <!--your inserted page ends here-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>







