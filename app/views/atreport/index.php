 <?php 
  $db=$data["initiator"];
  $getYear=$db->getAllData("SELECT DISTINCT YEAR(date_normal) AS year FROM `attendance`");
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
        <li class="breadcrumb-item active">Report</li>
      </ol>  
      <div class="box_general padding_bottom shChatSearch">
      <div class="header_box version_2">
        <h2><i class="fa fa-pencil-square-o"></i>Staff Attendance Report</h2>
      </div>
      <div class="col-md-12 add_top_30">
        <div class="col-md-8 add_top_30">
          <div class="row">
              <form>
              <div class="col-md-6">
              <div class="form-group">
                <label>Choose Year <span style="color:red">*</span></label>
                            <select class="form-control" id="idAtYear">
                                    <option value="" disabled="disabled" selected>Choose Year</option>
                                    <?php 
                                     foreach($getYear as $row){
                                        ?>
                                        <option value="<?= $row["year"]; ?>"><?= $row["year"]; ?></option>
                                        <?php 
                                     }
                                    ?>            
                                </select>
                         </div>
                         
                       <div class="form-group">
                       <label>Month</label>
                                <select class="form-control" id="idAtMonth">
                                        <option value="" selected>Choose Month</option>          
                                    </select>
                             </div>
                             <div class="form-group">
                            <label>Week</label>
                                  <select class="form-control" id="idAtWeek">
                                    <option value="" selected>Choose Week</option>          
                                </select>
                             </div>
              

            </div>
            </form>
          </div>
        </div>
    </div>
    </div>

    <div class="box_general padding_bottom shChatSearch">
      <div class="header_box version_2">
        <h2 id="idGenHead"><i class="fa fa-pencil-square-o"></i>Staff Attendance Report</h2>
      </div>
      <div class="col-md-12 add_top_30">
        <div class="col-md-12 add_top_30">
          <div class="row">
      <div class="card mb-3" id="searchBox">
        <!--<div class="card-header">        -->
        <!-- <i class="fa fa-table" id="idGenHead"></i> ATTENDANCE REPORT</div>-->
        <!--<h3 id="idGenHead"></h3>-->
        <div class="card-body shTable">
          <div class="table-responsive">
            <table class="table table-bordered data-table-main" id="dataTable" width="100%" cellspacing="0">
              <thead>
                   <tr>
                                        <th>Staff Code</th>
                                        <th>User Id</th>
                                        <th>Staff Name</th>
                                        <th>Total Attendance</th>
                                        <th></th>
                                    </tr>
              </thead>
              <tfoot>
                 <tr>
                                        <th>Staff Code</th>
                                        <th>User Id</th>
                                        <th>Staff Name</th>
                                        <th>Total Attendance</th>
                                        <th></th>
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
      </div>
      </div>
      
      
     <div class="box_general padding_bottom shChatSearch" id="shAttLogs">
      <div class="header_box version_2">
        <h2 id="idUserLog"><i class="fa fa-pencil-square-o"></i>Log Details</h2>
      </div>
      <div class="col-md-12 add_top_30">
        <div class="col-md-12 add_top_30">
          <div class="row">
      <div class="card mb-3" id="searchBox">
        <!--<div class="card-header">        -->
        <!-- <i class="fa fa-table" id="idGenHead"></i> ATTENDANCE REPORT</div>-->
        <div class="card-body shTable">
          <div class="table-responsive">
            <table class="table table-bordered data-table-log" id="dataTable" width="100%" cellspacing="0">
              <thead>
                 <tr>
                                        <th>Date</th>
                                        <th>Fullname</th>
                                        <th>State</th>
                                        <th>Time</th>
                                    </tr>
              </thead>
              <tfoot>
                  <tr>
                                        <th>Date</th>
                                        <th>Fullname</th>
                                        <th>State</th>
                                        <th>Time</th>
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
      </div>
      </div>
      
      
      
      
    
    </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
</body>