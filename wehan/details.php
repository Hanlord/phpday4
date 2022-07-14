<?php
require_once "actions/db_connect.php";
require_once "components/boot.php";
if(isset($_GET["id"])){
  $sql = "SELECT * from products WHERE id= {$_GET['id']}";
}

$result = mysqli_query($connect, $sql);
$tbody = "";
$row = mysqli_fetch_assoc($result);
// $info = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump_pretty($info);
// if (mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         $tbody .= "<tr>
//             <td><img class='img-thumbnail' src='pictures/" . $row['picture'] . "'</td>
//            <td>" . $row['name'] . "</td>
//            <td>" . $row['price'] . "€" . "</td>
//            <td><a href='details.php?id=" . $row['id'] . "'><button class='btn btn-warning btn-sm' type='button'>Details</button></a><a href='update.php?id=" . $row['id'] . "'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
//            <a href='delete.php?id=" . $row['id'] . "'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
//             </tr>";
//     }
// } else {
//     $tbody = "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="card" style="width: 18rem;">
  <img src="pictures/<?= $row["picture"] ?>"  class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</body>
</html>