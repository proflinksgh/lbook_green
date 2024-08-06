<body class="fixed-nav sticky-footer" id="page-top">
   <div id="clLoad" style="display: none;">
    <div data-loader="circle-side"></div>
   </div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">All Deposits</li>
      </ol>  
      <?php 
        if($_SESSION['status']==='1'){
         ?>
      <div class="box_general padding_bottom shChatSearch">
      <div class="header_box version_2">
        <h2><i class="fa fa-pencil-square-o"></i>Filter Deposit</h2>
      </div>
      <div class="col-md-12 add_top_30">
        <div class="col-md-8 add_top_30">
          <div class="row">
              <form>
              <div class="col-md-6">
              <div class="form-group">
                <label>Search By <span style="color:red">*</span></label>
                     <select id="idSearchFilter" class="form-control depsearch">
                            <option disabled selected>Choose Criteria</option>
                            <option value="agent">By Agent</option>
                            <option value="accno">Account number</option>
                            <option value="amount">Amount</option>
                            </select>
              </div>
            </div>

              <div class="col-md-6" id="showText" style="display:none">
              <div class="form-group">
                <label><span id="inpType" style="color:red">*</span></label>
                <input id="idInpString" class="form-control" type="text">
              </div>
            </div>

             <div class="col-md-6" style="display:none" id="showAgent">
              <div class="form-group">
                <label>Choose User <span style="color:red">*</span></label>
                    <select id="idAdmin" class="form-control">
                            <?php 
                            $getAgent=$db->getAllData("SELECT * FROM admin_tb");
                            if($getAgent!==0){
                              foreach($getAgent as $row){
                                ?>
                                <option value="<?= $row["CODE"];?>"><?= $row["USERNAME"];?></option>
                                <?php
                              }
                            }
                          ?>
                </select>
              </div>
            </div>
            </form>
            <p class="shFound"></p>
            <p><a href="#0" class="btn_1 medium btnSearchDep"><i class="spinner"></i>Search</a></p>
          </div>
        </div>
    </div>
    </div>
       <?php
      }
    ?>

      <div class="card mb-3" id="searchBox">
        <div class="card-header">        
          <i class="fa fa-table"></i> Deposits</div>
          <div align="right" style="margin-top:1%"> 
           
           <?php 
            if($_SESSION["role"] == "1"){
              ?>
                <a href="#" class="btn btn-success medium" id="btnUpdateDep"><i class="fa fa-pencil-square-o"></i> Edit</a>
                <a href="#" class="btn btn-danger medium" id="deleteDeposit"><i class="fa fa-remove"></i> Delete</a>
              <?php
            }else{
               ?>
                <a href="#" class="btn btn-success medium" disabled><i class="fa fa-pencil-square-o"></i> Edit</a>
                <a href="#" class="btn btn-danger medium" disabled><i class="fa fa-remove"></i> Delete</a>
               <?php
            }
           ?>

          </div>
        <div class="card-body shTable">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                    <th>#</th>
                    <th>Date</th>
                    <th>Customer</th>
                    <th>Account No</th>
                    <th>Amount (GH¢)</th>
                    <th>Total Deposit</th>
                    <th>Posted By</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                    <th>#</th>
                    <th>Date</th>
                    <th>Customer</th>
                    <th>Account No</th>
                    <th>Amount (GH¢)</th>
                    <th>Total Deposit</th>
                    <th>Posted By</th>
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


<div class="modal fade" id="modalDepositUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Deposit</h5>
            <button class="close clCloseUpdt" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
                      <div class="form-group">
                        <label>Date <span style="color:red">*</span></label>
                        <input id="idDepDate" class="form-control updDeposit" type="text" placeholder= "Date" name="idDepDate" required="required">
                      </div>

                       <div class="form-group">
                        <label>Customer <span style="color:red">*</span></label>
                        <input id="idDepClient" class="form-control updDeposit" type="text" placeholder= "Enter fullname" name="idDepClient" required="required" disabled="disabled">
                      </div>

                      <div class="form-group">
                        <label>Account Number <span style="color:red">*</span></label>
                          <input id="idDepAccNo" class="form-control updDeposit" type="text" placeholder= "Account number" name="idDepAccNo" required="required" disabled="disabled">
                      </div>


                      <div class="form-group">
                        <label>Amount (GH¢) <span style="color:red">*</span></label>
                          <input id="idDepAmount" class="form-control updDeposit" type="number" placeholder= "Enter amount" name="idDepAmount" required="required">
                      </div>


                      <div class="form-group">
                        <label>Posted by <span style="color:red">*</span></label>
                           <input id="idDepPosted" class="form-control updDeposit" type="text" placeholder= "Posted by" name="idDepPosted" required="required" disabled="disabled">
                      </div>
          </div>
          <div class="modal-footer">
            <p><a href="#" class="btn_1 medium" id = "btnDepositUpdate"><i class="spinner"></i><i class="fa fa-pencil-square-o"></i> Save Changes</a></p>
          </div>
        </div>
      </div>
</div>