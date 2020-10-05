<?php

class Mahasiswa_model{
	// private $mhs = [
	// 	[
	// 		"nama" => "farhan pratama",
	// 		"nrp" => "183040102",
	// 		"email" => "wilistio.183040102@mail.unpas.ac.id",
	// 		"jurusan" => "Teknik Informatika"
	// 	],
	// 	[
	// 		"nama" => "Anya geraldine",
	// 		"nrp" => "123040102",
	// 		"email" => "geraldine2@mail.unpas.ac.id",
	// 		"jurusan" => "Teknik Pangan"
	// 	],
	// 	[
	// 		"nama" => "Naya",
	// 		"nrp" => "103040102",
	// 		"email" => "nayara@mail.unpas.ac.id",
	// 		"jurusan" => "Teknik industri"
	// 	],
	// ];

	private $dbh;//database handler
	private $stmt;

	public function __construct(){
		// data source name
		$dsn = 'mysql:host =localhost;dbname=phpmvc';

		try{
			$this->dbh = new PDO($dsn, 'root','');
		}catch (PDOException $e){
			die($e->getMessage());
		}
	}



	public function getAllMahasiswa(){
		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
		// return $this->mhs;
	}
}