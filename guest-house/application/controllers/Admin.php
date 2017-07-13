<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('admin/login_form');
    }

    public function dashboard()
    {
        $this->load->helper('url');
        $data['content'] = 'admin/index';
        $this->load->view('admin/header_footer/content', $data);
    }

    public function check_auth()
    {
        $error = false;
        $this->load->helper('url');
        $this->load->model('check_auth');
        $user = $this->check_auth->check_auth();
        $username = $user[0]->username;
        $password = $user[0]->password;
        if($_POST['username'] === $username && $_POST['password'] === $password) {
            redirect('/admin/dashboard', 'refresh');
        }

        else {
            echo "error";
        }
    }
}
