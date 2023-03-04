<?php 
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];

include 'koneksi.php';
$sql = "SELECT * FROM siswa WHERE nisn='$nisn' AND nis='$nis'";
$query = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($query)>0) {
	session_start();
	$data = mysqli_fetch_array($query);
	$_SESSION['nisn'] = $data['nisn'];
	$_SESSION['nis'] = $data['nis'];

	header('Location:siswa/siswa.php');
}else{
echo "<script>
			alert('maaff login anda gagal, silahkan ulangi lagi'); 
			document.location.href = 'index2.php'
	</script>";
}
 ?>
 
