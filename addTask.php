<?php
include('lib/connect.php');

    if(isset($_POST['tache'])){
        $tache = $_POST['tache'];
    };
    
    echo 'test ';
    var_dump($tache);

    $req = $pdo->prepare("INSERT INTO taches (tache) VALUES (:tache)");
    $req->execute(array(
         "tache"=>$tache
      )
    );

    header('Location: timer1.php');
