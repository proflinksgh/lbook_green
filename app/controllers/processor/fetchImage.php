<?php
class amwork_controller extends route
{
  private $user_tag;
  private $user_initing;
  private $date_composer, $path;

  function __construct()
  {
    $this->user_tag = $this->model('master_class');
    $this->user_initing = $this->model('extend_function');
    $this->date_composer = $this->user_initing->timer;
    $this->conn = new master_class();
  }
  
    public function index()
  {
      $this->upload_image();
  }


  function upload_image()
  {

    extract($_POST);
    $db = $this->user_initing;
    $id = $db->cleanInput($id);
    $result = $db->getAllData("SELECT IMAGE_PATH from client_tb where ID = '$id' AND CCODE ".$_COOKIE["ccode"]."");
    if($result!==0){
    
    foreach($result as $row)
        {
          $this->path = $row["IMAGE_PATH"];
        }
        echo $this->path;
      }
  }
}?>