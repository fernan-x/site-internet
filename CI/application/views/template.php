<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <!-- On charge la page css -->
        <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/style.css">
    </head>
    <body>
        <!-- Navigation barre -->
        <header>
            <ul id="accueil">
                <li>
                    <a href="<?php echo base_url().'index.php/home' ?>"> Accueil </a>
                </li>
                <li>
                    <a href="<?php echo base_url().'index.php/home/formulaire' ?>"> S'enregistrer </a>
                </li>
                 <li>
                    <a class = active href="<?php echo base_url().'index.php/home/liste' ?>"> Fiche de contact </a>
                </li>
                <li>
                    <a href=#> Login </a>
                </li>
            </ul>
        </header>
        <!-- Affichage du tableau -->
        <div>
            <table id="tableau" summary="Liste de contact">
                <thead>
                    <tr>
                        <!-- Titre de chaque colonne -->
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Mail</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <!-- Footer du tableau -->
                        <td colspan="4">Liste de contact</td>
                    </tr>
                </tfoot>
                <tbody>
                    <!-- Pour chaque ligne du tableau on récupère les informations de la variable que l'on affiche-->
                    <?php foreach($records as $rec){
                    echo "<tr>
                        <td>".$rec->nom."</td>
                        <td>".$rec->prenom."</td>
                        <td>".$rec->adresse."</td>
                        <td>".$rec->mail."</td>
                    </tr>";
                    }?>
                </tbody>
            </table>
        </div>
    </body>
</html>