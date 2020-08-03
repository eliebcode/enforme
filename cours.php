<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/ico" href="favicon.ico">
        <title>Découvrez nos cours et les disciplines accessibles à tous !</title>
        <meta name="description" content="Nos cours et équipements vous aideront à atteindre vos objectifs. En Forme ! propose un programme complet avec musculation, fitness, pilates ou encore zumba !">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/cours.css" rel="stylesheet" type="text/css"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Permanent+Marker&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
        <script src="https://kit.fontawesome.com/43869c9bca.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="promo">
                <p>Jusqu'au 15 juin, venez vous entraîner gratuitement en juillet et août pour tout nouvel abonnement <strong><a href="abonnements.php" title="Formule Sans Limite">Sans Limite®</a></strong> et <strong><a href="abonnements.php" title="Formule Sans Souci">Sans Souci®</a></strong> ! </p>
            </div>
            <nav>
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn"><i class="fas fa-bars"></i></label>
                <a href="index.php" title="Page d'accueil"><img src="img/logo.png" alt="Logo En Forme !"class="logo"></a>
                 <ul>
                     <li><a href="index.php" title="Présentation d'en Forme">Découvrir</a></li>
                    <li><a href="coachs.php" title="Profils de nos coachs">Les coachs</a></li>
                    <li><a href="cours.php" title="Les différents types de cours" class="active">Les cours</a></li>
                    <li><a href="abonnements.php" title="Nos formules d'abonnements">Abonnements</a></li>
                    <li><a href="contact.php" title="Prendre contact avec nous">Contact</a></li>
                    <li><a href="franchise.php" title="Contact pour franchise">Franchise</a></li>
                 </ul>
            </nav>
        </header>
        <main>
            <div class="ariane">
                <a href="index.php" title="Redirection vers la page d'accueil">Accueil</a> / <a href="cours.php" title="Redirection vers la page des cours">Les cours</a>
            </div>
            <!-- Section Cours -->
            <div class="titre">
                <h1 class="title">Découvrez nos cours !</h1>
            </div>
                <div class="container">
                    <div class="card">
                        <div class="face face1">
                            <div class="content">
                                <h2>Équipement</h2>
                                <p>Chez En Forme ! Vous trouverez les équipements dernier cri de Matrix ou Technogym.<br><br>
                                Des appareils de fitness professionnels de qualité qui vous permettront de profiter pleinement de vos entraînements.</p>
                                <a href="musculation.php" class="btn" title="Équipement et cours pour musculation">En savoir plus</a>
                            </div>
                        </div>
                        <div class="face face2">
                            <h2>Musculation</h2>
                        </div>
                    </div>
                    <div class="card">
                        <div class="face face1">
                            <div class="content">
                                <h2>Équipement</h2>
                                <p>Chez En Forme ! Vous trouverez les équipements dernier cri de Matrix ou Technogym.<br><br>
                                Des appareils de fitness professionnels de qualité qui vous permettront de profiter pleinement de vos entraînements.</p>
                                <a href="fitness.php" class="btn" title="Équipement et cours pour fitness">En savoir plus</a>
                            </div>
                        </div>
                        <div class="face face2">
                            <h2>Fitness</h2>
                        </div>
                    </div>
                    <div class="card">
                        <div class="face face1">
                            <div class="content">
                                <h2>Cours</h2>
                                <p>Nos cours collectifs vous permettent d'avoir des instructeurs certifiés.<br><br> Ils vous motivent à donner le meilleur de vous-même et vous conseillent pour que vous effectuiez correctement votre entraînement.</p>
                                <a href="collectif.php" class="btn" title="Équipement et cours pour collectif">En savoir plus</a>
                            </div>
                        </div>
                        <div class="face face2">
                            <h2>Collectif</h2>
                        </div>
                    </div>
                </div>
            
            
            <!-- Bandeau Réassurance -->
            <div class="bandeau">
                <div class="picto p1">
                    <img src="img/24.jpg" alt="Accessibilité 24/24 7/7">
                    <h3><span>Accessibilité totale</span></h3>
                    <p>24/24 et 7/7</p>
                </div>
                <div class="picto p2">
                    <img src="img/coach.jpg" alt="Coach personnel">
                    <h3><span>Coach personnel</span></h3>
                    <p>Conseils, suivi, bilan</p>
                </div>
                <div class="picto p3">
                    <img src="img/sports.jpg" alt="Nombreuses disciplines">
                    <h3><span>Nombreuses disciplines</span></h3>
                    <p>Muscu, cardio, pilates...</p>
                </div>
                <div class="picto p4">
                    <img src="img/equipement.jpg" alt="Entièrement équipée">
                    <h3><span>Entièrement equipée</span></h3>
                    <p>Machines, douches, casiers...</p>
                </div>
            </div>
        </main>
        <footer>
            <div class="left">
                <img src="img/logo.png" alt="Logo En Forme !">
                <p>32 rue de la Libération</p>
                <p>42000 Saint-Étienne</p>
                <a href="tel:+33624242400">Tel : 06 24 24 24 00</a><br>
                <a href="mailto:enforme@contact.fr">enforme@contact.fr</a>
            </div>
            <div class="center">
                <p class="subtitle">Liens utiles</p>
                <a href="mentions.php" title="Mentions légales">Mentions Légales</a><br>
                <a href="credits.php" title="Crédits">Crédits</a>
                <p>Réalisé par E.Bugaj</p>
                <div class="social-media">
                    <a href="https://www.facebook.com" title="Page Facebook En Forme !"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://www.twitter.com" title="Page Twitter En Forme !"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com" title="Page Instagram En Forme !"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="right">
                <h3>Vous souhaitez devenir franchisé ?</h3>
                <p>Retrouvez toutes les informations nécéssaires <br>et le formulaire de contact sur :<br><a href="franchise.php">enforme/franchise.fr</a></p>
            </div>
        </footer>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>AOS.init();</script>
    </body>
</html>
