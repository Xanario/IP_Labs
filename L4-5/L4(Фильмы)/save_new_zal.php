<?php
require_once 'connect1.php';
$link = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysql_connect_error());
    exit();
}
mysqli_query($link, "INSERT INTO zal SET name_z='" . $_GET['name_z']
    . "', category_z='" . $_GET['category_z'] . "'");
if (mysqli_affected_rows($link) > 0)
{
    print "<p>Кинозал добавлен в базу данных.";
    print "<p><a href=\"zal.php\"> Вернуться к списку
Кинозалов </a>";
} else {
    print "Ошибка сохранения. <a href=\"zal.php\">
Вернуться к списку кинозалов </a>";
    mysqli_close($link);
}
?>
