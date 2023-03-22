<?php
function findHighest($array)
{
  $highest = $array[0]; // define the first Element in the array as highest
  foreach ($array as $value) {
    if ($value > $highest) {
      $highest = $value; // If Value is higher than let Value be highest
    }
  }
  return $highest;
}
$numbers = array();
for ($i = 0; $i < 10; $i++) {
  $numbers[] = rand(1, 100); //generate 10 Random Numbers
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Thomas Netusil">
  <meta name="description" content="">
  <title>Day 3 | Classwork | Exercise 3</title>
</head>

<body>
  <header>
    <h2>Exercise 3</h2>
    <p>Create a function that will have a parameter. The argument given to that parameter should be an array. The function should return the highest value from the array. Try to create an array with at least 10 numbers created randomly. You may want to take a look at the rand() function from PHP.</p>
    <hr>
    <br>
  </header>
  <main>
    <?php
    echo "Numbers: " . implode(", ", $numbers) . "<br>"; // Display the array as strings separated by ,
    echo "<strong>Highest: " . findHighest($numbers) . "</strong>";
    ?>
  </main>
  <footer>
  </footer>
</body>

</html>