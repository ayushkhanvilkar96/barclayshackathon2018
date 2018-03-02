
<?php include('bank1.php'); ?>
<?php 
$db=mysqli_connect('localhost','root','','registration');
	


$rec=mysqli_query($db,"SELECT * FROM users WHERE id=$id;");
$record=mysqli_fetch_array($rec);
$username=$record['username'];
$bankacc1=$record['bankacc1'];
$ActualBalance=$record['ActualBalance'];
$TotalStockInv=$record['TotalStockInv'];
$TotalFD=$record['TotalFD'];
$TotalPL=$record['TotalPL'];


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="dashboardstyle.css" rel="stylesheet">
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
                    <strong>Dashboard</strong>
                </a>
                <div class="collapse navbar-collapse" id="navbarNav1">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="scrapingecotimes/scrapingecotimes.php" class="nav-link" href="ordersummary.html" style="color: white;">News<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mutualfunds.php" style="color: white;">MutualFunds</a>
                        </li>
                    </ul>
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
                <h1 class="card-text">Statistics</h1>
                <hr>
            </div>        
        </div>

        <div class="row">

            <div class="col-md-3">
               <div class="card">
               <div class="card-block">
               <div class="row">
                   <div class="col-md-6">
                       <span class="badge indigo"><h5 style="color: white;">Total Balance</h5></span>
                   </div>
                   <div class="col-md-6 text-right">
                       <h2 class="card-text" style="color: black;"><?php echo $ActualBalance; ?></h2>
                   </div>
               </div>
               </div>
               </div>
            </div>

            <div class="col-md-3">
               <div class="card">
               <div class="card-block">
               <div class="row">
                   <div class="col-md-6">
                       <span class="badge indigo"><h5 style="color: white;">Total Stocks</h5></span>
                   </div>
                   <div class="col-md-6 text-right">
                       <h2 class="card-text"><?php echo $TotalStockInv; ?></h2>
                   </div>
               </div>
               </div>
               </div>
            </div>

            <div class="col-md-3">
               <div class="card">
               <div class="card-block">
               <div class="row">
                   <div class="col-md-6">
                       <span class="badge indigo"><h5 style="color: white;">Total FD</h5></span>
                   </div>
                   <div class="col-md-6 text-right">
                       <h2 class="card-text"><?php echo $TotalFD; ?></h2>
                   </div>
               </div>
               </div>
               </div>
            </div>

            <div class="col-md-3">
               <div class="card">
               <div class="card-block">
               <div class="row">
                   <div class="col-md-6">
                       <span class="badge indigo"><h5 style="color: white;">Total P/L</h5>
                       </span>
                   </div>
                   <div class="col-md-6 text-right">
                       <h2 class="card-text"><?php echo $TotalPL; ?></h2>
                   </div>
               </div>
               </div>
               </div>
            </div>

        </div>





        <div class="row" style="margin-top: 2em; margin-bottom: 2em;">
            



            <div class="col-md-6">
                <div class="card">
                    <div class="card-block">
                        <div id="barchart" style="width: 100%; height: 100%;"></div>   
                    </div>
                </div>      
            </div>




            <div class="col-md-6">
                <div class="card">
                    <div class="card-block">
                        <div id="barchart2" style="width: 100%; height: 100%;"></div>   
                    </div>
                </div>      
            </div>




        

        </div>





<div class="row" style="margin-bottom: 2em;">




  <div class="col-md-6">
    <div class="card">
      <div class="card-block">
    <table class="table">
    <thead>
    <p style="color: black;">Loans</p>
        <tr>
            <th>#</th>
            <th>Loan Amount</th>
            <th>Interest</th>
            <th>Purpose</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row"><i class="fa fa-user"></i></th>
            <td><?php echo $LoanAmount1; ?></td>
            <td><?php echo $IntrestRate1; ?></td>
            <td><?php echo $PurposeOfLoan1; ?></td>
        </tr>
        <tr>
            <th scope="row"><i class="fa fa-user"></i></th>
            <td><?php echo $LoanAmount2; ?></td>
            <td><?php echo $IntrestRate2; ?></td>
            <td><?php echo $PurposeOfLoan2; ?></td>
        </tr>
        <tr>
            <th scope="row"><i class="fa fa-user"></i></th>
            <td><?php echo $LoanAmount3; ?></td>
            <td><?php echo $IntrestRate3; ?></td>
            <td><?php echo $PurposeOfLoan3; ?></td>
        </tr>

    </tbody>
</table>
      </div>
    </div>
  </div>




<div class="col-md-6">
  <div class="card">
    <div class="card-block">
      <div id="donut" style="width: 100%; height: 350px;"></div>   
    </div>
  </div> 
</div>


</div>



    </div>

</main>
<!-- /.Main -->

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      var d=<?php echo $BankBalance1; ?>;
      var e=<?php echo $BankBalance1; ?>;
      var f=<?php echo $BankBalance1; ?>;
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Bank Name', 'Bank Balance'],
          ['Bank 1',     d],
          ['Bank 2',      e],
          ['Bank 3',      f]

        ]);

        var options = {
          title: 'Bank Balance Distribution',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donut'));
        chart.draw(data, options);
      }
    </script>



    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Jeera', 'Khichdi','Nachni'],
          ['2004',  1000,      400, 700],
          ['2005',  1170,      460, 1010],
          ['2006',  660,       1120, 800],
          ['2007',  1030,      540, 450]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('timegraph'));

        chart.draw(data, options);
      }
    </script>


    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      var a = <?php echo $QStock_one; ?>;
      var b = <?php echo $QStock_two; ?> ;
      var c = <?php echo $QStock_three; ?>;
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Names', 'No. of Stocks'],
          ['<?php echo $Stock_one; ?>', a],
          ['<?php echo $Stock_two; ?>', b],
          ['<?php echo $Stock_three; ?>', c]

        ]);

        var options = {
          chart: {
            title: 'No. of Stocks',
            subtitle: ' ',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>


    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      var x = <?php echo $Loan_one; ?>;
      var y = <?php echo $Loan_two; ?>;
      var z = <?php echo $Loan_three; ?>;
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Bank Names', 'Loans in different banks'],
          ['Bank 1', x],
          ['Bank 2', y],
          ['Bank 3', z]

        ]);

        var options = {
          chart: {
            title: 'Loans in Different banks',
            subtitle: ' ',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart2'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>


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
