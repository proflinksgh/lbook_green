<style type="text/css">
    /* important info to open modal*/
.modal__background {
  background: rgba(0, 0, 0, 0.8);
  bottom: 0;
  left: 0;
  opacity: 0;
  pointer-events: none;
  position: fixed;
  right: 0;
  top: 0;
  transition: .35s;
   z-index: 1050;
  
  overflow: scroll;
}
.modal__background:target {
  opacity: 1;
  pointer-events: auto;
}

/* standard styles*/
.background {
  display: flex;
  background: #ff7300;
  width: 100vw;
  height: 100vh;
}


.modal__content {
  background: #fff;
  border-radius: 5px;
  box-shadow: 0 5px 0 rgba(0, 0, 0, 0.1);
  padding: 1rem;
  position: relative;
  z-index: 4;
  width: 100%;
  overflow: scroll;
}
@media screen and (max-width: 699px) {
  .modal__content {
    margin: 2rem;
  }
}
@media screen and (min-width: 700px) {
  .modal__content {
    margin: 4rem auto;
    max-width: 100%;
   
    overflow: scroll;
  }
}
.modal__content a {
  color: rgba(0, 0, 0, 0.5);
  font-size: 35px;
  position: absolute;
  right: 1rem;
  text-decoration: none;
  top: 1rem;
  transition: .25s;
}
.modal__content a:hover {
  color: black;
}

h2 {
  color: #008cff;
  font-size: 40px;
  margin: 0 0 1rem;
  text-align: center;
}

</style>
        <p align="center" style="font-weight: bold; font-size: 20px;margin-top:5%">MOMO Agents<span style="color: red;">
            <?php

            ?>
        </span></p>       
     </div>
        <table id="multi-colum-dt" class="table table-stripped table-bordered nowrap" style="overflow-x: scroll;">
           <thead>
                <tr>
                 <th class="master_header text-center" colspan="5">Summary</th>
                  <th class="master_header text-center" colspan="3">Basic Salary</th>
                  <th class="master_header text-center" colspan="5">Contribution</th>
                   <th class="master_header text-center" colspan="1">Final</th>
                </tr>
                <tr>
                 <th>
                    <th>SID</th>
                    <th>FNAME</th>
                    <th>LNAME</th>
                    <th>ROLE</th>
                 </th>
                 <th>DEP COMM</th>
                 <th>CASHOUT COMM</th>
                 <th>GROSS SAL</th>
                 <th>SN EMPYER</th>
                 <th>SN EMPYEE</th>
                 <th>WELF</th>
                 <th>BON</th>
                <th>DEDUCT</th>
                 <th>NET SAL</th>
                </tr>
                <tr>
                </tr>
    
                <?php

                $get_staff =  $this->user->getAllData("SELECT adt.ID, ROLE, SURNAME, OTHERNAME, USER_ROLE FROM admin_tb adt JOIN role_tb rt ON adt.USER_ROLE = rt.ID WHERE USER_ROLE ='7'");

               if($get_staff!=0)
                 {

                    foreach ($get_staff as $row) 
                    {
                        $id = $row['ID'];
                        if($row['ID'] != '2'){

                        ?>
                      
                    <tr>
                     <th></th>
                    <th><?php echo strtoupper($row['ID']); ?></th>
                    <th><?php echo strtoupper($row['SURNAME']); ?></th>
                    <th><?php echo strtoupper($row['OTHERNAME']); ?></th>
                     <th><?php echo strtoupper($row['ROLE']); ?></th>
                    <?php
                    
                        if($row['USER_ROLE'] =='7'){
                            
                         $get_cashout_comm = $this->user->get_data_here_value("SELECT CASHOUT_COMM FROM momo_comm_tb where STAFF_ID = '$id' AND MONTH='$month' AND YEAR = '$year'", "CASHOUT_COMM");  
                         $get_dep_comm = $this->user->get_data_here_value("SELECT DEPOSIT_COMM FROM momo_comm_tb where STAFF_ID = '$id' AND MONTH='$month' AND YEAR = '$year'", "DEPOSIT_COMM"); 
                         $ssnit_employer = $this->user->get_data_here_value("SELECT SSNIT_EMPLOYER FROM employee_cont_tb where STAFF_ID = '$id'", "SSNIT_EMPLOYER");
                         $ssnit_employee = $this->user->get_data_here_value("SELECT SSNIT_EMPLOYEE FROM employee_cont_tb where STAFF_ID = '$id'", "SSNIT_EMPLOYEE"); 
                         $welfare = $this->user->get_data_here_value("SELECT WELFARE FROM employee_cont_tb where STAFF_ID = '$id'", "WELFARE"); 
                         $bonus = $this->user->get_data_here_value("SELECT BONUS FROM employee_cont_tb where STAFF_ID = '$id'", "BONUS");
                         $deduction = $this->user->get_data_here_value("SELECT DEDUCTION FROM employee_cont_tb where STAFF_ID = '$id'", "DEDUCTION");
                           if($deduction == null || $deduction == '0'){
                             $deduction = 0;
                         }
    
                            ?>
                             <th style="color:green"><?php echo strtoupper($get_cashout_comm); ?></th>
                             <th style="color:green"><?php echo strtoupper($get_dep_comm); ?></th>
                             <th><?php echo strtoupper($get_dep_comm + $get_cashout_comm); ?></th>
                             <th style="color:green"><?php echo strtoupper($ssnit_employer); ?></th>
                             <th style="color:red"><?php echo strtoupper($ssnit_employee); ?></th>
                             <th style="color:red"><?php echo strtoupper($welfare); ?></th>
                             <th style="color:green"><?php echo strtoupper($bonus); ?></th>
                             <th style="color:red"><?php echo strtoupper($deduction); ?></th>
                             <th><?php echo strtoupper($get_dep_comm + $get_cashout_comm+$ssnit_employer-$ssnit_employee-$welfare+$bonus-$deduction); ?></th>
                            <?php
                            
                        }
                    
                    
                    }
                    }
                 }
                ?>
                </tr>
                 <?php
                ?>
              </thead>
          </table>
      </div>




     