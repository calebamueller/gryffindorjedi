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
  
    public function announcements($id){
      //$this->load->library('form_validation');
      //$this->load->helper('form');
      $announcement = $_POST['announcement'];
      echo $announcement.$id;
      $this->load->model('Classes');
      $this->db->announce($id, $announcement);
    }
}
?>
