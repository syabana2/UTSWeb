<?php
session_start();
if (!isset($_SESSION["Email"])) {
  header("location:index.php");
}
?>
<?php include("db.php"); ?>
<?php
//cek otoritas
$q = "SELECT * FROM tw_hak_akses where tabel='usulan_penelitian' and user = '" . $_SESSION['Email'] . "' and deleteData='1'";
$r = mysqli_query($con, $q);
if ($obj = @mysqli_fetch_object($r)) {
?>
<?php
  include("tulislog.php");
  $id = mysqli_real_escape_string($con, $_REQUEST['id']);
  $result = mysqli_query($con, "DELETE FROM usulan_penelitian WHERE id = '" . $id . "'");
  tulislog("delete usulan_penelitian", $con);
  header("Location:listusulan_penelitian.php");
  mysqli_close($con);
?>
<?php
} else {
  header("Location:content.php");
}
?>
