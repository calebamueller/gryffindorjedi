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
    }

    public function users() {
      $this->load->database();
      $this->load->model('Userinfo');
      $this->load->library('session');
  		$this->load->library('encrypt');
  		$this->load->helper('security');
  		$this->load->helper('url');

      $loggedin = $this->session->userdata('loggedin');
      if ($loggedin == TRUE) {
        $data = $this->Userinfo->getUser();
        $info = json_encode($data);
        echo $info;
      }
    }
}
?>
