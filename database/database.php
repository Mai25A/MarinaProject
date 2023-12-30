  <?php
/**
 * Connect to database
 */
function db() {
    $hostname = 'localhost'; // Because MySQL is running on the same computer as the web server
    $database = 'demo_db'; // Name of the database you use (you need first to CREATE DATABASE in MySQL)
    $username = 'root'; // Default username to connect to MySQL is root
    $password = ''; // Default password to connect to MySQL is empty
try {
    $db = new PDO("mysql:host=$hostname;dbname=$database",$username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
}