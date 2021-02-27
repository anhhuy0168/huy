<?php
$con = pg_connect("host=ec2-52-205-3-3.compute-1.amazonaws.com
dbname=d6174t0mn24pgb
port=5432
user=xcwnjjsuwpvisp
password=09c7930a3f9d7f70bdd41b079ad446605d77849a11ba715d9ba71e58a836a1b0
sslmode=require");

$query = "select product_ID,product_shop, product_name, product_category,product_price from product ;";
$result = pg_query($con, $query);
$resultCheck = pg_num_rows($result);
?>

