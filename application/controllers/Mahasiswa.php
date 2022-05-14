<?php 
class Mahasiswa extends CI_Controller{
    // buat methood index
    public function index(){
        $this->load->model('mahasiswa_model');
        $mahasiswa = $this->mahasiswa_model->getAll();
        $data['mahasiswa'] = $mahasiswa;
        //render data dan kirim data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        // akses model mahassiswa
        $this->load->model('mahasiswa_model');
        $siswa = $this->mahasiswa_model->getById($id);
        $data['siswa'] = $siswa;
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('layouts/footer');
    }

    // methood matakuliah
    // tulis mwthood dan objek
    public function matakuliah(){
        $this->load->model('matakuliah_model');
        $mk = $this->matakuliah_model->getA();
        $data['mk'] = $mk;
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/matakuliah', $data);
        $this->load->view('layouts/footer'); 
    }
}
?>