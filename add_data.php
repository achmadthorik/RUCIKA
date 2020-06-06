
<?php include "koneksi.php";
date_default_timezone_set('Asia/Jakarta');

$asap = $_GET['asap'];
$api = $_GET['api'];
echo $asap,$api;

if ($api == 1 && $asap < 340) {
  $status = 'KEBAKARAN';
}
elseif ($api == 0 && $asap > 340) {
$status = "GAS BOCOR";
}

elseif ($api == 1 && $asap > 340){
	$status = "BAHAYA";
}


/*
elseif ($asap > 200 && $asap < 5000) {
	$status
}*/


else{
  $status = 'AMAN';
}
  
 /* $q = "INSERT INTO `api` (`id`, `asap`, `api`, `status`, `waktu`) VALUES (NULL, '$asap', '$api', '$status', CURRENT_TIMESTAMP);";*/

  $q = "UPDATE `api` SET `api` = '$api', `asap` = '$asap', `status` = '$status', `waktu` = CURRENT_TIMESTAMP WHERE id = '35';";
 // $hapus = "DELETE from api ORDER BY id asc LIMIT 3"
  $ck= mysqli_query($conn,$q);

 
