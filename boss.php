<?php
$con = pg_connect("host=ec2-52-205-3-3.compute-1.amazonaws.com
dbname=d6174t0mn24pgb
port=5432
user=dxcwnjjsuwpvisp
password=09c7930a3f9d7f70bdd41b079ad446605d77849a11ba715d9ba71e58a836a1b0
sslmode=require");

$query = "select product_ID, product_shop, product_name, product_category, product_price from product ;";
$result = pg_query($con, $query);
$resultCheck = pg_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ATN Boss - View Shop Data</title>

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="boss.css">
</head>

<body id="bd-view-page">
  <div class="form-title">
    <h1 style="font-weight: 700;">ATN BOSS - VIEW SHOP DATA </h1>
  </div>
  <div class="container">
    <div class="col" style="padding-top:50px;">
      <table id="view-data" class="table" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Product</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($resultCheck > 0) {
            echo "<script>alert('Connect successfully!');</script>";
            while ($row = pg_fetch_assoc($result)) {
          ?>
              <tr>
                <td><?php echo $row['product_ID']; ?></td>
                <td><?php echo $row['product_shop']; ?></td>
                <td><?php echo $row['product_name']; ?></td>
                <td><?php echo $row['product_category']; ?></td>
                <td><?php echo $row['product_price,']; ?></td>
              </tr>
         
            }
          } else {
            echo "<script>alert('Connect fail!');</script>" . pg_errormessage($query);
          }
          ?>
        </tbody>
      </table>
      <a href="./login.html">
        <h3> LOG OUT </h3>
      </a>
    </div>
</body>

</html>
