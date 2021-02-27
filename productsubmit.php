<?php
  $host = "ec2-52-70-67-123.compute-1.amazonaws.com";
  $port = "5432";
  $dbname = "dbgcikc8b0oi2e";
  $user = "bwcqwugsizdbqdo";
  $password = "cdf3aa4678d3872427da74f1e740ac79f7473d9e56630c4731dea41bcbd3d04e"; 
  $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
  $dbconn = pg_connect($connection_string);
  $query = "select * from product";
  $result = pg_query($dbconn,$query);
  if ($connect === false) {
  die("ERROR: Could not connect to the database server!");
} else {
  //echo ("Connect successfully!");
  $product_name = $_POST['ID'];
  $product_price = $_POST['shop'];
  $product_category = $_POST['name'];
  $product_quantity = $_POST['category'];
  $product_description = $_POST['price'];
}
//echo ("Connect successfully!");
$query = "INSERT INTO product (ID, shop, name, category, price) 
VALUES('$ID', '$shop', '$name', '$category', '$price');";
$result = pg_query($connect, $query);
if ($result) {
  echo "<script>alert('Record added succesfully!, Refresh');</script>";
  header('refresh: 3; url=productform.php');
} else {
  echo ("ERROR + $query") . pg_errormessage($query);
}
pg_close($connect);
