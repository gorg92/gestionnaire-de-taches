<?php

include('connect.php');

$request = $pdo->query('SELECT tache FROM taches');
$request->setFetchMode(PDO::FETCH_ASSOC);

