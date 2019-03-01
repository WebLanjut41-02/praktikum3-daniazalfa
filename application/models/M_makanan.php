<?php

class M_makanan extends CI_Model{

    function show_makanan(){

        $hasil=$this->db->query("SELECT * FROM makanan");

        return $hasil;

    }

}