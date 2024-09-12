<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=e-commercedb;charset=utf8", "root", "mysql123");

} catch (Exception $e) {
    echo "baglanti basarisiz " . $e->getMessage() . "";
}

?>