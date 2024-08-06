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
        <h2><i class="fa fa-user"></i>Open Account</h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
          <label>Your photo</label>
            <div id="idImage2" style="margin-bottom:10px"></div>
            </div>
        </div>
        <div class="col-md-8 add_top_30">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>#Code</label>
                <input type="text" class="form-control" id="clCode" disabled>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Fullname</label>
                <input type="text" class="form-control" id="clFullname" disabled>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Phone number</label>
                <input type="text" maxlength="15" class="form-control" id="clPhone" disabled>
              </div>
            </div>
              <div class="col-md-6">
              <div class="form-group">
                <label>ID No</label>
                <input type="text" class="form-control" id="clIDNo" disabled>
              </div>
            </div>

            <div class="col-md-6">
            <div class="form-group">
            <label>Date <span style="color:red">*</span></label>
             <input type="date" maxlength="15" class="form-control opacc" id="idDate">
            </div>
            </div>

            <div class="col-md-6">
            <div class="form-group">
            <label>Choose Product <span style="color:red">*</span></label>
            <select class="form-control clprod opacc">
                    <option disabled selected>Choose Product *</option>
                    <option value="addprod">Add New Product</option>
                    </select>
            </div>
            </div>
            <div class="col-md-6 clShowSubscribe" style="display:none">
            <div class="form-group">
            <label>Choose Subscription <span style="color:red">*</span></label>
            <select class="form-control clSubscribe">
              <option disabled selected>Choose Subscription *</option>
              <option value="30">  1 Month</option>
              <option value="90">  3 Months</option>
              <option value="180"> 6 Months</option>
              <option value="270"> 9 Months</option>
              <option value="360"> 1 Year</option>
              <option value="720"> 2 Years</option>
              <option value="1080">3 Years</option>
              </select>
            </div>
            </div>
            <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Remarks</label>
                <textarea rows="5" class="form-control" id="idDescription" style="height:100px;" placeholder="Enter remarks here"></textarea>
              </div>
            </div>
          </div>
            <p><a href="#" class="btn_1 medium" id = "btnNewAccount"><i class="spinner"></i> Open Account</a></p>
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
          <div class="col-xl-3 col-sm-6 mb-3" class="idOpenAccount">
          <div class="card dashboard text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-wrench"></i>
              </div>
              <div class="mr-5"><h6><a href="#" class="idOpenAccount" style="color:white">Open Account</a></h6></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#" class="idOpenAccount">
              <span class="float-left">Open SUSU, Savings Account for Customer</span>
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
              <span class="float-left">Click to Register Another customer</span>
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
              <span class="float-left">Click to the Dashboard</span>
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
              <span class="float-left">Click to Signout Account</span>
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





