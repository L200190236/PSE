<!DOCTYPE html>
<html lang="">

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>StraightLine</title>
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
    <ba
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
<body>
    <br>
    <br>
<div class="container bg-dark text-white">
    <?php
    $HP=null;
    $NR=null;
    $UE=null;
    if (isset($_GET['HP'])) {
        $HP=$_GET['HP'];
        $NR=$_GET['NR'];
        $UE=$_GET['UE'];
        $hasil=($HP-$NR)/$UE;
    }
    ?>
    <div class="rows">
        <form action="StraightLine.php" method="get">
            <h3><b><center><font color="Green">Straight Line Depreciation : Depreciation per annum </font></center></b></h3>
                <center><table align="center">
                    <tr>
                        <td>Cost</td>
                        <td> : </td>
                        <td><input type="text" name="HP" class="form-control" value="<?php echo $HP; ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Residu Value</td>
                        <td> : </td>
                        <td><input type="text" name="NR" class="form-control" value="<?php echo $NR; ?>"  required>
                        </td>  
                    </tr>
                    <tr>
                        <td>Useful Value (Years)</td>
                        <td> : </td>
                        <td><input type="text" name="UE" class="form-control" value="<?php echo $UE; ?>"  required>
                    </td>
                    </tr>
                </table></center>

    <!--         <div class="form-group">
                <select class="form-control" name="operasi">
                    <option value="straight">Garis Lurus</option>
                    <option value="declining">Saldo Menurun Ganda</option>
                </select>
            </div> -->
            <br>
            <button type="button" class="btn btn-warning" onclick="location.href='?'">Hapus</button>
            <button type="submit" class="btn btn-info">Hitung</button>
        </form>
        <br>
        <?php
        if (isset($_GET['HP'])) {
            $hasil = "$".number_format($hasil,0,',','.');
            echo "<h3> Hasil : $hasil</h3>" ;
        }
        ?>
    </div>
</div>
    </br>
    </br>
</body>
</html>