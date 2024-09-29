<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('users_model');
    }

    public function index()
    {
        //load session library
        $this->load->library('session');

        //restrict users to go back to login if session has been set
        if ($this->session->userdata('user')) {
            // redirect('admin');
            $this->load->view('admin');
        } else {
            $data['title'] = 'Login Page';
            $this->load->view('template/header', $data);
            $this->load->view('auth/login');
            $this->load->view('template/footer');
        }
    }

    public function login()
    {
        //load session library
        $this->load->library('session');

        $email = $_POST['email'];
        $password = $_POST['password'];

        $data = $this->users_model->login($email, $password);

        if ($data) {
            $this->session->set_userdata($data);
            $this->session->set_userdata('user', $data);
            // $this->load->view('admin');
            redirect('admin');
        } else {
            header('location:' . base_url() . $this->index());
            $this->session->set_flashdata('error', 'Invalid login. User not found');
        }
    }

    public function home()
    {
        //load session library
        $this->load->library('session');

        //restrict users to go to home if not logged in
        if ($this->session->userdata('user')) {
            // $this->load->view('admin');
            redirect('admin');
        } else {
            redirect('/');
        }
    }

    public function check_auth()
    {
        if (!$this->session->userdata('user')) {
            $this->session->set_flashdata('msg', "You need to be logged in to access the page.");
            redirect('auth');
        }
    }

    public function logout()
    {
        //load session library
        $this->load->library('session');
        $this->session->unset_userdata('user');
        redirect('auth');
    }
}
