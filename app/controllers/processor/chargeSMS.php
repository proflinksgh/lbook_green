<?php
class amwork_controller extends route
{
    private $user_tag;
    private $user_initing;
    private $date_composer;
    private $id, $product_name, $current_balance, $date, $deposits=0, $withdrawal=0, $fee=0, $search, $interest=0, $depdate, $balance;

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
        $this->fetch_product();
    }
       function fetch_product()
        {
        extract($_POST);
        $db = $this->user_initing;
        $msg = array();
        $currDate = date('Y-m-d H:i:s');
        $year = date("Y"); 
        $last_month = date('m',strtotime("-1 month"));
        
        $month = date('m');
        if($month == '1'){
            $month = 'January';
        }else if($month == '2'){
            $month = 'February';
        }else if($month == '3'){
            $month ='March';
        }else if($month == '4'){
            $month = 'April';
        }else if($month == '5'){
            $month = 'May';
        }else if($month == '6'){
            $month = 'June';
        }else if($month == '7'){
            $month = 'July';
        }else if($month == '8'){
            $month = 'August';
        }else if($month == '9'){
            $month = 'September';
        }else if($month == '9'){
            $month = 'October';
        }else if($month == '11'){
            $month = 'November';
        }else if($month == 12){
            $month = 'December';
        }

        //Start execution
        $query = $this->user->getAllData("SELECT * from account_tb WHERE CCODE = ".$_COOKIE['ccode']."");
        foreach($query as $row)
        {
            
        if($row['SMS_STATUS'] == '0'){
            
                $fetch_date = $this->user->get_data_here_value("SELECT DATE_CREATED FROM charge_tb WHERE FEE_TYPE LIKE '%SMS CHARGE%' AND ACCOUNT_NUMBER = '".$row['ACCOUNT_NO']."' AND CCODE = ".$_COOKIE['ccode']." ORDER BY ID DESC LIMIT 1", "DATE_CREATED");
              
                if($fetch_date == 0){
                    $date_created = $this->user->get_data_here_value("SELECT MIN(DATE_CREATED) as MINDATE from sms_tb WHERE ACCOUNT_NO = '".$row['ACCOUNT_NO']."' AND CCODE = ".$_COOKIE['ccode']."", "MINDATE");
                    
                    $start = strtotime($date_created);
                    $end = strtotime($currDate);
                    $days_between = ceil(abs($end - $start) / 86400); 
                
                    if($days_between >= 30){
                    $params = array($db->hcode(), ".$row['CLIENT_ID'].", ".$row['ACCOUNT_NO'].",'' , $month $year SMS CHARGE, '3', $_COOKIE['ccode']);
                    $query = "INSERT INTO charge_tb (HCODE, CLIENT_ID, ACCOUNT_NUMBER, WITHDRAWAL_ID, FEE_TYPE, AMOUNT, CCODE) VALUES (?,?,?,?,?,?,?)";
                    $insert_contribution = $db->InsertRecords($query, $params);
                    
                    }
                    
                }else{
                    $start = strtotime($fetch_date);
                    $end = strtotime($currDate);
                    $days_between = ceil(abs($end - $start) / 86400); 
                
                    if($days_between >= 30){
                    
                    $params = array($db->hcode(), ".$row['CLIENT_ID'].", ".$row['ACCOUNT_NO'].",'' , $month $year SMS CHARGE, '3' $_COOKIE['ccode']);
                    $query = "INSERT INTO charge_tb (CLIENT_ID, ACCOUNT_NUMBER, WITHDRAWAL_ID, FEE_TYPE, AMOUNT) VALUES (?,?,?,?,?,?,?)";
                    $insert_contribution = $db->InsertRecords($query, $params);
                        }
                    }
                }
            }
        }
    }
?>