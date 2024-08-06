<?php
class amwork_controller extends route
{
    private $user_tag, $username;
    private $user_initing;
    private $date_composer;
    private $conn, $status = '', $fee;

    function __construct()
    {
        $this->user_tag = $this->model('master_class');
        $this->user_initing = $this->model('extend_function');
        $this->date_composer = $this->user_initing->timer;
        $this->conn = new master_class();
        $this->user = new extend_function();
    }
    
        public function index()
    {
        $this->post_savings();
    }
    

    function post_savings()
       {
        extract($_POST);
            $db = $this->user_initing;
            if(isset($_SESSION["id"])){
            $idDate = $db->cleanInput($idDate);
            $id = $db->cleanInput($id);
            $id = $db->get_data_here_value("SELECT CODE FROM client_tb WHERE ID = $id","CODE");
            $amount = $db->cleanInput($amount);
            $account = $db->cleanInput($account);
            $userId = $_SESSION["id"];
            $idDate = $idDate." ".date("h:i:sa");
            $account_status = $db->cleanInput($account_status);
            $product = $db->cleanInput($product);
            $currDate = date('Y-m-d H:i:s');
            $normalDate = $idDate;
            
                $result = $db->getAllData("SELECT ENTRY_FEE_STATUS from check_tb WHERE ACCOUNT_NUMBER = '$account' AND CCODE = ".$_COOKIE["ccode"]."");
                if($result!==0){
                foreach($result as $row)
                {
                    $this->status = $row['ENTRY_FEE_STATUS'];
                    }
                }

                
                if( $this->status == ''||   $this->status == null){
                    $result = $db->getAllData("SELECT ENTRY_FEE from fee_tb ft JOIN account_tb at ON ft.PRODUCT_ID = at.PRODUCT_ID WHERE ACCOUNT_NO = '$account' AND CCODE = ".$_COOKIE['ccode']."");
                    if($result!==0){
                    foreach($result as $row)
                    {
                       $this->fee = $row['ENTRY_FEE'];
                      }   
                    }
                    if($result){
                    $params = array($db->hcode(), $account, 'ENTRY FEE',  $this->fee, $currDate, $currDate, $normalDate, $_COOKIE['ccode']);
                    $query = "INSERT INTO charge_tb (HCODE, ACCOUNT_NUMBER, FEE_TYPE, AMOUNT, DATE_CREATED, DATE_MODIFIED, DATE_NORMAL, CCODE) VALUES (?,?,?,?,?,?,?,?,?,?)";
                    $insert_contribution = $db->InsertRecords($query, $params);
                    
                    if($insert_contribution){
                    $params = array($account,'0', $_COOKIE['ccode'], $db->hcode());
                    $query = "INSERT INTO check_tb (ACCOUNT_NUMBER, ENTRY_FEE_STATUS, CCODE, HCODE) VALUES (?,?,?,?)";
                    $insert_contribution = $db->InsertRecords($query, $params);
                    
                    if($insert_contribution){
                            $params =array($db->hcode(), $amount,$id, $account, $idDate, $normalDate, $idDate, $userId, 1, $_COOKIE['ccode']);
                            $query = "INSERT INTO deposit_tb (HCODE, AMOUNT, CLIENT_ID, ACCOUNT_NUMBER, DATE_CREATED, DATE_NORMAL, DATE_MODIFIED, CREATED_BY, TAG, CCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
                            $insert_dep = $db->InsertRecords($query, $params);
                         
                             if($insert_dep>0){
                             //Insert commission

                             $commrate = $amount * 0.01;
                             $commrate = $commrate>50?50:$commrate;
                             $params =array($insert_dep, $amount, $commrate, $userId, $idDate, $idDate);
                            $query = "INSERT INTO susucomm_tb (DEPID, AMOUNT, COMMISSION, POSTED_BY, DATE_CREATED, DATE_MODIFIED) VALUES (?,?,?,?,?,?)";
                            $insert_comm = $db->InsertRecords($query, $params);


                              //Check && charge reopening fee
                              if($account_status == 'Inactive' && $product == 'SUSU ACCOUNT'){
                              $params  = array($db->hcode(), $id,$account, '0', 'REOPENING FEE', '5', $currDate, $currDate, $normalDate, $_SESSION['ccode']);
                              $query = "INSERT INTO charge_tb (HCODE, CLIENT_ID, ACCOUNT_NUMBER, WITHDRAWAL_ID, FEE_TYPE, AMOUNT, DATE_CREATED, DATE_MODIFIED, $normalDate, CCODE) VALUES (?,?,?,?,?,?,?,?,?,?)";
                              $insert_contribution = $db->InsertRecords($query, $params);
                              }
                            echo json_encode(array("status"=>"success", "message"=>"Amount Deposited Successfully", "sms_status"=>$db->deposit_send_sms($account, $db->get_data_here_value("SELECT CONTACT_1 FROM client_tb WHERE CODE = $id AND CCODE = ".$_COOKIE['ccode']."","CONTACT_1"), $amount, $db->calculateBalance($account))));
                             }else{
                                  echo json_encode(array("status"=>"failed", "message"=>"Failed Deposited Successfully"));
                             }
                            }
                        }
                    }
        
                }else{
                    
                $params = array($db->hcode(), $amount,$id, $account, $idDate, $normalDate, $idDate,  $userId, 1, $_COOKIE["ccode"]);
                $query = "INSERT INTO deposit_tb (HCODE, AMOUNT, CLIENT_ID, ACCOUNT_NUMBER, DATE_CREATED, DATE_NORMAL, DATE_MODIFIED, CREATED_BY, TAG, CCODE) VALUES (?,?,?,?,?,?,?,?,?,?)";
                $insert_dep = $db->InsertRecords($query, $params);
             
                 if($insert_dep>0){

                         $commrate = $amount * 0.01;
                         $commrate = $commrate>50?50:$commrate;
                            $params =array($insert_dep, $amount, $commrate, $userId, $idDate, $idDate);
                            $query = "INSERT INTO susucomm_tb (DEPID, AMOUNT, COMMISSION, POSTED_BY, DATE_CREATED, DATE_MODIFIED) VALUES (?,?,?,?,?,?)";
                            $insert_comm = $db->InsertRecords($query, $params);
                     
                          if($account_status == 'Inactive' && $product == 'SUSU ACCOUNT'){
                              $params = array($db->hcode(), $id,$account, '0', 'REOPENING FEE', '5', $currDate, $currDate, $dateNormal, $_COOKIE['ccode']);
                              $query = "INSERT INTO charge_tb (HCODE, CLIENT_ID, ACCOUNT_NUMBER, WITHDRAWAL_ID, FEE_TYPE, AMOUNT, DATE_CREATED, DATE_MODIFIED, DATE_NORMAL, CCODE) VALUES (?,?,?,?,?,?,?,?,?,?)";
                              $insert_contribution = $db->InsertRecords($query, $params);
                            
                            //Check account balance 
                            $balance = $this->user->get_data_here_value("SELECT BALANCE from balance_tb WHERE ACCOUNT_NUMBER = '$account' AND CCODE = ".$_COOKIE["ccode"]."", "BALANCE");
    
                             $balance = $this->user->updateFunction("UPDATE account_tb SET ACC_STATUS = '0', DATE_CREATED=DATE_CREATED, DATE_MODIFIED = '$currDate' where ACCOUNT_NO = '$account' AND CCODE = ".$_COOKIE["ccode"]."");
                        
                              }
                            
                          echo json_encode(array("status"=>"success", "message"=>"Amount Deposited Successfully", "sms_status"=>$db->deposit_send_sms($account, $db->get_data_here_value("SELECT CONTACT_1 FROM client_tb WHERE CODE = $id  AND CCODE = ".$_COOKIE["ccode"]."","CONTACT_1"), $amount, $db->calculateBalance($account))));
                         
                 }else{
                         echo json_encode(array("status"=>"failed", "message"=>"Failed Deposited Successfully"));
                 }
            }
        }else{
          echo json_encode(array("status"=>"expire", "message"=>"Page expired... Logging out"));  
        }
      }
    }
?>