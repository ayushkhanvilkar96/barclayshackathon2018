<?php include('bank1.php'); ?>

<?php

$MutualFund1= $array_bank1[$bankacc1]['MutualFund'].'<br>';
$AmountInv1= $array_bank1[$bankacc1]['MfDetail'][0]['AmountInv'].'<br>';
$IntNAV1= $array_bank1[$bankacc1]['MfDetail'][0]['IntNAV'].'<br>';
$CurrNav1= $array_bank1[$bankacc1]['MfDetail'][0]['CurrNav'].'<br>';
$unit1= $array_bank1[$bankacc1]['MfDetail'][0]['unit'].'<br>';

$MutualFund2= $array_bank2[$bankacc2]['MutualFund'].'<br>';
$AmountInv2= $array_bank2[$bankacc2]['MfDetail'][0]['AmountInv'].'<br>';
$IntNAV2= $array_bank2[$bankacc2]['MfDetail'][0]['IntNAV'].'<br>';
$CurrNav2= $array_bank2[$bankacc2]['MfDetail'][0]['CurrNav'].'<br>';
$unit2= $array_bank2[$bankacc2]['MfDetail'][0]['unit'].'<br>';

$MutualFund3= $array_bank3[$bankacc3]['MutualFund'].'<br>';
$AmountInv3= $array_bank3[$bankacc3]['MfDetail'][0]['AmountInv'].'<br>';
$IntNAV3= $array_bank3[$bankacc3]['MfDetail'][0]['IntNAV'].'<br>';
$CurrNav3= $array_bank3[$bankacc3]['MfDetail'][0]['CurrNav'].'<br>';
$unit3= $array_bank3[$bankacc3]['MfDetail'][0]['unit'].'<br>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mutual Funds and more</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>


    <header>
        <!--Navbar-->
        <nav class="navbar navbar-toggleable-md navbar-light">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#" style="color: white;">
                    <strong>Navbar</strong>
                </a>
                <div class="collapse navbar-collapse" id="navbarNav1">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link" style="color: white;">Dashboard</a>
                        </li>
                </div>
            </div>
        </nav>
        <!--/.Navbar-->
    </header>

<!-- Main -->
<main class="mt-5">
    <div class="container">
       



        <div class="row">
            <div class="col-md-12">
                <h1>Mutual Funds</h1>
                <hr>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Amount Invested</th>
                            <th>Initial NAV</th>
                            <th>Current NAV</th>
                            <th>Units</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $MutualFund1; ?></td>
                            <td><?php echo $AmountInv1; ?></td>
                            <td><?php echo $IntNAV1 ; ?></td>
                            <td><?php echo $CurrNav1 ; ?></td>
                            <td><?php echo $unit1 ; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><?php echo $MutualFund2; ?></td>
                            <td><?php echo $AmountInv2; ?></td>
                            <td><?php echo $IntNAV2 ; ?></td>
                            <td><?php echo $CurrNav2 ; ?></td>
                            <td><?php echo $unit2 ; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td><?php echo $MutualFund3; ?></td>
                            <td><?php echo $AmountInv3; ?></td>
                            <td><?php echo $IntNAV3 ; ?></td>
                            <td><?php echo $CurrNav3 ; ?></td>
                            <td><?php echo $unit3 ; ?></td>
                        </tr>
                        

                    </tbody>
                </table>
            </div>        
        </div>
    



        <div class="row">
            <div class="col-md-12">
                <h1>Fixed Deposits</h1>
                <hr>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Amount Invested</th>
                            <th>Initial NAV</th>
                            <th>Current NAV</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $FDBalance1;?></td>
                            <td><?php echo $RateOfInterest1;?></td>
                            <td><?php echo $MaturityAmount1;?></td>
                            <td><?php echo $MaturityDate1;?></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><?php echo $FDBalance2;?></td>
                            <td><?php echo $RateOfInterest2;?></td>
                            <td><?php echo $MaturityAmount2; ?></td>
                            <td><?php echo $MaturityDate2; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td><?php echo $FDBalance3; ?></td>
                            <td><?php echo $RateOfInterest3;?></td>
                            <td><?php echo $MaturityAmount3;?></td>
                            <td><?php echo $MaturityDate3;?></td>
                        </tr>
                        

                    </tbody>
                </table>
            </div>        
        </div>
    


    </div>
</main>
<!-- /.Main -->

<!-- This div tag creates vertical space <div style="height:2000px;"></div> -->


<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/tether.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>

