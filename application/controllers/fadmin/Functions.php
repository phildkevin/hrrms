<?php

  /**
   *
   */
  class Functions extends CI_Controller
  {

    public function login()
    {

      if (!$this->input->is_ajax_request()) {
         #exit('No direct script access allowed');
        exit(show_404());
      }else{

          $username   = $this->input->post('username');
          $password   = $this->input->post('password');
          $password   = md5($password);

          $config     = array(
                            array(
                                    'field' => 'username',
                                    'label' => 'Username',
                                    'rules' => 'required|trim|htmlspecialchars',
                                    'errors' => array(
                                            'required' => 'You must provide a %s.',
                                    ),
                            ),
                            array(
                                    'field' => 'password',
                                    'label' => 'Password',
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
              $data    = $this->flib->sanitizer([$username, $password]);
              $res     = $this->fmodel->login($data);
              $row     = $res->row_array();
              if ($res->num_rows() > 0) {
                $session_data = array(
      							'username' 	=> $username,
                    'name'      => $row['fname'],
      							'access' 	  => $row['access']
      						);

                $this->session->set_userdata('user', $session_data);

                echo json_encode(array('code' => 2));
              }else{
                echo json_encode(array('code' => 1, 'reply' => 'Incorrect username or password'));
              }

          }

      }// ElSE

    }

  }


 ?>
