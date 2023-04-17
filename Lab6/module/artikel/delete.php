<?php
require("../../class/database.php");
$database = new database();
$Nim = $_GET["Nim"];
echo $Nim;

if (isset($_GET["Nim"])) {
    $database->delete("tb_lab6", "where Nim=" . $Nim);
    header("location: Home");
}