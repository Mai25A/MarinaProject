<?php
require_once '../../database/database.php';
function loginUser($email, $password)
{
    global $connection;

    try {
        $query = "SELECT * FROM users WHERE email = :email AND password = :password";
        $statement = $connection->prepare($query);

        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', $password); // Compare with hashed password

        $result = $statement->execute();
        if ($result) {
            // Check if there is a matching user
           
                return true; // Login successful
          
        } else {
            return false; // Query execution failed
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false; // Return false to indicate processing failure
    }
}

function getname($email){
  global $connection;
  $query = "SELECT users.name FROM users WHERE email = :email";
  $statement = $connection->prepare($query);
  $statement->bindParam(':email', $email);
  $statement->execute();
  $user = $statement->fetch(PDO::FETCH_ASSOC);
  return $user;
}

function get_user_by_name($name){
  global $connection;
  $query = "SELECT * FROM users WHERE name = :name";
  $statement = $connection->prepare($query);
  $statement->bindParam(':name', $name);
  $statement->execute();
  $user = $statement->fetch(PDO::FETCH_ASSOC);
  return $user;
}
?>