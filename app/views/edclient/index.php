<input type="hidden" id="sid1" value="<?= isset($_GET["sid1"])?$_GET["sid1"]:"none"; ?>">
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Customer Detail</li>
      </ol>
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-user"></i>Customer details</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
					<label>Your photo</label>
						<div id="idImage2" style="margin-bottom:10px"></div>
						<!-- <input type="file" id="file"> -->
						<a style="margin-top: 10px;" href="https://linksengineering.net/gupload?url=https://st.linksengineering.net/edclient" class="btn_1 medium">Browse</a>
				    </div>
				</div>
				<div class="col-md-8 add_top_30">
					<div class="row">
					<div class="col-md-6">
							<div class="form-group">
								<label>First Name <span style="color:red">*</span></label>
								<input type="text" class="form-control clupdate" id="idFirstname" placeholder="First name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Surname Name <span style="color:red">*</span></label>
								<input type="text" class="form-control clupdate" id="idSurname" placeholder="Surname">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Othername(s)</label>
								<input type="text" class="form-control" id="idOthername" placeholder="Other name(s)">
							</div>
						</div>
					</div>
					<!-- /row-->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Phone number <span style="color:red">*</span></label>
								<input type="tel" class="form-control clupdate" id="idClientContact" placeholder="Your telephone number">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Date of Birth <span style="color:red">*</span></label>
								<input type="text" class="form-control clupdate" id="idClientDob" placeholder="Date of Birth">
							</div>
						</div>						
						<div class="col-md-6">
							<div class="form-group">
								<label>Next Of Kin <span style="color:red">*</span></label>
								<input type="text" class="form-control clupdate" id="idNextofKin"  placeholder="Next of Kin">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Next Of Kin Contact</label>
								<input type="tel" class="form-control" id="idNextofKinContact"  placeholder="Next of Kin Phone number">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>City <span style="color:red">*</span></label>
								<input type="text" class="form-control clupdate" id="idCity" placeholder="City">
							</div>
						</div>
							<div class="col-md-6">
							<div class="form-group">
								<label>Area <span style="color:red">*</span></label>
								<input type="text" class="form-control clupdate" id="idArea" placeholder="Area">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Occupation <span style="color:red">*</span></label>
								<input type="text" class="form-control clupdate" id="idOccupation" placeholder="Occupation">
							</div>
						</div>
					</div>
						<p><a href="#0" class="btn_1 medium" id = "idPostClientUpdate"><i class="spinner"></i> Save Changes</a></p>
				</div>
			</div>
		</div>
	  </div>
   	</div>
