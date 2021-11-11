<?php
include_once("./functions/history.php");

echo("
<html>
    <head>
        <title>Main Test Page</title>
        <link rel='stylesheet' href='./stylesheets/css/bootstrap.css'>
    </head>
    <body>
");

    HistoryInfo(1);

echo("
    </body>
</html>
");
?>