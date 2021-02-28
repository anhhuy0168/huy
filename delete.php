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
  $ID = $_GET['ID'];
}
//echo ("Connect successfully!");
$del =  "delete from product where product_id='$ID'";
$data = pg_query($connect,$del);
if ($data) {
  echo "<script>alert('Edited succesfully!, Refresh');</script>";
  header('refresh: 3; url=boss1.php');
} else {
  echo ("ERROR + $query") . pg_errormessage($query);
}
pg_close($connect);