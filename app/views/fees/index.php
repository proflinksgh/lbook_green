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
        <li class="breadcrumb-item active">All Fees</li>
      </ol> 
      <div class="box_general padding_bottom shChatSearch">
      <div class="header_box version_2">
        <h2><i class="fa fa-pencil-square-o"></i>Filter Fees</h2>
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
                       <option value="agent">By Account Number</option>
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
      <div class="card mb-3">
        <div class="card-header">        
          <i class="fa fa-table"></i> Fees</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                       <th>#</th>
                        <th>Date</th>
                        <th>Client</th>
                        <th>Account Number</th>
                        <th>Type</th>
                        <th>Amount (GH¢)</th>
                        <th>Total</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                     <th>#</th>
                        <th>Date</th>
                        <th>Client</th>
                        <th>Account Number</th>
                        <th>Type</th>
                        <th>Amount (GH¢)</th>
                        <th>Total</th>
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