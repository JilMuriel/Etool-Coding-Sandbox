<?php
public function delete($id = '') {
  $this->load->model('User_model');
  $where = array('user_no' => $id); 
  $this->dbmodel->deleteRecord('tbl_user_student',$where);
}
?>