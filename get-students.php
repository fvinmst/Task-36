<?php
    $pdo = new PDO('mysql:host=localhost;dbname=task36', 'root', ''); // Ganti username dan password sesuai kebutuhan
    $query = $pdo->prepare("select * from students");
    $query->execute();
    $students = $query->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($students);
?>