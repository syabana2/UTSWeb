<?php
session_start();
if (!isset($_SESSION["Email"])) {
  header("location:index.php");
}
?>
<?php
include("db.php");
include("tulislog.php");
$Kode = mysqli_real_escape_string($con, $_POST["Kode"]);
$Program_Studi = mysqli_real_escape_string($con, $_POST["Program_Studi"]);
$Kaprodi = mysqli_real_escape_string($con, $_POST["Kaprodi"]);
$NIDN_Kaprodi = mysqli_real_escape_string($con, $_POST["NIDN_Kaprodi"]);

if (isset($Kode) && isset($Program_Studi) && isset($Kaprodi) && isset($NIDN_Kaprodi)) {
  mysqli_query($con, "INSERT INTO program_studi(Kode,Program_Studi,Kaprodi,NIDN_Kaprodi) VALUES ('$Kode','$Program_Studi','$Kaprodi','$NIDN_Kaprodi')");
}

tulislog("insert into program_studi", $con);
header("Location: listprogram_studi.php");
mysqli_close($con)
?>
