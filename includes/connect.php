<?php
function connectDB() {
    $severname = $_ENV['DB_HOST'];
    $username = $_ENV['DB_USER'];
    $password = $_ENV['DB_PASS'];
    $dbname = $_ENV['DB_NAME'];

    try {
        $conn = new PDO("mysql:host=$severname;dbname=$dbname", $username, $password);

        // set attribute
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "ket noi thanh cong";
        return $conn;
    } catch (PDOException $e) {
        echo "Loi: ".$e->getMessage();
    }
}
?>