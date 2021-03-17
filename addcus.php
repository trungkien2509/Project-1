<html lang="en">
<head>
    <title>ATN SHOP </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styleheader.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    
</head>
<body>
  
    <!--Header -->
    <div class="header">
        <a href="#" class="logo">ATN SHOP  </a>
        <div class="header-right">
          <a class="active" href="#home">Home</a>
          <a href="#contact">Contact</a>
          <a href="#about">About</a>
        </div>
      </div>

<?php
        $host = "ec2-54-160-7-200.compute-1.amazonaws.com";
        $dbname = "d9k3sdp7l1fclf";
        $port = "5432";
        $user = "hponwzabpnmzxs";
        $pass = "5e0742fe796e8f01920bfdc310411d7359e62b13eb13a2311e011efadbe8edff";
    $ssl = "require";
    $link = pg_connect("host=".$host." dbname=".$dbname." port=".$port." user=".$user." password=".$pass." sslmode=".$ssl);
    $idproduct = $_REQUEST['idproduct'];
    $price = $_REQUEST['price'];
    $cusid = $_POST["CusID"];
    $cusname = $_POST["CusName"];
    $phone = $_POST["Phone"];
    $address = $_POST["Address"];
    $mysqlquery = 'INSERT INTO public."customer" ("customerid", "customername", "phone", "address") VALUES ('."'$cusid'::integer, '$cusname'::character varying, '$phone'::integer, '$address'::character varying)".' returning "customerid"';
    if(pg_query($link, $mysqlquery)){}
?>
  <div>
    <h>Here we have</h>
    <form method="post" action="addinvoice.php">
            ProductID: <input type="text" name="idproduct" id="idproduct" value="<?php echo $idproduct;?>"><br>
            CustomerID: <input type="text" name="customerid" value="<?php echo $cusid; ?>"><br>
            Total cost: <input type="text" name="price" id="price" value="<?php echo $price; ?>"><br>
            Date: <input type="date" name="datebuy" id="datebuy"><br>
            <h> If you want to buy, please check your information and submit again</h>
		<h6><Input type="submit" value="Buy"></a></h6>
        </form>
  </div>
</body>
</html>