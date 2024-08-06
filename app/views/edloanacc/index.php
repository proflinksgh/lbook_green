<input type="hidden" id="sid1" value="<?= isset($_GET["sid1"])?$_GET["sid1"]:"none"; ?>">
<input id="cid" value="<?=$_GET["key"]; ?>" type="hidden">
<input id="lid" value="<?=$_GET["lid"]; ?>" type="hidden">
<body class="fixed-nav sticky-footer" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <?php 
         if(isset($_GET["lid"])){
          ?>
          <li class="breadcrumb-item">
          <a href="create_loan">All Loans</a>
        </li>
        <li class="breadcrumb-item active">Customer Loan Profile</li>
          <?php
         }else{
          ?>
            <li class="breadcrumb-item">
          <a href="loan_members">All Applicants</a>
        </li>
        <li class="breadcrumb-item active">Edit Applicant</li>
          <?php
         }
        ?>
        
      </ol>
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-file"></i>PERSONAL DETAILS</h2>
      </div>
      <?php
       $db=$data["initiator"];
       $fetch=$db->getAllData("SELECT * FROM loanreg_tb WHERE id=".$_GET["key"]."");
       if($fetch!==0){
        $emptype="";
        foreach($fetch as $row){
          if($row["emptype"]==="1"){
            $emptype="Employed";
          }else if($row["emptype"]==="2"){
             $emptype="Unemployed";
          }else if($row["emptype"]==="3"){
             $emptype="Self-Employed";
          }
          ?>
        <div class="row">
        <div class="form-group">
          <label>Your photo (160x160 pixels)</label>

            <div id="idImage2" style="margin-bottom:10px"><img width="160" height="160" src="<?= isset($_GET["sid1"])?"https://drive.google.com/thumbnail?id=".$_GET["sid1"]."":"https://drive.google.com/thumbnail?id=".$row["image"].""?>"></div>

            <?php 
             if(!isset($_GET["lid"])){
              ?>
               <a style="margin-top: 10px;" href="https://linksengineering.net/gupload?url=https://green.lbookfintech.com/edloanacc?key=<?= $_GET['key']; ?>" class="btn_1 medium">Change Photo</a>
              <?php
             }
            ?>
            </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Title <span style="color:red">*</span></label>
              <select id="title" class="form-control form">
              <option disabled selected>Select Title</option>
              <option selected value="<?= $row["title"]; ?>"><?= $row["title"]; ?></option>
              <option value="Mr">Mr.</option>
              <option value="Ms">Ms.</option>
              <option value="Mrs">Mrs.</option>
              </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Gender <span style="color:red">*</span></label>
              <select id="gender" class="form-control form">
              <option selected value="<?= $row["gender"]; ?>"><?= $row["gender"]; ?></option>
              <option disabled>Choose Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              </select>
          </div>
        </div>
      </div>
      <!-- /row-->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Surname <span style="color:red">*</span></label>
            <input type="text" id="surname" class="form-control form" placeholder="Surname" value="<?= $row["surname"]; ?>">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Other Name <span style="color:red">*</span></label>
            <input type="text" class="form-control form" id="othername" placeholder="Other Name" value="<?= $row["othername"]; ?>"> 
          </div>
        </div>
      </div>
      <!-- /row-->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Phone number <span style="color:red">*</span></label>
            <input type="tel" id="phone" class="form-control form" placeholder="Phone number" value="<?= $row["phone"]; ?>">
          </div>
        </div>
          <div class="col-md-6">
          <div class="form-group">
            <label>Date of Birth <span style="color:red">*</span></label>
            <input type="date" id="dob" class="form-control form" placeholder="Date of Birth" value="<?= $row["dob"]; ?>">
          </div>
        </div>
      </div>
       <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Number of Dependants <span style="color:red">*</span></label>
            <input type="number" id="dependant" class="form-control form" placeholder="Number of Dependants" value="<?= $row["dependant"]; ?>">
          </div>
        </div>
      </div>
    </div>

    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-file"></i>IDENTITY</h2>
      </div>
      <div class="row">
          <div class="col-md-6">
            <div class="form-group">
               <label>Identification <span style="color:red">*</span></label>
                   <select name="idIdentification" id="identification" class="form-control form">
                     <option selected value="<?= $row["idtype"]; ?>"><?= $row["idtype"]; ?></option>
                    <option value="IDcard" disabled>Select ID Card *</option>
                     <option value="Ecowas Card">Ecowas ID Card</option>
                    <option value="Passport">Passport</option>
                    <option value="Voters Id">Voter ID</option>
                    <option value="NHIS">NHIS</option>
                    <option value="Drivers License">Driver license</option>
                    </select>
            </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label>Identification Number <span style="color:red">*</span></label>
                <input id="idno" class="form-control form" type="text" name="idIdnumber" required="required" placeholder="Enter ID number" value="<?= $row["idno"]; ?>">
            </div>
            </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Date of Issue <span style="color:red">*</span></label>
            <input type="date" id="dateofissue" class="form-control form" placeholder="Date of Issue" value="<?= $row["dateissue"]; ?>">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Expiry Date <span style="color:red">*</span></label>
            <input type="date" id="expiry" class="form-control form" placeholder="Expiry Date" value="<?= $row["dateexpire"]; ?>">
          </div>
        </div>
      </div>
    </div>


    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-file-text"></i>BUSINESS DETAILS</h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Name of Business <span style="color:red">*</span></label>
            <input type="text" class="form-control form" id="namebusiness" placeholder="Name of Business" value="<?= $row["busname"]; ?>">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Address</label>
            <input type="text" id="address" class="form-control" placeholder="Address" value="<?= $row["address"]; ?>">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Location <span style="color:red">*</span></label>
            <input type="text" id="location" class="form-control form" placeholder="Location" value="<?= $row["location"]; ?>">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Tel No <span style="color:red">*</span></label>
            <input type="text" id="telno" class="form-control form" placeholder="Tel No" value="<?= $row["btel"]; ?>">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>No. of years in Business <span style="color:red">*</span></label>
            <input type="text" id="noofyears" class="form-control form" placeholder="No. of years in Business" value="<?= $row["byears"]; ?>">
          </div>
        </div>
      </div>
    </div>


      <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-file-text"></i>EMPLOYMENT TYPE</h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Employment Type <span style="color:red">*</span></label>
            <select id="emptype" class="form-control form">
            <option value="<?= $row["emptype"]; ?>" selected><?= $emptype; ?></option>
            <option value="1">Employed</option>
            <option value="3">Self-Employed</option>
            <option value="2">Unemployed</option>  
            </select>
          </div>
        </div>
      </div>
    </div>



    <div class="box_general padding_bottom" style="display: none;" id="shEmployer">
      <div class="header_box version_2">
        <h2><i class="fa fa-file-text"></i>EMPLOYER DETAILS</h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Name of Employer <span style="color:red">*</span></label>
            <input type="text" id="employer" class="form-control form" placeholder="Name of Employer" value="<?= $row["empname"]; ?>">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Position <span style="color:red">*</span></label>
            <input type="text" id="position" class="form-control form" placeholder="Position" value="<?= $row["position"]; ?>">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Tel. No. of Employer <span style="color:red">*</span></label>
            <input type="text" id="employertel" class="form-control form" placeholder="Tel. No. of Employer" value="<?= $row["empno"]; ?>">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Net Salary <span style="color:red">*</span></label>
            <input type="text" id="netsalary" class="form-control form" placeholder="Net Salary" value="<?= $row["netsal"]; ?>">
          </div>
        </div>
      </div>
    </div>

    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-file-text"></i>DIRECTION</h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Direction of Route To Business/Place of Work <span style="color:red">*</span></label>
             <textarea rows="5" class="form-control form" id="bdirection" style="height:100px;" placeholder="Description"><?= $row["bdirection"]; ?></textarea>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Direction of Route To Residence <span style="color:red">*</span></label>
             <textarea rows="5" id="rdirection" class="form-control form" style="height:100px;" placeholder="Description"><?= $row["rdirection"]; ?></textarea>
          </div>
        </div>
      </div>
    </div>

    <?php 
     if(isset($_GET["lid"])){
      $db=$data["initiator"];
      $getLoan=$db->getAllData("SELECT * FROM loan_tb WHERE ID=".$_GET["lid"]."");
      if($getLoan!==0){
       foreach($getLoan as $row){
        $product=$db->get_data_here_value("SELECT NAME FROM loan_product_tb WHERE CODE=".$row["LOAN_PRODUCT_CODE"]."","NAME");
        $custid=$db->get_data_here_value("SELECT id FROM loanreg_tb WHERE code='".$row["ACCOUNT_NO"]."'","id");
        $penalty=$db->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM penalty_tb WHERE CUSTOMERID=$custid AND LOANID=".$row["ID"]."","AMT");
        $maturity=($row["LOAN_PERIOD"])*28;
        $lamount=$row["AMOUNT"];
        $interest=$row["INTEREST"];
        $weektype=$row["CAPACITY"];

          if($weektype==="1"){
           $period=$maturity/7; 
          }else if($weektype==="2"){
           $period=$maturity/14; 
          }
         $stopay=($lamount+$interest)/$period;
          $loanstring="0";
          if($row["STATUS"]==="0"){
            $status="Active";
          }else if($row["STATUS"]==="1"){
            $status="Pending";
          }else if($row["STATUS"]==="2"){
            $status="Declined";
          }else if($row["STATUS"]==="3"){
            $loanstring="mature";
            $status="Mature";
          }
          $payment=$db->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM loan_payment WHERE CUSTOMERID=$custid AND LOANID=".$row["ID"]."","AMT");
          $balance=($row["AMOUNT"]+$row["INTEREST"]+$penalty)-$payment;
          $balance_act=($row["AMOUNT"]+$row["INTEREST"])-$payment;
        ?>
        <div class="box_general padding_bottom">
        <div class="header_box version_2">
          <h2><i class="fa fa-file-text"></i>LOAN PROFILE</h2>
        </div>
        <div class="row">
          <div class="col-md-6">
             <div class="form-group">
              <label>Loan Status <span style="color:red">*</span></label>
              <?= $status; ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Registration #No <span style="color:red">*</span></label>
              <input type="text" disabled class="form-control" value="<?= $row["ACCOUNT_NO"]; ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Loan Code <span style="color:red">*</span></label>
              <input type="text" disabled class="form-control" value="<?= $row["CODE"]; ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Loan Product <span style="color:red">*</span></label>
              <input type="text" disabled class="form-control" value="<?= $product; ?>">
            </div>
          </div>
             <div class="col-md-6">
            <div class="form-group">
              <label>Date Approved <span style="color:red">*</span></label>
              <input type="text" disabled class="form-control" value="<?= $row["DATE_APPROVE"]; ?>">
          </div>
          </div>
           <div class="col-md-6">
            <div class="form-group">
              <label>Maturity <span style="color:red">*</span></label>
              <input type="text" disabled class="form-control" value="<?= $row["LOAN_PERIOD"]." Month(s)"; ?>">
            </div>
          </div>
           <div class="col-md-6">
            <div class="form-group">
              <label>Maturity Date <span style="color:red">*</span></label>
              <input type="text" disabled class="form-control" value="<?= $row["DATE_MATURE"]; ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Loan Amount (GHS) <span style="color:red">*</span></label>
              <input type="text" disabled class="form-control" value="<?= isset($row["AMOUNT"])?number_format($row["AMOUNT"],2):0; ?>">
            </div>
          </div>
           <div class="col-md-6">
            <div class="form-group">
              <label>Interest (GHS) <span style="color:red">*</span></label>
              <input type="text" disabled class="form-control" value="<?= isset($row["INTEREST"])?number_format($row["INTEREST"],2):0; ?>">
            </div>
          </div>
          <?php 
           if($loanstring==="mature"){
            ?>
          <div class="col-md-6">
            <div class="form-group">
              <label>Amount + Interest  (GHS) <span style="color:red">*</span></label>
              <input type="text" disabled class="form-control" value="<?= isset($row["TOTAL"])?number_format($row["TOTAL"],2):0;?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Penalty (GHS) <span style="color:red">*</span></label>
              <input type="text" disabled class="form-control" value="<?= isset($penalty)?number_format($penalty,2):0; ?>">
            </div>
          </div>
           <div class="col-md-6">
            <div class="form-group">
              <label>Repayments (GHS) <span style="color:red">*</span></label>
              <input type="text" disabled class="form-control" value="<?= isset($payment)?number_format($payment,2):0; ?>">
            </div>
          </div>
           <div class="col-md-6">
            <div class="form-group">
              <label>Balance (GHS) <span style="color:red">*</span></label>
              <input type="text" disabled class="form-control" value="<?= isset($balance)?number_format($balance,2):0; ?>">
            </div>
          </div>

          <?php
           }else{
            ?>
            <div class="col-md-6">
            <div class="form-group">
              <label>Amount to Pay (GHS) <span style="color:red">*</span></label>
              <input type="text" disabled class="form-control" value="<?= isset($row["TOTAL"])?number_format($row["TOTAL"],2):0; ?>">
            </div>
          </div>
            <div class="col-md-6">
            <div class="form-group">
              <label>Repayments (GHS) <span style="color:red">*</span></label>
              <input type="text" disabled class="form-control" value="<?= isset($payment)?number_format($payment,2):0; ?>">
            </div>
          </div>
             <div class="col-md-6">
            <div class="form-group">
              <label>Balance (GHS) <span style="color:red">*</span></label>
              <input type="text" disabled class="form-control" value="<?= isset($balance_act)?number_format($balance_act,2):0;; ?>">
            </div>
          </div>
            <?php
           }
          ?>
          <div class="col-md-6">
            <div class="form-group">
              <label>Balance (GHS) <span style="color:red">*</span></label>
              <input type="text" disabled class="form-control" value="<?= isset($balance_act)?number_format($balance_act,2):0;; ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Repayment Capacity <span style="color:red">*</span></label>
              <input type="text" disabled class="form-control" value="<?= $row["CAPACITY"]==="1"?"1 Week":"2 Weeks"; ?>">
            </div>
          </div>
           <div class="col-md-6">
            <div class="form-group">
              <label>Repay Amount <span style="color:red">*</span></label>
              <input type="text" disabled class="form-control" value="<?= number_format($stopay,2); ?>">
            </div>
          </div>
        </div>
      </div>

     
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-file-text"></i>PROPOSED COLLATERAL</h2>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Collateral <span style="color:red">*</span></label>
             <textarea disabled rows="5" class="form-control" style="height:100px;"><?= $row["COLAT"]; ?></textarea>
          </div>
        </div>
      </div>
    </div>

     <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-file-text"></i>SIGNED AGREEMENT FORM</h2>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <?php 
             if($db->get_data_here_value("SELECT ID FROM form_tb WHERE LOANID=".$_GET["lid"]."","ID")>0){
              $source=$db->get_data_here_value("SELECT AFILE FROM form_tb WHERE LOANID=".$_GET["lid"]."","AFILE");
              ?>
               <a href="https://green.lbookfintech.com/forms/<?=$source;?>" target="blank"><img src="assets/image/pdf.png" width="100"></a>
               <p>(Click to Download)</p>
              <?php
             }else{
              ?>
              <label>Please upload Signed Agreement Form <span style="color:red">*</span></label>
              <input type="file" id="file" class="form-control">
              <?php
             }
            ?>

          </div>
        </div>
      </div>
    </div>

        <?php
       }
      }
      ?>   
      <?php
     }
    ?>
    <?php 
     if(!isset($_GET['lid'])){
      ?>
      <p><a href="#0" class="btn_1 medium btnSaveLoanAcc"><i class="spinner"></i> Save Changes</a></p>
      <?php
     }
    ?>
    </div>
          <?php
        }
       }
      ?>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a> 
</body>