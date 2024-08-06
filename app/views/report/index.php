<body class="fixed-nav sticky-footer" id="page-top">
  <input type="hidden" id="rotator" name="rotator" value="1" />
<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Staff Report</li>
      </ol>
      <div class="row">
      <div class="col-md-6">
      <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-pencil-square-o"></i>Generate Staff Report</h2>
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
                <input type="date" class="form-control" id="pick-date">
              </div>
            </div>

              <div class="col-md-12">
              <div class="form-group">
                <label> To <span style="color:red">*</span></label>
                 <input type="date" class="form-control" id="pick-date2">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label> Choose Staff <span style="color:red">*</span></label>
                   <select id="idUser" class="form-control">
                                    <option value="region" disabled selected>Select username</option>
                                    <?php
                                      $db = $data['initiator'];
                                      $result = $db->getAllData("SELECT USER_ROLE, ID, CODE, USERNAME from admin_tb WHERE CCODE=".$_COOKIE["ccode"]."");
                                      foreach($result as $row)
                                          {
                                       echo "<option value='".$row['CODE']."' data-value='".$row["USER_ROLE"]."'>".$row['USERNAME']."</option>";
                                          }
                                    ?>
                                </select>
                          </div>
                      </div>

            </form>
            <p><a href="#0" class="btn_1 medium" id = "btnFilter"><i class="spinner"></i>Generate</a></p>
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


      <div class="box_general padding_bottom shChatSearch">
      <div class="header_box version_2">
        <h2><i class="fa fa-pencil-square-o"></i>Report Chart</h2>
      </div>
      <div class="col-md-12 add_top_30">
      <div class="row">
        <div class="col-md-12 col-sm-12">                 
          <div class="x_content">
                       <div class="col-md-12">
                     <div id="chart-container" style="margin-top:40px">
                     <canvas id="graphCanvas"></canvas>
                     </div>
                    </div>
                      </div>
              </div>
            </div>
    </div>
    </div>
    </div>
    </div>
  </body>