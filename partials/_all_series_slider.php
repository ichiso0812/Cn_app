<?php
    $bdd = new PDO('mysql:host=localhost;dbname=cn-watch;charset=utf8', "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    $series = $bdd->query('SELECT id,name, ico_link FROM serie');
?>
<style>
    #all_series_slider img{
        margin-right: 15px;
        max-height: 75px;
    }
</style>
<div id="all_series_slider">
    <?php while ($serie = $series->fetch()){ ?>
        <div class="slide" data-id=<?=$serie['id'];?>>
            <a href=<?='/Cn-app/pages/serie?id=' . $serie['id'];?>>
                <img class="img-fluid" src=<?='/Cn-app' . $serie['ico_link'];?> alt=<?=$serie['name'];?>>
            </a>
        </div>
    <?php } ?>

    $series->closeCursor(); ?>
</div>
