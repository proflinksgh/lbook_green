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
    $lid = $db->cleanInput($lid);
    if($db->get_data_here_value("SELECT ID FROM form_tb WHERE LOANID=$lid","ID")>0){
     echo json_encode(array("status"=>"exist"));
    }else{
     echo json_encode(array("status"=>"notexist")); 
    }
  }
}?>