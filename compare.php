<?php
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $num3 = $_POST['num3'];
  
  if ($num1 > $num2 && $num1 > $num3) {
    echo "Самое наибольшее число $num1.";
  } elseif ($num2 > $num1 && $num2 > $num3) {
    echo "Самое наибольшее число $num2.";
  } else {
    echo "Самое наибольшее число $num3.";
  }
  
  if ($num1 < $num2 && $num1 < $num3) {
    echo "Самое меньшее число $num1.";
  } elseif ($num2 < $num1 && $num2 < $num3) {
    echo "Самое меньшее число $num2.";
  } else {
    echo "Самое меньшее число $num3.";
  }
}
?>