<?php

    $DB_HOST = 'localhost';
    $DB_NAME = 'introtodb';
    $DB_USER = 'root';
    $DB_PASS = 'root';
    $dsn = "mysql:host=$DB_HOST;dbname=$DB_NAME;port=8889";
 
try {
    $pdo = new PDO($dsn, $DB_USER, $DB_PASS);
    echo "Connected successfully to $DB_NAME!";

    $sql = "SELECT * FROM games ORDER BY title";
    $stmt = $pdo->query($sql);
    print_r($stmt);

    // $rs = $stmt->fetchAll();
    // print_r($rs);

    while ($row = $stmt->fetch()) {
        echo "<p>" . $row['title'] . "</p><br>";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>