<?php
    $path='/home3/linkseng/public_html/';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require ''.$path.'PHPMailer/src/Exception.php';
    require ''.$path.'PHPMailer/src/PHPMailer.php';
    require ''.$path.'PHPMailer/src/SMTP.php';

class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $company, $category, $city, $contact, $status, $code, $conn, $user;


	  function __construct()
	{
	    $this->user_tag = $this->model('master_class_server');
		$this->user_initing = $this->model('extend_function_server');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class_server();
		$this->user = new extend_function_server();
	}
	
	
	public function index()
	{
	    $this->subscribe();
	}
	
       	function subscribe()
	{
	extract($_POST);
    $db = $this->user_initing;
    $email = $_POST['email'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
        
	  $currDate = date('Y-m-d H:i:s');
	  $params = array($username, $email, $phone, $subject, $message, $currDate);
    $query = "INSERT INTO message_tb (FULLNAME, EMAIL, CONTACT, SUBJECT, MESSAGE, DATE_CREATED) VALUES (?,?,?,?,?,?)";
    $insert_note = $this->user->InsertRecords($query, $params);
	  if($insert_note > 0){
	   	 $this->inform($username, $email, $phone, $subject, $message);
	   	 echo json_encode(array("status"=>"success"));
	   	}else{
	   	 echo json_encode(array("status"=>"failed"));
	   			}	 
		}
	

	function inform($username, $mail, $phone, $subject, $message){
	$body = "You have new message from ".$username.": <br>Subject: ".$subject."<br> Message: ".$message."<br>Contact: ".$phone. "";
    $message = '<html>
    <head>
    <style>
          #button {
                  font: bold 14px Helvetica, Arial, sans-serif;
                  position: relative;
                  background: blue;
                  padding-top: 17px;
                  padding-bottom: 17px;
                  border-radius: 7px;
                  left: 320px;
                  text-align: center;
                  width: 150px;
                  top: 30px;
            }
            #button a {
                  color: white;
                  text-decoration: none;
            }
    </style>
    </head>

    <body>';
    $message .= '<p></p>';
    $message .= '<p></p>';
    $message .= '<div id="button">
                  <a href="https://admin.linksengineering.net" target="_blank">Dashboard</a>
            </div>';
    $message .= '</body></html>';
    $email = new PHPMailer();
    $email->SetFrom($mail, $mail); //Name is optional
    $email->Subject   = "New message";
    $email->Body      = $body."\n\n".$message;
    $email->AddAddress( ' info@linksengineering.net' );
    $email->IsHTML(true);
    $email->Send();
    		
		}
	}
?>