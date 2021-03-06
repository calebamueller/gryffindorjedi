<?php class Classes extends CI_Model {
  
  function __construct() {
    parent::__construct();
    $this->load->database();
  }
  
  public function getClassInfo($id) {
    $array = array();
    $this->db->select('ass_name, ass_description, points_possible');
    $this->db->from('assignments');
    $this->db->where('class_id', $id);
    $query = $this->db->get();
    foreach($query->result() as $row){
      $array[] = array(
        'assignments'=>$row
        );
    }
    
    $this->db->select('announcement');
    $this->db->from('classes');
    $this->db->where('class_id', $id);
    $query = $this->db->get();
    foreach($query->result() as $row){
      $array[] = array(
        'announcements'=>$row
        );
    }
    
    return $array;
  }
  
  public function announce($id, $announcement) {
    
    $data = array(
        'announcement' => $announcement
      );
    
    $this->db->where('class_id', $id);
    $this->db->update('classes', $data);
    
  }
}