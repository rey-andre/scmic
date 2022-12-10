<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Main_M');
	}

	public function set_upload_options($newName)
	{
		$config = [
			'upload_path' 	=> './uploads/laporan/',
			'allowed_types' => 'jpg|png|jpeg',
			'max_size'      => 10280,
			'file_name'		=> $newName,
			'overwrite'     => FALSE,
		];

		return $config;
	}

	public function index()
	{
		$data['title'] = "New Era";

		$this->load->view('user-layout/partials/header', $data);
		$this->load->view('user-layout/index');
		$this->load->view('user-layout/partials/footer');
	}

	public function layanan()
	{
		$data['title'] = "Layanan";

		$this->load->view('user-layout/partials/header', $data);
		$this->load->view('user-layout/layanan');
		$this->load->view('user-layout/partials/footer');
	}

	public function galeri()
	{
		$data['title'] = "Galeri";
		$data['galeri_header'] = $this->Main_M->data_galeri_header()->result();
		$data['galeri_destinasi'] = $this->Main_M->data_galeri_destinasi()->result();
		$data['galeri_inspirasi'] = $this->Main_M->data_galeri_inspirasi()->result();

		$this->load->view('user-layout/partials/header', $data);
		$this->load->view('user-layout/galeri');
		$this->load->view('user-layout/partials/footer');
	}

	public function berita()
	{
		$data['title'] = "Semua Berita";
		$url = "https://newsapi.org/v2/top-headlines?country=id&apiKey=59ad660d50c94810b690e17c4a8a549b";
		$opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));
		$context = stream_context_create($opts);
		$html = file_get_contents($url, false,$context);
		$html = json_decode($html);
		$data['berita'] = $html;
		// $data['berita'] = json_decode(file_get_contents('http://newsapi.org/v2/top-headlines?country=id&apiKey=59ad660d50c94810b690e17c4a8a549b'));

		$this->load->view('user-layout/partials/header', $data);
		$this->load->view('user-layout/berita');
		$this->load->view('user-layout/partials/footer');
	}

	public function berita_health()
	{
		$data['title'] = "Berita Kesehatan";
		$url = "https://newsapi.org/v2/top-headlines?country=id&category=health&apiKey=59ad660d50c94810b690e17c4a8a549b";
		$opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));
		$context = stream_context_create($opts);
		$html = file_get_contents($url, false,$context);
		$html = json_decode($html);
		$data['berita'] = $html;

		$this->load->view('user-layout/partials/header', $data);
		$this->load->view('user-layout/berita');
		$this->load->view('user-layout/partials/footer');
	}

	public function detail_berita()
	{
		$data['title'] = "Detail Berita";

		$this->load->view('user-layout/partials/header', $data);
		$this->load->view('user-layout/detail_berita');
		$this->load->view('user-layout/partials/footer');
	}

	public function kategori_berita()
	{
		$data['title'] = "Kategori Berita";

		$this->load->view('user-layout/partials/header', $data);
		$this->load->view('user-layout/kategori_berita');
		$this->load->view('user-layout/partials/footer');
	}

	public function lapor()
	{
		?>
		<link rel="shortcut icon" href="<?=base_url('')?>assets/user/images/indonesia.png">
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<body></body>
		<?php
		$id = $this->session->userdata('id');
		$data['id'] = $id;
		$this->form_validation->set_rules('deskripsi', 'Isi Laporan', 'required|trim');
		// $this->form_validation->set_rules('tgl', 'Tanggal Laporan', 'required|trim');
		if (empty($_FILES['userfile']['name'])) {
			$this->form_validation->set_rules('userfile', 'Bukti Foto', 'required');
		}

		$this->form_validation->set_message('required', '%s masih kosong, harap diisi');

		$this->form_validation->set_error_delimiters('<span class="help-block text-danger">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Laporan Masyarakat";

			$this->load->view('user-layout/partials/header', $data);
			$this->load->view('user-layout/lapor');
			$this->load->view('user-layout/partials/footer');
		} else {
			$dataInfo = [];
			$files = $_FILES;
			$filesCount = count($_FILES['userfile']['name']);
			for ($i = 0; $i < $filesCount; $i++) {
				if ($files['userfile']['name'][$i] != '') {
					$_FILES['userfile']['name'] = $files['userfile']['name'][$i];
					$_FILES['userfile']['type'] = $files['userfile']['type'][$i];
					$_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
					$_FILES['userfile']['error'] = $files['userfile']['error'][$i];
					$_FILES['userfile']['size'] = $files['userfile']['size'][$i];

					$oldName = explode('.', $_FILES['userfile']['name']);
					$newName =  str_replace(' ', '-', $oldName[0]) . "_" . $id . '.' . $oldName[1];

					$this->upload->initialize($this->set_upload_options($newName));
					$this->upload->do_upload('userfile');

					$dataInfo[] = $this->upload->data();
				}
			}

			$data = array(
				'deskripsi' => $this->input->post('deskripsi'),
				// 'tgl' => $this->input->post('tgl'),
				'id_user' => $this->session->userdata('id'),
				'foto' => $dataInfo[0]['file_name'],
			);

			$this->Main_M->lapor($data);

			if ($this->db->affected_rows() > 0) {
				?>
				<script>
					Swal.fire({
					icon: 'success',
					title: 'Sukses',
					text: 'Laporan Anda Terkirim!'
					}).then((result) => {
						window.location='<?=site_url('lapor')?>';
					})
				</script>
				<?php
				// echo "<script> alert('Berhasil melapor!');";
				// echo " window.location='".site_url('lapor')."'; </script>";
			} else {
				?>
				<script>
					Swal.fire({
					icon: 'errorr',
					title: 'Gagal',
					text: 'Laporan Anda Gagal Terkirim!'
					}).then((result) => {
						window.location='<?=site_url('lapor')?>';
					})
				</script>
				<?php
				echo "<script>alert('Gagal melapor, coba lagi!');history.go(-1);</script";
			}
		}
	}

}
