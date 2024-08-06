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
          <a href="dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">E-Cash Services</li>
      </ol>  

     <div class="row">
      <div class="col-md-6">
      <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-pencil-square-o"></i>Filter E-Cash Report</h2>
      </div>
      <div class="col-md-12 add_top_30">
      <div class="row" id="idReportTop">
        <div class="col-md-8">
        </div>
        <div class="col-md-12 add_top_30">
          <div class="row">
              <form>
              <div class="col-md-12">
              <div class="form-group">
                <label>From <span style="color:red">*</span></label>
                <input type="date" class="form-control genfilt" id="pick-date">
              </div>
            </div>

              <div class="col-md-12">
              <div class="form-group">
                <label> To <span style="color:red">*</span></label>
                 <input type="date" class="form-control genfilt" id="pick-date2">
              </div>
            </div>
            </form>
            <p><a href="#0" class="btn_1 medium btnGenFilter"><i class="spinner"></i>Generate</a></p>
          </div>
        </div>
      </div>
    </div>
    </div>
      </div>
      <div class="col-md-6" id="idShowMain">
      <div class="box_general padding_bottom shBoxSearch">
      <div class="header_box version_2">
        <h2 class="clSearch"><i class="fa fa-pencil-square-o"></i></h2>
      </div>
      <div class="col-md-12 add_top_30">            
          <div class="x_content">
                          <div class="col-md-12"><p id="hello"></p></div>
                          <div class="col-md-12"><p id="hello2"></p></div>
                      </div>
    </div>
    </div>
      </div>
      
    </div>
 
 
      <div class="card mb-3">
        <div class="card-header">        
          <i class="fa fa-table"></i>E-Cash Transactions </div>
          <div align="right" style="margin-top:1%">
          <a href="#" class="btn btn-primary medium addECash"><i class="fa fa-user-plus"></i> Add New E-Cash </a>
           <a href="#" class="btn btn-danger medium delECash"><i class="fa fa-remove"></i> Delete</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                          <tr>
                              <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                              <th>#</th>
                              <th>DATE</th>
                              <th>CATEGORY</th>
                              <th>AGENT/CUSTOMER</th>
                              <th>AMOUNT</th>
                              <th>COMMISSION</th>
                              <th>PAYMENT MODE</th>
                              <th>PROCESSED BY</th>
                        </tr>  
              </thead>
              <tfoot>
                        <tr>
                              <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                              <th>#</th>
                              <th>DATE</th>
                              <th>CATEGORY</th>
                              <th>CUSTOMER</th>
                              <th>AMOUNT</th>
                              <th>COMMISSION</th>
                              <th>PAYMENT MODE</th>
                              <th>PROCESSED BY</th>
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



<div class="modal fade modalE-Cash" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Record New Transaction</h5>
            <button class="close closePop" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
                      <div class="form-group">
                        <label>Date <span style="color:red">*</span></label>
                        <input id="cashDate" class="form-control ecash" type="date" required>
                      </div>
                      <div class="form-group">
                        <label>Category <span style="color:red">*</span></label>
                        <select id="idCashCat" class="form-control ecash">
                        <option disabled selected>Choose Category</option>
                        <option value="1">Staff</option>
                        <option value="2">Customer</option>
                        </select>
                      </div>

                      <div class="form-group" style="display: none;" id="agentSh">
                        <label>Agent Name <span style="color:red">*</span></label>
                        <select id="idCashAgent" class="form-control">
                        <option disabled selected>Choose Agent</option>
                         <?php
                          $db=$data["initiator"];
                          $getData=$db->getAllData("SELECT * FROM admin_tb");
                          if($getData!=0){
                            foreach($getData as $row){
                            ?>
                            <option value="<?= $row["ID"]; ?>"><?= $row["SURNAME"]." ".$row["OTHERNAME"]; ?></option>
                            <?php
                          }
                        }
                        ?>
                        </select>
                      </div>

                       <div class="form-group" style="display: none;" id="custSh">
                        <label>Customer Name <span style="color:red">*</span></label>
                        <select id="idCashCust" class="form-control">
                        <option disabled selected>Choose Customer</option>
                        <option value="add">-- Add New Customer --</option>
                           <?php
                          $db=$data["initiator"];
                          $getData=$db->getAllData("SELECT * FROM mcustomer_tb WHERE CATEGORY=1");
                          if($getData!=0){
                            foreach($getData as $row){
                            ?>
                            <option data-value="<?= $row["AGENTID"]; ?>" value="<?= $row["ID"]; ?>"><?= $row["AGENT_NAME"]; ?></option>
                            <?php
                          }
                        }
                        ?>
                        </select>
                      </div>
                      <div class="form-group" style="display:none" id="shAgentNo">
                        <label>Agent Number</label>
                        <input disabled id="idAgentNo" class="form-control" type="text" required>
                      </div>
                      <div class="form-group">
                        <label>Amount (GHS) <span style="color:red">*</span></label>
                        <input id="cashAmt" class="form-control ecash" type="number" required>
                      </div>
                      <div class="form-group">
                        <label>Fee rate (GHS) <span style="color:red">*</span></label>
                        <input id="cashFee" class="form-control ecash" disabled value="0" type="number" required>
                      </div>
                      <div class="form-group">
                        <label>Amount Payable (GHS)</label>
                        <input disabled id="amtPayable" class="form-control" type="number" required>
                      </div>
                        <div class="form-group">
                        <label>Payment Mode <span style="color:red">*</span></label>
                        <select id="idCashStatus" class="form-control ecash">
                        <option disabled selected>Choose Mode</option>
                        <option value="1">Fully Paid</option>
                        <option value="2">Partially Paid</option>
                        <option value="3">Unpaid</option>
                        </select>
                      </div>
          </div>
          <div class="modal-footer">
            <p><a href="#" class="btn_1 medium btnSubmitECash"><i class="spinner"></i><i class="fa fa-pencil-square-o"></i> Submit </a></p>
          </div>
        </div>
      </div>
</div>


<div class="modal fade" id="modalEditEvd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit EVD</h5>
            <button class="close closePop" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          
          <div class="modal-body">
                      <div class="form-group">
                        <label># <span style="color:red">*</span></label>
                        <input id="edSaleId" class="form-control form-ved" type="text" disabled required="required">
                      </div>
                      <div class="form-group">
                        <label>Date <span style="color:red">*</span></label>
                        <input id="edEvdDate" class="form-control form-ved" type="text" required="required">
                      </div>
                        <div class="form-group">
                        <label>Amount GHS<span style="color:red">*</span></label>
                        <input id="edEvd" class="form-control form-ved" type="number" required="required">
                      </div>

          </div>
          <div class="modal-footer">
            <p><a href="#" class="btn_1 medium btnEditEvd"><i class="spinner"></i><i class="fa fa-pencil-square-o"></i> Save Changes </a></p>
          </div>
        </div>
      </div>
</div>