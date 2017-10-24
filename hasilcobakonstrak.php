<?php

require_once 'cobakonstrak.php';

$orang = new orang('Salman' , 'Bandung' , 'XI RPL 1' , 'Menikah');
echo "Namanya.. " .$orang->get_nama();
echo "<br>";
echo "Tempat Lahir.. " .$orang->get_tempatlahir();
echo "<br>";
echo "Kelas.. " .$orang->get_kelas();
echo "<br>";
echo "Status.. " .$orang->get_status();
echo "<br>";
?>