<!DOCTYPE html>
<html lang="en">


<head>
<?php
	if(ISSET($_POST['submit'])){
		$company = htmlentities($_POST['company']);
		$material = htmlentities($_POST['material']);
		$condition = htmlentities($_POST['condition']);
		$quantity = htmlentities($_POST['quantity']);
		$price = htmlentities($_POST['price']);
		$address = htmlentities($_POST['address']);
		$email = htmlentities($_POST['email']);
		$phone = htmlentities($_POST['phone']);
		$comment = htmlentities($_POST['comment']);
		
		
		$con = mysqli_connect("localhost", "root", "", "waste_management");
		mysqli_query($con,"INSERT INTO materials (company, material, condition, quantity, price, address, email, phone, comment) VALUES ('".$company."','".$material."','".$condition."','".$quantity."','".$price."','".$address."', '".$email."', '".$phone."', '".$comment."')");
		
					

	}
?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact - Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Waste Management</div>
    

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="blog.html">About</a>
                    </li>
                    <li>
                        <a href="about.php">Search for materials</a>
                    </li>
                    <li>
                        <a href="add.php">Add materials</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	
	
	
	
	

    <div class="container">

        

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Add
                        <strong>material</strong>
                    </h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, vitae, distinctio, possimus repudiandae cupiditate ipsum excepturi dicta neque eaque voluptates tempora veniam esse earum sapiente optio deleniti consequuntur eos voluptatem.</p>
                    <form action="" method="post">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Your company name</label>
                                <input type="text" name="company" class="form-control">
                            </div>
							<div class="form-group col-lg-4">
                                <label>Material name</label>
                                <input type="text" name="material" class="form-control">
                            </div>
							<div class="form-group col-lg-4">
                                <label>Condition</label>
                                <input type="text" name="condition" class="form-control">
                            </div>
							<div class="form-group col-lg-4">
                                <label>Quantity</label>
                                <input type="text" name="quantity" class="form-control">
                            </div>
							<div class="form-group col-lg-4">
                                <label>Price</label>
                                <input type="text" name="price" class="form-control">
                            </div>
							<div class="form-group col-lg-4">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="tel" name="phone" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Comments</label>
                                <textarea class="form-control" rows="6" name="comment"> </textarea>
                            </div>
							<div class="form-group col-lg-12">
                                <label>Upload image</label>
                                <input type="file" name="image" id="fileToUpload"><br>
                            </div> 
                            <input type="submit" name="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div> 
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Waste Management 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
