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
        <div>
            <table id="tableau" summary="Liste de contact">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Mail</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td colspan="4">Liste de contact</td>
                    </tr>
                </tfoot>
                <tbody>
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