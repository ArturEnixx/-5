<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST['age'];
    $stage = '';
    if ($age >= 6 && $age <= 10) {
        $stage = 'Начинающий';
    } elseif ($age >= 11 && $age <= 15) {
        $stage = 'Средний';
    } elseif ($age >= 16) {
        $stage = 'Профессионал';
    } else {
        $stage = 'Слишком молод или недопустимый возраст';
    }
    echo "<h2>Уровень тренировки спортсмена возрастом $age лет: $stage</h2>";
}
?>
