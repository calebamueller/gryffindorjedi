<?php
class Home extends CI_Controller {

    public function index(){
      $this->load->library('session');
		  $this->load->library('encrypt');
		  $this->load->helper('security');
		  $this->load->helper('url');

      $loggedin = $this->session->userdata('loggedin');
      if ($loggedin == TRUE) {
        $this->load->view('home.php');
      }
      else{
        redirect('LoginController/index','refresh');
      }
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
