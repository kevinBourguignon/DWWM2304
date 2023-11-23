<?php

// Pour interdire les injections de la base de données par des pirates.

try {
    $db = new PDO('mysql:host=localhost;dbname=demo_injection', 'root', '');
    $db->exec('SET NAMES "UTF8');
}catch(PDOException $e){
    echo $e->getMessage();
}

if(!empty($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM `users` WHERE `id` = :id;";

    $query = $db->prepare($sql);

    // on injecte l' id
    $query->bindValue(':id', $id, PDO::PARAM_INT);

    // on exécute 
    $query->execute();

    $users = $query->fetchAll(PDO::FETCH_ASSOC);
}

foreach($users as $user){
    echo '<p>'.$user['email'].'</p>';
}