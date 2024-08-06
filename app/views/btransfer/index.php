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
        <li class="breadcrumb-item active">EVD Bulk Transfer</li>
      </ol>  

     <div class="row">
      <div class="col-md-6">
      <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-pencil-square-o"></i>Filter Report</h2>
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

            </form>
            <p><a href="#0" class="btn_1 medium btnGenFilterBulk"><i class="spinner"></i>Generate</a></p>
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
          <i class="fa fa-table"></i>EVD BULK TRANSFER </div>
          <div align="right" style="margin-top:1%">
          <a href="#" class="btn btn-primary medium addBulk"><i class="fa fa-user-plus"></i> Add New Record </a>
           <!-- <a href="#" class="btn btn-success medium edReq"><i class="fa fa-edit"></i> Edit</a> -->
          <a href="#" class="btn btn-danger medium delBulk"><i class="fa fa-remove"></i> Delete</a>
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
                              <th>EVD NUMBER</th>
                              <th>AMOUNT (GHS)</th>
                              <th>FEE (GHS)</th>
                              <th>PAID-IN BY</th>
                              <th>PROCESSED BY</th>
                        </tr>  
              </thead>
              <tfoot>
                        <tr>
                              <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                              <th>#</th>
                              <th>DATE</th>
                              <th>CUSTOMER</th>
                              <th>EVD NUMBER</th>
                              <th>AMOUNT (GHS)</th>
                              <th>FEE (GHS)</th>
                              <th>PAID-IN BY</th>
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


<div class="modal fade modalBulk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Record</h5>
            <button class="close closePop" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>

          <div class="modal-body">
                      <div class="form-group">
                        <label>Date <span style="color:red">*</span></label>
                        <input id="bDate" class="form-control pay" type="date" required>
                      </div>
                      
                      <div class="form-group">
                        <label>Category <span style="color:red">*</span></label>
                        <select id="custCatSel" class="form-control pay">
                        <option disabled selected>Choose Customer Category</option>
                        <option value="1">Agent</option>
                        <option value="2">EVD Customer</option>
                        <option value="3">Other</option>

                        </select>
                      </div>

                      <div class="form-group" style="display: none;" id="agentCShSel">
                        <label>Agent Name <span style="color:red">*</span></label>
                        <select id="idCashAgentCustSel" class="form-control">
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
                   
                      <div class="form-group" style="display:none" id="shCustSel">
                        <label>Customer <span style="color:red">*</span></label>
                        <select id="idPayCustSel" class="form-control">
                         <option value="addnew">Add New EVD Customer</option> 
                        <option disabled selected>Choose Customer</option>
                           <?php
                          $db=$data["initiator"];
                          $getData=$db->getAllData("SELECT * FROM mcustomer_tb WHERE CATEGORY=3");
                          if($getData!=0){
                            foreach($getData as $row){
                            ?>
                            <option data-value="<?= $row["AGENTID"]; ?>" value="<?= $row["FULLNAME"]; ?>"><?= $row["FULLNAME"]; ?></option>
                            <?php
                          }
                        }
                        ?>
                        </select>
                      </div>

                        <div class="form-group" style="display:none" id="shCustOtherSel">
                        <label>Enter Name <span style="color:red">*</span></label>
                        <input id="pCNameSel" class="form-control" type="text">
                      </div>

                      <div class="form-group">
                        <label>EVD Number <span style="color:red">*</span></label>
                        <input id="idEvdCust" class="form-control pay" type="text">
                      </div>

                       <div class="form-group">
                        <label>Amount (GHS) <span style="color:red">*</span></label>
                        <input id="bAmount" class="form-control pay" type="number">
                      </div>

                        <div class="form-group">
                        <label>Fee/Commission (GHS) <span style="color:red">*</span></label>
                        <input id="bFee" class="form-control pay" type="number">
                      </div>

                        <div class="form-group">
                        <label>Paid-In By Category <span style="color:red">*</span></label>
                        <select id="custCat" class="form-control pay">
                        <option disabled selected>Choose Category</option>
                        <option value="1">Agent</option>
                        <option value="2">EVD Customer</option>
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
                          $getData=$db->getAllData("SELECT * FROM mcustomer_tb WHERE CATEGORY=3");
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

                      <div class="form-group" style="display:none" id="shPaid">
                        <label>Enter Name <span style="color:red">*</span></label>
                        <input id="bOName" class="form-control" type="text">
                      </div>

                      <div class="form-group">
                      <label>Processed By <span style="color:red">*</span></label>
                        <select id="bProcBy" class="form-control pay">
                        <option disabled selected>Choose Staff</option>
                         <?php
                          $db=$data["initiator"];
                          $getData=$db->getAllData("SELECT * FROM admin_tb");
                          if($getData!=0){
                            foreach($getData as $row){
                            ?>
                            <option value="<?= $row["CODE"] ?>"><?= $row["SURNAME"]." ".$row["OTHERNAME"]; ?></option>
                            <?php
                          }
                        }
                        ?>
                        </select>

          </div>
          <div class="modal-footer">
            <p><a href="#" class="btn_1 medium btnSubmitBulk"><i class="spinner"></i><i class="fa fa-pencil-square-o"></i> Submit </a></p>
          </div>
        </div>
      </div>
</div>
</div>