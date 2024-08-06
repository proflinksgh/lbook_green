<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="pending">All Pending</a>
        </li>
        <li class="breadcrumb-item active">Pending customers</li>
      </ol>
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-user"></i>Customer details</h2>
			</div>
			<?php
            if(isset($_GET["key"])){
             $db=$data["initiator"];
             $getData=$db->getAllData("SELECT * FROM client_tb WHERE ID=".$_GET["key"]."");
             foreach($getData as $row){
             ?>
             <div class="row">
				<div class="col-md-4">
					<div class="form-group">
					<label>Your photo</label>
						<div style="margin-bottom:10px"><img src="upload/<?= $row["IMAGE_PATH"]; ?>" width="300" height="250"/></div>
				    </div>
				</div>
				<div class="col-md-8 add_top_30">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Surname <span style="color:red">*</span></label>
								<input type="text" disabled class="form-control" value="<?= $row["LASTNAME"]; ?>" placeholder="Surname">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Othername(s) <span style="color:red">*</span></label>
								<input type="text" disabled class="form-control" value="<?= $row["FIRSTNAME"]." ".$row["OTHERNAME"]; ?>" placeholder="Othername(s)">
							</div>
						</div>
					</div>
					<!-- /row-->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Phone number <span style="color:red">*</span></label>
								<input type="tel" disabled class="form-control" value="<?= $row["CONTACT_1"]; ?>" placeholder="Your telephone number">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Date of Birth <span style="color:red">*</span></label>
								<input type="text" disabled class="form-control" value="<?= $row["DOB"]; ?>" placeholder="Date of Birth">
							</div>
						</div>						
						<div class="col-md-6">
							<div class="form-group">
								<label>Next Of Kin <span style="color:red">*</span></label>
								<input type="text" disabled class="form-control" value="<?= $row["NEXT_OF_KIN"]; ?>"  placeholder="Next of Kin">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Next Of Kin Contact</label>
								<input type="tel" disabled class="form-control" value="<?= $row["NEXT_OF_KIN_CONTACT"]; ?>"  placeholder="Next of Kin Phone number">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>City <span style="color:red">*</span></label>
								<input type="text" disabled class="form-control" value="<?= $row["CITY"]; ?>" placeholder="City">
							</div>
						</div>
							<div class="col-md-6">
							<div class="form-group">
								<label>Area <span style="color:red">*</span></label>
								<input type="text" disabled class="form-control" value="<?= $row["AREA"]; ?>" placeholder="Area">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Occupation <span style="color:red">*</span></label>
								<input type="text" disabled class="form-control" value="<?= $row["OCCUPATION"]; ?>" placeholder="Occupation">
							</div>
						</div>
							<div class="col-md-6">
							<div class="form-group">
								<label>Identification <span style="color:red">*</span></label>
								<input type="text" disabled class="form-control" value="<?= $row["IDENTIFICATION"]; ?>" placeholder="Occupation">
							</div>
						</div>
							<div class="col-md-6">
							<div class="form-group">
								<label>Identification Number <span style="color:red">*</span></label>
								<input type="text" disabled class="form-control" value="<?= $row["IDNUMBER"]; ?>" placeholder="Occupation">
							</div>
						</div>
						
					</div>
                    <div>
                        <div class="buttons" style="margin-bottom: 30px">
							<a href="#" cid="<?= $row["ID"]; ?>" class="btn_1 medium btnApprove"><i class="fa fa-fw fa-check-circle-o"></i> Approve</a>
							<a href="#" cid="<?= $row["ID"]; ?>" class="btn_1 gray btnDecline"><i class="fa fa-fw fa-times-circle-o"></i> Decline</a>
						</div>
                    </div>
				</div>
			</div>
             <?php
             }
            }else{
             ?>
              <h2>No customer found</h2>
             <?php
            }
            ?>
		</div>
	  </div>
   	</div>