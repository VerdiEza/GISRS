<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_lokasi');
        
    }
    

    public function index()
    {
        $data = array(
                    'title' => 'Pemetaan Rumah Sakit Sukabumi',
                    'lokasi'=> $this->m_lokasi->get_all_data(),
                    'isi'   => 'v_home'
                );
        $this->load->view('template/v_wrapper', $data, FALSE); 
    }
}

