<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJOUTER APPRENANT</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../fonts/css/all.css">
    <link rel="stylesheet" href="../css/Ajouter.css">

</head>

<body>
    <div class=" navigation">
        <nav class="">
            <h1><strong>SIMPLON BURKINA</strong></h1>
        </nav>
    </div>
    <!--la classe navigation a une balise générale navbar qui contiendra du text et une image et si dessous nous avont la balise qui contiendra un toggle(burger) qui aurra pour classe générale bouton -->
    <div class="bouton ">
        <div class="menu-main">
            <i class="fas fa-bars"></i>

            <nav class="menu">
                <ul>
                    <li> <a href="admin.php">ACCEUIL</a> </li>
                    <li> <a href="Ajouter.php">AJOUTER</a> </li>
                    <li> <a href="Modifier.php">MODIFIER</a> </li>
                    <li> <a href="DIASIM.php">LISTE DES APPRENANT </a> </li>
                </ul>
            </nav>
        </div>
    </div>
    <!--fin de la dive bouton et juste apres debut de la div des ajout et de limage simplon-->
    <div class="principale container">
        <div class="simplon">
            <img src="../images/sol-logo.png" class="image" alt="">
        </div>
        <div class="formulaire">
            <div class="inscri container-fluid">
                <h5>Inscription</h5>
            </div>
            <form action="recupajout.php" method="post">
                <div class="ranger">
                    <label for="email"><strong>Email:</strong></label>
                    <input type="text" id="fname" name="email" class="aligne">
                </div>
                <div class="ranger">
                    <label for="nom"><strong>Nom:</strong></label>
                    <input type="text" id="lname" name="nom" class="aligne">
                </div>
                <div class="ranger">
                    <label for="prenom"><strong>Prénom:</strong></label>
                    <input type="text" id="lame" name="prenom" class="alige">
                </div>
                <div class="ranger">
                    <label for="villeorigine"><strong>Ville d'aurigine:</strong></label>
                    <input type="text" id="lme" name="villeorigine" class="algne">
                </div>
                <div class="ranger">
                    <label for="formation"><strong>Formation de base:</strong></label>
                    <input type="text" id="le" name="formation" class="alg">
                </div>

                <div class="gauche">
                    <input type='radio' id='male' name="sexe" value='M'>
                    <label for="male">M</label>
                    <input type='radio' id='female' name="sexe" value='F'>
                    <label for="female">F</label><br>
                </div>
                <div class="gauche">
                    <input type='radio' id='ref' name="format" value='R'>
                    <label for="ref">ref</label>
                    <input type='radio' id='dev' name="format" value='D'>
                    <label for="dev">dev</label><br>
                </div>
                <div class="aire">
                    <textarea name="appreciation" id="" cols="20" rows="1" placeholder="appreciation"></textarea>
                </div>

                <div class="centre"><input type="submit" value="envoyer"></div>

            </form>
        </div>
    </div>
    <script>
    </script>
</body>

</html>