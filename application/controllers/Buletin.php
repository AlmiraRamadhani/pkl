<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Buletin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_crud');
        $this->load->library('upload');
    }
    public function index()
    {
        $this->template->load('role', 'home');
    }
    public function Profil()
    {
        $data['tmp'] = $this->m_buletin->tampil()->result();
        $this->template->load('role', 'profil', $data);
    }
    public function Buletin1()
    {
        $this->template->load('role', 'buletin1');
    }
    public function Buletin2()
    {
        $this->template->load('role', 'buletin2');
    }
    public function Buletin3()
    {
        $this->template->load('role', 'buletin3');
    }
    public function Buletin4()
    {
        $this->template->load('role', 'buletin4');
    }
    public function Buletin5()
    {
        $this->template->load('role', 'buletin5');
    }
    public function Buletin6()
    {
        $this->template->load('role', 'buletin6');
    }
}
