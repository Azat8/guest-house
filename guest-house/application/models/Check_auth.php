<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Check_auth extends CI_Model {
    public function check_auth()
    {
        $this->load->database();
        $query = $this->db->get('users');
        return $query->result();
    }
}