<?php
  require_once "../../config/db.php";

  function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
  }

  if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = clean_input($_POST["department"]);
    $name = clean_input($_POST["name"]);
    $name = clean_input($_POST["age"]);

    // validate fields to be required

    // make database call here 
  }
?>