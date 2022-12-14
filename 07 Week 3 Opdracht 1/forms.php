<?php
/*
 * 1. Header en Footer komen uit de gezamenlijke header en footer bestanden.
 * 2. Stijl (css) moet correct werken.
 * 3. Houdt de standaard directory structuur aan, private en public.
 * 4. Maak het formulier af zoals gevraagd.
 * 5. Maak het script af zodat het fomulier wordt verwerkt.
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo 'Voorbeeld formulier'; ?>></title>
</head>


<form action="" method="post">

    <?php
    /*
     * Invoer velden:
     * 1. Naam
     * 2. E-mail
     * 3. Opmerking
     */

    /*
     * Resultaat:
     * 1. Controle op script invoer
     * 2. Controle op geldig e-mail adres
     * 3. Opmerkingen en naam veld controle niet toegestane reacties
     */


     FILTER_VALIDATE_DOMAIN($_POST['domain']);
     FILTER_SANITIZE_EMAIL($_POST('email'));

    ?>
</form>

<body>

</body>
</html>