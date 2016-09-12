<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/formulaire.css">
    </head>
    <body>

        <header>
            <ul id="accueil">
                <li>
                    <a href="<?php echo base_url().'index.php/home' ?>"> Accueil </a>
                </li>
                <li>
                    <a class = active href="<?php echo base_url().'index.php/home/formulaire' ?>"> S'enregistrer </a>
                </li>
                <li>
                    <a href="<?php echo base_url().'index.php/home/liste' ?>"> Fiche de contact </a>
                </li>
                <li>
                    <a href=#> Login </a>
                </li>
            </ul>
        </header>

        <div id = "img">

            <?php echo validation_errors(); ?>

            <?php echo form_open('index.php/home/formulaire'); ?>
            <fieldset>
              <legend> S'enregistrer : </legend>
              <h5>Nom</h5>
              <input type="text" name="nom" value="" size="50" />
              <?php echo form_error('nom','<span class="error">','</span>');?>

              <h5>Prénom</h5>
              <input type="text" name="prenom" value="" size="50" />
              <?php echo form_error('prenom','<span class="error">','</span>');?>

              <h5>Adresse</h5>
              <input type="text" name="adresse" value="" size="50" />
              <?php echo form_error('adresse','<span class="error">','</span>');?>

              <h5>Adresse mail</h5>
              <input type="text" name="mail" value="" size="50" />
              <?php echo form_error('mail','<span class="error">','</span>');?>
            </fieldset>
            <div><input type="submit" value="Envoyer"></div>
        </div>

    </body>
</html>
