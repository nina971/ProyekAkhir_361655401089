<!DOCTYPE html>
<html>
<head>
    <title>Laporan Muatan</title>

    <style>
    table {
      border-collapse:collapse;
      table-layout:fixed;width: 630px;
    }
    table td {
      word-wrap:break-word;
      width: 20%;
    }
     h1{font-family: Arial; color: darkseagreen;}
     h2{font-family: Arial; color: darkgoldenrod;}
  </style>
</head>
<body>

  <!--  <?php foreach ($bulan as $value) {
                
                echo $value->bulan;
            }
            ?> -->
            <?php foreach ($muatan as $value) {
                echo $value->kapal;
                echo $value->truck_besar;
                echo $bulan;
            }
            ?>
</body>
</html>