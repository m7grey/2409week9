<!-- Created by PhpStorm. filename: 01.ReadFile.php-->
<!-- explode http://php.net/manual/en/function.explode.php-->
<?php
$file = fopen("/data/10000.FIT.purchase.csv", "r");
$line = fgets($file);

$counter = 0;
while (!feof($file) && $counter < 100) {
    $row = fgets($file);
    $columns = explode(",", $row);
    echo ($counter + 1) . ") " . $columns[0] . " - " . $columns[1]. " - " .$columns[2] . " - " . $columns[3] . $columns[4] . " - " . $columns[5];

    echo "<hr>";
    $counter++;
}
//close resourses
fclose($file);
?>