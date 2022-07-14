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
    <style type="text/css">
       h1 {
            font-family: Baskerville-Italic;
            font-weight: bold;
            color: purple;
        }
        body{
            background: lightgrey;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <img src="https://media.istockphoto.com/photos/food-plate-icon-blue-glossy-round-button-picture-id547202460?b=1&k=20&m=547202460&s=170667a&w=0&h=Kjo3fImQ9xkQYifVpHt-cfDkaw_dlzLh6ZJlcA1jJ5c=" width="30px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <h1 class="text-center animate__animated animate__bounce">&ensp;Master Delicious Dishes</h1>
                </div>
            </div>
        </div>
    </nav>
<div class="card" style="width: 18rem;">
  <img src="pictures/<?= $row["picture"] ?>"  class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="text-light text-center p-2 bg-dark">
        <footer>
            <p>&copy; 2022 Copyright We-Han Chen</p>
        </footer>
    </div>
</body>
</html>