<?php

class penjumlahan
{
	public $bil1, $bil2;

	public function set_penjumlahan($bilangan1, $bilangan2)
	{
		$this->bil1 = $bilangan1;
		$this->bil2 = $bilangan2;
	}
	public function get_penjumlahan()
	{
		return $this->bil1 + $this->bil2;
	}
}
?>

<?php

class pengurangan
{
	public $bil1, $bil2;

	public function set_pengurangan($bilangan1, $bilangan2)
	{
		$this->bil1 = $bilangan1;
		$this->bil2 = $bilangan2;
	}
	public function get_pengurangan()
	{
		return $this->bil1 - $this->bil2;
	}
}
?>

<?php

class perkalian
{
	public $bil1, $bil2;

	public function set_perkalian($bilangan1, $bilangan2)
	{
		$this->bil1 = $bilangan1;
		$this->bil2 = $bilangan2;
	}
	public function get_perkalian()
	{
		return $this->bil1 * $this->bil2;
	}
}
?>

<?php

class pembagian
{
	public $bil1, $bil2;

	public function set_pembagian($bilangan1, $bilangan2)
	{
		$this->bil1 = $bilangan1;
		$this->bil2 = $bilangan2;
	}
	public function get_pembagian()
	{
		return $this->bil1 / $this->bil2;
	}
}
?>

