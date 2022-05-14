<?php
class Dosen extends CI_Controller{
    public function index(){
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getAl();
        $ata['dosen'] = $dosen;
        $this->load->view('layouts/header');
        $this->load->view('dosen/index', $ata);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        // akses model dosen
        $this->load->model('dosen_model');
        $ds = $this->dosen_model->getByI($id);
        $data['ds'] = $ds;
        $this->load->view('layouts/header');
        $this->load->view('dosen/detail', $data);
        $this->load->view('layouts/footer');
    }

}

?>