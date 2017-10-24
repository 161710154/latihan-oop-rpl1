<?php

class serigala{
	public $suara = 'auuwwww';
	public $suara2= 'uuuuuuww';
	public $berat = 70;
}
	public function suaranya()
	{
		echo $this->suara;
	}
	public function beratnya() 
	{
		echo $this->berat;
	}
	public function berat2()
	{
		$a = 40;
		return $a + $this->berat2;
	}

	public function suaraulang()
	{
		for ($i=0; $i <5 ; $i++) {
		echo $this->suara.'<br>'; 
		}

	$serigala = new serigala;
	$serigala->suaranya();
	echo '<br>'.$serigala->beratnya();
	echo '<br>'.$serigala->berat2();
	echo '<br>'.$serigala->suaraulang();

?>