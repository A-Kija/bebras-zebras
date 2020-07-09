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
$sql = "CREATE TABLE IF NOT EXISTS MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
  
    // use exec() because no results are returned
    $pdo->exec($sql);
    echo "Table MyGuests created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}


// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Jonas', 'Jonaitis', 'jonas@petraitis.com')";

// $pdo->query($sql);

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES (?, ?, ?)";

// $stmt = $pdo->prepare($sql);

// $stmt->execute(['Petras', 'Kazenas', 'vvv@jjj.lo']);

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES (:name, :surname, :email)";

$stmt = $pdo->prepare($sql);

$data = ['name' => 'Lape', 'surname' => 'snape', 'email' => 'lape@snape.com'];

$stmt->execute($data);



$sql = "SELECT * FROM MyGuests WHERE id > 7 AND id < 167";

$stmt = $pdo->query($sql);


// while ($row = $stmt->fetch())
// {
//     echo "<br>" . $row['id']. ' ' .$row['firstname']. ' ' .$row['lastname'] . "<br>";
// }

// _dc($stmt->fetchAll());

$from = 'Jonaitis';

// $from = "Petraitis' OR '1";

$sql = "DELETE FROM MyGuests WHERE lastname = :fromas";

$stmt = $pdo->prepare($sql);

$stmt->execute(['fromas' => $from]);



// $stmt = $pdo->query($sql);


$bebras[6] = (string) rand(100000, 999999);

$sql = "UPDATE MyGuests SET firstname='".$bebras[6]."' WHERE lastname = 'Petraitis'";

$stmt = $pdo->query($sql);