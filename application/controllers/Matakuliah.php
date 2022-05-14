<?php
class Matakuliah extends CI_Controller{
    // methood matakuliah
    // tulis mwthood dan objek
    public function index(){
        $this->load->model('matakuliah_model');
        $mk = $this->matakuliah_model->getA();
        $data['mk'] = $mk;
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layouts/footer'); 
    }
}

?>