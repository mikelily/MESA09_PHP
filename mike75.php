<?php
    $dsn = "mysql:host=localhost;dbname=iii";

    $pdo = new PDO($dsn,'root','root');

    $stmt = $pdo->query("select * from product");
    echo $stmt->rowCount();