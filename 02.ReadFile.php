<!-- Created by PhpStorm. filename: 01.ReadFile.php-->
<!--<!-- explode http://php.net/manual/en/function.explode.php-->-->
<!--Example -->
<!--02.RF.php display 100 rows-->
<!--50-->
<!--75-->
<!--88-->


<?php
$file = fopen("/data/10000.FIT.purchase.csv", "r");
$line = fgets($file);
$counter = 0;

$upperLimit = 100;
if (isset($_GET["limit"])){
    $upperLimit = $_GET["limit"];
}

while (!feof($file) && $counter <= $upperLimit) {
    $row = fgets($file);
    $columns = explode(",", $row);
    echo ($counter + 1) . ") " . $columns[0] . " - " . $columns[1]. " - " .$columns[2] . " - " . $columns[3] . $columns[4] . " - " . $columns[5];

    echo "<hr>";
    $counter++;
}
//close resources
fclose($file);
?>