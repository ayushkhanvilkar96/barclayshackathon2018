<?php
include_once('simple_html_dom.php');
// Create DOM from URL or file
$html= new simple_html_dom();


/*
$html->load_file('http://economictimes.indiatimes.com');

$sensex= $html->find('b',1);
echo "The sensex is ".$sensex."<br>";

$nifty= $html->find('b',2);
echo "The nifty is ".$nifty."<br>";

$gold= $html->find('b',3);
echo "The Gold is ".$gold."<br>";

$usdrp= $html->find('b',4);
echo "The USD/Rupee is ".$usdrp."<br>";


*/


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Economic News</title>
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
                    <strong>News</strong>
                </a>
                <div class="collapse navbar-collapse" id="navbarNav1">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="javascript:history.back()" class="nav-link" style="color: white;">Dashboard</a>
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
                <h1>News Articles</h1>
                <hr>
            </div>        
        </div>


        <div class="row text-center" style="margin-bottom: 50px;">
            <div class="col-md-12">
                <!--Card-->
                <div class="card" >

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Current Indexes</h4>
                        <!--Text-->
                        <hr>
                        <p class="card-text">
                        	<?php

								$html->load_file('http://economictimes.indiatimes.com');

								$sensex= $html->find('b',1);
								echo "The sensex is ".$sensex."<br>";

								$nifty= $html->find('b',2);
								echo "The nifty is ".$nifty."<br>";

								$gold= $html->find('b',3);
								echo "The Gold is ".$gold."<br>";

								$usdrp= $html->find('b',4);
								echo "The USD/Rupee is ".$usdrp."<br>";



                        	$html->load_file('http://www.thehindu.com/business/');

                        	?>





                        </p>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-12">
                <!--Card-->


                <div class="card">

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Article 1</h4>
                        <!--Text-->
                        <hr>
                        <p class="card-text"><?php echo $html->find('h3',0).'<br>'; ?></p>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
        </div>
        <hr>


        <div class="row text-center">
            <div class="col-md-12">
                <!--Card-->
                <div class="card">

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Article 2</h4>
                        <!--Text-->
                        <hr>
                        <p class="card-text"><?php echo $html->find('h3',1).'<br>'; ?></p>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
        </div>
        <hr>


        <div class="row text-center">

            <div class="col-md-12">
                <!--Card-->
                <div class="card" >

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Article 3</h4>
                        <!--Text-->
                        <hr>
                        <p class="card-text"><?php echo $html->find('h3',2).'<br>'; ?></p>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
        </div>
        <hr>





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
