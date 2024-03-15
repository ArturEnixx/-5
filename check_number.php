<?php
if(isset($_GET['number'])) {
    $number = $_GET['number'];
    if($number % 2 == 0) {
        echo "$number - это четное число.";
    } else {
        echo "$number - это нечетное число.";
    }
}
?>
