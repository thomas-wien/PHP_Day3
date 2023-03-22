<?php
require "db_connect.php";

// Query database for all dishes
$sql = "SELECT * FROM dishes";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>
  <meta name="author" content="Thomas Netusil">
  <meta name="description" content="">
  <title>Day 3 | Classwork | Challange</title>
</head>

<body class="container">


  <?php
  // Get the dish ID from the GET parameters
  $dishID = $_GET["id"];

  // Query the database for the dish with the specified ID
  $sql = "SELECT * FROM dishes WHERE dishID = " . $dishID;
  $result = mysqli_query($conn, $sql);

  // Display the details of the specified dish
  $row = mysqli_fetch_assoc($result);

  ?>

  <div>
    <h1 class="text-center"><?= $row["name"] ?></h1>
    <div class="row mx-auto" style="width: 75%;">
      <div class="card p-3 mb-5">

        <div class="card-img-body">
          <img class="card-img" data-bs-toggle="modal" data-bs-target="#exampleModal" src=images/<?= $row["image"] ?> alt="<?= $row["name"] ?>" title="Click to see the details">
        </div>
        <div class="card-body">
          <h5 class="card-title"><?= $row["name"] ?></h5>
          <p class="card-text"><?= $row["description"] ?></p>
          <p class="card-text"> <?= $row["price"] ?></p>
          <p class="col-4 p-2 ms-3 btn btn-light btn-sm w-25 text-white"> <a href='CW_Challange.php'>Back</a></i>
          </p>
        </div>
      </div>
    </div>
  </div>
</body>