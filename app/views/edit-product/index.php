<body class="fixed-nav sticky-footer" id="page-top">
<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Edit Product</li>
      </ol>
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-pencil-square-o"></i>Edit Product</h2>
      </div>
      <div class="col-md-12 add_top_30">
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 add_top_30">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Product Name <span style="color:red">*</span></label>
                  <input id="idProductNameupdate" class="form-control produpd" type="text" placeholder= "Name" name="name" required="required">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Code <span style="color:red">*</span></label>
                 <input id="idProductCodeupdate" class="form-control produpd" disabled type="text" placeholder= "Code" name="code" required="required">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Minimum Amount <span style="color:red">*</span></label>
                 <input id="idMinAmountupdate" class="form-control produpd" value="0" name="init_min_amnt" required="required"> 
              </div>
            </div> 

            <div class="col-md-6">
              <div class="form-group">
                <label>Maximum Amount </label>
                <input id="idMaxAmountupdate" class="form-control produpd"  value="0" name="init_max_amnt" required="required">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Minimum Balance <span style="color:red">*</span></label>
                <input id="idBalMinupdate" class="form-control produpd"  value="0" name="bal_min" required="required">
              </div>
            </div>

              <div class="col-md-6">
              <div class="form-group">
                <label>Interest Rate </label>
                 <input id="idInterestupdate" class="form-control produpd"  value="0" required="required">
              </div>
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label>Interest Rate </label>
                 <input id="idInterestupdate" class="form-control produpd"  value="0" required="required">
              </div>
            </div>

     
              <div class="col-md-6">
              <div class="form-group">
                <label>Interest Period (In days)</label>
                  <input id="idPeriodupdate" class="form-control produpd"  value="0" required="required">
              </div>
            </div>    

            <div class="col-md-6">
              <div class="form-group">
                <label>Entry/Passbook Fee</label>
                  <input id="idEntryFeeupdate" class="form-control produpd"  value="0" name="entry_fee" required="required">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Withdrawal Fee</label>
                   <input id="idWithdrawalFeeupdate" class="form-control produpd"  value="0" name="entry_fee" required="required">
              </div>
            </div>
            <p><a href="#0" class="btn_1 medium" id = "btnPostProductUpdate"><i class="spinner"></i>Submit</a></p>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
  </body>