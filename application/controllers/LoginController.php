<?php
class LoginController extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->library('session');
    $this->load->library('encrypt');
    $this->load->helper('security');
    $this->load->helper('url');
    $this->load->model('Login');
  }


    public function index(){

      $loggedin = $this->session->userdata('loggedin');
      $loggedin = FALSE;
      if ($loggedin == FALSE) {
        $this->load->view('login');
        if(isset($_POST['username']) && isset($_POST['password']))
        {


          $username = $_POST['username'];
          $password = $_POST['password'];

          $data = $this->Login->login($username, $password);

          echo $data;

              if ($data == 1)
              {
                //login work
                $this->session->set_userdata(
                  array(
                  'username'      => $username,
                  'loggedin'        => TRUE
                  ));

                //redirect('the main lobby controller function that loads the lobby controllername/functionname', 'refresh');

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
        //redirect('to the main lobby controller function that loads the lobby controllername/functionname', 'refresh');
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
    	$data['logout_url'] = site_url('welcome/logout'); // Logs off application
    } else {
      $data['login_url'] = $this->facebook->getLoginUrl(array(
      'redirect_uri' => site_url('welcome/login'),
      'scope' => array("email") // permissions here
      ));
    }

    public function register()
    {
      $loggedin = $this->session->userdata('loggedin');

      if ($loggedin == FALSE) {
          //$this->load->view('registration page'); load the registration page
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
            $hash = $this->encrypt->sha1($password);


            $data = $this->Login->check($username);


            if ($data != 0) {
              echo "Username already exists. Please try again.";
            }
            else {
              $this->Login->register($username, $hash, $pwSalt, $salt);
              redirect('login/index', 'refresh');
            }
          }
      }
      else {
        //redirect('redirect to main lobby controller controllername/functionname', 'refresh');
      }


    }

    public function logout() {
      $this->load->library('facebook');
      // Logs off session from website
      $this->facebook->destroySession();
      // Make sure you destory website session as well.
      redirect('welcome/login');
      $this->session->sess_destroy();
      $this->db->close();
      redirect('index', 'refresh');
    }

}
?>
