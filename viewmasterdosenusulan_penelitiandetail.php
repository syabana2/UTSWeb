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
  echo "<td bgcolor=F5F5F5 valign=top>";
  echo "<div class='table-responsive'> ";
  echo "<table class='table table-striped'>";
  echo "<tr><td colspan=2><font face=Verdana color=black size=1>usulan_penelitian</font></td></tr>";
  if (isset($_GET['id'])) {
    $result = mysqli_query($con, "SELECT * FROM usulan_penelitian where usulan_penelitian.id=" . mysqli_real_escape_string($con, $_GET['id']));
  }
  while ($row = mysqli_fetch_array($result)) {
    echo "<tr><td bgcolor=CCCCCC><font face=Verdana color=black size=1>id</font></td>";
    echo "<td bgcolor=CCEEEE><font face=Verdana color=black size=1>" . $row['id'] . "</font></td>";
    echo "<tr><td bgcolor=CCCCCC><font face=Verdana color=black size=1>NIM</font></td>";
    echo "<td bgcolor=CCEEEE><font face=Verdana color=black size=1>" . $row['NIM'] . "<br>";
    $l = mysqli_query($con, "select Nama from mahasiswa where Nama = '" . $row['NIM'] . "'");
    while ($rl = mysqli_fetch_array($l)) {
      echo $rl[0];
    }
    echo "</font></td></tr>";
    echo "<tr><td bgcolor=CCCCCC><font face=Verdana color=black size=1>Pembimbing</font></td>";
    echo "<td bgcolor=CCEEEE><font face=Verdana color=black size=1>" . $row['Pembimbing'] . "<br>";
    $l = mysqli_query($con, "select Nama from dosen where Nama = '" . $row['Pembimbing'] . "'");
    while ($rl = mysqli_fetch_array($l)) {
      echo $rl[0];
    }
    echo "</font></td></tr>";
    echo "<tr><td bgcolor=CCCCCC><font face=Verdana color=black size=1>Penguji1</font></td>";
    echo "<td bgcolor=CCEEEE><font face=Verdana color=black size=1>" . $row['Penguji1'] . "<br>";
    $l = mysqli_query($con, "select Nama from dosen where Nama = '" . $row['Penguji1'] . "'");
    while ($rl = mysqli_fetch_array($l)) {
      echo $rl[0];
    }
    echo "</font></td></tr>";
    echo "<tr><td bgcolor=CCCCCC><font face=Verdana color=black size=1>Penguji2</font></td>";
    echo "<td bgcolor=CCEEEE><font face=Verdana color=black size=1>" . $row['Penguji2'] . "<br>";
    $l = mysqli_query($con, "select Nama from dosen where Nama = '" . $row['Penguji2'] . "'");
    while ($rl = mysqli_fetch_array($l)) {
      echo $rl[0];
    }
    echo "</font></td></tr>";
    echo "<tr><td bgcolor=CCCCCC><font face=Verdana color=black size=1>Tanggal</font></td>";
    echo "<td bgcolor=CCEEEE><font face=Verdana color=black size=1>" . $row['Tanggal'] . "</font></td>";
    echo "<tr><td bgcolor=CCCCCC><font face=Verdana color=black size=1>Ruang</font></td>";
    echo "<td bgcolor=CCEEEE><font face=Verdana color=black size=1>" . $row['Ruang'] . "</font></td>";
    echo "<tr><td colspan=2 align=center><a href=listmasterdosenusulan_penelitiandetail.php?NIDN=$_GET[NIDN]><button type='button' class='btn btn-warning'><font face=Verdana size=1><i class='fa fa-check'></i>&nbsp;Back</font></button></a></td></tr>";
    echo "</table><br>";
    echo "</div>";
  }
  tulislog("view usulan_penelitian", $con);
  ?>
</div>
<?php
include("footer.php");
?>