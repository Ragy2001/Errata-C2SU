<!-- ------ C2SU ------ -->

<!-- modifié et crée par Eol (Mayeul) en juin 2020 -->

<!-- site d'ERRATA by C2SU -->


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Errata C2SU - Ajouter un erratum</title>

    <!-- link CSS -->
    <link rel="stylesheet" type="text/css" href="main_ajout_erratum.css">





    <!-- link police 'Source Sans Pro' -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900&display=swap" rel="stylesheet">

    <!-- link police 'Dancing Script' -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <!-- link police 'Montserrat' -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200&display=swap" rel="stylesheet">





    <!-- script JavaScript principal -->
    <script type="text/javascript" defer src="script_ajout_erratum.js"></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <!-- Link Pack 'Ionicons' -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>

    <!-- FontAwesome -->
    <script type="text/javascript" defer
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>

</head>

<body>
    <header>
        <!-- header  -->

        <img src="images/c2su.png" alt="logo de C2SU" class="corpoLogo">
        <h1>ERRATA &nbsp;<span>by</span>&nbsp; C2SU</h1>

        <div class="iconHeader">
            <div class="userProfile">
                <a href="" title="Profil">
                    <ion-icon name="person"></ion-icon> &nbsp; <p>Profil</p>
                </a>
            </div>
            <div class="socialMedia">
                <a href="">facebook</a>
                &nbsp; &nbsp; &nbsp;
                <a href="">instagram</a>
            </div>
        </div>
    </header>

    <main>

        <!-- contenu de la page (hors header) -->
        <div class="restOfPage">
            <h1>
                <p>Proposer un erratum</p>
            </h1>

            <form action="">
                <div class="promoSelect">
                    <!-- prendre par défaut celle de l'utilisateur -->
                    <p>Choisir une promotion</p>
                    <select name="promo" id="promo">
                        <option value="1">DFGSM2 (P2)</option>
                        <option value="2">DFGSM3 (D1)</option>
                        <option value="3">DFASM1 (D2)</option>
                        <option value="4">DFASM2 (D3)</option>
                        <option value="5">DFASM3 (D4)</option>

                    </select>
                </div>

                <div class="matiereSelect">
                    <p>Choisir une matière</p>
                    <select name="matiere" id="matiere">
<?php include("index_ajout_erratum.html"); 
$bdd = new PDO('mysql:host=localhost;dbname=mati__res.sql;charset=utf8', 'Ragy', 'root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)););
$mats=$bdd->query("SELECT * FROM matières WHERE Année = \' " . $_POST['promo']. " \' ");

$donnees = $mats->fetch();
foreach($donnees as $matiere);
{
	echo  '<option value="1">' . $matiere.  '</option>';
}
$mats->closeCursor();
?>
                        <!--<option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                        <option value="5"></option>
                        <option value="6"></option>
                        <option value="7"></option>
                        <option value="8"></option>
                        <option value="9"></option>-->

                    </select>
                </div>

                <div class="yearSelect">
                    <p>Choisir une année</p>
                    <select name="year" id="year">
                        <option value="1">2012</option>
                        <option value="2">2013</option>
                        <option value="3">2014</option>
                        <option value="4">2015</option>
                        <option value="5">2016</option>
                        <option value="6">2017</option>
                        <option value="7">2018</option>
                        <option value="8">2019</option>
                        <option value="9">2020</option>

                    </select>
                </div>

                <div class="questionPlus">
                    <label for="question">Sélectionner la question <span>(numéro)</span></label>
                    <input type="text" name="question" id="question">
                </div>

                <div class="itemPlus">
                    <label for="item">Sélectionner l' item <span>(lettre)</span></label>
                    <input type="text" name="item" id="item">
                </div>


                <div class="addPhoto">
                    <label for="photo">Ajouter une photo <span>parcourir</span></label>
                    <input type="file" accept=".jpeg, .jpg, .png" multiple>
                    <p></p>
                </div>

                <div class="addComment">
                    <label for="comment">Ajouter un commentaire</label>
                    <textarea name="comment" id="comment" cols="100" rows="10"></textarea>
                </div>

                <input type="submit" value="valider">
            </form>

        </div>


    </main>
    <br>
    <br>
    <br>

    <footer>
        <ul>
            <li title="Facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li title="Instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li title="Twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
        </ul>

        <p>&copy; &nbsp;<a href="">Team Info</a> pour C2SU - 2020</p>

    </footer>

</body>

</html>