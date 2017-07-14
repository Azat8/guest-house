<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//session_start();

class Admin extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('admin/login_form');
    }

    public function dashboard()
    {
        if(!$this->session->has_userdata('logged_in')) redirect('/admin');

            $data['content'] = 'admin/index';
            $this->load->view('admin/header_footer/content', $data);

    }

    public function check_auth()
    {
        $this->load->model('check_auth');
        $user = $this->check_auth->check_auth();
        $username = $user[0]->username;
        $password = $user[0]->password;
        if($_POST['username'] === $username && $_POST['password'] === $password) {
            $this->session->set_userdata('logged_in', true);
            redirect('/admin/dashboard', 'refresh');
        }

        else {
            echo "error";
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/', 'refresh');
    }
}
