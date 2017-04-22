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

<!-- saved from url=(0031)file:///C:/bootstrap/table.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Bootstrap Example</title>

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
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
        </tr>
        <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        </tbody>
    </table>
</div>



</body></html>