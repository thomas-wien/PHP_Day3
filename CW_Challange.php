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
  <header>
    <h2>Challange</h2>
    <p>We will create a Restaurant Database (you can create it directly in php MyAdmin).</p>

    <p>The database should contain one table called dishes with columns dishID, image (URL link), name, price and meal description. If there are any columns that you think could compliment your project feel free to expand. </p>

    <p>You should be able to:</p>

    <li>Display all meals. This page will show name, image and a "Show details" link for all meals in the database.</li>
    <li>Each meal will be linked to a details page specific for that meal (try to pass the id using GET request). From that id, show all the details to the specific meal included on your database.</li>
    </p>
    <hr>
    <br>
  </header>
  <main>
    <?php
    echo "<h1>Menu</h1>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<div>";
      echo "<img width='350px' src='images/" . $row['image'] . "' alt='" . $row['name'] . " '>";
      echo "<h2>" . $row['name'] . "</h2>";
      echo "<p>Price: $" . $row['price'] . "</p>";
      echo "<button type='button' class='btn btn-light'><a href='details.php?id=" . $row['dishID'] . "'>Show details</a></button>";
      echo "</div>";
      echo "<hr>";
    }
    ?>


  </main>
  <footer>
  </footer>
</body>

</html>