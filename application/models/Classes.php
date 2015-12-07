<?php class Classes extends CI_Model {
  
  function __construct() {
    parent::__construct();
    $this->load->database();
  }
  
  public function getClassInfo($id) {
    $array = array();
    $this->db->select('ass_name, ass_description');
    $this->db->from('assignments');
    $this->db->where('class_id', $id);
    $query = $this->db->get();
    foreach($query->result() as $row){
      $array[] = array(
        'assignments'=>$row
        );
    }
    
    return $array;
  }
}