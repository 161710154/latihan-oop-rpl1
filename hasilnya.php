<?php

require_once 'penjumlahan.php';

$penjumlahan = new penjumlahan;
$penjumlahan -> set_penjumlahan(21,3);
echo "=========================";
echo "<br>";
echo "Penjumlahan bilangan 21 dengan 3 ";
echo "<br>";
echo "=========================";
echo "<br>";
echo "Penjumlahan = " .$penjumlahan->get_penjumlahan();
echo "<br>";
?>

<?php

require_once 'penjumlahan.php';

$pengurangan = new pengurangan;
$pengurangan -> set_pengurangan(21,3);
echo "Pengurangan = " .$pengurangan->get_pengurangan();
echo "<br>";
?>

<?php

require_once 'penjumlahan.php';

$perkalian = new perkalian;
$perkalian -> set_perkalian(21,3);
echo "Perkalian = " .$perkalian->get_perkalian();
echo "<br>";
?>

<?php

require_once 'penjumlahan.php';

$pembagian = new pembagian;
$pembagian -> set_pembagian(21,3);
echo "Pembagian = " .$pembagian->get_pembagian();
echo "<br>";
?>