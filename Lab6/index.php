<?php
require_once("class/database.php");
require_once("class/form.php");
require_once("template/sidenav.php");

$mod = $_REQUEST['mod'];
switch ($mod) {
  case "motor":
    require("module/motor.php");
    break;
  case "data":
    require("data.php");
    break;
  case "about":
    require("about.php");
    break;
  case "contact":
    require("contact.php");
    break;
  case "form_input":
    require("form_input.php");
    break;
  case "data":
    require("data.php");
    break;
  case "update":
    require("update.php");
    break;
  default;
    require("module/motor.php");

    require_once("template/footer.php");
}