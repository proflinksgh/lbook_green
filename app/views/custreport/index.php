<?php
    $db = $data['initiator'];
    $company = $db->get_data_here_value("SELECT COMPANY from company_tb WHERE UNIQ = ".$_COOKIE["ccode"]."","COMPANY");
?>
        

<body class="fixed-nav sticky-footer" id="page-top">
<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Account Statement</li>
      </ol>
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-pencil-square-o"></i>Generate Statement</h2>
              <div align="right" style="margin-top:1%;display: none;" id="idOptions">
           <a href="#" id="btnPrint" class="btn btn-primary medium"><i class="fa fa-print"></i><i class="spinner"></i> Print/Download</a> 
           <a href="#" class="btn btn-success medium btnUpdateProd"><i class="fa fa-pencil-square-o"></i> Email</a>
           </div>
      </div>
      <div class="col-md-12 add_top_30">
      <div class="row" id="idReportTop">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 add_top_30">
          <div class="row">
              <form>
              <div class="col-md-6">
              <div class="form-group">
                <label>Account Number <span style="color:red">*</span></label>
                <input id="idaccno" class="form-control accno" required type="text" placeholder="Account number">
              </div>
            </div>

              <div class="col-md-6">
              <div class="form-group">
                <label>From <span style="color:red">*</span></label>
                <input type="date" id="idDate1"  class="form-control">
              </div>
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label>To <span style="color:red">*</span></label>
                 <input type="date" id="idDate2" class="form-control">
              </div>
            </div>
            </form>
            <p><a href="#0" class="btn_1 medium" id = "btnStatement"><i class="spinner"></i>Generate</a></p>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 add_top_30">
          <div class="row" style="display: none;" id="idReport">
            <div align="center"><h3><?php echo $company?></h3></div>
            <input type="hidden" value="<?php echo $company?>" id="idCompany">
            <div align='center'><h6 id="idState">Statement of Account as at 21/05/2022</h6></div>
            <div id="idImage2" align="center"></div>
            <div style="margin-left: 2%;margin-top:2%"><h6>Acc. Name: &emsp;<span id="idAccName"></span></h6></div>
            <div style="margin-left: 2%;"><h6>Product: &emsp;<span id="idProduct"></span></h6></div>
            <div style="margin-bottom: 3%;margin-left: 2%;"><h6>Acc. #: &emsp;<span id="idAccnumber"></span></h6></div>
            <div class="table-responsive">
            <table id="depositTable" class="table table-bordered" width="40%" cellspacing="0">
              <thead style="background-color: #000080;color:white">
                <tr>
                  <th>Date</th>
                  <th>Description</th>
                  <th>Debit</th>
                  <th>Credit</th>
                  <th>Balance</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                 <th>Date</th>
                 <th>Description</th>
                 <th>Debit</th>
                 <th>Credit</th>
                 <th>Balance</th>
                </tr>
              </tfoot>
              <tbody>
              </tbody>
            </table>
          </div>
            <div class="col-md-10" style="margin-left:60%">
            <div><h6 id="idTotalDeposit"></h6></div>
            <div style="display: none;"><h6 id="idTotalInterest"></h6></div>
            <div><h6 id="idTotalWithdrawal"></h6></div>
            <div><h6 id="idTotFee"></h6></div>
            <div><h6 id="idAccBal"></h6></div>
            </div>
          </div>

       <!--      <div class="row">
     
            </div> -->
        </div>
      </div>
       <!--  style="display: none;" -->
    </div>
    </div>
    </div>
    </div>
  </body>