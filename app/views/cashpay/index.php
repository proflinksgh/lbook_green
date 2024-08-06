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
        <li class="breadcrumb-item active">Cash Payment Portal</li>
      </ol>  

     <div class="row">
      <div class="col-md-6">
      <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-pencil-square-o"></i>Filter Cash Payment Report</h2>
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
                <input type="date" class="form-control filtCash" id="pick-date">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label> To <span style="color:red">*</span></label>
                 <input type="date" class="form-control filtCash" id="pick-date2">
              </div>
            </div>
               
            <?php  
             if($_SESSION["status"]==="1"){
              ?>
              <div class="col-md-12">
                <div class="form-group">
                        <label>User <span style="color:red">*</span></label>
                        <select id="idCashAgent" class="form-control">
                         <option value="all">ALL</option>
                         <option value="233211">Administrator</option>
                         <?php
                          $db=$data["initiator"];
                          $getData=$db->getAllData("SELECT * FROM admin_tb WHERE USER_ROLE=7");
                          if($getData!=0){
                            foreach($getData as $row){
                            ?>
                            <option value="<?= $row["CODE"]; ?>"><?= $row["SURNAME"]." ".$row["OTHERNAME"]; ?></option>
                            <?php
                          }
                        }
                        ?>
                        </select>
                      </div>
                    </div>
              <?php
             }else{
              ?>
               <div class="col-md-12">
                <div class="form-group">
                        <label>User <span style="color:red">*</span></label>
                        <select id="idCashAgent" class="form-control">
                         <option selected value="<?= $_SESSION['id']; ?>"><?= $_SESSION['fullname']; ?></option>
                        </select>
                      </div>
                    </div>
              <?php
             }
            ?>
            </form>
            <p><a href="#0" class="btn_1 medium btnGenFilterCash"><i class="spinner"></i>Generate</a></p>
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
          <i class="fa fa-table"></i>Cash Payment </div>
          <div align="right" style="margin-top:1%">
          <a href="#" class="btn btn-primary medium addCashPay"><i class="fa fa-user-plus"></i> Add New Record </a>
           <!-- <a href="#" class="btn btn-success medium edReq"><i class="fa fa-edit"></i> Edit</a> -->
          <a href="#" class="btn btn-danger medium delCashReq"><i class="fa fa-remove"></i> Delete</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                          <tr>
                              <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                              <th>#</th>
                              <th>DATE</th>
                              <th>CUSTOMER</th>
                              <th>CATEGORY</th>
                              <th>DENOMINATION</th>
                              <th>TOTAL AMOUNT (GHS)</th>
                              <th>PAID-IN BY</th>
                              <th>RECEIVED BY</th>
                              <th>POSTED BY</th>
                        </tr>  
              </thead>
              <tfoot>
                        <tr>
                              <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                              <th>#</th>
                              <th>DATE</th>
                              <th>CUSTOMER</th>
                              <th>CATEGORY</th>
                              <th>DENOMINATION</th>
                              <th>TOTAL AMOUNT (GHS)</th>
                              <th>PAID-IN BY</th>
                              <th>RECEIVED BY</th>
                               <th>POSTED BY</th>
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


<div class="modal fade modalCashPay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Payment</h5>
            <button class="close closePop" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
                      <div class="form-group">
                        <label>Date <span style="color:red">*</span></label>
                        <input id="pDate" class="form-control pay" type="date" required>
                      </div>
                      
                      <div class="form-group">
                        <label>Category <span style="color:red">*</span></label>
                        <select id="custCat" class="form-control pay">
                        <option disabled selected>Choose Customer Category</option>
                        <option value="1">Agent</option>
                        <option value="2">MOMO Customer</option>
                        <option value="3">Other</option>

                        </select>
                      </div>

                      <div class="form-group" style="display: none;" id="agentCSh">
                        <label>Agent Name <span style="color:red">*</span></label>
                        <select id="idCashAgentCust" class="form-control">
                        <option disabled selected>Choose Agent</option>
                         <?php
                          $db=$data["initiator"];
                          $getData=$db->getAllData("SELECT * FROM admin_tb");
                          if($getData!=0){
                            foreach($getData as $row){
                            ?>
                            <option value="<?= $row["SURNAME"]." ".$row["OTHERNAME"]; ?>"><?= $row["SURNAME"]." ".$row["OTHERNAME"]; ?></option>
                            <?php
                          }
                        }
                        ?>
                        </select>
                      </div>
                   
                      <div class="form-group" style="display:none" id="shCust">
                        <label>Customer <span style="color:red">*</span></label>
                        <select id="idPayCust" class="form-control">
                        <option disabled selected>Choose Customer</option>
                           <?php
                          $db=$data["initiator"];
                          $getData=$db->getAllData("SELECT * FROM mcustomer_tb WHERE CATEGORY=1");
                          if($getData!=0){
                            foreach($getData as $row){
                            ?>
                            <option value="<?= $row["FULLNAME"]; ?>"><?= $row["FULLNAME"]; ?></option>
                            <?php
                          }
                        }
                        ?>
                        </select>
                      </div>

                        <div class="form-group" style="display:none" id="shCustOther">
                        <label>Enter Name <span style="color:red">*</span></label>
                        <input id="pCName" class="form-control" type="text">
                      </div>

                      <div class="form-group">
                        <label>Category <span style="color:red">*</span></label>
                        <select id="pCategory" class="form-control pay">
                        <option disabled selected>Choose Category</option>
                        <option value="MOMO">MOMO</option>
                        <option value="E-CASH">E-CASH</option>
                        <option value="OTHER">OTHER</option>
                        </select>
                      </div>
                   
                      <div class="form-group">
                      <label>Denomination <span style="color:red">*</span></label>
                        <table class='table table-bordered' width='100%' cellspacing='0'>
                        <tr><td colspan='3'><b>DENOMINATION</b></td><td><b>ENTER QUANTITY</b></td><td><b>AMOUNT</b></td></tr>
                        <tr><td colspan='3'><b>GHS 200</b></td><td><input type="number" value='0' class="form-control pay" id="idDenNo200"></td><td id="idAmt200"></td></tr>
                        <tr><td colspan='3'><b>GHS 100</b></td><td><input type="number" value='0' class="form-control pay" id="idDenNo100"></td><td id="idAmt100"></td></tr>
                        <tr><td colspan='3'><b>GHS 50</b></td><td><input type="number" value='0' class="form-control pay" id="idDenNo50"></td><td id="idAmt50"></td></tr>
                        <tr><td colspan='3'><b>GHS 20</b></td><td><input type="number" value='0' class="form-control pay" id="idDenNo20"></td><td id="idAmt20"></td></tr>
                        <tr><td colspan='3'><b>GHS 10</b></td><td><input type="number" value='0' class="form-control pay" id="idDenNo10"></td><td id="idAmt10"></td></tr>
                        <tr><td colspan='3'><b>GHS 5</b></td><td><input type="number" value='0' class="form-control pay" id="idDenNo5"></td><td id="idAmt5"></td></tr>
                        <tr><td colspan='3'><b>GHS 2</b></td><td><input type="number" value='0' class="form-control pay" id="idDenNo2"></td><td id="idAmt2"></td></tr>
                        <tr><td colspan='3'><b>GHS 1</b></td><td><input type="number" value='0' class="form-control pay" id="idDenNo1"></td><td id="idAmt1"></td></tr>
                          <tr><td colspan='3'><b>Coins</b></td><td><input type="number" value='0' placeholder="Enter Coins Amount" class="form-control" id="idDenNoC"></td><td id="idAmtC"></td></tr>
                      </table>
                      </div>

                       <div class="form-group">
                        <label>Total Amount (GHS) <span style="color:red">*</span></label>
                        <input id="pAmount" class="form-control pay" type="text" required>
                      </div>

                      <div class="form-group">
                      <label>Paid-In By <span style="color:red">*</span></label>
                        <select id="pPaid" class="form-control pay">
                        <option disabled selected>Choose Staff</option>
                         <?php
                          $db=$data["initiator"];
                          $getData=$db->getAllData("SELECT * FROM admin_tb");
                          if($getData!=0){
                            foreach($getData as $row){
                            ?>
                            <option value="<?= $row["SURNAME"]." ".$row["OTHERNAME"]; ?>"><?= $row["SURNAME"]." ".$row["OTHERNAME"]; ?></option>
                            <?php
                          }
                        }
                        ?>
                        <option value="1">Other</option>
                        </select>
                      </div>

                      <div class="form-group" style="display:none" id="shPaid">
                        <label>Enter Name <span style="color:red">*</span></label>
                        <input id="pOName" class="form-control" type="text">
                      </div>

                      <div class="form-group">
                      <label>Received By <span style="color:red">*</span></label>
                        <select id="pRec" class="form-control pay">
                        <option disabled selected>Choose Staff</option>
                         <?php
                          $db=$data["initiator"];
                          $getData=$db->getAllData("SELECT * FROM admin_tb");
                          if($getData!=0){
                            foreach($getData as $row){
                            ?>
                            <option value="<?= $row["SURNAME"]." ".$row["OTHERNAME"]; ?>"><?= $row["SURNAME"]." ".$row["OTHERNAME"]; ?></option>
                            <?php
                          }
                        }
                        ?>
                        <option value="1">Other</option>
                        </select>
                      </div>
                      <div class="form-group" style="display:none" id="shRec">
                        <label>Enter Name <span style="color:red">*</span></label>
                        <input id="pRName" class="form-control" type="text">
                      </div>

          </div>
          <div class="modal-footer">
            <p><a href="#" class="btn_1 medium btnSubmitCash"><i class="spinner"></i><i class="fa fa-pencil-square-o"></i> Submit </a></p>
          </div>
        </div>
      </div>
</div>