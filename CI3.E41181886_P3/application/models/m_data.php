<?php 
 
class M_data extends CI_Model{
	function tampil_data(){ //function untuk menampilkan data 
		return $this->db->get('user'); //mengambil data dari database dengan nama tabelnya adalah user. Data dikembalikan ke pemanggil dengan return
    }
    
    function input_data($data,$table){ //$data merupakan variabel yang menangkap data yang dikirim crud/tambah_aksi
		$this->db->insert($table,$data); //$data merupakan variabel yang menangkap data yang dikirim crud/tambah_aksi
    }
    
    function update_data($where, $data, $table){ //menerima data dari crud/update ditaruh ke database
        $this->db->where($where);
        $this->db->update($table, $data);
	}
    
    function hapus_data($where,$table){ //sesuai dengan parameter yang dikirim crud/hapus
        $this->db->where($where); //sesuai dengan parameter yang dikirim crud/hapus
        $this->db->delete($table); //sesuai dengan parameter yang dikirim crud/hapus
    }

    function edit_data($where,$table){	//$ where untuk menangkap querynya
        return $this->db->get_where($table,$where);
    }
}