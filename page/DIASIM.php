<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/DIASIM.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fonts/css/all.css">
    <title>Liste devweb</title>
</head>

<body>

    <header>
        <div class="container">
            <h1>SIMPLON BURKINA</h1>
            <div class="container0">
                <img src="../images/favicon.ico" alt="SIMPLON">
            </div>
        </div>
    </header>
    <div class="bouton ">
        <div class="menu-main">
            <i class="fas fa-bars"></i>
            <nav class="menu">
                <ul>
                    <li><a href="#" class=""> ACCUEIL</a></li>
                    <li> <a href="Ajouter.php">AJOUTER</a> </li>
                    <li> <a href="Modifier.php">MODIFIER</a> </li>
                    <li> <a href="DIASIM.php">LISTE DES APPRENANT </a> </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- 
    <h2>DIASIM <br />
        Liste des apprenants</h2>
    <form method="post" action="traitement.php">
        <label for="rechercher"></label>
        <input type="text" name="rechercher" id="rechercher" placeholder="rechercher" size="20" maxlength="10" />
    </form>
    -->
    <table>
        <tr>
            <th> EMAIL</th>
            <th> NOM</th>
            <th> PRENOM</th>
            <th>VILLE D'ORIGINE </th>
            <th>FORMATION DE BASE</th>
            <th>APPRECIATION</th>
        </tr>
        <?php
        require_once 'conexajout.php';
        $recuperation = $db->query('SELECT * FROM formulaires');
        $affiche = $recuperation->fetch();
        while ($affiche == true) {
            echo '<tr>';
            echo '<td><a href=\'Modifier.php\'>' . $affiche['email'] . '</a></td>';
            echo '<td>' . $affiche['nom'] . '</td>';
            echo '<td>' . $affiche['prenom'] . '</td>';
            echo '<td>' . $affiche['villeorigine'] . '</td>';
            echo '<td>' . $affiche['formation'] . '</td>';
            echo '<td>' . $affiche['appreciation'] . '</td>';
            echo '</tr>';
            $affiche = $recuperation->fetch();
        }
        ?>

    </table>
    <script src=""></script>
    <footer>
        <div class="container2">
            <h2>DIASIM</h2>
            <img src="../images/favicon.ico" alt="SIMPLON">
        </div>
    </footer>
</body>

</html>