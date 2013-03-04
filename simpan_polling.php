<?php
$RbPilih =$_POST['RbPilih'];

$file_berkas = "polling.txt";

$start="0||0||0||0";
if (!(file_exists($file_berkas))){
 $file_baru =fopen($file_berkas,"w");
 fputs($file_baru,"$start");
 fclose($file_baru);
}

$isi_berkas = file($file_berkas);
$array = explode("||", $isi_berkas[0]);

$data_a = $array[0];
$data_b = $array[1];
$data_c = $array[2];
$data_d = $array[3];

if($RbPilih == "a") {
 $data_a = $data_a + 1;
}
else if($RbPilih == "b") {
 $data_b = $data_b + 1;
}
else if($RbPilih == "c") {
 $data_c = $data_c + 1;
}
else if ($RbPilih == "d") {
 $data_d = $data_d + 1;
}

$nilai_baru = $data_a."||".$data_b."||".$data_c."||".$data_d;

$buka_berkas = fopen($file_berkas,"w");
fputs($buka_berkas,$nilai_baru);
fclose($buka_berkas);

header("Location: lihat_polling.php");

?>
