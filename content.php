<body>

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


//ambil data setting
$setting = mysqli_query($con, "select * from setting");
while ($rowSetting = mysqli_fetch_array($setting)) {
  $Nama = $rowSetting[1];
  $Alamat = $rowSetting[2];
  $Telepon = $rowSetting[3];
  $Email = $rowSetting[4];
  $Logo = $rowSetting["Logo"];
}
?>
<div id="page-wrapper">
  <div class="container-fluid">
    <?php echo "<br>"; ?>
    <?php echo "<br>"; ?>
    <?php echo "<br>"; ?>


    <!-- Page Heading -->
    
             <h1 class = "contenthead slide-in-from-left">DASHBOARD</h1>
         
<style></style>
    <div class="row hijau slide-in-from-left">
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-green panel-hover">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-user fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">
                  <?php
                  $x = mysqli_query($con, "select count(*) as jumlah from dosen");
                  while ($rx = mysqli_fetch_array($x)) {
                    $total = $rx["jumlah"];
                  }
                  echo $total;
                  ?>
                </div>
                <div class="statis">DOSEN</div>
              </div>
            </div>
          </div>
          <a href="listdosen.php">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-red panel-hover">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-database fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">
                  <?php
                  $x = mysqli_query($con, "select count(*) as jumlah from logtw");
                  while ($rx = mysqli_fetch_array($x)) {
                    $total = $rx["jumlah"];
                  }
                  echo $total;
                  ?>
                </div>
                <div>LOGTW</div>
              </div>
            </div>
          </div>
          <a href="listlogtw.php">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow panel-hover">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-group fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">
                  <?php
                  $x = mysqli_query($con, "select count(*) as jumlah from mahasiswa");
                  while ($rx = mysqli_fetch_array($x)) {
                    $total = $rx["jumlah"];
                  }
                  echo $total;
                  ?>
                </div>
                <div>MAHASISWA</div>
              </div>
            </div>
          </div>
          <a href="listmahasiswa.php">
            <div class="panel-footer ">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary panel-hover">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-book fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">
                  <?php
                  $x = mysqli_query($con, "select count(*) as jumlah from program_studi");
                  while ($rx = mysqli_fetch_array($x)) {
                    $total = $rx["jumlah"];
                  }
                  echo $total;
                  ?>
                </div>
                <div>PROGRAM STUDI</div>
              </div>
            </div>
          </div>
          <a href="listprogram_studi.php">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-success panel-hover">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-cogs fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">
                  <?php
                  $x = mysqli_query($con, "select count(*) as jumlah from setting");
                  while ($rx = mysqli_fetch_array($x)) {
                    $total = $rx["jumlah"];
                  }
                  echo $total;
                  ?>
                </div>
                <div>SETTING</div>
              </div>
            </div>
          </div>
          <a href="listsetting.php">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-info panel-hover">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-tasks fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">
                  <?php
                  $x = mysqli_query($con, "select count(*) as jumlah from usulan_penelitian");
                  while ($rx = mysqli_fetch_array($x)) {
                    $total = $rx["jumlah"];
                  }
                  echo $total;
                  ?>
                </div>
                <div>USULAN PENELITIAN</div>
              </div>
            </div>
          </div>
          <a href="listusulan_penelitian.php">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
      <!-- /.container-fluid -->

      <style>


.contenthead {
  text-decoration: underline;
  font-family: "Poppins";
  font-weight: 50px;
  color: black;
      
}

.contenthead:hover{
  transform : translateX(3px);
  transition: transform 0.3s ease;
}

@media (max-width : 330px){
  .contenthead {
    margin-left: 10px;
    margin-bottom : 50px;
  }
}
@media (min-width : 727px){
  .contenthead {
    margin-left: 250px;
    margin-bottom : 70px;
  }
}
@media (min-width : 768px){
  .contenthead {
    margin-left: 100px;
    margin-bottom : 50px;
  }
}

@media (min-width : 1024px){
  .contenthead {
    margin-left: 250px;
    margin-bottom : 50px;
  }
}

@media (min-width : 1440px){
  .contenthead {
    margin-left: 450px;
    margin-bottom : 50px;
  }
}

@media (min-width : 2560px){
  .contenthead {
    margin-left: 1000px;
    margin-bottom : 50px;
  }
}

.panel-hover:hover {
  transform: scale(1.1); 
  transition: transform 0.3s ease;
}

@keyframes slideInFromLeft {
    0% {
        transform: translateX(-100%);
        opacity: 0;
    }
    100% {
        transform: translateX(0);
        opacity: 1;
    }
}

.slide-in-from-left {
    animation: slideInFromLeft 1s ease forwards;
}

.body {
  position: static;
}


      </style>
    </div>

    <?php echo "<br>"; ?>
    <?php echo "<br>"; ?>
    <?php echo "<br>"; ?>

    <?php
    include("chart.php");
    echo "<hr>";
    ?>

    <?php
    include("footer.php");
    ?>
    
  </body>