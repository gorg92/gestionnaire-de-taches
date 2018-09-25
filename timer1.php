<?php 
require_once('connect.php'); 
require_once('readTask.php'); 

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
    <?php while ($r = $request->fetch()): ?>
        <p><?php echo htmlspecialchars($r['projet']) ?></p>
    <?php endwhile; ?>

    <p>
        Afficher les taches :

        <button onclick="afficherEnCours();">en cours</button>
        <button onclick="afficherTerminees();">terminées</button>
        <button onclick="afficherToutes();">toutes</button>
        <a href="index.html"><button type="button">Retour</button></a>
        
        <h1>Les tâches</h1>
    </p>

    <p>
        <input type="text" placeholder="Nouvelle tâche" />
        <button>Ajouter</button>
    </p>

    <div class="tasklist" >
        <p class="task">
            <input type="checkbox" id="task-1" />
            <label for="task-1"></label>
        </p>

        <p class="task">
            <input type="checkbox" id="task-2" checked />
            <label for="task-2"></label>
        </p>

        <p class="task">
            <input type="checkbox" id="task-3" checked />
            <label for="task-3"></label>
        </p>

        <p class="task">
            <input type="checkbox" id="task-4" checked  />
            <label for="task-4"></label>
        </p>

        <p class="task">
            <input type="checkbox" id="task-5" />
            <label for="task-5"></label>
        </p>

        <p class="task">
            <input type="checkbox" id="task-6" />
            <label for="task-6"></label>
        </p>

        <p class="task">
            <input type="checkbox" id="task-7" />
            <label for="task-7"></label>
        </p>

        <p class="task">
            <input type="checkbox" id="task-8" checked />
            <label for="task-8"></label>
        </p>

        <p class="task">
            <input type="checkbox" id="task-9" />
            <label for="task-9"></label>
        </p>
    </div>
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/app.js"></script>

    <div></div>

</body>
</html>