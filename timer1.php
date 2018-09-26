<?php 
require_once('lib/connect.php'); 
require_once('lib/readTask.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gestionnaire de taches avec timer</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 <h1>Timer 1</h1>
test php en dessous
    <p>
        Afficher les taches :
        <button onclick="afficherEnCours();">en cours</button>
        <button onclick="afficherTerminees();">terminées</button>
        <button onclick="afficherToutes();">toutes</button>
        <a href="index.html"><button type="button">Retour</button></a>
        
        <h1>Les tâches</h1>
    </p>

    <form method="post" action="addTask.php">
        Ajouter: <input type="text" name="tache"><br>
        <input type="submit">
    </form>    

    <div class="tasklist" >
     

    <?php while ($r = $request->fetch()): ?>
        <p> <input type="checkbox" id="task-1" /><?php echo htmlspecialchars($r['tache']) ?></p>
    <?php endwhile; ?>

    </div>
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/app.js"></script>

    <div></div>

</body>
</html>