<?php
include('connect.php');
require_once('timer1.php');

    $tache=$_POST['tache'];
    echo 'test ';
    var_dump($tache);





    $req = $pdo->prepare("INSERT INTO taches (tache) VALUES (:tache)");
    $req->execute(array(
         
            "tache"=>$tache

           
            ));



?>