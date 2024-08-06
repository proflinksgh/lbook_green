<body class="fixed-nav sticky-footer" id="page-top">
  <input type="hidden" id="rotator" name="rotator" value="1" />
<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Payroll</li>
      </ol>
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-pencil-square-o"></i>Generate Staff Payroll</h2>
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
                <label>Choose Year <span style="color:red">*</span></label>
                  <select id="idYear" class="form-control form-pay">
                    <option disabled selected>Select Year</option>
                    <?php
                     $db=$data["initiator"];
                     $getData=$db->getAllData("SELECT DISTINCT(YEAR) AS PERIOD FROM employee_commission_tb");
                     if($getData!=0){
                      foreach($getData as $row){
                      ?>
                      <option value="<?= $row["PERIOD"]; ?>"><?= $row["PERIOD"]; ?></option>
                      <?php
                     }
                   }
                    ?>
                 </select>
              </div>
            </div>

              <div class="col-md-6">
              <div class="form-group">
                <label> Choose Month <span style="color:red">*</span></label>
                               <select id="idMonth" class="form-control form-pay">
                                    <option disabled selected>
                                         <?php
                                      $db=$data['initiator'];
                                       $get_data= $db->get_data_here_value("SELECT DISTINCT MONTH FROM employee_commission_tb", "MONTH");
                                       if($get_data == '0'){
                                         echo "No Month available";
                                       }else{
                                          echo "Select Month";  
                                       }
                                           ?>
                                    </option>
                                        
                                     <?php
                                      $db=$data['initiator'];
                                       $get_employee= $db->getAllData("SELECT DISTINCT MONTH FROM employee_commission_tb");
 
                                          foreach($get_employee as $row){
                                 
                                                  echo "<option value='".$row['MONTH']."'>". $row['MONTH']."</option>";
                                          }
                                      ?>
                                        
                                </select>
              </div>
            </div>

            </form>
            <p><a href="#0" class="btn_1 medium" id = "btnPayroll"><i class="spinner"></i>Generate</a></p>
          </div>
        </div>
      </div>
    </div>
    </div>



      <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-pencil-square-o"></i>Search results</h2>
      </div>
      <div class="col-md-12 add_top_30">
      <div class="row">
              <div class="col-md-12 col-sm-12">                 
                  <div class="x_content">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;">
                  <div class="x_content">
                      <div class="row">
                          <div class="col-md-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="loader_container_sector" style="display: none;">
                                  <span class="fa fa-spin fa-spinner" id="spinner"></span>
                                </div>

                              <div class="make_me_dynamic_checker"></div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <div class="loader_container_sector" style="display: none;">
                                  <span class="fa fa-spin fa-spinner" id="spinner"></span>
                              </div>

                              <div class="make_me_dynamic_checker2"></div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab2">
                              
                              <div class="loader_container_sector" style="display: none;">
                                  <span class="fa fa-spin fa-spinner" id="spinner"></span>
                              </div>

                              <div id="chart-container">
                                  <canvas id="graphCanvas"></canvas>
                              </div>
                            </div>
                        </div>
                    </div>
                      </div>
                    </div>
                </div>
              </div>
                <!--your inserted page ends here-->
                </div>
              </div>
            </div>
    </div>
    </div>



    </div>
    </div>
  </body>