<?php
require_once 'database/database.php';
function getUser($email)
{
    global $connection;

    try {
        $query = "SELECT * FROM users WHERE email = :email ";
        $statement = $connection->prepare($query);
        $statement->bindParam(':email', $email);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
        
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false; // Return false to indicate processing failure
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        return false; // Return false to indicate processing failure
    }
}
function loginUser($email, $password)
{
    global $connection;

    try {
        $query = "SELECT * FROM users WHERE email = :email AND password = :password";
        $statement = $connection->prepare($query);

        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', $password); // Compare with hashed password

        $result = $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
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
  
function get_user_by_id($id) {
    global $connection;
    $query = "SELECT * FROM users WHERE id = :id";
    $statement = $connection->prepare($query);
    $statement->bindParam(':id', $id);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    return $user;
}

?>