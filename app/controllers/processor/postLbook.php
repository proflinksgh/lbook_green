<?php
    $path='/home3/linkseng/public_html/';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require ''.$path.'PHPMailer/src/Exception.php';
    require ''.$path.'PHPMailer/src/PHPMailer.php';
    require ''.$path.'PHPMailer/src/SMTP.php';
class amwork_controller extends route
{
	private $user_tag, $username;
	private $user_initing;
	private $date_composer;
	private $conn;

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
      $this->post_register();
	}

	function post_register()
	   {
		extract($_POST);
		$db = $this->user_initing;
    		$fullname = $db->cleanInput($fullname);
    		$company = $db->cleanInput($company);
    		$type = $db->cleanInput($type);
    		$email = $_POST["email"];
    		$phone = $db->cleanInput($phone); 
    		$whatsapp = $db->cleanInput($whatsapp);
    		$employee = $db->cleanInput($employee);
    		$currDate = date('Y-m-d');
    		$date_created = date('Y-m-d H:i:s');
    		$password = "ps".mt_rand(100000,999999); 
    		
    		if(!isset($whatsapp)){
    		  $whatsapp = $phone;  
    		}
    		
            $request = "Fullname: $fullname Phone number: $phone WhatsApp number: $whatsapp Company: $company Type: $type Employee no: $employee";
            $user_id = $db->get_data_here_value("SELECT USER_ID FROM login_tb WHERE USERNAME = '$email'", "USER_ID");
            if($user_id == 0){
             $params = array($email, $password, $phone, $currDate, $currDate, "", 1, 1); 
		  	 $query = "INSERT INTO login_tb (USERNAME, PASSWORD, CONTACT, DATE_CREATED, DATE_MODIFIED, IMAGE, STATUS_ID, VERIFY_STATUS) VALUES (?,?,?,?,?,?,?,?)";
             $user_id = $db->InsertRecords($query, $params);
             
             $params = array($user_id, $request, "L-book Trial Request", "L-book Financial Software", $currDate, "Project", "ACCEPTED"); 
		  	 $query = "INSERT INTO software_req_tb (USER_ID, OPERATING_SYSTEM, ARCHITECTURE, SOFTWARE, DATE, BASIC_COST, STATUS) VALUES (?,?,?,?,?,?,?)";
             $insert_record = $db->InsertRecords($query, $params);
             
             $params = array($user_id, $insert_record, $company, "L-BOOK", $email, $phone, 300, $date_created); 
		  	 $query = "INSERT INTO offline_user (USER_ID, REQUEST_ID, COMPANY, PRODUCT, EMAIL, CONTACT, MONTHLY_AMT, DATE_CREATED) VALUES (?,?,?,?,?,?,?,?)";
             $insert_user = $db->InsertRecords($query, $params);
             
             
            }else{
             $params = array($user_id, $request, "L-book Trial Request", "L-book Financial Software", $currDate, "Project", "ACCEPTED"); 
		  	 $query = "INSERT INTO software_req_tb (USER_ID, OPERATING_SYSTEM, ARCHITECTURE, SOFTWARE, DATE, BASIC_COST, STATUS) VALUES (?,?,?,?,?,?,?)";
             $insert_record = $db->InsertRecords($query, $params);
             
             $params = array($user_id, $insert_record, $company, "L-BOOK", $email, $phone, 300, $date_created); 
		  	 $query = "INSERT INTO offline_user (USER_ID, REQUEST_ID, COMPANY, PRODUCT, EMAIL, CONTACT, MONTHLY_AMT, DATE_CREATED) VALUES (?,?,?,?,?,?,?,?)";
             $insert_user = $db->InsertRecords($query, $params);
              }
              $this->routeSettings($company, $email, $fullname, $type, $phone, $db->strContact($whatsapp), $fullname, $employee);
            }
            
            
            
             function postWhatsApp($recepient){
        	    $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v13.0/101422379271974/messages');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \"messaging_product\": \"whatsapp\", \"to\": \"$recepient\", \"type\": \"template\", \"template\": {\"name\": \"customer_links\", \"language\": { \"code\": \"en_GB\", \"policy\": \"deterministic\"} } }");
                $headers = array();
                $headers[] = 'Authorization: Bearer EAAODZCDalHV8BAGObVpYj7NCJZA1QU0WFeeEtLaIW3cgINyZCS1cePC57tRKfrJtZB47S2vcbHkX0nKZCcaYwv423UTGIyL7aAXSUv0IB6gSMFDzeH22M9j2yVzYddDLBAjUUL2AfZBzRIVEO5fsExDuOdRVRQ44RKO3h9XWTcNSFQH0RnCPdwUHKYkOkowdEOsbrNvlU0DgZDZD';
                $headers[] = 'Content-Type: application/json';
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                $result = curl_exec($ch);
                curl_close($ch);
        	  }
            
            
            function routeSettings($company, $email, $name, $type, $phone, $whatsapp, $fullname, $employee){
            $fname = explode(" ",$name);
            $cleanmail = $email;
            $cleancompany = $company;
			$email= rawurlencode($email);                   
			$company= rawurlencode($company);                   
			$name= rawurlencode($name);
			$type= rawurlencode($type);
			$phone= rawurlencode($phone);
			    $url = "https://linksengineering.net/lbroute/public/api/post_setting?company=".$company."&email=".$email."&name=".$name."&type=".$type."&phone=".$phone;
			    $ch = curl_init();
			    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
			    curl_setopt($ch, CURLOPT_HEADER, 0);
			    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			    curl_setopt($ch, CURLOPT_URL, $url);
			    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
			    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
			    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			    $html_curl = curl_exec($ch);
			    $result = json_decode($html_curl);
			    if(isset($result->ccode)){
			     $this->init_lsync_history($result->ccode, $cleanmail, $fname[0], $result->password, $cleancompany, $whatsapp, $fullname, $employee, $phone, $type);   
			     echo $html_curl;
			    }else{
			      echo json_encode(array("status"=>"failed"));  
			    }
			    curl_close($ch);
    	   }
    	   
    	  
    	    function init_lsync_history($ccode, $email, $fname, $password, $company, $whatsapp, $fullname, $employee, $phone, $type){
			$ccode= rawurlencode($ccode);
			    $url = "https://linksengineering.net/sync_lbook/public/api/init_sync_history?ccode=".$ccode;
			    $ch = curl_init();
			    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
			    curl_setopt($ch, CURLOPT_HEADER, 0);
			    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			    curl_setopt($ch, CURLOPT_URL, $url);
			    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
			    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
			    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			    $html_curl = curl_exec($ch);
			    
			    $body = "<p>Hello, <br><br>You've received new L-book Trial request. Find the details below:<br><br>Fullname: $fullname
                <br>Company: $company<br>Type: $type<br>Email: $email<br>Phone: $phone<br>WhatsApp: $whatsapp <br>Employees: $employee</p>";
			     $this->send_email("L-book Trial Request", $email, $body);
           $this->send_user_email($email, $fname, $password, $company, $type);
                //  if(isset($whatsapp)){
                //    $this->postWhatsApp($whatsapp);  
                // }
    	   }
    	   
    	   
    	   
    	    	function send_user_email($mail, $fname, $password, $company, $type){
    	    	 if($type=="Hire"){
                    $link = "https://hbook.linksengineering.net";
                 }else{
                    $link = "https://lbook.linksengineering.net"; 
                 }
                $message = '<!DOCTYPE html><html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head>
                  <title> Links Mailing </title>
                  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                  <meta name="viewport" content="width=device-width, initial-scale=1" />
                  <style type="text/css">
                    #outlook a {
                      padding: 0;
                    }
                
                    body {
                      margin: 0;
                      padding: 0;
                      -webkit-text-size-adjust: 100%;
                      -ms-text-size-adjust: 100%;
                    }
                
                    table,
                    td {
                      border-collapse: collapse;
                      mso-table-lspace: 0pt;
                      mso-table-rspace: 0pt;
                    }
                
                    img {
                      border: 0;
                      height: auto;
                      line-height: 100%;
                      outline: none;
                      text-decoration: none;
                      -ms-interpolation-mode: bicubic;
                    }
                
                    p {
                      display: block;
                      margin: 13px 0;
                    }
                  </style>
                  <link href="https://fonts.googleapis.com/css?family=Nunito:100,400,700" rel="stylesheet" type="text/css" />
                  <style type="text/css">
                    @import url(https://fonts.googleapis.com/css?family=Nunito:100,400,700);
                  </style>
                  <!--<![endif]-->
                  <style type="text/css">
                    @media only screen and (min-width:480px) {
                      .mj-column-per-100 {
                        width: 100% !important;
                        max-width: 100%;
                      }
                    }
                  </style>
                  <style type="text/css">
                    @media only screen and (max-width:480px) {
                      table.mj-full-width-mobile {
                        width: 100% !important;
                      }
                
                      td.mj-full-width-mobile {
                        width: auto !important;
                      }
                    }
                  </style>
                  <style type="text/css">
                    a,
                    span,
                    td,
                    th {
                      -webkit-font-smoothing: antialiased !important;
                      -moz-osx-font-smoothing: grayscale !important;
                    }
                  </style>
                </head>
                
                <body style="background-color:#eaeaea;">
                  <div style="display:none;font-size:1px;color:#ffffff;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;"> Hello, Welcome to L-BOOK v2.0 </div>
                  <div style="background-color:#eaeaea;">
                    <div style="margin:0px auto;max-width:600px;">
                      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                        <tbody>
                          <tr>
                            <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;">
                              <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                  <tbody><tr>
                                    <td style="font-size:0px;word-break:break-word;">
                                      <div style="height:20px;">   </div>
                                    </td>
                                  </tr>
                                </tbody></table>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div style="background:url() top center / cover no-repeat;margin:0px auto;border-radius:20px 20px 0 0;max-width:600px;">
                      <div style="line-height:0;font-size:0;">
                        <table align="center" background="https://images.unsplash.com/photo-1596146828437-d845f3b3235b?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:url(https://lbook.linksengineering.net/assets/img/adimg.png) top center / cover no-repeat;width:100%;border-radius:20px 20px 0 0;">
                          <tbody>
                            <tr>
                              <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;">
                                <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                    <tbody><tr>
                                      <td align="center" style="font-size:0px;padding:8px 0;word-break:break-word;">
                                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                          <tbody>
                                            <tr>
                                              <td style="width:150px;">
                                                <img height="auto" src="" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:16px;" width="150" />
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="font-size:0px;word-break:break-word;">
                                        <div style="height:250px;">   </div>
                                      </td>
                                    </tr>
                                  </tbody></table>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div style="background:#ffffff;background-color:#ffffff;margin:0px auto;border-radius:0 0 20px 20px;max-width:600px;">
                      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;border-radius:0 0 20px 20px;">
                        <tbody>
                          <tr>
                            <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;">
                              <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                  <tbody>
                                    <tr>
                                    <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                      <div style="font-family:Nunito, Helvetica, Arial, sans-serif;font-size:18px;font-weight:400;line-height:30px;text-align:left;color:#54595f;">
                                        <h2 style="margin: 0; line-height: normal; font-weight: bold; font-size: 20px;"> Hello '.$fname.',</h2>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                      <div style="font-family:Nunito, Helvetica, Arial, sans-serif;font-size:16px;font-style:normal;font-weight:400;line-height:22px;text-align:left;color:#54595f;">
                                        <p style="margin: 0;"> Thank you for Signing Up on <b>L-BOOK</b> FINTECH.<br><br>Please find your Login Credentials below:<br><br>URL: <b><a href="'.$link.'">'.$link.'</a></b><br>Username: <b>Admin</b><br>Password: <b>'.$password.'</b><br></p>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="center" vertical-align="middle" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;">
                                        <tbody><tr>
                                          <td align="center" bgcolor="#54595f" role="presentation" style="border:none;border-radius:30px;cursor:auto;mso-padding-alt:10px 25px;background:#54595f;" valign="middle">
                                            <a href="https://lbook.linksengineering.net/auth" style="display: inline-block; background: #007bff; color: white; font-family: Nunito, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 30px; margin: 0; text-decoration: none; text-transform: none; padding: 10px 25px; mso-padding-alt: 0px; border-radius: 30px;" target="_blank"> Login to L-Book </a>
                                          </td>
                                        </tr>
                                      </tbody></table>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                      <div style="font-family:Nunito, Helvetica, Arial, sans-serif;font-size:16px;font-weight:400;line-height:22px;text-align:left;color:#54595f;">If you have any questions simply reply to this email and we would be more than happy to reply. :)</div>
                                    </td>
                                  </tr>
                                </tbody></table>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div style="margin:0px auto;max-width:600px;">
                      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                        <tbody>
                          <tr>
                            <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;text-align:center;">
                              <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                  <tbody><tr>
                                    <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                      <div style="font-family:Nunito, Helvetica, Arial, sans-serif;font-size:16px;font-weight:400;line-height:22px;text-align:center;color:#54595f;"><a href="https://play.google.com/store/apps/details?id=app.linksengineering.net" style="color: #54595f; display: inline-block; text-decoration: none;">
                                          <img src="https://codedmails.com/images/google-play.png" alt="play-store-logo" width="150px" />
                                        </a>
                                        <a href="https://play.google.com/store/apps/details?id=app.linksengineering.net" style="color: #54595f; display: inline-block; text-decoration: none;">
                                          <img src="https://codedmails.com/images/app-store.png" alt="app-store-logo" width="150px" />
                                        </a></div>
                                    </td>
                                  </tr>
                                </tbody></table>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div style="margin:0px auto;max-width:600px;">
                      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                        <tbody>
                          <tr>
                            <td style="direction:ltr;font-size:0px;padding:20px 0;padding-top:0px;text-align:center;">
                              <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                  <tbody>
                                    <tr>
                                    <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                      <div style="font-family:Nunito, Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:18px;text-align:center;color:#54595f;">Accra - Ghana<br /> © '.date('Y').' Links Engineering Ltd</div>
                                    </td>
                                  </tr>
                                    <tr>
                                    <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                      <div style="font-family:Nunito, Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:18px;text-align:center;color:#54595f;"><a href="https://linksengineering.net/quickterms" style="color: #54595f; text-decoration: underline;">Terms of service</a> | <a href="https://linksengineering.net/privacy-policy" style="color: #54595f; text-decoration: underline;"> Privacy policy </a></div>
                                    </td>
                                  </tr>
                                </tbody></table>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div style="margin:0px auto;max-width:600px;">
                      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                        <tbody>
                          <tr>
                            <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;">
                              <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                  <tbody><tr>
                                    <td style="font-size:0px;word-break:break-word;">
                                      <div style="height:1px;">   </div>
                                    </td>
                                  </tr>
                                </tbody></table>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </body></html>';
                $email = new PHPMailer();
                $email->SetFrom('info@linksengineering.net', 'Links Engineeering'); //Name is optional
                $email->Subject   = "Welcome to L-Book Micro-Finance";
                $email->Body      = $message;
                $email->AddAddress($mail, $company);
                $email->IsHTML(true);
                $email->Send();
            	 }
    	   
    	   
         	function send_email($title, $mail, $body){
         	    $mail = "proflinksgh@gmail.com";
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
                             <a href="https://admin.linksengineering.net" target="_blank">Virtual Office</a>
                        </div>';
                $message .= '</body></html>';
                $email = new PHPMailer();
                $email->SetFrom('info@linksengineering.net', $title); //Name is optional
                $email->Subject   = "L-book Trial Request";
                $email->Body      = $body."\n\n".$message;
                $email->AddAddress($mail, 'New L-book Application');
                $email->IsHTML(true);
                $email->Send();
            	 }
		}
?>