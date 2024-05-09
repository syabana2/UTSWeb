<?php
session_start();
if(!isset($_SESSION["Email"])){
header("location:index.php");
}
?>
<?php
include("db.php");
$pk = mysqli_real_escape_string($con, $_POST["pk"]);
$id = mysqli_real_escape_string($con, $_POST["id"]);
$NIM = mysqli_real_escape_string($con, $_POST["NIM"]);
$Pembimbing = mysqli_real_escape_string($con, $_POST["Pembimbing"]);
$Penguji1 = mysqli_real_escape_string($con, $_POST["Penguji1"]);
$Penguji2 = mysqli_real_escape_string($con, $_POST["Penguji2"]);
$Tanggal = mysqli_real_escape_string($con, $_POST["Tanggal"]);
$Ruang = mysqli_real_escape_string($con, $_POST["Ruang"]);

mysqli_query($con, "update usulan_penelitian set id='$id', NIM='$NIM', Pembimbing='$Pembimbing', Penguji1='$Penguji1', Penguji2='$Penguji2', Tanggal='$Tanggal', Ruang='$Ruang' where id=$pk");
header("Location: listmasterdosenusulan_penelitiandetail.php?NIDN=$NIDN");
mysqli_close($con);
?>
