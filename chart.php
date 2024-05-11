<head><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"></head>
  
  <div class = "ch slide-in-from-left">CHART</div>
  <style>
    .ch{
      color: black;
      font-family: 'Poppins';
      font-size : 30px;
      text-decoration: underline;
      font-weight: 50px;
      margin-left: 530px;
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
    
  </style>

  <br>
 
<?php
//$con = mysqli_connect("localhost","root","","toko");

$warna1 = "green";
$warna2 = "orange";
$warna3 = "blue";
$warna4 = "orange";
$warna5 = "black";

//ambil data tabel yang ada di database
// dan ambil jumlah record dari setiap tabel tersebut
$i = 1;
$txt = "";
$jml = 0;
$warna = "brown";
$h = mysqli_query($con, "show tables from simup");
while($r = mysqli_fetch_array($h)){
  if(($r[0] != "user") && ($r[0] != "tw_tabel") && ($r[0] != "tw_hak_akses") && ($r[0] != "logtw") && ($r[0] != "setting")){
  $txt1 = "\"". $r[0] ."\"";
  $x = mysqli_query($con, "select * from ". $r[0]);
  $jml1 = mysqli_num_rows($x);
  if($txt == ""){
    $txt = $txt1;
    $jml = $jml1;
    $warna = "\"". $warna1 ."\"";
  }else{
    $txt = $txt .",". $txt1;
    $jml = $jml .",". $jml1;
    if($i == 1) { $warna = $warna .",\"". $warna1 ."\""; }
    if($i == 2) { $warna = $warna .",\"". $warna2 ."\""; }
    if($i == 3) { $warna = $warna .",\"". $warna3 ."\""; }
    if($i == 4) { $warna = $warna .",\"". $warna4 ."\""; }
    if($i == 5) { $warna = $warna .",\"". $warna5 ."\""; }
  }
  if($i < 5){ $i++; }else{ $i = 1; }
  }
}
//echo $txt;
//echo $jml;
//echo $warna;
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<div class = "slide-in-from-left">
<canvas id="myChart" style="width:100%;max-width:100%"></canvas>
</div>
<script>
var xValues = [<?php echo $txt; ?>];
var yValues = [<?php echo $jml; ?>];
var barColors = [<?php echo $warna; ?>];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Jumlah Data"
    },
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true,
          stepSize: 1
        }
      }]
    }
  }
});

</script>

