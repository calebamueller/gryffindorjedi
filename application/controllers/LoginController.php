<?php
class LoginController extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->library(array('session', 'encryption', 'form_validation'));
    //$this->load->library('encryption');
    $this->load->helper(array('security', 'url','form'));
    //$this->load->helper('url');
    $this->load->model('Loginmod');
    //$this->load->helper('form');
    //$this->load->library('form_validation');
  }


  public function index()
  {
      $loggedin = $this->session->userdata('loggedin');
      $loggedin = FALSE;
      if ($loggedin == FALSE) {
        $this->load->view('login');
        if(isset($_POST['username']) && isset($_POST['password']))
        {

          $username = $_POST['username'];
          $password = $_POST['password'];

          $data = $this->Loginmod->login($username, $password);

          echo $data;

              if ($data == 1)
              {
                //login work
                $this->session->set_userdata(
                  array(
                  'username'      => $username,
                  'loggedin'        => TRUE
                  ));

                redirect('Home/index', 'refresh');

              }
              else {
                //login didn't work
                echo "Unable to Login";
              }

        }
        else {
          //echo 'Please Enter a Username and Password';
        }
      }
      else {
        redirect('Home/index', 'refresh');
      }


  }

  public function fbLogin()
	{
		$this->load->library('facebook');

		$user = $this->facebook->getUser();

		if ($user) {
      try {
      	$data['user_profile'] = $this->facebook->api('/me');
      } catch (FacebookApiException $e) {
      	$user = null;
      }
		}

		if ($user) {
    	$data['logout_url'] = site_url('LoginController/logout'); // Logs off application
    } else {
      $data['login_url'] = $this->facebook->getLoginUrl(array(
      'redirect_uri' => site_url('LoginController/login'),
      'scope' => array("email") // permissions here
      ));
    }
  }

  public function register()
  {
    $this->load->helper('form');
    $loggedin = $this->session->userdata('loggedin');

    if ($loggedin == FALSE) {
      $this->load->view('registration');
      if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm_pass']))
      {
        $username = ($_POST['username']);
        $password = ($_POST['password']);
        $confirm_pass = ($_POST['confirm_pass']);

        if($password != $confirm_pass)
          die ('Passwords do not match');
        if($username == NULL || $password == NULL || $confirm_pass == NULL)
          die('All fields required');
        //hash and salt password
        $salt = mt_rand();
        $pwSalt = $salt.$password;
        //$hash = $this->encrypt->sha1($password);
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $data = $this->Loginmod->check($username);


        if ($data != 0) {
          echo "Username already exists. Please try again.";
        }
        else {
          $this->Loginmod->register($username, $hash, $pwSalt, $salt);
          redirect('Home/index', 'refresh');
        }
      }
    }
    else {
      redirect('Home/index', 'refresh');
    }


  }

  public function logout() {
    //$this->load->library('facebook');
    // Logs off session from website
    //$this->facebook->destroySession();
    // Make sure you destory website session as well.
    redirect('LoginController/login');
    $this->session->sess_destroy();
    $this->db->close();
    redirect('index', 'refresh');
  }

}
?>
