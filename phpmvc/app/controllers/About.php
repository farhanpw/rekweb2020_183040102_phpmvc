<?php

class About extends controller{
	public function index($nama = 'Farhan', $pekerjaan = 'Mahasiswa', $umur = 20){
		// echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan. Saya berumur $umur tahun.";
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = 'About Me';
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}

	public function page(){
		$data['judul'] = 'Pages';
		$this->view('templates/header',$data);
		$this->view('About/page');		
		$this->view('templates/footer');

	}
}