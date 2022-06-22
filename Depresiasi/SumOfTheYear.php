<!DOCTYPE html>
<html lang="">

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Sum Of The Year</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link rel="stylesheet" href="css/lightbox.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
    <br>
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <a href="index.html"><h1><font color="Blue">Perhitungan Depresiasi</font></h1></a>
                </div>
            </nav>
        </div>
    </div>
<center>
<div class="container bg-dark text-white">
        <?php
        $perolehan=null;
        $residu=null;
        $umur=null;
        if (isset($_GET['perolehan'])) {
            $perolehan=$_GET['perolehan'];
            $residu=$_GET['residu'];
            $umur=$_GET['umur'];
            $jml_umur = 0;
            for ($i=1; $i<=$umur ; $i++) { 
                $jml_umur = $jml_umur + $i;
            }
            $hasil = ($perolehan - $residu) * $umur / $jml_umur;    
        }
    ?>
    <div class="rows">
        <form action="SumOfTheYear.php" method="get"><br><br>
            <h2><b><center><font > Sum Of The Year</font></center></b></h2>
             <center><table align="center">
                    <tr>
                        <td>Harga Perolehan</td>
                        <td>:</td>
                        <td><input type="text" name="'perolehan" class="form-control" value="<?php echo $perolehan; ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Nilai Residu</td>
                        <td>:</td>
                        <td><input type="text" name="residu" class="form-control" value="<?php echo $residu; ?>"  required>
                        </td>  
                    </tr>
                    <tr>
                        <td>Umur Ekonomis (Tahun)</td>
                        <td>:</td>
                        <td><input type="text" name="umur" class="form-control" value="<?php echo $umur; ?>"  required>
                    </td>
                    </tr>
                    
                </table></center>
                  <br>
            <button type="button" class="btn btn-warning" onclick="location.href='?'">Hapus</button>
            <button type="submit" class="btn btn-info">Hitung</button>
            </br>
        </form> 
        </form>
        <br>
        <?php
        if (isset($_GET['perolehan'])) {
            $hasil = "Hasil depresiasi menggunakan metode Sum of The Year pada tahun ke- 1 adalah " .$hasil;
            echo "<h1>$hasil</h1>" ;
        }
        ?>
    </div>
</div>
    </center>
</html>