<input type="hidden" id="sid1" value="<?= isset($_GET["sid1"])?$_GET["sid1"]:"none"; ?>">
<body class="fixed-nav sticky-footer" id="page-top">
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Registration</li>
      </ol>
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-user"></i>Register Customer</h2>
      </div>
      <div class="col-md-12 add_top_30">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
          <label>Your photo (160x160 pixels)</label>
            <div id="idImage2" style="margin-bottom:10px"><img width="160" height="160" src="<?= isset($_GET["sid1"])?"https://drive.google.com/thumbnail?id=".$_GET["sid1"]."":"assets/img/no-pic.png"; ?>"></div>
            <!-- <input type="file" id="file"> -->
            <a style="margin-top: 10px;" href="https://linksengineering.net/gupload?url=https://lbook.linksengineering.net/register" class="btn_1 medium">Browse</a>
            </div>
        </div>
        <div class="col-md-8 add_top_30">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Surname <span style="color:red">*</span></label>
                <input type="text" class="form-control form" id="idLastname"  placeholder="Surname" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>First name <span style="color:red">*</span></label>
                <input type="text" class="form-control form" id="idFirstname"  placeholder="Enter Other name(s)">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Other name </label>
                <input type="text" class="form-control" id="idOthername" placeholder="Enter Other name(s)">
              </div>
            </div>
              <div class="col-md-6">
              <div class="form-group">
                <label>Gender <span style="color:red">*</span></label>
                <select id="idGender" class="form-control form">
                      <option disabled selected>Select gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      </select>
              </div>
            </div>
              <div class="col-md-6">
              <div class="form-group">
                <label>Date of Birth <span style="color:red">*</span></label>
                <input type="date" class="form-control form" id="idDob" placeholder="Date of Birth">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Phone number <span style="color:red">*</span></label>
                <input type="tel" class="form-control form" id="idContact1"  placeholder="Your telephone number">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Next of Kin <span style="color:red">*</span></label>
                <input type="text" class="form-control form" id="idNextofKin" placeholder="Next of Kin">
              </div>
            </div>

              <div class="col-md-6">
              <div class="form-group">
                <label>Next of Kin Phone <span style="color:red">*</span></label>
                <input type="tel" class="form-control form" id="idNextofKinContact" placeholder="Next of Kin Phone number">
              </div>
            </div>

               <div class="col-md-6">
              <div class="form-group">
                <label>Region <span style="color:red">*</span></label>
                    <select id="idRegion" class="form-control form">
                    <option value="region" disabled selected>Select Region *</option>
                    <option value="eastern">Eastern</option>
                    <option value="central">Central</option>
                    <option value="ashanti">Ashanti</option>
                    <option value="brong ahafo">Brong Ahafo</option>
                    <option value="bono east">Bono East</option>
                    <option value="ahafo">Ahafo</option>
                    <option value="greater accra">Greater Accra</option>
                    <option value="northern">Northern</option>
                    <option value="savannah">Savannah</option>
                    <option value="north east">North East</option>
                    <option value="upper east">Upper East</option>
                    <option value="upper west">Upper West</option>
                    <option value="volta">Volta</option>
                    <option value="oti">Oti </option>
                    <option value="western">Western</option>
                    <option value="western north">Western North</option>
                    </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>City <span style="color:red">*</span></label>
                 <input id="idCity" class="form-control form" type="text" name="idCity" required="required" placeholder="Enter city">
              </div>
            </div>
             <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                 <input id="idEmail" class="form-control" type="email" placeholder="Enter email">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Education Qualification</label>
                    <select id="idEducation" class="form-control">
                    <option disabled selected>Select Education Qualification *</option>
                    <option value="JHS">JHS/JSS</option>
                    <option value="SHS">SHS</option>
                    <option value="Diploma">Diploma</option>
                    <option value="HND">HND</option>
                    <option value="Degree">Degree</option>
                    <option value="Master">Master</option>
                    <option value="PHD">PHD</option>
                    </select>
              </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                <label>Area <span style="color:red">*</span></label>
                <select id="idResidence" class="form-control form">
                <option disabled selected>Select Area <span style="color:red">*</span></option>
                </select>
            </div>
            </div>



            <div class="col-md-6">
            <div class="form-group">
               <label>Identification <span style="color:red">*</span></label>
                   <select name="idIdentification" id="idIdentification" class="form-control form">
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
                <input id="idIdnumber" class="form-control form" type="text" name="idIdnumber" required="required" placeholder="Enter ID number">
            </div>
            </div>

                                
                 <div class="col-md-6">
                             <div class="form-group">
                              <label>Occupation <span style="color:red">*</span></label>
                                <select id="idOccupation" class="form-control form">
                                    <option disabled selected>Select occupation*</option>
                                    <option value="new" style="font-weight: bold">--Add new occupation--</option>
                                    <?php
                                      $db = $data['initiator'];
                                      $result = $db->getAllData("SELECT OCCUPATION from occupation_tb ORDER BY OCCUPATION");
                                      foreach($result as $row)
                                          {
                                       echo "<option value='".$row['OCCUPATION']."'>". $row['OCCUPATION']."</option>";
                                          }
                                    ?>
                                </select>
                            </div>
                        </div>
            
            <p><a href="#0" class="btn_1 medium" id = "btnSubmitRegistration"><i class="spinner"></i>Submit</a></p>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
  </body>
    


    <div class="modal fade" id="popRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registration is successful!</h5>
            <button class="close clClose" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
          <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-wrench"></i>
              </div>
              <div class="mr-5"><h6><a href="cust-account" style="color:white">Open Account</a></h6></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="cust-account">
              <span class="float-left"><a href="cust-account" style="color:white">Open SUSU, Savings Account for Customer</a></span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
          <div class="col-xl-3 col-sm-6 mb-3" class="idAnother">
          <div class="card dashboard text-white bg-info o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-user"></i>
              </div>
              <div class="mr-5"><h6><a href="#" class="idAnother" style="color:white">Register Another</a></h6></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#" class="idAnother">
              <span class="float-left"><a href="cust-account" class="idAnother" style="color:white">Register Another Customer</a></span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
          <div class="col-xl-3 col-sm-6 mb-3" class="idHome">
          <div class="card dashboard text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-gear"></i>
              </div>
              <div class="mr-5"><h6><a href="#" class="idHome" style="color:white">Go Home</a></h6></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#" class="idHome">
              <span class="float-left"><a href="#" class="idHome" style="color:white">Click to Dashboard</a></span>
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
                <i class="fa fa-fw fa-sign-out"></i>
              </div>
              <div class="mr-5"><h6><a href="auth" style="color:white">Logout</a></h6></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="auth">
              <span class="float-left"><a href="auth" style="color:white">Click to Signout</a></span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="modalNewResidence" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Area!</h5>
            <button class="close clClose" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="col-md-6">
              <div class="form-group">
                <label>Enter Area <span style="color:red">*</span></label>
                 <input id="idNewResidence" class="form-control colone" type="text" required="required" placeholder="Enter Area">
              </div>
            </div>
          </div>
          <div align="center"><h5 class="clShow" style="display:none"></h5></div>
          <div class="modal-footer">
            <a class="btn btn-danger" style="color:white" data-dismiss="modal">Close</a>
            <a class="btn btn-primary" id="btnPostNew" href="#"><i class="spinner"></i>Submit</a>
          </div>
        </div>
      </div>
    </div>




<form action="" method="POST" id="modal-form">
<div class="container">  
<div class="modal fade" id="modalNewOccupation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Add new occupation</p>
      </div>

      <!--Body-->
      <div class="modal-body">
                         <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idNewOccupation" class="form-control colocc" type="text" placeholder= "Enter occupation" name="idNewOccupation" required="required">
                            </div>
      </div>
      <div class="modal-footer flex-center">
        <a id = "btnPostNewOccupation" style="color: white" class="btn btn-success">Add</a>
      </div>
    </div>
  </div>
</div>
</div>
</form>
