<?php

$username = 'rohith';
$password = 'rohithporeddy';
$dsn = 'mysql:host=localhost;dbname=repairprojectdb';

try {

  $conn = new PDO($dsn, $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

  echo "Fail to connect to the database ".$e->getMessage();

}

?>
