<?php
class Matakuliah_model extends CI_Model{
    public $id, $nama, $sks, $kode ;

    public function getA(){
        // menampilkan ssemua data yang ada di tabel dosen menggunakan query builder
        $query = $this->db->get('matakuliah');
        return $query->result();
    }
}
    
?>