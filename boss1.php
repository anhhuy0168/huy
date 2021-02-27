<?php
$con = pg_connect("host=ec2-52-70-67-123.compute-1.amazonaws.com
dbname=dbgcikc8b0oi2e
port=5432
user=wcqwugsizdbqdo
password=cdf3aa4678d3872427da74f1e740ac79f7473d9e56630c4731dea41bcbd3d04e
                    sslmode=require");

$query = "select product_id, product_name, product_price, product_category, atn_store, product_quantity, product_description from product ;";
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

  <link rel="stylesheet" href="/css/style.css">
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
            <th>Shop</th>
            <th>Name</th>
            <th>Category</th>
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
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['shop']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td><?php echo $row['price']; ?></td>
              </tr>
          <?php
            }
          } else {
            echo "<script>alert('Connect fail!');</script>" . pg_errormessage($query);
          }
          ?>
        </tbody>
      </table>
      <a href="./bosslogout.php">
        <h3 id="sign-out"> LOG OUT </h3>
      </a>
    </div>
</body>

</html>