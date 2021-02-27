<?php
$connect = pg_connect("host=ec2-52-70-67-123.compute-1.amazonaws.com
dbname=dbgcikc8b0oi2e
port=5432
user=wcqwugsizdbqdo
password=cdf3aa4678d3872427da74f1e740ac79f7473d9e56630c4731dea41bcbd3d04e
sslmode=require");
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
