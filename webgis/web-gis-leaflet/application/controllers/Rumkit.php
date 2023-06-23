<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rumkit extends CI_Controller {


    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_rumkit');
        
    }
    
    public function index()
    {
        $data = array(
                    'title' => 'Data Rumah Sakit Sukabumi',
                    'rumkit'=> $this->M_rumkit->lists(),
                    
                    'isi'   => 'rumkit/v_lists'
                );
        $this->load->view('template/v_wrapper', $data, FALSE); 
    }

    public function input(){
        
        $data = array(
            'title' => 'Input Data Rumah Sakit',
            'isi'   => 'rumkit/v_add'
        );
        $this->load->view('template/v_wrapper', $data, FALSE); 
    }

    
}