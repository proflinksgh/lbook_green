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
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
		public function index()
	{
        $this->post_register();
	}


	function post_register()
	   {
		extract($_POST);
		$db = $this->user_initing;
    		$idFirstname = $db->cleanInput($idFirstname);
    		$idLastname = $db->cleanInput($idLastname);
    		$idOthername = $db->cleanInput($idOthername);
    		$idDob = $db->cleanInput($idDob);
    		$idGender = $db->cleanInput($idGender);
    		$idContact1 = $db->cleanInput($idContact1);
    		$idNextofKin = $db->cleanInput($idNextofKin);
    		$idNextofKinContact = $db->cleanInput($idNextofKinContact);
    		$idRegion = $db->cleanInput($idRegion);
    		$idCity = $db->cleanInput($idCity);
    		$email = $db->cleanInput($email);
    		$education = $db->cleanInput($education);
    		$idResidence = $db->cleanInput($idResidence);
    		$idOccupation = $db->cleanInput($idOccupation);
    		$idIdentification = $db->cleanInput($idIdentification);
    		$idIdnumber = $db->cleanInput($idIdnumber);
    		$userId = $_SESSION["id"];
    		$agent =$db->get_data_here_value("SELECT CONCAT(SURNAME,'',OTHERNAME) AS NAME FROM admin_tb WHERE CODE=$userId","NAME");
    		$code = random_int(10000000, 99999999);
    		$code = $code.strlen($idFirstname);
    		if(isset($_SESSION['filename'])){
    		  $image = $_SESSION['filename'];  
    		}else{
    		    $image = " "; 
    		}
    		$image=$_POST['image'];
    		$currDate = date('Y-m-d H:i:s');
    		
    		if($_SESSION["status"]=="1"){
    		 	if($db->get_data_here_value("SELECT ID FROM client_tb WHERE CODE=$code","ID")>0){
    		    $code.=random_int(1000, 9999);
        		$params = array($code, $idFirstname,$idLastname, $idOthername, $idDob, $idGender, $idContact1, $idNextofKin, $idNextofKinContact,  $idRegion, $idCity, $email, $education, $idResidence, $idOccupation, $idIdentification, $idIdnumber, $currDate, $currDate, '2', $image, $userId, $_COOKIE['ccode'], $db->hcode());
    			$query = "INSERT INTO client_tb (CODE, FIRSTNAME, LASTNAME, OTHERNAME, DOB, GENDER, CONTACT_1, NEXT_OF_KIN, NEXT_OF_KIN_CONTACT, REGION, CITY, EMAIL, EDUCATION, AREA, OCCUPATION, IDENTIFICATION, IDNUMBER, DATE_CREATED, DATE_MODIFIED, ACCOUNT_STATUS, IMAGE_PATH, POST_BY, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    			$insert_contribution = $db->InsertRecords($query, $params);
        		if($insert_contribution>0){
        		 	     unset($_SESSION['filename']);
        		   	     echo json_encode(array('status'=>'success', 'client_id'=>$insert_contribution));
    		   	 }else{
    		   	     echo json_encode(array('status'=>'failed'));
    		   	 }   
    		}else{
    		    $params = array($code, $idFirstname,$idLastname, $idOthername, $idDob, $idGender, $idContact1, $idNextofKin, $idNextofKinContact,  $idRegion, $idCity, $email, $education, $idResidence, $idOccupation, $idIdentification, $idIdnumber, $currDate, $currDate, '2', $image, $userId, $_COOKIE['ccode'], $db->hcode());
    			$query = "INSERT INTO client_tb (CODE, FIRSTNAME, LASTNAME, OTHERNAME, DOB, GENDER, CONTACT_1, NEXT_OF_KIN, NEXT_OF_KIN_CONTACT, REGION, CITY, EMAIL, EDUCATION, AREA, OCCUPATION, IDENTIFICATION, IDNUMBER, DATE_CREATED, DATE_MODIFIED, ACCOUNT_STATUS, IMAGE_PATH, POST_BY, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    			$insert_contribution = $db->InsertRecords($query, $params);
        		if($insert_contribution>0){
        		 	unset($_SESSION['filename']);
        		   	echo json_encode(array('status'=>'success', 'client_id'=>$insert_contribution));
    		   	 }else{
    		   	     echo json_encode(array('status'=>'failed'));
    		   	 } 
    		 }   
    		}else{
    		  	if($db->get_data_here_value("SELECT ID FROM client_tb WHERE CODE=$code","ID")>0){
    		    $code.=random_int(1000, 9999);
        		$params = array($code, $idFirstname,$idLastname, $idOthername, $idDob, $idGender, $idContact1, $idNextofKin, $idNextofKinContact,  $idRegion, $idCity, $email, $education, $idResidence, $idOccupation, $idIdentification, $idIdnumber, $currDate, $currDate, '3', $image, $userId, $_COOKIE['ccode'], $db->hcode());
    			$query = "INSERT INTO client_tb (CODE, FIRSTNAME, LASTNAME, OTHERNAME, DOB, GENDER, CONTACT_1, NEXT_OF_KIN, NEXT_OF_KIN_CONTACT, REGION, CITY, EMAIL, EDUCATION, AREA, OCCUPATION, IDENTIFICATION, IDNUMBER, DATE_CREATED, DATE_MODIFIED, ACCOUNT_STATUS, IMAGE_PATH, POST_BY, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    			$insert_contribution = $db->InsertRecords($query, $params);
        		if($insert_contribution>0){
        		 	     unset($_SESSION['filename']);
        		   	     echo json_encode(array('status'=>'success', 'client_id'=>$insert_contribution));
    		   	 }else{
    		   	     echo json_encode(array('status'=>'failed'));
    		   	 }  
    		   	 
    		   	 $this->send_email($insert_contribution, $agent, "$idLastname $idFirstname $idOthername");
    		}else{
    		    $params = array($code, $idFirstname,$idLastname, $idOthername, $idDob, $idGender, $idContact1, $idNextofKin, $idNextofKinContact,  $idRegion, $idCity, $email, $education, $idResidence, $idOccupation, $idIdentification, $idIdnumber, $currDate, $currDate, '3', $image, $userId, $_COOKIE['ccode'], $db->hcode());
    			$query = "INSERT INTO client_tb (CODE, FIRSTNAME, LASTNAME, OTHERNAME, DOB, GENDER, CONTACT_1, NEXT_OF_KIN, NEXT_OF_KIN_CONTACT, REGION, CITY, EMAIL, EDUCATION, AREA, OCCUPATION, IDENTIFICATION, IDNUMBER, DATE_CREATED, DATE_MODIFIED, ACCOUNT_STATUS, IMAGE_PATH, POST_BY, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    			$insert_contribution = $db->InsertRecords($query, $params);
        		if($insert_contribution>0){
        		 	unset($_SESSION['filename']);
        		   	echo json_encode(array('status'=>'success', 'client_id'=>$insert_contribution));
    		   	 }else{
    		   	     echo json_encode(array('status'=>'failed'));
    		   	 } 
    		   	$this->send_email($insert_contribution, $agent, "$idLastname $idFirstname $idOthername"); 
    		  }  
    		}
		}
		
		
		
    function send_email($cid, $agent, $fullname){
    $message = '<!DOCTYPE html><html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head>
    <title>New Customer Registration </title>
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
  
  <body style="background-color:#ffffff;">
    <div style="display:none;font-size:1px;color:#ffffff;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;"> Hello, a new customer registration needs your approval </div>
    <div style="background-color:#ffffff;">
      <div style="margin:0px auto;max-width:600px;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;text-align:center;">
                <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                    <tbody><tr>
                      <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                          <tbody>
                           
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                        <div style="font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:400;line-height:24px;text-align:left;color:#434245;">
                          <h1 style="margin: 0; font-size: 24px; line-height: normal; font-weight: bold;"> Hello Admin, a new customer registration needs Approval.<br />  </h1>
                        </div>
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
                      <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                        <div style="font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:400;line-height:24px;text-align:left;color:#434245;">
                          <p style="margin: 0;"><b>#ID:</b> '.$cid.'</p>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                        <div style="font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:400;line-height:24px;text-align:left;color:#434245;">
                          <p style="margin: 0;"><b>Customer:</b> '.$fullname.'</p>
                        </div>
                      </td>
                    </tr>
                      <tr>
                      <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                        <div style="font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:400;line-height:24px;text-align:left;color:#434245;">
                          <p style="margin: 0;"><b>Posted by:</b> '.$agent.'</p>
                        </div>
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
                    <tbody>
                    <tr>
                      <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                        <div style="font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:400;line-height:24px;text-align:left;color:#434245;">
                            
                        </div>
                      </td>
                    </tr>
                   
                    <tr>
                        <td align="left" vertical-align="middle" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;">
                              <tbody><tr>
                                <td align="center" bgcolor="#2e58ff" role="presentation" style="border:none;border-radius:30px;cursor:auto;mso-padding-alt:10px 25px;background:#2e58ff;" valign="middle">
                                  <a href="https://st.linksengineering.net/revclient?key='.$cid.'" style="display: inline-block; background: #2e58ff; color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 30px; margin: 0; text-decoration: none; text-transform: uppercase; padding: 10px 
                                    25px; mso-padding-alt: 0px; border-radius: 30px;" target="_blank">
                                    <strong>Review</strong>  </a>
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
                    <tbody><tr>
                      <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                        <div style="font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:400;line-height:24px;text-align:left;color:#434245;">If you need any help, don’t hesitate to reach out to us at <a href="#" style="color: #2e58ff; text-decoration: none;">info@linksengineering.net</a></div>
                      </td>
                    </tr>
                    <tr>
                      <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                        <div style="font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:bold;line-height:24px;text-align:left;color:#434245;">Best Regards!</div>
                      </td>
                    </tr>
                    <tr>
                      <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                        <table align="left" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;">
                          <tbody><tr>
                            <td style="padding:4px;">
                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-radius:3px;width:18px;">
                                <tbody><tr>
                                  <td style="font-size:0;height:18px;vertical-align:middle;width:18px;">
                                    <a href="https://twitter.com/prof_links" target="_blank" style="color: #2e58ff; text-decoration: none;">
                                      <img alt="twitter-logo" height="18" src="https://codedmails.com/images/social/black/twitter-logo-transparent-black.png" style="border-radius:3px;display:block;" width="18" />
                                    </a>
                                  </td>
                                </tr>
                              </tbody></table>
                            </td>
                          </tr>
                        </tbody></table>

                        <table align="left" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;">
                          <tbody><tr>
                            <td style="padding:4px;">
                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-radius:3px;width:18px;">
                                <tbody><tr>
                                  <td style="font-size:0;height:18px;vertical-align:middle;width:18px;">
                                    <a href="https://m.facebook.com/proflinksgh" target="_blank" style="color: #2e58ff; text-decoration: none;">
                                      <img alt="facebook-logo" height="18" src="https://codedmails.com/images/social/black/facebook-logo-transparent-black.png" style="border-radius:3px;display:block;" width="18" />
                                    </a>
                                  </td>
                                </tr>
                              </tbody></table>
                            </td>
                          </tr>
                        </tbody></table>
                        <table align="left" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;">
                          <tbody><tr>
                            <td style="padding:4px;">
                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-radius:3px;width:18px;">
                                <tbody><tr>
                                  <td style="font-size:0;height:18px;vertical-align:middle;width:18px;">
                                    <a href="https://www.instagram.com/linksengine" target="_blank" style="color: #2e58ff; text-decoration: none;">
                                      <img alt="instagram-logo" height="18" src="https://codedmails.com/images/social/black/instagram-logo-transparent-black.png" style="border-radius:3px;display:block;" width="18" />
                                    </a>
                                  </td>
                                </tr>
                              </tbody></table>
                            </td>
                          </tr>
                        </tbody></table>
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
              <td style="direction:ltr;font-size:0px;padding:20px 0;padding-top:0;text-align:center;">
                <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                    <tbody><tr>
                      <td style="font-size:0px;padding:10px 25px;word-break:break-word;">
                        <p style="border-top: dashed 1px lightgrey; font-size: 1px; margin: 0px auto; width: 100%;">
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                        <div style="font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:24px;text-align:left;color:#999999;">Have questions or need help? Email us at <a href="#" style="color: #2e58ff; text-decoration: none;"> info@linksengineering.net </a></div>
                      </td>
                    </tr>
                    <tr>
                      <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                        <div style="font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:400;line-height:24px;text-align:left;color:#434245;">Links Engineering<br />Accra - Ghana.</div>
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
    $email->SetFrom('info@linksengineering.net', "L-Book v2"); //Name is optional
    $email->Subject   = "New customer registration";
    $email->Body      = $message;
    $email->AddAddress("stepbysteptelecomdirector@gmail.com", 'Pending Approval');
    $email->IsHTML(true);
    $email->Send();
	 }
	}
?>
