<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class DashboardController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('email') == NULL) {
			redirect('login');
		}
		$this->load->library('upload');
		$this->load->model('Dashboard_M');
	}

	public function set_upload_options($newName)
	{
		$config = [
			'upload_path' 	=> './uploads/galeri/',
			'allowed_types' => 'jpg|png|jpeg',
			'max_size'      => 10280,
			'file_name'		=> $newName,
			'overwrite'     => FALSE,
		];

		return $config;
	}

	public function index()
	{
		if ($this->session->userdata('role') == "user") {
			echo "<script>alert('Anda tidak memiliki hak akses!');history.go(-1);</script>";
		} else {
			$data['title'] = "Dashboard";

			$this->load->view('dashboard-layout/partials/header', $data);
			$this->load->view('dashboard-layout/index');
			$this->load->view('dashboard-layout/partials/footer');
		}
	}

	public function data_laporan()
	{
		if ($this->session->userdata('role') == "user") {
			echo "<script>alert('Anda tidak memiliki hak akses!');history.go(-1);</script>";
		} else {
			$data['title'] = "Data Laporan";
			$data['laporan'] = $this->Dashboard_M->data_laporan()->result();

			$this->load->view('dashboard-layout/partials/header', $data);
			$this->load->view('dashboard-layout/data-laporan');
			$this->load->view('dashboard-layout/partials/footer');
		}
	}

	public function data_galeri()
	{
		if ($this->session->userdata('role') == "user") {
			echo "<script>alert('Anda tidak memiliki hak akses!');history.go(-1);</script>";
		} else {
			$data['title'] = "Data Galeri";
			$data['galeri'] = $this->Dashboard_M->data_galeri()->result();

			$this->load->view('dashboard-layout/partials/header', $data);
			$this->load->view('dashboard-layout/galeri/data-galeri');
			$this->load->view('dashboard-layout/partials/footer');
		}
	}

	public function tambah_data_galeri()
	{
		?>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<body></body>
		<?php

		if ($this->session->userdata('role') == "user") {
			echo "<script>alert('Anda tidak memiliki hak akses!');history.go(-1);</script>";
		} else {
			$id = $this->session->userdata('id');
			$data['id'] = $id;
			$this->form_validation->set_rules('nama_galeri', 'Nama Galeri', 'required|trim');
			$this->form_validation->set_rules('target', 'Target Lokasi', 'required|trim');
			if (empty($_FILES['userfile']['name'])) {
				$this->form_validation->set_rules('userfile', 'Foto Galeri', 'required');
			}

			$this->form_validation->set_message('required', '%s masih kosong, harap diisi');

			$this->form_validation->set_error_delimiters('<span class="help-block text-danger">', '</span>');

			if ($this->form_validation->run() == FALSE) {
				$data['title'] = "Tambah Data Galeri";

				$this->load->view('dashboard-layout/partials/header', $data);
				$this->load->view('dashboard-layout/galeri/tambah-galeri');
				$this->load->view('dashboard-layout/partials/footer');
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
					'nama_galeri' => $this->input->post('nama_galeri'),
					'target' => $this->input->post('target'),
					'foto_galeri' => $dataInfo[0]['file_name'],
				);

				$this->Dashboard_M->add($data);

				if ($this->db->affected_rows() > 0) {
					?>
					<script>
						Swal.fire({
						icon: 'success',
						title: 'Sukses',
						text: 'Berhasil menambahkan data!'
						}).then((result) => {
							window.location='<?=site_url('data-galeri')?>';
						})
					</script>
					<?php
					// echo "<script> alert('Berhasil menambahkan data!');";
					// echo "window.location='".site_url('data-galeri')."'; </script>";
				} else {
					?>
					<script>
						Swal.fire({
						icon: 'errorr',
						title: 'Gagal',
						text: 'Gagal menambahkan data, coba lagi!'
						}).then((result) => {
							history.go(-1);
						})
					</script>
					<?php
					// echo "<script>alert('Gagal menambahkan data, coba lagi!');history.go(-1);</script>";
				}
			}
		}
	}

	public function edit_data_galeri($id)
	{
		?>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<body></body>
		<?php

		if ($this->session->userdata('role') == "user") {
			echo "<script>alert('Anda tidak memiliki hak akses!');history.go(-1);</script>";
		} else {
			if ($this->input->post('nama_galeri')) {
				$this->form_validation->set_rules('nama_galeri', 'Nama Galeri', 'required|trim');
			}

			if ($this->input->post('target')) {
				$this->form_validation->set_rules('target', 'Target Lokasi', 'required|trim');
			}

			$this->form_validation->set_message('required', '%s masih kosong, harap diisi');
			$this->form_validation->set_error_delimiters('<span class="help-block text-danger">', '</span>');

			if ($this->form_validation->run() == FALSE) {
				$data['title'] = "Edit Data Galeri";
				$data['galeri'] = $this->db->get_where('galeri', ['id' => $id])->row_array();

				$this->load->view('dashboard-layout/partials/header', $data);
				$this->load->view('dashboard-layout/galeri/edit-galeri');
				$this->load->view('dashboard-layout/partials/footer');

			} else {
				$foto_galeri = $_FILES['foto_galeri']['name'] == "" ? "" : explode('.', $_FILES['foto_galeri']['name']);
				$foto_galeri = $foto_galeri == '' ? $this->input->post('tmp_foto_galeri') : str_replace(' ', '-', $foto_galeri[0]) . "_" . $user_id . '.' . $foto_galeri[1];

				foreach ($_FILES as $key => $value) {
					$oldName = explode('.', $_FILES[$key]['name']);
					if (!empty($value['tmp_name'])) {
						$newName =  str_replace(' ', '-', $oldName[0]) . "_" . $user_id . '.' . $oldName[1];

						$this->upload->initialize($this->set_upload_options($newName));

						if (!$this->upload->do_upload($key)) {
							echo $this->upload->display_errors();
							die();
						} else {
							$this->upload->data($key);
							if ($key == 'foto_galeri') {
								if ($this->input->post('tmp_foto_galeri') != "") {
									unlink(FCPATH . 'uploads/galeri/' . $this->input->post('tmp_foto_galeri'));
								}
							}
						}
					}
				}

				$data = [
					'nama_galeri' => $this->input->post('nama_galeri'),
					'target' => $this->input->post('target'),

					'foto_galeri' => $foto_galeri,
				];

				$where = $this->input->post('id');
				$this->Dashboard_M->edit($where, $data);
				if ($this->db->affected_rows() > 0) {
					?>
					<script>
						Swal.fire({
						icon: 'success',
						title: 'Sukses',
						text: 'Berhasil mengedit data!'
						}).then((result) => {
							window.location='<?=site_url('data-galeri')?>';
						})
					</script>
					<?php
					// echo "<script> alert('Berhasil mengedit data!');";
					// echo "window.location='".site_url('data-galeri')."'; </script>";
				} else {
					?>
					<script>
						Swal.fire({
						icon: 'question',
						title: 'Tidak ada perbuahan!'
						}).then((result) => {
							window.location='<?=site_url('data-galeri')?>';
						})
					</script>
					<?php
					// echo "<script> alert('Tidak Ada Perubahan!');";
					// echo "window.location='".site_url('data-galeri')."'; </script>";
				}
			}
		}
	}

	public function hapus_data_galeri($id)
	{
		?>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<body></body>
		<?php

		if ($this->session->userdata('role') == "user") {
			?>
			<script>
				Swal.fire({
				icon: 'warning',
				title: 'Warning!',
				text: 'Anda tidak memiliki hak akses!'
				}).then((result) => {
					history.go(-1);
				})
			</script>
			<?php
			// echo "<script>alert('Anda tidak memiliki hak akses!');history.go(-1);</script>";
		} else {
			$where = array('id' => $id);
			$getdata = $this->db->select('foto_galeri')->get_where('galeri', ['id' => $id])->result_array();

			foreach ($getdata as $gd) {
				if ($gd['foto_galeri'] != NULL || $gd['foto_galeri'] != '') {
					unlink(FCPATH . 'uploads/galeri/' . $gd['foto_galeri']);
				}
			}
			$this->Dashboard_M->delete($where, 'galeri');
			if ($this->db->affected_rows() > 0) {
				?>
				<script>
					Swal.fire({
					icon: 'success',
					title: 'Sukses',
					text: 'Berhasil menghapus data!'
					}).then((result) => {
						window.location='<?=site_url('data-galeri')?>';
					})
				</script>
				<?php
				// echo "<script> alert('Berhasil menghapus data!');";
				// echo "window.location='".site_url('data-galeri')."'; </script>";
			} else {
				?>
				<script>
					Swal.fire({
					icon: 'errorr',
					title: 'Gagal',
					text: 'Gagal menghapus data, coba lagi!'
					}).then((result) => {
						window.location='<?=site_url('data-galeri')?>';
					})
				</script>
				<?php
				// echo "<script>alert('Gagal menghapus data, coba lagi!');history.go(-1);</script>";
			}
		}
	}

	public function hapus_data_laporan($id)
	{
		?>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<body></body>
		<?php

		$where = array('id' => $id);
		$getdata = $this->db->select('foto')->get_where('laporan', ['id' => $id])->result_array();

		foreach ($getdata as $gd) {
			if ($gd['foto'] != NULL || $gd['foto'] != '') {
				unlink(FCPATH . 'uploads/laporan/' . $gd['foto']);
			}
		}
		$this->Dashboard_M->delete($where, 'laporan');
		if ($this->db->affected_rows() > 0) {
			?>
			<script>
				Swal.fire({
				icon: 'success',
				title: 'Sukses',
				text: 'Berhasil menghapus data!'
				}).then((result) => {
					window.location='<?=site_url('data-laporan')?>';
				})
			</script>
			<?php
			// echo "<script> alert('Berhasil menghapus data!');";
			// echo "window.location='".site_url('data-laporan')."'; </script>";
		} else {
			?>
			<script>
				Swal.fire({
				icon: 'errorr',
				title: 'Gagal',
				text: 'Gagal menghapus data, coba lagi!'
				}).then((result) => {
					window.location='<?=site_url('data-laporan')?>';
				})
			</script>
			<?php
			// echo "<script>alert('Gagal menghapus data, coba lagi!');history.go(-1);</script>";
		}
	}

	public function download_format_import_laporan()
    {
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="format_import_laporan.xlsx"');

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'ID User');
        $sheet->setCellValue('B1', 'Tanggal Laporan (contoh : 2022-11-27 17:36:09)');
        $sheet->setCellValue('C1', 'Isi Laporan');

        $writer = new Xlsx($spreadsheet);
        $writer->save("php://output");
    }

    public function view_import_data_laporan()
    {
        $data['title'] = "Import Data Laporan";

        $this->load->view('dashboard-layout/partials/header', $data);
        $this->load->view('dashboard-layout/laporan/import-data');
        $this->load->view('dashboard-layout/partials/footer');
    }

    public function import_data_laporan()
    {
        $upload_file = $_FILES['upload_file']['name'];
        $extension = pathinfo($upload_file, PATHINFO_EXTENSION);

        if (empty($_FILES['upload_file']['name'])) {
            echo "<script>alert('Data import kosong!');history.go(-1);</script>";
        } else if($extension != 'csv' && $extension != 'xls' && $extension != 'xlsx' && $extension != 'CSV' && $extension != 'XLS' && $extension != 'XLSX') {
        	echo "<script> alert('Format file tidak didukung, coba lagi!');";
			echo "window.location='".site_url('data-laporan/import')."'; </script>";
        } else {
            if ($extension == 'csv') {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
            } else if($extension == 'xls') {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }

            $spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
            $sheetdata = $spreadsheet->getActiveSheet()->toArray();

            $sheetcount = count($sheetdata);
            if ($sheetcount > 0) {
                for ($i=1; $i < $sheetcount; $i++) { 
                    $id_user = $sheetdata[$i][0];
                    $tgl = $sheetdata[$i][1];
                    $deskripsi = $sheetdata[$i][2];

                    $data[] = array(
                        'id_user' => $id_user,
                        'tgl' => $tgl,
                        'deskripsi' => $deskripsi,
                    );
                }
                $this->Dashboard_M->import_data_laporan($data);

                if ($this->db->affected_rows() > 0) {
                    echo "<script> alert('Berhasil mengimport data!');";
					echo "window.location='".site_url('data-laporan')."'; </script>";
                } else {
                    echo "<script> alert('Gagal mengimport data, coba lagi!');";
					echo "window.location='".site_url('data-laporan')."'; </script>";
                }
            }
        }
    }

    public function export_data_laporan()
    {
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="data_laporan.xlsx"');

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No.');
        $sheet->setCellValue('B1', 'Nama Lengkap');
        $sheet->setCellValue('C1', 'Alamat Email');
        $sheet->setCellValue('D1', 'Isi Laporan');
        $sheet->setCellValue('E1', 'Tanggal Laporan');

        $listdata = $this->Dashboard_M->data_laporan()->result();
        $list = 2;
        $no = 1;
        foreach ($listdata as $data) {
            $sheet->setCellValue('A'.$list,$no++);
            $sheet->setCellValue('B'.$list,$data->nama);
            $sheet->setCellValue('C'.$list,$data->email);
            $sheet->setCellValue('D'.$list,$data->deskripsi);
            $sheet->setCellValue('E'.$list,date('D, d-m-Y H:i', strtotime($data->tgl)));
            $list++;
        }

        $writer = new Xlsx($spreadsheet);
        $writer->save("php://output");
    }

    public function export_pdf_laporan()
    {
        $this->load->library('pdfgenerator');
        
        $data['title'] = 'Data Laporan';
        $data['laporan'] = $this->Dashboard_M->data_laporan()->result();
        
        $file_pdf = 'data_laporan';
        $paper = 'A4';
        $orientation = "landscape";
        
        $html = $this->load->view('dashboard-layout/laporan/export-pdf', $data, true);       
        
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }

}
