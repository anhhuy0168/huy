<!DOCTYPE html>
<html>
<body>
<h1>DATABASE CONNECTION</h1>
<?php
ini_set('display_errors', 1);
echo "Hello Cloud Computing class 0805!";
?>
<?php
if (empty(getenv("DATABASE_URL"))){
 echo '<p>The DB does not exist</p>';
 $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb', 'postgres', '123456');
} else {
 echo '<p>The DB exists</p>';
 echo getenv("dbname");
 $db = parse_url(getenv("DATABASE_URL"));
 $pdo = new PDO("pgsql:" . sprintf(
 "host=
 ec2-52-205-3-3.compute-1.amazonaws.com
;port=5432;user=
xcwnjjsuwpvisp;password=09c7930a3f9d7f70bdd41b079ad446605d77849a11ba715d9ba71e58a836a1b0;db
name=d6174t0mn24pgb
",
 $db["host"],
 $db["port"],
 $db["user"],
 $db["pass"],
 ltrim($db["path"], "/")
 ));
}
$sql = "SELECT * FROM product";
$stmt = $pdo->prepare($sql);
//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$resultSet = $stmt->fetchAll();
echo '<p>product information:</p>';
?>
<div id="container">
<table class="table table-bordered table-condensed">
 <thead>
 <tr>
 <th>id</th>
 <th>name</th>
 <th>price</th>
 </tr>
 </thead>
 <tbody>
 <?php
 // tạo vòng lặp
 //while($r = mysql_fetch_array($result)){
 foreach ($resultSet as $row) {
 ?>

 <tr>
 <td scope="row"><?php echo $row['id'] ?></td>
 <td><?php echo $row['name'] ?></td>
 <td><?php echo $row['price'] ?></td>

 </tr>

 <?php
 }
 ?>
 </tbody>
 </table>
</div>
</body>
</html>