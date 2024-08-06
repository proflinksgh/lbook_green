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
        <li class="breadcrumb-item active">Agents Ledger</li>
      </ol>  

     <div class="row">
      <div class="col-md-6">
      <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-pencil-square-o"></i>Filter Agents Ledger Report</h2>
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

            <?php 
             if($_SESSION["status"]==="1"){
              ?>
            <div class="col-md-12">
              <div class="form-group">
                <label> Choose Staff <span style="color:red">*</span></label>
                   <select id="idUser" class="form-control">
                                    <option value="region" disabled selected>Select username</option>
                                    <?php
                                      $db = $data['initiator'];
                                      $result = $db->getAllData("SELECT USER_ROLE, ID, CODE, USERNAME from admin_tb");
                                      foreach($result as $row)
                                          {
                                       echo "<option value='".$row['CODE']."' data-value='".$row["USER_ROLE"]."'>".$row['USERNAME']."</option>";
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
                  <label> Agent <span style="color:red">*</span></label>
                   <input type="hidden" id="idUser" value="<?= $_SESSION['id']; ?>">
                   <input class="form-control"  type="text" disabled value="<?php echo $_SESSION['fullname'];?>">
                </div>
              </div>
              <?php
             }
            ?>

            </form>
            <p><a href="#0" class="btn_1 medium btnGenFilterOver"><i class="spinner"></i>Generate</a></p>
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
          <i class="fa fa-table"></i>Agents Ledger (Daily Overs & Shortage)</div>
          <div align="right" style="margin-top:1%">
          <a href="#" class="btn btn-primary medium addOvers"><i class="fa fa-plus"></i> Add New Overs </a>
          <a href="#" class="btn btn-success medium addShort"><i class="fa fa-minus"></i> Add New Shortage </a>
          <a href="#" class="btn btn-info medium edRecord"><i class="fa fa-edit"></i> Edit </a>
          <a href="#" class="btn btn-danger medium delExCash"><i class="fa fa-remove"></i> Delete</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                          <tr>
                              <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                              <th>#</th>
                              <th>DATE</th>
                              <th>TYPE</th>
                              <th>CATEGORY</th>
                              <th>AMOUNT GHS</th>
                              <th>AMOUNT RETRIEVED GHS</th>
                              <th>REMARKS</th>
                              <th>STATUS</th>
                              <th>POSTED_BY</th>
                              <th>APPROVED BY</th>
                        </tr>  
              </thead>
              <tfoot>
                        <tr>
                              <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                              <th>#</th>
                              <th>DATE</th>
                              <th>TYPE</th>
                              <th>CATEGORY</th>
                              <th>AMOUNT GHS</th>
                              <th>AMOUNT RETRIEVED GHS</th>
                              <th>REMARKS</th>
                              <th>STATUS</th>
                              <th>POSTED_BY</th>
                              <th>APPROVED BY</th>
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



<div class="modal fade modalOvers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="color:blue">Record New Overs</h5>
            <button class="close closePop" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
                      <div class="form-group">
                        <label>Date <span style="color:red">*</span></label>
                        <input id="oDate" class="form-control over" type="date" required>
                      </div>
                      <div class="form-group">
                        <label>Overs Type <span style="color:red">*</span></label>
                        <select id="oType" class="form-control over">
                        
                        <?php 

                         if($_SESSION["role"]==="1"){
                          ?>
                          <option disabled selected>Choose Overs Type</option>
                          <option value="1">MOMO Overs</option>
                          <option value="2">SUSU Overs</option>
                          <option value="3">E-Cash Overs</option>
                          <option value="4">Sales Overs</option>
                          <option value="5">EVD Transfer Overs</option>
                          <option value="6">SUSU Withdrawal Overs</option>
                          <?php
                         }else if($_SESSION["role"]==="7"){
                          ?>
                             <option selected value="1">MOMO Overs</option>
                          <?php
                         }else if($_SESSION["role"]==="6"){
                          ?>
                            <option selected value="6">SUSU Withdrawal Overs</option>
                          <?php
                         }else if($_SESSION["role"]==="5"){
                          ?>
                            <option selected value="2">SUSU Overs</option>
                          <?php
                         }
                        ?>
                        </select>
                      </div>
                      <div class="form-group">
                      <label>Amount <span style="color:red">*</span></label>
                        <input id="oOrigAmount" class="form-control over" type="number" required>
                      </div>
                      <div class="form-group">
                        <label>Amount Retrieved <span style="color:red">*</span></label>
                        <input id="oAmount" class="form-control over" type="number" required>
                      </div>
                      <div class="form-group">
                        <label>Remarks</label>
                         <textarea id="oRemark" class="form-control" col="6" row="10" type="text" placeholder=""></textarea>
                    </div>
                        <div class="form-group">
                        <label>To be Checked By <span style="color:red">*</span></label>
                        <select id="oCheck" class="form-control over">
                        <option value="593461" selected>Samuel Boadu (Administrator)</option>
                        </select>
                      </div>
              </div>
              <div class="modal-footer">
            <p><a href="#" class="btn_1 medium btnSubmitOvers"><i class="spinner"></i><i class="fa fa-pencil-square-o"></i> Submit Overs</a></p>
          </div>
        </div>
      </div>
</div>



<div class="modal fade modalShortage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="color:green">Record New Shortage</h5>
            <button class="close closePop" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
                      <div class="form-group">
                        <label>Date <span style="color:red">*</span></label>
                        <input id="sDate" class="form-control short" type="date" required>
                      </div>
                      <div class="form-group">
                        <label>Shortage Type <span style="color:red">*</span></label>
                        <select id="sType" class="form-control short">
                        <option disabled selected>Choose Shortage Type</option>
                             <?php 
                         if($_SESSION["role"]==="1"){
                          ?>
                          <option value="1">MOMO Shortage</option>
                          <option value="2">SUSU Shortage</option>
                          <option value="3">E-Cash Shortage</option>
                          <option value="4">Sales Shortage</option>
                          <option value="5">EVD Transfer Shortage</option>
                          <option value="6">SUSU Withdrawal Shortage</option>
                          <?php
                         }else if($_SESSION["role"]==="7"){
                          ?>
                             <option selected value="1">MOMO Shortage</option>
                          <?php
                         }else if($_SESSION["role"]==="6"){
                          ?>
                            <option selected value="6">SUSU Withdrawal Shortage</option>
                          <?php
                         }else if($_SESSION["role"]==="5"){
                          ?>
                            <option selected value="2">SUSU Shortage</option>
                          <?php
                         }
                        ?>
                        </select>
                      </div>
                      <div class="form-group">
                      <label>Amount <span style="color:red">*</span></label>
                        <input id="sOrigAmount" class="form-control over" type="number" required>
                      </div>
                      <div class="form-group">
                        <label>Amount Retrieved <span style="color:red">*</span></label>
                        <input id="sAmount" class="form-control short" type="number" required>
                      </div>
                      <div class="form-group">
                        <label>Remarks</label>
                         <textarea id="sRemark" class="form-control" col="6" row="10" type="text" placeholder=""></textarea>
                    </div>
                        <div class="form-group">
                        <label>To be Checked By <span style="color:red">*</span></label>
                        <select id="sCheck" class="form-control short">
                        <option value="593461" selected>Samuel Boadu (Administrator)</option>
                        </select>
                      </div>
              </div>
              <div class="modal-footer">
            <p><a href="#" class="btn_1 medium btnSubmitShortage"><i class="spinner"></i><i class="fa fa-pencil-square-o"></i> Submit Overs</a></p>
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