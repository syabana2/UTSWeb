<?php
session_start();
if(!isset($_SESSION["Email"])){
header("location:index.php");
}
?>
<?php
include("db.php");
include("tulislog.php");
$id= mysqli_real_escape_string($con, $_POST["id"]);
$NIM= mysqli_real_escape_string($con, $_POST["NIM"]);
$Pembimbing= mysqli_real_escape_string($con, $_POST["Pembimbing"]);
$Penguji1= mysqli_real_escape_string($con, $_POST["Penguji1"]);
$Penguji2= mysqli_real_escape_string($con, $_POST["Penguji2"]);
$Tanggal= mysqli_real_escape_string($con, $_POST["Tanggal"]);
$Ruang= mysqli_real_escape_string($con, $_POST["Ruang"]);

if (isset($id) && isset($NIM) && isset($Pembimbing) && isset($Penguji1) && isset($Penguji2) && isset($Tanggal) && isset($Ruang)){
mysqli_query($con, "INSERT INTO usulan_penelitian(id,NIM,Pembimbing,Penguji1,Penguji2,Tanggal,Ruang) VALUES (null,'$NIM','$Pembimbing','$Penguji1','$Penguji2','$Tanggal','$Ruang')");
}

tulislog("insert into usulan_penelitian", $con);
header("Location: listusulan_penelitian.php");
mysqli_close($con)
?>
