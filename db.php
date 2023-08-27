<?php 
  /*$servername = "70.40.220.182";
  $username = "thecowb0_csmith";
  $password = "Braves05!";
  $database = "thecowb0_site";*/

  $servername = "localhost:3307";
  $username = "root";
  $password = "braves05";
  $database = "site";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>