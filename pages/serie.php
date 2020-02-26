<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/includes/_head.php'; ?>
    <meta description="">
    <title></title>
    <style>
        .serie_ban > img {
            max-height: 32%;
        }
        .episode {
            width: 100%;
        }
    </style>
    <!--<link rel="stylesheet" href="/Cn-app/assets/css/serie.css"/>-->
</head>
    <body>
        <?php 
             $bdd = new PDO('mysql:host=localhost;dbname=cn-watch;charset=utf8', "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
             $request_serie = $bdd->query('SELECT * FROM serie WHERE id=' . $_GET['id']);
             $serie = $request_serie->fetch();
             
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 serie_ban d-flex justify-content-center">
                    <img src=<?='/Cn-app/assets/imgs/series_background/' . $serie['name'] . '.png';?> alt="banniere serie" class="">
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <h1><?=$serie['name'];?></h1>
                </div>
                <div class="col-4">
                    SELECT
                </div>
            </div>
            <div class="row">
                <?php $episodes = $bdd->query('SELECT * FROM episode WHERE serie_id=' . $_GET['id']);?>
                <?php while ($episode =  $episodes->fetch()){?>
                    <div class="col-sm-6 col-md-4">
                        <video controls class="episode">
                            <source src=<?='/Cn-app' . $episode['link'];?> type="video/mp4">
                            </source>
                        </video>
                    </div>
                <?php } ?>
            </div>
        </div>


        <?php $request_serie->closeCursor(); 
            $episodes -> closeCursor();
        ?>
        <!--<script src="/Cn-app/assets/js/home.js"></script>-->
    </body>
</html> 

