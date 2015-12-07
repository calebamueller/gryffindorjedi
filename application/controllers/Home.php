<?php
class Home extends CI_Controller {

    public function index(){
        $this->load->view('home.php');
        //redirect('/#/home','refresh');
    }

    public function users() {
      $this->load->database();
      $this->load->model('Userinfo');
        $data = $this->Userinfo->getUser();
        $info = json_encode($data);
        echo $info;
    }
  
    public function getClass($id) {
      $this->load->database();
      $this->load->model('Classes');
        $data=$this->Classes->getClassInfo($id);
        $info = json_encode($data);
        echo $info;
    }
  
    public function announcements(){
      $this->load->database();
      $this->load->model('Classes');
      $data = json_decode(file_get_contents("php://input"));
      $id = $data->id;
      $announcement = $data->announcement;
      echo $id;
      echo $announcement;
      $this->Classes->announce($id, $announcement);
       
    }
}
?>
