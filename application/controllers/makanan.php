<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class makanan extends CI_Controller {

    function __construct(){

        parent::__construct();

        $this->load->model('M_makanan');

    }



    public function index(){

        $x['data']=$this->M_makanan->show_makanan();

        $this->load->view('V_makanan',$x);

    }

}