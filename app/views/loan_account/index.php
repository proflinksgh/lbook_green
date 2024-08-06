<input type="hidden" id="sid1" value="<?= isset($_GET["sid1"])?$_GET["sid1"]:"none"; ?>">
<body class="fixed-nav sticky-footer" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="loan_members">All Applicants</a>
        </li>
        <li class="breadcrumb-item active">Register Member</li>
      </ol>

     <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-file"></i>DATE APPLIED</h2>
      </div>
      <div class="row">
          <div class="col-md-12">
            <div class="form-group">
               <label>Enter Date <span style="color:red">*</span></label>
               <input type="date" id="appdate" class="form-control form" placeholder="Choose Date">      
            </div>
        </div>
      </div>
    </div>
    
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-file"></i>APPLICANT CATEGORY</h2>
      </div>
      <div class="row">
          <div class="col-md-12">
            <div class="form-group">
               <label>Category <span style="color:red">*</span></label>
                   <select name="category" id="category" class="form-control form">
                    <option disabled selected>Choose Category *</option>
                    <option selected value="1">Business</option>
                    <option value="2">Group</option>
                  </select>
            </div>
        </div>
      </div>
    </div>
      
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-file"></i>PERSONAL DETAILS</h2>
      </div>
      <div class="row">
        <div class="form-group">
          <label>Your photo (160x160 pixels)</label>
            <div id="idImage2" style="margin-bottom:10px"><img width="160" height="160" src="<?= isset($_GET["sid1"])?"https://drive.google.com/thumbnail?id=".$_GET["sid1"]."":"assets/img/no-pic.png"; ?>"></div>
            <a style="margin-top: 10px;" href="https://linksengineering.net/gupload?url=https://green.lbookfintech.com/loan_account" class="btn_1 medium">Browse</a>
            </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Title <span style="color:red">*</span></label>
              <select id="title" class="form-control form">
              <option disabled selected>Select Title</option>
              <option value="Mr">Mr.</option>
              <option value="Ms">Ms.</option>
              <option value="Mrs">Mrs.</option>
              </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Gender <span style="color:red">*</span></label>
              <select id="gender" class="form-control form">
              <option disabled selected>Choose Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              </select>
          </div>
        </div>
      </div>
      <!-- /row-->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Surname <span style="color:red">*</span></label>
            <input type="text" id="surname" class="form-control form" placeholder="Surname">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Other Name <span style="color:red">*</span></label>
            <input type="text" class="form-control form" id="othername" placeholder="Other Name">
          </div>
        </div>
      </div>
      <!-- /row-->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Phone number <span style="color:red">*</span></label>
            <input type="tel" id="phone" class="form-control form" placeholder="Phone number">
          </div>
        </div>
          <div class="col-md-6">
          <div class="form-group">
            <label>Date of Birth <span style="color:red">*</span></label>
            <input type="date" id="dob" class="form-control form" placeholder="Date of Birth">
          </div>
        </div>
      </div>
       <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Number of Dependants <span style="color:red">*</span></label>
            <input type="text" id="dependant" class="form-control form" placeholder="Number of Dependants">
          </div>
        </div>
      </div>
    </div>

    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-file"></i>IDENTITY</h2>
      </div>
      <div class="row">
          <div class="col-md-6">
            <div class="form-group">
               <label>Identification <span style="color:red">*</span></label>
                   <select name="idIdentification" id="identification" class="form-control form">
                    <option value="IDcard" disabled selected>Select ID Card *</option>
                     <option value="Ecowas Card">Ecowas ID Card</option>
                    <option value="Passport">Passport</option>
                    <option value="Voters Id">Voter ID</option>
                    <option value="NHIS">NHIS</option>
                    <option value="Drivers License">Driver license</option>
                    </select>
            </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label>Identification Number <span style="color:red">*</span></label>
                <input id="idno" class="form-control form" type="text" name="idIdnumber" required="required" placeholder="Enter ID number">
            </div>
            </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Date of Issue <span style="color:red">*</span></label>
            <input type="date" id="dateofissue" class="form-control form" placeholder="Date of Issue">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Expiry Date <span style="color:red">*</span></label>
            <input type="date" id="expiry" class="form-control form" placeholder="Expiry Date">
          </div>
        </div>
      </div>
    </div>

    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-file-text"></i>BUSINESS DETAILS</h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Name of Business <span style="color:red">*</span></label>
            <input type="text" class="form-control form" id="namebusiness" placeholder="Name of Business">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Address</label>
            <input type="text" id="address" class="form-control" placeholder="Address">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Location <span style="color:red">*</span></label>
            <input type="text" id="location" class="form-control form" placeholder="Location">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Tel No <span style="color:red">*</span></label>
            <input type="text" id="telno" class="form-control form" placeholder="Tel No">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>No. of years in Business <span style="color:red">*</span></label>
            <input type="text" id="noofyears" class="form-control form" placeholder="No. of years in Business">
          </div>
        </div>
      </div>
    </div>


      <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-file-text"></i>EMPLOYMENT TYPE</h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Employment Type <span style="color:red">*</span></label>
              <select id="emptype" class="form-control form">
                    <option disabled selected>Choose Employment Type</option>
                     <option value="1">Employed</option>
                    <option value="3">Self-Employed</option>
                    <option value="2">Unemployed</option>
                    </select>
          </div>
        </div>
    </div>
  </div>



    <div class="box_general padding_bottom" style="display: none;" id="shEmployer">
      <div class="header_box version_2">
        <h2><i class="fa fa-file-text"></i>EMPLOYER DETAILS</h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Name of Employer <span style="color:red">*</span></label>
            <input type="text" id="employer" class="form-control form" placeholder="Name of Employer">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Position <span style="color:red">*</span></label>
            <input type="text" id="position" class="form-control form" placeholder="Position">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Tel. No. of Employer <span style="color:red">*</span></label>
            <input type="text" id="employertel" class="form-control form" placeholder="Tel. No. of Employer">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Net Salary <span style="color:red">*</span></label>
            <input type="text" id="netsalary" class="form-control form" placeholder="Net Salary">
          </div>
        </div>
      </div>
    </div>

    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-file-text"></i>DIRECTION</h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Direction of Route To Business/Place of Work <span style="color:red" id="shDirect" style="display:none"></span></label>
             <textarea rows="5" class="form-control form" id="bdirection" style="height:100px;" placeholder="Description"></textarea>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Direction of Route To Residence <span style="color:red">*</span></label>
             <textarea rows="5" id="rdirection" class="form-control form" style="height:100px;" placeholder="Description"></textarea>
          </div>
        </div>
      </div>
    </div>
    <p><a href="#0" class="btn_1 medium btnCreateLoan">Create Account</a></p>
    </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a> 
</body>