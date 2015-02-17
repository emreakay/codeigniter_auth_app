<?php

  class Users extends CI_Controller
  {
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->library("Aauth");
    }

    public function logout() {
        $this->aauth->logout();
        redirect('login', 'refresh');
    }

    public function login() {

      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $data['title'] = 'Log in';
      $data['form_attributes'] = array( 'class' => 'form-horizontal' );

      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');

      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $check = $this->input->post('check');

      if($email != '' && $password != '') {
        if ($this->aauth->login($email, $password, $check)) {
          $login = TRUE;
        } else {
          $login = FALSE;
        }
      } else {
        $login = 'no_data';
      }



      if ($this->form_validation->run() == FALSE)
      {
        if($login == FALSE) {
          $data['error'] = 'You pass invalid email or password! Try one more time!';
        } else {
          $data['error'] = FALSE;
        }

        $data['login'] = FALSE;
        $this->load->view('templates/header', $data);
        $this->load->view('forms/login_start', $data);
      }
      else
      {
        $data['login'] = TRUE;
        $this->load->view('templates/header', $data);
        $this->load->view('forms/login_success');
      }

      $this->load->view('templates/footer', $data);
    }

    public function signin() {

      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $data['title'] = 'Sign in';
      $data['form_attributes'] = array( 'class' => 'form-horizontal' );

      $this->form_validation->set_rules('email', 'Email', 'required|is_unique[aauth_users.email]');
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
      $this->form_validation->set_rules('password_confirmation', 'Password Confirmation', 'required|matches[password]');
      $this->form_validation->set_rules('name', 'Name', 'required');

      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $name = $this->input->post('name');



      if ($this->form_validation->run() == FALSE)
      {

        $data['login'] = FALSE;
        $this->load->view('templates/header', $data);
        $this->load->view('forms/signin_start');
      }
      else
      {
        $data['login'] = TRUE;
        $this->aauth->create_user($email, $password, $name);
        $this->aauth->login($email, $password);
        $this->load->view('templates/header', $data);
        $this->load->view('forms/signin_success');
      }

      $this->load->view('templates/footer', $data);
    }

  }
