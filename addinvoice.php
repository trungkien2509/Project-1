<html lang="en">
<head>
    <title>ATN SHOP</title>
    <style>
table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 30px;
}
</style>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styleheader.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
  
    <!--Header -->
    <div class="header">
        <a href="#" class="logo">ATN SHOP </a>
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
    $cusid = $_REQUEST['customerid'];
    $price = $_REQUEST['price'];
    $date = $_REQUEST['datebuy'];
    $mysqlquery = 'INSERT INTO public."invoice" ("idproduct","customerid","price","date") VALUES ('."'$idproduct','$cusid','$price','$date')".'returning *';
    if(pg_query($link, $mysqlquery)){
	}
  $query = 'SELECT idinvoice FROM "invoice" ORDER BY idinvoice';
	
  $prod = pg_query($link, $query);
  $row = pg_fetch_assoc($prod);
?>
<table style=“width:100%”>
<tr>
<th>Idinvoice</th>
<th>IdProduct</th>
<th>IdCustomer</th>
<th>Total Price</th>
<th>Date</th>
</tr>
<tr>
<td><?php echo $row['idinvoice']; ?></td>
<td><?php echo $idproduct ?></td>
<td><?php echo $cusid ?></td>
<td><?php echo $price ?></td>
<td><?php echo $date ?></td>
</tr>
</table>
</body>
</html>