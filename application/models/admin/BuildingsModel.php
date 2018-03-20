<?php

/**
 *
 */
class BuildingsModel extends CI_Model
{

  public function loadBuildings()
  {
    $sql = "SELECT * FROM tbl_buildings";
    return $this->db->query($sql);
  }

  public function checkBuilding($data)
  {
    $sql = "SELECT * FROM tbl_buildings WHERE building_name = ? AND building_desc = ? and building_size = ?";
    return $this->db->query($sql, $data);
  }

  public function checkBuilding1($data)
  {
    $sql = "SELECT * FROM tbl_buildings WHERE building_name = ? AND building_desc = ? and building_size = ? and id != ?";
    return $this->db->query($sql, $data);
  }

  public function newBuilding($data)
  {
    $sql = "INSERT INTO tbl_buildings (building_name, building_desc, building_size) VALUES (?, ?, ?)";
    return $this->db->query($sql, $data);
  }

  public function deleteBuilding($data)
  {
    $sql = "DELETE FROM tbl_buildings WHERE id = ?";
    return $this->db->query($sql, $data);
  }

  public function editBuilding($data)
  {
    $sql = "UPDATE tbl_buildings SET building_name = ?, building_desc = ?, building_size = ? WHERE id = ?";
    return $this->db->query($sql, $data);
  }

}


 ?>
