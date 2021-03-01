<?php
$connect = pg_connect("host=ec2-52-70-67-123.compute-1.amazonaws.com
dbname=dbgcikc8b0oi2e
port=5432
user=wcqwugsizdbqdo
password=cdf3aa4678d3872427da74f1e740ac79f7473d9e56630c4731dea41bcbd3d04e
sslmode=require");
if ($connectd === false) {
      die("ERROR: Could not connect to the database server!");
    } else {
      $id = $_POST['id'];
    }
echo("hello");
    $query = "DELETE FROM Product WHERE id = '$id';";
    $result = pg_query($connectd, $query);
    if ($result) {
      echo "<script>alert('Record delete succesfully!, Refresh');</script>";
      header("location:staff.html");
    } else {
      echo ("ERROR + $query") . pg_errormessage($query);
    }
    pg_close($connect);
?>
