<?php
$Music = ["Beatles", "Stones", "Bowie", "Queen", "Hendricks", "Miles Davis", "Joe Cocker", "Patty Smith", "Beethoven", "Phillip Glas"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Thomas Netusil">
  <meta name="description" content="">
  <title>Day 3 | Classwork | Exercise 2</title>
</head>

<body>
  <header>
    <h2>Exercise 2</h2>
    <p>Define a numeric array with 10 elements. Use a foreach loop to output the value of every array's element.</p>
    <hr>
    <br>
  </header>
  <main>
    <?php
    $i = 1;
    foreach ($Music as $val => $key) {
      echo $val + 1 . " $key <br>";
      $i++;
    }
    ?>
  </main>
  <footer>
  </footer>
</body>

</html>