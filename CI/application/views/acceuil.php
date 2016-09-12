<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/style.css">
    </head>
    <body>

        <header>
            <ul id="accueil">
                <li>
                    <a class = active href="<?php echo base_url().'index.php/home' ?>"> Accueil </a>
                </li>
                <li>
                    <a href="<?php echo base_url().'index.php/home/formulaire' ?>"> S'enregistrer </a>
                </li>
                <li>
                    <a href="<?php echo base_url().'index.php/home/liste' ?>"> Fiche de contact </a>
                </li>
                <li>
                    <a href=#> Login </a>
                </li>
            </ul>
        </header>

        <div id = "img"></br>
            <h4 id = "title"> MON SITE </h4></br>
                <section id = "stitle"></br> 
                    BIENVENUE SUR LE SITE DE FABIEN FERNANDES ALVES</br></br>
                </section></br>
                <hr size="1" width="98%" color="gainsboro">
                <section id = "body">
                    <h3>Objectif :</br></h3>
                        Création d'un site interner où l'on peut <a id = "lien" href="<?php echo base_url().'index.php/home/formulaire' ?>"> s'enregistrer </a> ou <a id = "lien" href="<?php echo base_url().'index.php/home/liste' ?>"> consulter les personnes déja inscrite</a>.</br></br>
                        <hr size="1" width="98%" color="gainsboro">
                    <h3>A venir :</br></h3>
                        Correction du bug de l'affichage des erreurs lors de l'inscription.</br>
                        <a id = "lien" href="http://blog.soat.fr/2013/04/introduction-au-responsive-design-comment-rendre-son-site-responsive-sans-trop-defforts/" target="_blank">Responsive design</a>. </br>
                        Intégration d'une page de login.</br>
                </section>
                <hr size="1" width="98%" color="gainsboro">
            </br>
        </div>
    </body>
</html>