<html lang="en">
<head>
    <title>ATN Toy Shop</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styleheader.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
</head>
<body>
  
    <!--Header -->
    <div class="header">
        <a href="index.php" class="logo">ATN Toy Shop </a>
        <div class="header-right">
          <a class="active" href="index.php">Home</a>
          <a href="#contact">Contact</a>
          <a href="#about">About</a>
        </div>
      </div>
              <div class="carousel-item active">
                <img src="pic/6.jpg" class="d-block w-100" alt="...">
              </div>
    <?php
    $host = "ec2-54-160-7-200.compute-1.amazonaws.com";
    $dbname = "d9k3sdp7l1fclf";
    $port = "5432";
    $user = "hponwzabpnmzxs";
    $pass = "5e0742fe796e8f01920bfdc310411d7359e62b13eb13a2311e011efadbe8edff";
    $ssl = "require";
    $link = pg_connect("host=".$host." dbname=".$dbname." port=".$port." user=".$user." password=".$pass." sslmode=".$ssl);


	$query = 'SELECT idproduct, nameproduct , price , picture , describe  FROM "product" ORDER BY "idproduct"';
	
    $prod = pg_query($link, $query);
	?>
<div class="row">	
	<?php   
while ($row = pg_fetch_row($prod)) { ?>

<div class="col-md-4">
    <div class="card" style="width: 100%;">
      <img src="<?php echo $row[3];?>" >
      <div class="card-body">
        <h3><?php echo $row[2];?></h3>
		<h6><?php echo $row[1];?> </h6>
    <p><?php echo $row[4];?></p>
		<h6><a href="datapro.php?idproduct=<?php echo $row[0]?>"><button class="btn btn-outline-primary">Buy</button></a></h6>
      </div>
    </div>		
  </div>


<?php } ?>
  
     
          <!--footer-->
        <footer class="container">
          <div class="container text-white text-center">
         <a href="#" class="#">This is the official website OF ATN TOY SHOP</a>              
          </div>
        </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
     </div>
    </header>
    
   
    
 
 <script  type="text/javascript" src="bootstrap/js/bootstrap.js"></script>  
</body>
</html>