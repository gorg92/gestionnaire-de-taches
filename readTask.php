<?php

include('connect.php');

$request = $pdo->query('SELECT projet FROM taches');
$request->setFetchMode(PDO::FETCH_ASSOC);

