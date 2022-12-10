<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Covid19 extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $url = "https://data.covid19.go.id/public/api/update.json";
    $dataJson = file_get_contents($url);
    $dataArray = json_decode($dataJson, true);
    $dataHarian = $dataArray['update']['harian'];
    foreach ($dataHarian as $values) {
      $labels[] = $values['key_as_string']; //sebagai tanggal
      $jumlahPositif[] = $values['jumlah_positif']['value']; //jml positif
      $jumlahSembuh[] = $values['jumlah_sembuh']['value'];
    }
    $data['labels'] = "'" . implode("','", $labels) . "'";
    $data['jumlahPositif'] = implode(",", $jumlahPositif);
    $data['jumlahSembuh'] = implode(",", $jumlahSembuh);
    
    
    $data['title'] = "Covid-19";
		
		// $this->load->view('user-layout/partials/header', $data);
		$this->load->view('user-layout/partials/header', $data);
		$this->load->view('user-layout/covid', $data);
		$this->load->view('user-layout/partials/footer');
		// $this->load->view('user-layout/partials/footer');
  }

}

