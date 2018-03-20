<?php
/**
 *
 */
class Buildings extends CI_Controller
{

  public function loadBuildings()
  {
    if (!$this->input->is_ajax_request()) {
       #exit('No direct script access allowed');
      exit(show_404());
    }else{

      $res = $this->bmodel->loadBuildings();
      if ($res->num_rows() > 0) {
        echo json_encode($res->result_array());
      }else{
        echo json_encode(0);
      }

    }
  }

  public function newBuilding()
  {
    if (!$this->input->is_ajax_request()) {
       #exit('No direct script access allowed');
      exit(show_404());
    }else{

      $bname = $this->input->post('buildingname');
      $bdesc = $this->input->post('buildingdesc');
      $bloc  = $this->input->post('buildingsize');

      $config     = array(
                        array(
                                'field' => 'buildingname',
                                'label' => 'Branch Name',
                                'rules' => 'required|trim|htmlspecialchars',
                                'errors' => array(
                                        'required' => 'You must provide a %s.',
                                ),
                        ),
                        array(
                                'field' => 'buildingdesc',
                                'label' => 'Branch Description',
                                'rules' => 'required|trim|htmlspecialchars',
                                'errors' => array(
                                        'required' => 'You must provide a %s.',
                                ),
                        ),
                        array(
                                'field' => 'buildingsize',
                                'label' => 'Branch Location',
                                'rules' => 'required|trim|htmlspecialchars',
                                'errors' => array(
                                        'required' => 'You must provide a %s.',
                                ),
                        )

            );

      $this->form_validation->set_rules($config);

      if ($this->form_validation->run() == FALSE) {
          echo json_encode(array('code' => 1, 'reply' => validation_errors()));
      }else{

          $data   = $this->flib->sanitizer([$bname, $bdesc, $bloc]);
          $res    = $this->bmodel->checkBuilding($data);

          if ($res->num_rows() == 0) {

                  $this->bmodel->newBuilding($data);
                  echo json_encode(array('code' => 2));
          }else{
            echo json_encode(array('code' => 1, 'reply' => 'Building already exists'));
          }

      }

    }
  }

  public function deleteBuilding()
  {
      if (!$this->input->is_ajax_request()) {
         #exit('No direct script access allowed');
        exit(show_404());
      }else{

        $branch    = $this->input->post('building');
        $this->bmodel->deleteBuilding($branch);
        echo json_encode(array('code' => 2));

      }
  }

  public function editBuilding()
  {
    if (!$this->input->is_ajax_request()) {
       #exit('No direct script access allowed');
      exit(show_404());
    }else{

      $bname = $this->input->post('buildingname');
      $bdesc = $this->input->post('buildingdesc');
      $bloc  = $this->input->post('buildingsize');
      $buil  = $this->input->post('building');

      $config     = array(
                        array(
                                'field' => 'ebuildingname',
                                'label' => 'Branch Name',
                                'rules' => 'required|trim|htmlspecialchars',
                                'errors' => array(
                                        'required' => 'You must provide a %s.',
                                ),
                        ),
                        array(
                                'field' => 'ebuildingdesc',
                                'label' => 'Branch Description',
                                'rules' => 'required|trim|htmlspecialchars',
                                'errors' => array(
                                        'required' => 'You must provide a %s.',
                                ),
                        ),
                        array(
                                'field' => 'ebuildingsize',
                                'label' => 'Branch Location',
                                'rules' => 'required|trim|htmlspecialchars',
                                'errors' => array(
                                        'required' => 'You must provide a %s.',
                                ),
                        )

            );

      $this->form_validation->set_rules($config);

      if ($this->form_validation->run() == FALSE) {
          echo json_encode(array('code' => 1, 'reply' => validation_errors()));
      }else{
          $data   = $this->flib->sanitizer([$bname, $bdesc, $bloc, $buil]);
          $res    = $this->bmodel->checkBuilding1($data);

          if ($res->num_rows() == 0) {

                  $this->bmodel->editBuilding($data);
                  echo json_encode(array('code' => 2));
          }else{
            echo json_encode(array('code' => 1, 'reply' => 'Building already exists'));
          }
      }

    }
  }

}
 ?>
