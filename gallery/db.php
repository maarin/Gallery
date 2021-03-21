<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Letmeinpls!1";

try {
  $conn = new PDO("mysql:host=$dbhost;dbname=gallerydb", $dbuser, $dbpass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, name FROM gallery");
  $stmt->execute();
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
