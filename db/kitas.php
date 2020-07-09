<?php

$host = 'localhost';
$db   = 'zebras';
$user = 'root';
$pass = '123';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

try {
// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS pilieciai (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
  
    // use exec() because no results are returned
    $pdo->exec($sql);
    echo "Pilieciai created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

try {
    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS telefonai (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        phone VARCHAR(30) NOT NULL,
        piliecio_id INT(6) UNSIGNED,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (piliecio_id) REFERENCES pilieciai(id)
        )";
      
        // use exec() because no results are returned
        $pdo->exec($sql);
        echo "<br>Telefonai created successfully";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }


// $sql = "INSERT INTO pilieciai (firstname, lastname, email)
// VALUES (?, ?, ?)";

// $stmt = $pdo->prepare($sql);

// $stmt->execute(['Petras', 'Kazenas', 'vvv@jjj.lo']);


// $sql = "INSERT INTO telefonai (phone, piliecio_id)
// VALUES (?, ?)";

// $stmt = $pdo->prepare($sql);

// $stmt->execute(['3456546554', 1]);



// $sql = "SELECT * FROM pilieciai";


// $sql ="SELECT *
// FROM pilieciai
// JOIN telefonai
// ON pilieciai.id = telefonai.piliecio_id";

$sql = "SELECT A.firstname AS vardas1, B.firstname AS vardas2, A.email AS e1, B.email AS e2
FROM pilieciai A, pilieciai B
WHERE A.email <> B.email";


$stmt = $pdo->query($sql);

_dc($stmt->fetchAll());





// $sql = "SELECT * FROM telefonai";

// $stmt = $pdo->query($sql);

// _dc($stmt->fetchAll());