<style>
  #laporan td,
  #laporan th {
    border: 1px solid #ddd;
    padding: 4px;
  }
</style>
<?php
include("db.php");
?>
<div id="page-wrapper">

  <?php
  //ambil data setting
  $hset = mysqli_query($con, "select * from setting");
  while ($rset = mysqli_fetch_array($hset)) {
    $Nama = $rset["Nama"];
    $Alamat = $rset["Alamat"];
    $Telepon = $rset["Telepon"];
    $Logo = $rset["Logo"];
  }
  ?>

  <table width=100%>
    <thead>
      <tr>
        <td rowspan="3" width=20% align=center><?php echo "<img src='images/weneed.png' width=200 ><br>"; ?></td>
        <td>
          <font face=verdana size=5><?php echo $Nama; ?></font>
        </td>
      </tr>
      <tr>
        <td>
          <font face=Verdana color=black size=1><?php echo $Alamat; ?></font>
        </td>
      </tr>
      <tr>
        <td>
          <font face=Verdana color=black size=1>Telepon : <?php echo $Telepon; ?></font>
        </td>
      </tr>
    </thead>
  </table>
  <hr>

  <?php
  echo "<font face=Verdana color=black size=1>usulan_penelitian</font><br><br>";
  $result = mysqli_query($con, "SELECT * FROM usulan_penelitian");
  echo "<div class='table-responsive'> ";
  echo "<table id=laporan width=100%>";
  echo "<tr bgcolor=D3DCE3>
<th><font face=Verdana color=black size=1>id</font></th>
<th><font face=Verdana color=black size=1>NIM</font></th>
<th><font face=Verdana color=black size=1>Pembimbing</font></th>
<th><font face=Verdana color=black size=1>Penguji1</font></th>
<th><font face=Verdana color=black size=1>Penguji2</font></th>
<th><font face=Verdana color=black size=1>Tanggal</font></th>
<th><font face=Verdana color=black size=1>Ruang</font></th>
</tr>";
  while ($row = mysqli_fetch_array($result)) {
    echo "<td><font face=Verdana color=black size=1>" . $row['id'] . "</font></td>";
    echo "<td><font face=Verdana color=black size=1>" . $row['NIM'] . "<br>";
    $l = mysqli_query($con, "select Nama from mahasiswa where NIM = '" . $row['NIM'] . "'");
    while ($rl = mysqli_fetch_array($l)) {
      echo $rl[0];
    }
    echo "</font></td>";
    echo "<td><font face=Verdana color=black size=1>" . $row['Pembimbing'] . "<br>";
    $l = mysqli_query($con, "select Nama from dosen where NIDN = '" . $row['Pembimbing'] . "'");
    while ($rl = mysqli_fetch_array($l)) {
      echo $rl[0];
    }
    echo "</font></td>";
    echo "<td><font face=Verdana color=black size=1>" . $row['Penguji1'] . "<br>";
    $l = mysqli_query($con, "select Nama from dosen where NIDN = '" . $row['Penguji1'] . "'");
    while ($rl = mysqli_fetch_array($l)) {
      echo $rl[0];
    }
    echo "</font></td>";
    echo "<td><font face=Verdana color=black size=1>" . $row['Penguji2'] . "<br>";
    $l = mysqli_query($con, "select Nama from dosen where NIDN = '" . $row['Penguji2'] . "'");
    while ($rl = mysqli_fetch_array($l)) {
      echo $rl[0];
    }
    echo "</font></td>";
    echo "<td><font face=Verdana color=black size=1>" . $row['Tanggal'] . "</font></td>";
    echo "<td><font face=Verdana color=black size=1>" . $row['Ruang'] . "</font></td>";
    echo "</tr>";
  }
  echo "</table><br>";
  echo "</div>";
  mysqli_close($con);
  echo "</td></tr>";
  ?>
</div>