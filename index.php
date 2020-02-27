<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cn-app/includes/_head.php'; ?>
    <meta description="">
    <title></title>
    <link rel="stylesheet" href="/Cn-app/assets/css/accueil.css">
</head>
    <body>
        <?php session_start(); ?>
        <?php if (isset($_SESSION["account_email"])){ //CONNECTED USER

            include 'partials/_all_series_slider.php' ?>
           <!--HOME CONNECTED-!>
           !-- link = '/Cn-app/pages/video?id='-->

        <div class="container-fluid video_jeux">           
            <div class="col-6 video">
                <a  class="lien_video" href="#">
                    VIDÉOS
                </a>
            </div>   
            <div class="col-6 jeux">
                <a  class="lien_jeux" href="#">
                    JEUX
                </a>
            </div>
        </div>
        

        <div class="container-fluid video_encours">
            <div class=" row">
                <div class="col-1">
                </div>
                <div class="col-10">
                    <div>
                        <h2>Continuer à regarder</h2>
                    </div>
                    <div class="video-lecture">
                      <a href="#"> <img class="img-fluid" src="assets/imgs/screen_encours/lecture_encours.png" alt=""></a> 
                        <!--<div class="texte_video_encours"> 
                            <p>TEEN TITANS GO!</p>
                            <svg class="bouton_play" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path style="fill:#fff" d="M3 22v-20l18 10-18 10z"/></svg>
                            <p>Saison 1 épisode 2</p>
                            <div class="titre-temps">
                                <label for="file">Le monstre du lac</label>
                                <progress id="file" max="100" value="70"> 70% </progress>
                            </div>
                        </div>
                    </div>-->
                </div>
                <div class="col-1">
                </div>
            </div>
        </div>


        <div class="container-fluid proposition">
            <div class=row>
                <div class="col-1"></div>
                <div class="col-10 titre_proposition">
                    <h2>Parce que tu as regardé</br> <span class="titrerose">Adventure Time</span></h2>
                </div>
                <div class="col-1"></div>
            </div>

            <div class="favoris_slider">
                <div class="slide">
                    <div class="img_slide">
                        <img class="img-fluid" src="assets/imgs/screen_episodes/adventure-time/s1_e1.png" alt="">
                    </div>
                    <div class="bloc_texte_slide">
                        <h3 class="titre_video_proposition">Francky le monstre</h3>
                        <div class="infos_episode">
                            <p>Saison 1 Ep 1</p>
                            <p>24min</p>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="img_slide">
                        <img class="img-fluid" src="assets/imgs/screen_episodes/adventure-time/s1_e2.png" alt="">
                    </div>
                    <div class="bloc_texte_slide">
                        <h3 class="titre_video_proposition">Le monstre du lac</h3>
                        <div class="infos_episode">
                            <p>Saison 1 Ep 2</p>
                            <p>24min</p>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="img_slide">
                        <img class="img-fluid" src="assets/imgs/screen_episodes/adventure-time/s1_e3.png" alt="">
                    </div>
                    <div class="bloc_texte_slide">
                        <h3 class="titre_video_proposition">Voyage interstellaire</h3>
                        <div class="infos_episode">
                            <p>Saison 1 Ep 3</p>
                            <p>24min</p>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="img_slide">
                        <img class="img-fluid" src="assets/imgs/screen_episodes/adventure-time/s1_e4.png" alt="">
                    </div>
                    <div class="bloc_texte_slide">
                        <h3 class="titre_video_proposition">Francky le monstre</h3>
                        <div class="infos_episode">
                            <p>Saison 2 Ep 24</p>
                            <p>24min</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            
        <div class="container-fluid favoris">
            <div class=row>
                <div class="col-1"></div>
                <div class="col-10 titre_favoris">
                    <h2>Tes Favoris</h2>
                </div>
                <div class="col-1"></div>
            </div>

            <div class="favoris_slider">
                <div class="slide">
                    <div class="img_slide">
                        <img class="img-fluid" src="assets/imgs/screen_episodes/adventure-time/s1_e1.png" alt="">
                    </div>
                    <div class="bloc_texte_slide_favoris">
                        <h3 class="titre_video_proposition">Francky le monstre</h3>
                        <div class="infos_episode">
                            <p>Saison 1 Ep 1</p>
                            <p>24min</p>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="img_slide">
                        <img class="img-fluid" src="assets/imgs/screen_episodes/adventure-time/s1_e2.png" alt="">
                    </div>
                    <div class="bloc_texte_slide_favoris">
                        <h3 class="titre_video_proposition">Le monstre du lac</h3>
                        <div class="infos_episode">
                            <p>Saison 1 Ep 2</p>
                            <p>24min</p>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="img_slide">
                        <img class="img-fluid" src="assets/imgs/screen_episodes/adventure-time/s1_e3.png" alt="">
                    </div>
                    <div class="bloc_texte_slide_favoris">
                        <h3 class="titre_video_proposition">Voyage interstellaire</h3>
                        <div class="infos_episode">
                            <p>Saison 1 Ep 3</p>
                            <p>24min</p>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="img_slide">
                        <img class="img-fluid" src="assets/imgs/screen_episodes/adventure-time/s1_e4.png" alt="">
                    </div>
                    <div class="bloc_texte_slide_favoris">
                        <h3 class="titre_video_proposition">Francky le monstre</h3>
                        <div class="infos_episode">
                            <p>Saison 2 Ep 24</p>
                            <p>24min</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                            <div class="btn_favoris">
                                <a href="#">Voir tout tes<span class="titrejaune">FAVORIS</span><svg class="fleche_blanche" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"/></svg></a>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
        </div>


        <div class="container-fluid teentitans">
            <div class=row>
                <div class="col-1"></div>
                <div class="col-10 titre_proposition">
                    <h2 class="titreblanc">TEEN TITANS<span class="titrejaune"> GO!</span></h2>
                </div>
                <div class="col-1"></div>
            </div>

            <div class="favoris_slider">
                <div class="slide">
                    <div class="img_slide">
                        <img class="img-fluid" src="assets/imgs/screen_episodes/adventure-time/s1_e1.png" alt="">
                    </div>
                    <div class="bloc_texte_slide">
                        <h3 class="titre_video_proposition">Francky le monstre</h3>
                        <div class="infos_episode">
                            <p>Saison 1 Ep 1</p>
                            <p>24min</p>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="img_slide">
                        <img class="img-fluid" src="assets/imgs/screen_episodes/adventure-time/s1_e2.png" alt="">
                    </div>
                    <div class="bloc_texte_slide">
                        <h3 class="titre_video_proposition">Le monstre du lac</h3>
                        <div class="infos_episode">
                            <p>Saison 1 Ep 2</p>
                            <p>24min</p>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="img_slide">
                        <img class="img-fluid" src="assets/imgs/screen_episodes/adventure-time/s1_e3.png" alt="">
                    </div>
                    <div class="bloc_texte_slide">
                        <h3 class="titre_video_proposition">Voyage interstellaire</h3>
                        <div class="infos_episode">
                            <p>Saison 1 Ep 3</p>
                            <p>24min</p>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="img_slide">
                        <img class="img-fluid" src="assets/imgs/screen_episodes/adventure-time/s1_e4.png" alt="">
                    </div>
                    <div class="bloc_texte_slide">
                        <h3 class="titre_video_proposition">Francky le monstre</h3>
                        <div class="infos_episode">
                            <p>Saison 2 Ep 24</p>
                            <p>24min</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } else { //UNCONNECTED USER 
        ?>
            <script>
                location.href = "/Cn-app/pages/choixprofile"
            </script> 
        <?php } ?>

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