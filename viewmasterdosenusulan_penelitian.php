<?php
session_start();
if (!isset($_SESSION["Email"])) {
  header("location:index.php");
}
?>
<?php
include("db.php");
include("header.php");
include("menu.php");
include("tulislog.php");
?>
<div id="page-wrapper">
  <?php
  //cek otoritas
  $q = "SELECT * FROM tw_hak_akses where tabel='dosen/usulan_penelitian' and user = '" . $_SESSION['Email'] . "' and viewData='1'";
  $r = mysqli_query($con, $q);
  if ($obj = @mysqli_fetch_object($r)) {
  ?>
    <?php
    echo "<td bgcolor=F5F5F5 valign=top>";
    echo "<div class='table-responsive'> ";
    echo "<table class='table table-striped'>";
    echo "<tr><td colspan=2><font face=Verdana color=black size=1>dosen</font></td></tr>";
    $result = mysqli_query($con, "SELECT * FROM dosen where NIDN = '" . $_GET['NIDN'] . "'");
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr><td bgcolor=CCCCCC><font face=Verdana color=black size=1>NIDN</font></td>";
      echo "<td bgcolor=CCEEEE><font face=Verdana color=black size=1>" . $row['NIDN'] . "</font></td>";
      echo "<tr><td bgcolor=CCCCCC><font face=Verdana color=black size=1>Nama</font></td>";
      echo "<td bgcolor=CCEEEE><font face=Verdana color=black size=1>" . $row['Nama'] . "</font></td>";
      echo "<tr><td bgcolor=CCCCCC><font face=Verdana color=black size=1>Foto</font></td>";
      echo "<td bgcolor=CCEEEE><font face=Verdana color=black size=1><a href='images/" . $row['Foto'] . "' target=_blank><img src='images/" . $row['Foto'] . "' width=50 height=50></a></font></td>";
      echo "<tr><td colspan=2 align=center><a href=listmasterdosenusulan_penelitian.php><button type='button' class='btn btn-warning'><font face=Verdana size=1><i class='fa fa-check'></i>&nbsp;Back</font></button></a></td></tr>";
      echo "</table></td></tr>";
      echo "</table><br>";
      echo "</div>";
    }
    tulislog("view dosen", $con);
    ?>
</div>
<?php
    include("footer.php");
?>
<?php
  } else {
    //header("Location:content.php");
  }
?>