<!--menampilkan form login dan melakukan verifikasi username dan password admin-->
<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login'); //memanggil m_login
 
	}
 
	function index(){
		$this->load->view('v_login'); //memanggil v_login
	}
 
	function aksi_login(){
		$username = $this->input->post('username'); // mengirim data username menggunakan method post
		$password = $this->input->post('password'); // mengirim data password menggunakan method post
		$where = array( //memasukkan nilai kedalam array
			'username' => $username,
			'password' => md5($password) //menggunakan md5 untuk password untuk keamanan
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows(); //cek keterediaan username dan password di m_login dan num_rows untuk menghitung jumlah record
		if($cek > 0){ //jika benar maka akan muncul nama username tadi dengan status login
 
			$data_session = array( //menagkap data username dan password dan masukkan ke dalam array
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin")); //mengarahkan url ke adminn
 
		}else{ //jika salah, maka akan menampilkan usernam dan password salah
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login')); //jika tombol logout diklik, maka mengarahkan kembali ke login
	}
}