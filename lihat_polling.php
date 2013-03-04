<html>
<head>
<title>Lihat Polling</title>
</head>
<body>
<?php
$file_berkas = "polling.txt";

//get content of textfile
$isi_berkas = file($file_berkas );

$array = explode("||", $isi_berkas[0]);

$data_a = $array[0];
$data_b = $array[1];
$data_c = $array[2];
$data_d = $array[3];

$jumlah = $data_a + $data_b + $data_c + $data_d;

$hasil_a=round(($data_a/$jumlah)*100,2);
$hasil_b=round(($data_b/$jumlah)*100,2);
$hasil_c=round(($data_c/$jumlah)*100,2);
$hasil_d=round(($data_d/$jumlah)*100,2);
?>

<h3 align="center"> Hasil Polling Berkas </h3>
<table align="center" width="400px" cellspacing="0" bordercolor="#CCCCCC" border="1">
	<tr bgcolor="#FFCC00">
        <td>Man Uniteed</td><td><?php echo $data_a?></td><td><img src="tengah.gif" width="<?php echo $hasil_a; ?> px" height="15 px"></td><td><?php echo $hasil_a."%"; ?>
        </td>
    </tr>
    <tr>
        <td>
        	Chealsea</td><td><?php echo $data_b?></td><td>
            <img src="tengah.gif" width="<?php echo $hasil_b; ?> px" height="15 px"></td><td>
            <?php echo $hasil_b."%"; ?>       
		</td>
    </tr>   
    <tr bgcolor="#FFCC00">
        <td> 
        	Arsenal</td><td><?php echo $data_c?> </td><td>   
            <img src="tengah.gif" width="<?php echo $hasil_c; ?> px" height="15 px"></td><td>
            <?php echo $hasil_c."%"; ?>
        </td>
    </tr>
    <tr >
        <td>
        	Man City</td><td><?php echo $data_d?></td><td>
            <img src="tengah.gif" width="<?php echo $hasil_d; ?> px" height="15 px"></td><td>
            <?php echo $hasil_d."%"; ?>
    	</td>
    </tr>
    <tr>
    	<td align="center" colspan="4">
        	Total Pemilih:<?php echo $jumlah?><br>
    		
        </td>
        
    </tr>   
</table>
<center>
		<input type="button"  onClick="parent.location='index.php'" value="Kembali">
</center>
</body>
</html>
