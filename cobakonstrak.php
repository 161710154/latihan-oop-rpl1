<?php

class orang
{
  //Property
  public $nama;
  public $tempatlahir;
  public $kelas;
  public $status;

  public function __construct($nama, $tempatlahir, $kelas, $status){
  		$this->nama = $nama;
  		$this->tempatlahir = $tempatlahir;
  		$this->kelas = $kelas;
  		$this->status = $status;
  	}

  		public function set_nama($nama)
	{
		$this->nama = $nama;
	}
		public function get_nama()
	{
		return $this->nama;
	}

	public function set_tempatlahir($tempatlahir)
	{
		$this->tempatlahir = $tempatlahir;
	}
		public function get_tempatlahir()
	{
		return $this->tempatlahir;
	}

	public function set_kelas($kelas)
	{
		$this->kelas = $kelas;
	}
		public function get_kelas()
	{
		return $this->kelas;
	}

	public function set_status($status)
	{
		$this->status = $status;
	}
		public function get_status()
	{
		return $this->status;
	}
  
 } 

?>