<?php
  class Info extends CI_Controller
  {
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->library("Aauth");
    }

    public function index()
    {
      if ( $this->aauth->is_loggedin() ) {
        $data['title'] = 'Information';
        $data['login'] = TRUE;
        $data['users_list'] = $this->aauth->list_users();
        $data['users_counter'] = count($data['users_list']);

        $this->load->view('templates/header', $data);
        if ( $this->aauth->is_member('admin') ) {
          $this->load->view('info/_admin_part', $data);
        }
        $this->load->view('info/index', $data);
        $this->load->view('templates/footer');
      } else {
        $data['login'] = FALSE;
        redirect('/login', 'refresh');
      }

    }
  }
