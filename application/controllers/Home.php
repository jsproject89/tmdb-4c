<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('home');
        $this->load->view('card_slide');
        $this->load->view('templates/footer');
        // $this->load->view('dashboard');
    }
}
