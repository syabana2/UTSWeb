<?php
session_start();
if (!isset($_SESSION["Email"])) {
  header("location:index.php");
}
?>
<?php
include("db.php");
$id = mysqli_real_escape_string($con, $_REQUEST['id']);
$result = mysqli_query($con, "DELETE FROM usulan_penelitian WHERE id = '" . $id . "'");
header("Location:listmasterdosenusulan_penelitiandetail.php?NIDN=$_GET[NIDN]");
mysqli_close($con);
?>
