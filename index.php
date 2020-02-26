<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/includes/_head.php'; ?>
    <meta description="">
    <title></title>
    <link rel="stylesheet" href="/Cn-app/assets/css/index.css"/>
</head>
    <body>
        <?php session_start(); ?>
        <?php if (isset($_SESSION["account_email"])){ //CONNECTED USER
            include 'partials/_all_series_slider.php' ?>
           <!--HOME CONNECTED-!>
           !-- link = '/Cn-app/pages/video?id='-->
        <?php } else { //UNCONNECTED USER
             include 'partials/_unconnected_user_home.php';
        } ?>

        <!--
            <label>Nom: <input type="text" name="lastname" id="inscription_name"></label>
        <label>Prénom: <input type="text" name="name" id="inscription_lastname"></label>
        <label>Mail: <input type="email" name="mail" id="inscription_mail"></label>
        <label>Mot de passe : <input type="password" name="password" id="inscription_pass"></label>
        <label>Adresse <input type="text" name="adress" id="inscription_adress"></label>
        <label>Ville<input type="text" name="city" id="inscription_city"></label>
        <label>zip_code<input type="number" min="0" max="100000" name="zip_code" id="inscription_zip_code"></label>
        <button id="inscription_button">S'inscrire</button>

    -->
        

        <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/includes/_scripts.php'; ?>
        <script src="/Cn-app/assets/js/home.js"></script>
    </body>
</html> 