<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 30.11.16
 * Time: 23:48
 */
?>
<h2>Привет! Это Вид. Как меня ВидНо ? или нет?</h2>
<h2>Привет! </h2> Меня зовут, <?php echo isset($name)? $name : 'Гость'; ?>.
Мне <?php echo $age; ?> лет. <?php echo  $title; ?>

