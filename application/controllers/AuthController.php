<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_M');
	}

	public function login()
	{
		if ($this->session->userdata('email') != null) {
			echo "<script> alert('Anda sedang login sebagai " .$this->session->userdata('email'). ", Silahkan logout terlebih dahulu');
			history.go(-1); </script>";
		} else {
			$data['title'] = "Login";
			$this->load->view('auth/login', $data);
		}
	}

	public function cek_login() {
		?>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<body></body>
		<?php
		$data = array('email' => $this->input->post('email', TRUE),
			'password' => md5($this->input->post('password', TRUE))
		);
		$hasil = $this->User_M->cek_user($data);
		$query = $this->db->get_where('user', $data);
		if ($query->num_rows() > 0) {
			$sess = $query->row_array();
			$this->session->set_userdata($sess);
		}
		if ($this->session->userdata('role') == 'admin') {
			?>
			<script>
				Swal.fire({
				icon: 'success',
				title: 'Berhasil Login',
				text: 'Selamat datang Admin'
				}).then((result) => {
					window.location='<?=site_url('dashboard')?>';
				})
			</script>
			<?php
			// redirect('dashboard');
		}
		elseif ($this->session->userdata('role') == 'user') {
			?>
			<script>
				Swal.fire({
				icon: 'success',
				title: 'Berhasil Login'
				}).then((result) => {
					window.location='<?=site_url('/')?>';
				})
			</script>
			<?php
			// redirect('/');
		}
		else {
			?>
			<script>
				Swal.fire({
				icon: 'error',
				title: 'Gagal Login',
				text: 'Periksa kembali email dan password Anda!'
				}).then((result) => {
					history.go(-1);
				})
			</script>

			<?php
			// echo "<script>alert('Gagal login! Silakan cek email atau password Anda!');history.go(-1);</script>";
		}
	}

	public function register()
	{
		?>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<body></body>
		<?php

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]');
		$this->form_validation->set_rules('no_hp', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

		$this->form_validation->set_message('required', '%s masih kosong, Harap diisi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
		$this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti');

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Register";
			$this->load->view('auth/register', $data);
		} else {
			$post = $this->input->post(null, TRUE);
			$this->User_M->add($post);

			if ($this->db->affected_rows() > 0) {
				?>
				<script>
					Swal.fire({
					icon: 'success',
					title: 'Sukses',
					text: 'Berhasil Register, Silahkan Login'
					}).then((result) => {
						window.location='<?=site_url('login')?>';
					})
				</script>
				<?php
				// echo "<script> alert('Berhasil Register, Silahkan Login');";
				// echo "window.location='".site_url('login')."'; </script>";
			}
		}
	}

	public function register_admin()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]');
		$this->form_validation->set_rules('no_hp', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

		$this->form_validation->set_message('required', '%s masih kosong, Harap diisi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
		$this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti');

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Register Admin";
			$this->load->view('auth/register', $data);
		} else {
			$post = $this->input->post(null, TRUE);
			$this->User_M->add_admin($post);

			if ($this->db->affected_rows() > 0) {
				echo "<script> alert('Berhasil Register, Silahkan Login');";
				echo "window.location='".site_url('login')."'; </script>";
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		session_destroy();
		redirect('/');
	}

}
