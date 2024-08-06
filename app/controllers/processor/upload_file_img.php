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
    $_SESSION['custimage'] = $filename;
    $location = "upload/".$filename;
     $return_arr = array();
     if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
        $src = "upload/".$filename;
        if(is_array(getimagesize($location))){
            $src = $location;
            }

            $return_arr = array("name" => $filename,"size" => $filesize, "src"=> $src);
            }    
        echo json_encode($return_arr); 
      }

  public function index()
  {
     
     $this->upload();
  }
}

?>