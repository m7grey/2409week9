<!-- Created by PhpStorm. filename: 01.ReadFile.php-->
<?php
$file = fopen("/data/10000.FIT.purchase.csv", "r");
$line = fgets($file);
while (!feof($file)) {
    $row = fgets($file);

    echo $row;
    echo "<hr>";
}
//close resourses
fclose($file);
?>