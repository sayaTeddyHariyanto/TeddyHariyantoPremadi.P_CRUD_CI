<?php 
 
 
class Crud extends CI_Controller{
 
	function __construct(){ //fungsi pertama untuk memanggil m_data untuk operasi database 
		parent::__construct();		
		$this->load->model('m_data'); //load m_data
		$this->load->helper('url'); //untuk syarat menggunakan function anchor di file v_tampil 
 
	}
 
	function index(){ // function index untuk menampilkan data
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data); //m_data merupakan nama fungsi untuk mengambil data dari database
	}
 
	function tambah(){//function atau method untuk menampilkan v_input
		$this->load->view('v_input'); //menampilkan v_input
	}
 
    function tambah_aksi(){
		$nama = $this->input->post('nama'); //menangkap inputan nama dari v_input menggunakan method post ke variabel $nama
		$alamat = $this->input->post('alamat'); //menangkap inputan alamat dari v_input menggunakan method post ke variabel $alamat
		$pekerjaan = $this->input->post('pekerjaan'); //menangkap inputan pekerjaan dari v_input menggunakan method post ke variabel $pekerjaan
 
		$data = array( //membuat array untuk menyimpan ketiga inputan ke dalam variabel $data
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
			);
		$this->m_data->input_data($data,'user'); //$data adalah parameter-1 yang berisi inputan data, dan parameter-2 adalah nama tabel
		redirect('crud/index'); //setelah selesai, maka langsung diarahkan langsung ke index
    }
    
    function hapus($id){ // function hapus memiliki variable $id yang akan menangkap data id
        $where = array('id' => $id); //memasukkan array bernilai data id ke variabel $where 
        $this->m_data->hapus_data($where, 'user'); //mengirim dua parameter(data id dan tabel user) ke m_data
        redirect('crud/index'); //redirect ke index
    }

    function edit($id){ //membuat id menjadi sebuah array untuk mengambil data menurut id menggunakan function edit_data di m_data
        $where = array('id' => $id); //kemudian dimasukkan ke dalam variabel baru yaitu $where 
        $data['user'] = $this->m_data->edit_data($where,'user')->result();//result untuk generate hasil query menjadi array
        $this->load->view('v_edit',$data); //menampilkan data pada view/v_edit
    }

    function update(){ //function untuk menangani update data 
        $id = $this->input->post('id'); //menangkap data id dari form edit (v_edit)
        $nama = $this->input->post('nama'); //menangkap data nama dari form edit (v_edit)
        $alamat = $this->input->post('alamat'); //menangkap data alamat dari form edit (v_edit)
        $pekerjaan = $this->input->post('pekerjaan'); //menangkap data pekerjaan dari form edit (v_edit)
     
        $data = array( //memasukkan data yang ditangkap ke dalam variabel $data
            'nama' => $nama,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan
        );
     
        $where = array( //variabel where penentu data mana yang akan diupdate
            'id' => $id
        );
     
        $this->m_data->update_data($where,$data,'user');//handle data pada database menggunakan function update_data() di m_data
        redirect('crud/index'); //kembali kan ke index
    }
 
}