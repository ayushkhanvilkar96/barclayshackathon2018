<?php include('server.php'); 

//fetch the records to be update
if (isset($_GET['edit'])) {
    $id=$_GET['edit'];
    $edit_state=true;
    $rec=mysqli_query($db,"SELECT * FROM info WHERE id=$id;");
    $record=mysqli_fetch_array($rec);
    $name=$record['name'];
    $kgs=$record['kgs'];
    $price=$record['price'];
    $id=$record['id'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Update Inventory</title>
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
                    <strong>Chaakri</strong>
                </a>
                <div class="collapse navbar-collapse" id="navbarNav1">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="dashboard.html" style="color: white;">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ordersummary.html" style="color: white;">Orders<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="updateinventory.html" style="color: white;">Inventory<span class="sr-only">(current)</span></a>
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
                <h1>Flavours Statistics</h1>
                <hr>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
<?php if(isset($_SESSION['msg'])):?>
    <div class="h3"><?php echo $_SESSION['msg']; unset($_SESSION['msg']) ?></div>
<?php endif ?>
            </div>        
        </div>
    </div>
</main>
<!-- /.Main -->

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    
                        <tr>
                            <th>Product Name</th>
                            <th>KGs</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($row=mysqli_fetch_array($results)) { ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['kgs']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td>
                                <a href="updateinventory.php?edit=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a>
                                <a href="server.php?del=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>   <?php } ?>
                    </tbody>
                </table>
            </div>        
        </div>




<div class="row">
    
<div class="col-lg-2">  
</div>

<div class="col-lg-8">
<!--Form with header-->
<div class="card" style="margin-top: 100px; margin-bottom: 25px;">
    <div class="card-block">
<form action="updateinventory.php" method="post">
        <!--Header-->
        <div class="form-header blue-gradient">
            <h3>Add and Update:</h3>
        </div>

        <!--Body-->
        <div class="md-form">
            <i class="fa fa-minus-circle prefix"></i>
            <input type="text" id="form3" name="name" class="form-control" value="<?php echo $name; ?>">
            <label for="form3">Product Name</label>
        </div>

        <div class="md-form">
            <i class="fa fa-square prefix"></i>
            <input type="text" id="form3" name="kgs" class="form-control" value="<?php echo $kgs; ?>">
            <label for="form3">KGs</label>
        </div>

        <div class="md-form">
            <i class="fa fa-dollar prefix"></i>
            <input type="text" id="form3" name="price" class="form-control" value="<?php echo $price; ?>">
            <label for="form3">Price</label>
        </div>


        <?php if($edit_state==false): 
        echo    '<button class="btn btn-primary" type="submit" name="save">Save</button>';         
         else:
         echo '<button class="btn btn-primary" type="submit" name="update">Update</button>';   
        endif ?>

</form>
    </div>
</div>
<!--/Form with header-->
</div>    
    
<div class="col-lg-2">  
</div>

</div>
<!--closing row-->


</div>



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
