<?php
class Dosen_model extends CI_Model{
    // buat property atau variabel
    public $id, $nama, $gender, $tmp_lahir, $tgl_lahir, $nidn, $pendidikan;

    public function getAl(){
        // menampilkan ssemua data yang ada di tabel dosen menggunakan query builder
        $query = $this->db->get('dosen');
        return $query->result();
    }
    public function getByI($id){
        // menampilakan data berdasarkan id
        $query = $this->db->get_where('dosen', ['id' => $id]);
        return $query->row();
    }

}
?>