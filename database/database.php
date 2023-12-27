<?php


  $hostname = "localhost";
  $database = "marina";
    //$username = "team_marina";
  $username = "root";
    //$password = "1123marina";
  $password = "";


  try 
  {
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
        // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }