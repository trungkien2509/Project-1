<html lang="en">
<head>
    <title>ATN SHOP</title>
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
        <a href="#" class="logo">ATN SHOP</a>
        <div class="header-right">
          <a class="active" href="#home">Home</a>
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

    if ($_GET['idproduct']>0){
	
        $sql = 'SELECT idproduct, nameproduct, price, picture, describe FROM "product" Where idproduct=' .$_GET['idproduct'];
    } else{
        $sql = 'select * from "product"';
    }
    $result = pg_query($link, $sql);
	?>
<div class="row">	
	<?php   
$row = pg_fetch_assoc($result); ?>
<div class="col-md-4">
    <div class="card" style="width: 100%;">
      <img src="<?php echo $row['picture'];?>" >
      <div class="card-body">
        <h3><?php echo $row['price'];?></h3>
		<h6><?php echo $row['nameproduct'];?> </h6>
    <p><?php echo $row[4];?></p>
    <form method="post" action="addcus.php">
            ProductID: <input type="text" name="idproduct" id="idproduct" value="<?php echo $row['idproduct'];?>" <?php if ($row['idproduct'] > 0) echo "readonly";?>><br>
            Price: <input type="text" name="price" id="price" value="<?php echo $row['price'];?>" <?php if ($row['price'] > 0) echo "readonly";?>><br>
            CustomerID: <input type="text" name="CusID"><br>
            CustomerName: <input type="text" name="CusName"><br>
            Phone: <input type="text" name="Phone"><br>
            Address: <input type="text" name="Address"><br>
		<h6><Input type="submit" value="Buy"></a></h6>
        </form>
      </div>
    </div>
  </div>
  
     
          <!--footer-->
        <footer class="container">
          <div class="container text-white text-center">
         <a href="https://www.facebook.com/trungkien.engonow/" class="#"> </a>              
          </div>
        </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
     </div>
    </header>
    
   
    
 
 <script  type="text/javascript" src="bootstrap/js/bootstrap.js"></script>  
</body>
</html>