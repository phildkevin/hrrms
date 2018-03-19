<?php
/**
 *
 */
class FunctionsModel extends CI_Model
{

  public function login($data)
  {
    $sql = "SELECT * FROM tbl_users WHERE username = ? AND password = ?";
    return $this->db->query($sql, $data);
  }

}

 ?>
