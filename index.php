<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/ico" href="favicon.ico">
        <title>En Forme ! Salle de sport à Saint-Étienne - ouvert 24 heures sur 24, 7 jours sur 7</title>
        <meta name="description" content="Chez En Forme ! Bénéficiez d'une salle ouverte 24/7 équipée pour le fitness et la musculation. Profitez d'un accompagnement mensuel par des coachs diplômés. Abonnements compétitifs.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/menu.css" rel="stylesheet" type="text/css"/>
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
                <a href="index.php" title="Page d'accueil" class=""><img src="img/logo.png" alt="Logo En Forme !"class="logo"></a>
                 <ul>
                     <li><a href="index.php" title="Présentation d'En Forme" class="active">Découvrir</a></li>
                    <li><a href="coachs.php" title="Profils de nos coachs">Les coachs</a></li>
                    <li><a href="cours.php" title="Les différents types de cours">Les cours</a></li>
                    <li><a href="abonnements.php" title="Nos formules d'abonnements">Abonnements</a></li>
                    <li><a href="contact.php" title="Prendre contact avec nous">Contact</a></li>
                    <li><a href="franchise.php" title="Contact pour franchise">Franchise</a></li>
                 </ul>
            </nav>
        </header>
        <main>
            <!-- Section Présentation -->
            <div class="presentation" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="illustration-presentation">
                    <img src="img/img1.png" alt="Illustration de sportifs">
                </div>
                <div class="content-presentation">
                    <p>En forme !<br><span>Tous les jours, tous les cours !</span></p>
                    <h1 class="title-presentation">Bénéficiez du <span>coaching personnalisé</span> de professionnels diplômés,<br> 
                        de <span>cours en ligne</span> avec vos sportifs préférés et <br>d'une 
                        salle accessible <span>24/24 et 7/7</span> !</h1>
                    <a href="abonnements.php" title="Nos formules d'abonnements">Je m'abonne !</a>
                </div>
            </div>
            
            <!-- Section Coachs -->
            <div class="coachs" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="content-coachs">
                    <p>Votre programme<br><span>sur mesure </span>!</p>
                    <h2>Profitez des <span>conseils</span> d'un coach, élaborez avec lui <br>votre <span>programme</span>,
                        faites un <span>bilan</span> hebdomadaire <br>et progressez jusqu'à votre <span>objectif</span> !</h2>
                    <a href="coachs.php" title="Voir nos coachs sportif">J'élabore mon programme<i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="illustration-coachs">
                    <img src="img/img2.png" alt="Illustration de notre programme personnalisé">
                </div>
            </div>
            
            <!-- Section Cours -->
            <div class="cours" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="illustration-cours">
                    <img src="img/img3.png" alt="Illustration de nos différents cours">
                </div>
                <div class="content-cours">
                    <p>Des cours selon<br><span>votre envie</span> !</p>
                    <h2>Initiez-vous à de <span>nombreuses disciplines</span> de fitness et musculation !
                        Notre salle est <span>entièrement équipée</span> pour le cardio, les pilates ou encore la zumba !</h2>
                    <a href="cours.php" title="Les différents types de cours">Voir les cours<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            
            <!-- Section Abonnements -->
            <div class="abo-global">
                <h2 class="title-abonnements">Choisissez <span class="abonnements-span">votre abonnement</span> !</h2>
                <div class="abonnements">
                    <div class="abo-container">
                        <div class="card">
                            <h3>Formule<br>Sans Limite®</h3>
                            <p class="price"><span>24,90€/mois</span></p>
                            <p><strong>12 mois</strong> minimum</p>
                            <p>Accès <strong>illimité</strong></p>
                            <p>Coaching <strong>à la demande</strong></p>
                        </div>
                        <a href="abonnements.php" title="Formule Sans Limite" class="btn-card">Choisir</a>
                    </div>
                    <div class="abo-container">
                        <div class="card">
                            <h3>Formule<br>Sans Souci®</h3>
                            <p class="price"><span>29,90€/mois</span></p>
                            <p><strong>12 mois</strong> minimum</p>
                            <p>Accès <strong>illimité</strong></p>
                            <p><strong>Pause</strong> vacances*</p>
                            <p><strong>1er mois offert</strong></p>
                            <p><strong>Coaching gratuit</strong> les week-ends</p>
                        </div>
                        <a href="abonnements.php"  title="Formule Sans Souci" class="btn-card">Choisir</a>
                    </div>
                    <div class="abo-container">
                        <div class="card">
                            <h3>Formule<br>Sans Contrainte®</h3>
                            <p class="price"><span>44,90€/mois</span></p>
                            <p><strong>Sans engagement</strong></p>
                            <p>Accès <strong>illimité</strong></p>
                            <p><strong>Pause</strong> vacances*</p>
                            <p><strong>1er mois offert</strong></p>
                            <p><strong>Coaching gratuit</strong> les week-ends</p>
                        </div>
                        <a href="abonnements.php"  title="Formule Sans Contrainte" class="btn-card">Choisir</a>
                    </div>
                </div>
            </div>
            
            <!-- Section App -->
            <div class="app" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="content-app">
                    <p>Une <span>application</span> pour vous<br> entraîner <span>partout </span>!</p>
                    <h2>Avec <span>MyForm®</span>, profitez d'une app interactive pour suivre vos cours et les conseils
                        de sportifs celèbres même sur votre <span>téléphone</span> !<br>
                        Faire votre sport n'a jamais été aussi <span>simple</span> !</h2>
                    <a href="https://apps.apple.com/fr/genre/ios/id36" title="Page de téléchargement Apple"><img src="img/dispo_apple.png" class="apple" alt="Téléchargement sur l'App Store"></a>
                    <a href="https://play.google.com/store?hl=fr" title="Page de téléchargement Android"><img src="img/dispo_android.png" class="android" alt="Téléchargement sur Google Play"></a>
                </div>
                <div class="illustration-app">
                    <img src="img/img4.png" alt="Illustration de notre application dédiée">
                </div>
            </div>
            
            <!-- Scroll btn -->
            <a href="index.php" class="gotopbtn"><i class="fas fa-arrow-up"></i></a>
            
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
                <a href="#" title="Mentions légales">Mentions Légales</a><br>
                <a href="#" title="Crédits">Crédits</a>
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

