<?php
class EmailControl extends CI_Controller {

 public function _construct()
 {
   parent::_construct();
   $this->load->model('Email');
   $this->load->library('email');
   $this->load->database();
   $this->load->helper('url');
 }

 public function index()
{
  $cid = $this->Email->getCID();
  $list = $this->Email->getIDs($cid);
  $teacher = $this->Email->getTeacher();
  $classname = $this->Email->getClassName();

  foreach ($list as $name => $address)
  {
    $this->email->clear();

    $this->email->from('No-Reply@slateproject.me', 'Slate Project Admins');
    $this->email->to($address);
    $this->email->subject('Slate Project Account Information');
    $this->email->message('You have been enrolled in" '.$classname.' by '.$teacher.'
      Welcome to Slate Project
      Visit Slate Project @ this <a href=http://slateproject.me>Link</a>');
    $this->email->send();
  }
 }

 $this->db->close();
}
?>
