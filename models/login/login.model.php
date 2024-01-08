<?php 
require_once '../../database/database.php';

function loginUser($email, $password) {
  global $connection;

  try {
      $query = "SELECT * FROM users (email, password) VALUES (:email, :password)";
      $statement = $connection->prepare($query);
      $statement->bindParam(':email', $email);
      $statement->bindParam(':password', $password);

      $statement->execute();
      
      // Optional: Retrieve the auto-generated ID if needed
      $lastInsertId = $connection->lastInsertId();
      
      // Return the ID if needed
      return $lastInsertId;
  } catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
      return false; // Return false to indicate failure
  }
}
?>