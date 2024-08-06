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
        <li class="breadcrumb-item active">E-Cash Requisition</li>
      </ol>  

     <div class="row">
      <div class="col-md-6">
      <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-pencil-square-o"></i>Filter E-Cash Requisition</h2>
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
            <p><a href="#0" class="btn_1 medium btnGenFilterReq"><i class="spinner"></i>Generate</a></p>
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
          <i class="fa fa-table"></i>E-Cash Requisition </div>
          <div align="right" style="margin-top:1%">
          <a href="#" class="btn btn-primary medium addReq"><i class="fa fa-user-plus"></i> Add New Requisition </a>
           <!-- <a href="#" class="btn btn-success medium edReq"><i class="fa fa-edit"></i> Edit</a> -->
          <a href="#" class="btn btn-danger medium delEReq"><i class="fa fa-remove"></i> Delete</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                          <tr>
                              <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                              <th>#</th>
                              <th>DATE</th>
                              <th>PURCHASER</th>
                              <th>BANK</th>
                              <th>AMOUNT (GHS)</th>
                              <th>TOKEN (GHS)</th>
                              <th>TRANSPORT (GHS)</th>
                        </tr>  
              </thead>
              <tfoot>
                        <tr>
                              <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                              <th>#</th>
                              <th>DATE</th>
                              <th>PURCHASER</th>
                              <th>BANK</th>
                              <th>AMOUNT (GHS)</th>
                              <th>TOKEN (GHS)</th>
                              <th>TRANSPORT (GHS)</th>
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


<div class="modal fade modalReq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Requisition</h5>
            <button class="close closePop" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
                      <div class="form-group">
                        <label>Date <span style="color:red">*</span></label>
                        <input id="eDate" class="form-control ereq" type="date" required>
                      </div>
                       <div class="form-group">
                        <label>Amount (GHS) <span style="color:red">*</span></label>
                        <input id="eAmount" class="form-control ereq" type="number" required>
                      </div>
                      <div class="form-group">
                        <label>Purchaser Name <span style="color:red">*</span></label>
                        <select id="ePurchaser" class="form-control ereq">
                        <option disabled selected>Choose Staff</option>
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
                      <div class="form-group">
                        <label>Purchased From <span style="color:red">*</span></label>
                        <select id="eBank" class="form-control ereq">
                        <option disabled selected>Choose Bank</option>
                        <option value="GCB">GCB</option>
                        <option value="ADB">ADB</option>
                        <option value="ECOBANK">ECOBANK</option>
                        <option value="FIDELITY">FIDELITY</option>
                        <option value="KWAEBIBREM RURAL BANK">KWAEBIBREM RURAL BANK</option>
                        <option value="ATIWA RURAL BANK">ATIWA RURAL BANK</option>
                        </select>
                      </div>
                       <div class="form-group">
                        <label>Token (GHS)</label>
                        <input id="ideToken" class="form-control" value="0" type="number">
                      </div>
                      <div class="form-group">
                        <label>Transportation <span style="color:red">*</span></label>
                        <input id="eTransport" class="form-control ereq" value="0" type="number" required>
                      </div>

          </div>
          <div class="modal-footer">
            <p><a href="#" class="btn_1 medium btnSubmitReq"><i class="spinner"></i><i class="fa fa-pencil-square-o"></i> Submit </a></p>
          </div>
        </div>
      </div>
</div>