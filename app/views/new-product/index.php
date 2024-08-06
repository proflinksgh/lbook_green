<?php 
 $db=$data["initiator"];
?>
<body class="fixed-nav sticky-footer" id="page-top">
<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">New Product</li>
      </ol>
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-folder-open"></i>Add New Product</h2>
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
                 <input id="idProductName" class="form-control col" type="text" placeholder= "Name" name="name" required="required">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Code <span style="color:red">*</span></label>
                <input id="idProductCode" class="form-control col" type="text" value="<?php echo $db->gencode(); ?>" disabled placeholder= "Code" name="code" required="required">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Minimum Amount <span style="color:red">*</span></label>
                <input id="idMinAmount" class="form-control col" value="0" name="init_min_amnt" required="required"> 
              </div>
            </div> 

            <div class="col-md-6">
              <div class="form-group">
                <label>Maximum Amount </label>
                <input id="idMaxAmount" class="form-control"  value="0" name="init_max_amnt" required="required">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Minimum Balance <span style="color:red">*</span></label>
                <input id="idBalMin" class="form-control col"  value="0" name="bal_min" required="required">
              </div>
            </div>

              <div class="col-md-6">
              <div class="form-group">
                <label>Interest Rate </label>
                 <input id="idInterestRate" class="form-control"  value="0" name="init_rate" required="required">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Interest Period </label>
                   <select name="intPeriod" id="intPeriod" class="form-control">
                                <option disabled="disabled">Select interest</option>
                                    <option value="0" selected>  None</option>
                                    <option value="7">  Weekly</option>
                                    <option value="30"> Monthly</option>
                                    <option value="356">Yearly</option>
                            </select>
                  </div>
            </div>
              <div class="col-md-6">
              <div class="form-group">
                <label>Entry fee/Pass Book Fee</label>
                 <input id="idEntryFee" class="form-control"  value="0" name="entry_fee" required="required">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Withdrawal Fee</label>
                  <input id="idWithdrawalFee" class="form-control"  value="0" name="withdrawal_fee" required="required">
              </div>
            </div>
            <p><a href="#0" class="btn_1 medium" id = "btnPostProduct"><i class="spinner"></i>Submit</a></p>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
  </body>