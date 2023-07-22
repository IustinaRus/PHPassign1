<!--
1.For an array of elements count the number of occurrences of a given element.
2.Generate a random array of numbers and search for a specific one. If you find it then use a break to exit the loop.
3.For a given array, reverse the order of the elements.
4.Verify if a string is a palindrome and return the result.
5.Bubble sort-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  Exercitiul 1 si 3:

  <form action="tema1.php" method="POST">
    Give the element:
    <input type="number" name="num"><br>
    <input type="submit">
  </form>


  <?php
  //$array1=array('item1','item2','item3','item2','item2');
  //varianta 1 ptr ex 1 si 3
  //print_r(array_count_values($array1))
  //print_r(array_reverse($array1));

  //varianta 2
  $array2 = array(1, 2, 3, 4, 2, 3, 2, 3, 4, 5, 6);
  $num_of_el = count($array2);
  $occurencies = 0;
  if (isset($_POST["num"])) {
    $num = $_POST["num"];
    for ($i = 0; $i < $num_of_el; $i++) {
      if ($array2[$i] == $num) {
        $occurencies += 1;
      }
    }
    echo "The occurences of: " . $num . " is " . $occurencies . "<br>";
    for ($i = 0; $i < $num_of_el / 2; $i++) {
      $aux = $array2[$i];
      $array2[$i] = $array2[$num_of_el - $i - 1];
      $array2[$num_of_el - $i - 1] = $aux;
    }
    print_r($array2);
  }
  ?>
  <br><br><br>



  Exercitiul 2:
  <form action="tema1.php" method="POST">
    Give the dimensions for your wanted array: <br>
    Length: <input type="number" name="length"> <br>
    Min value: <input type="number" name="min"> <br>
    Max value: <input type="number" name="max"> <br>
    For what number are we looking for?:
    <input type="number" name="num1"><br>
    <input type="submit">
  </form>


  <?php
  $random_array = array();  //am declarat un array gol
  if (isset($_POST["length"]) && isset($_POST["min"]) && isset($_POST["max"]) && isset($_POST["num1"])) {
    $length = $_POST["length"];
    $min = $_POST["min"];
    $max = $_POST["max"];
    $num1 = $_POST["num1"];
    for ($i = 0; $i < $length; $i++) {
      $randomNumber = rand($min, $max);
      $random_array[$i] = $randomNumber;
    }
    $val = 0;
    foreach ($random_array as $key => $value) {
      if ($value == $num1) {
        echo "Element found!";
        $val = 1;
        break;
      }
    }
    if ($val == 0) {
      echo "Element not found!";
    }
  }
  ?>
  <br><br><br>



  Exercitiul 4:
  <form action="tema1.php" method="POST">
    Give your string:
    <input type="text" name="string"> <br>
    <input type="submit"> <br>
  </form>


  <?php
  if (isset($_POST['string'])) {
    $string = $_POST['string'];
    if ($string == strrev($string)) {
      echo "Is palindrome";
    } else {
      echo "Not palindrome";
    }
  }
  ?>
  <br><br><br>



  Exercitiul 5:
  <?php
  $array5 = array(11, 56, 7, 90, 25, 12, 4, 0, 63);
  for ($i = 0; $i < count($array5) - 1; $i++) {
    for ($j = 0; $j < count($array5) - $i - 1; $j++) {
      if($array5[$j]>$array5[$j+1])
      {
        $aux=$array5[$j];
        $array5[$j]=$array5[$j+1];
        $array5[$j+1]=$aux;
      }
    }
  }
  print_r($array5);
  ?>


</body>

</html>