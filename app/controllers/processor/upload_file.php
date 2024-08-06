<?php
class amwork_controller extends route
{
  private $user_tag;
  private $user_initing;
  private $date_composer;

  function __construct()
  {
      $this->user_tag = $this->model('master_class');

    $this->user_initing = $this->model('extend_function');

    $this->date_composer = $this->user_initing->timer;

    $this->conn = new master_class();
  }


  function upload()
  {
    extract($_POST);
    $db = $this->user_initing;

    $filename = $_FILES['file']['name'];
    $filesize = $_FILES['file']['size'];
    unset($_SESSION['filename']);
  
  
   $address = explode(".", $filename);
   $name =  random_int(100000, 999999);

     $filename = $name + 1;
    if($address[1] == 'jpg'){
      $filename = "img".$filename.'.jpg';
    } else if($address[1] == 'png'){
      $filename = "img".$filename.'.png';
    } else if($address[1] == 'jpeg'){
      $filename = "img".$filename.'.jpeg';
    }else if($address[1] == 'pdf'){
      $filename = "pdf".$filename.'.pdf';
    }else if($address[1] == 'doc'){
      $filename = "doc".$filename.'.doc';
    }else if($address[1] == 'docx'){
      $filename = "docx".$filename.'.docx';
    }else if($address[1] == 'mp4'){
      $filename = "mp4".$filename.'.mp4';
    }else if($address[1] == 'mp3'){
      $filename = "mp3".$filename.'.mp3';
    }else if($address[1] == 'mpeg'){
      $filename = "mpeg".$filename.'.mpeg';
    }else if($address[1] == 'JPG'){
      $filename = "img".$filename.'.JPG';
    } else if($address[1] == 'PNG'){
      $filename = "img".$filename.'.PNG';
    } else if($address[1] == 'JPEG'){
      $filename = "img".$filename.'.JPEG';
    }else{
      $filename = "fl".$filename.".".$address[1];  
    }
    $_SESSION['filename'] = $filename;
    if(isset($_POST["lid"])){
      $location = "forms/".$filename;
    }else{
      $location = "upload/".$filename;
    }
    
     $return_arr = array();
     if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
        if(isset($_POST["lid"])){
          $location = "forms/".$filename;
        }else{
          $location = "upload/".$filename;
        }
        if(is_array(getimagesize($location))){
            $src = $location;
            }
            $return_arr = array("status"=>"success", "name"=>$filename,"size" => $filesize, "src"=>$location);
            }
            
        if(isset($_POST["lid"])){
          $params = array($_POST["cid"], $_POST["lid"], $filename, $_SESSION['id'], $db->date_created(), $db->date_created());
          $query = "INSERT INTO form_tb (CUSTOMERID, LOANID, AFILE, POSTED_BY, DATE_CREATED, DATE_MODIFIED) VALUES (?,?,?,?,?,?)";
          $insert_ = $db->InsertRecords($query, $params);

          if($insert_>0){
            echo json_encode($return_arr); 
          }else{
            echo json_encode(array("status"=>"failed", "message"=>"File upload failed! Please try again"));
          }
        }else{
          echo json_encode($return_arr); 
        }
        
      }
  public function index()
  {
     
     $this->upload();
  }
}

?>