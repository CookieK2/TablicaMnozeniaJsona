<style><?php include 'D:\tabliczkamnozenia\public\style.css'; ?></style>
<?php

require("src/view.php");

if(!empty($_GET['calculate']))
{
$calculate = $_GET['calculate'];
}
else {
    $calculate = null;
}

$view = new View();
$view->render($calculate);