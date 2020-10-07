<?php

$tab_awal = 150000;
$bunga = 12.5/100;
$tab_akhir = $tab_awal+$tab_awal*$bunga;

echo "Tabungan Awal = Rp. ".$tab_awal,"<br>","Bunga Setahun = 12.5%","<br>","Total Tabungan Setahun = ?","<br>","Jawaban : Rp. ".$tab_akhir;

?>