<!--01.CustomerReport.php-->
<!DOCTYPE html>

<?php
$file = fopen("/data/10000.FIT.purchase.csv", "r");
$line = fgets($file);
$counter = 0;

$upperLimit = 100;
if (isset($_GET["limit"])){
    $upperLimit = $_GET["limit"];
}

?>

<!-- saved from url=(0031)file:///C:/bootstrap/table.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Customer Report</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./other_files/bootstrap.min.css">
    <script src="./other_files/jquery.min.js.download"></script>
    <script src="./other_files/bootstrap.min.js.download"></script>
</head>
<body>

<div class="container">
    <h2>Customer Report</h2>
    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>product</th>
            <th>cost</th>
        </tr>
        </thead>
        <tbody>

        <?php
        while (!feof($file) && $counter <= $upperLimit) {
            $row = fgets($file);
            $columns = explode(",", $row);
//            echo ($counter + 1) . ") " . $columns[0] . " - " .$columns[4] . " - " . $columns[3];
            $counter++;

       ?>
        <tr>
            <td><?= $columns[0] ?></td>
            <td><?= $columns[3] ?></td>
            <td><?= $columns[4] ?></td>
        </tr>

        <?php
        }
        //close resources
        fclose($file);
        ?>
        </tbody>
    </table>
</div>



</body></html>