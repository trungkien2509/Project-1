<html>
<body>
    <p> Submitted </p>
    <?php echo $_POST["ID"]; ?> <br>
    <?php echo $_POST["Name"]; ?> <br>
    <?php echo $_POST["Price"]; ?> <br>
    <?php echo $_POST["Picture"]; ?> <br>
    <?php echo $_POST["Describtion"]; ?> <br>
    <?php
    $host = "ec2-54-225-190-241.compute-1.amazonaws.com";
    $dbname = "deo68284g86ml9";
    $port = "5432";
    $user = "zsbowtuipocfvd";
    $pass = "aa4e1d3fefe353a1ffb6c457704b3432ffddd24cca3a929da46a25d93969e1b6";
    $ssl = "require";

    $link = pg_connect("host=".$host." dbname=".$dbname." port=".$port." user=".$user." password=".$pass." sslmode=".$ssl);
    
    if($link === false){
		die("ERROR: Could not connect.");
	} else {
		echo "Connection to Heroku Postgres has been established";
	}
    $id = $_REQUEST["ID"];
    $name = $_REQUEST["Name"];
    $price = $_REQUEST["Price"];
    $picture = $_REQUEST["Picture"];
    $describe = $_REQUEST["Describtion"];
    $mysqlquery = 'INSERT INTO public."product" ("idproduct", "nameproduct", "price", "picture", "describe") VALUES ('."'$id'::integer, '$name'::character varying, '$price'::integer, '$picture'::character varying, '$describe'::character varying)".' returning "idproduct"';
    echo $mysqlquery;
    
    if(pg_query($link, $mysqlquery)){
		echo "Records added successfully.";
	} else{
		echo "ERROR: Could not able to execute $mysqlquery. " . pg_error($link);
	}
    ?>
</body>
</html>