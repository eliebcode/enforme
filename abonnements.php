<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/ico" href="favicon.ico">
        <title>Découvrez les formules d'abonnements En Forme !</title>
        <meta name="description" content="Découvrez nos formules d'abonnements et faites votre choix parmi celle qui vous convient le mieux ! Sans Limite®, Sans Souci® ou Sans Contrainte® ? À vous de décider !">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/abo.css" rel="stylesheet" type="text/css"/>
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
                     <li><a href="index.php" title="Présentation d'En Forme">Découvrir</a></li>
                    <li><a href="coachs.php" title="Profils de nos coachs">Les coachs</a></li>
                    <li><a href="cours.php" title="Les différents types de cours">Les cours</a></li>
                    <li><a href="popup.php" title="Nos formules d'abonnements" class="active">Abonnements</a></li>
                    <li><a href="contact.php" title="Prendre contact avec nous">Contact</a></li>
                    <li><a href="franchise.php" title="Contact pour franchise">Franchise</a></li>
                 </ul>
            </nav>
        </header>
        <main>
            <div class="ariane">
                <a href="index.php" title="Redirection vers page d'accueil">Accueil</a> / <a href="popup.php" title="Redirection vers page d'abonnements">Abonnements</a>
            </div>
            <!-- Section Abonnements -->
            <div class="h1">
                <h1>Choisissez <span>votre abonnement</span> !</h1>
            </div>
            <div class="pricing-table">
                <div class="pricing-card">
                    <h2 class="pricing-card-header">Sans Limite®</h2>
                    <div class="price">24,90€/mois</div>
                    <ul>
                        <li><strong>12 mois</strong> minimum</li>
                        <li>Accès <strong>illimité</strong></li>
                        <li>Coaching <strong>à la demande</strong></li>
                    </ul>
                    <div class="popup" id="popup-1">
                        <div class="overlay"></div>
                        <div class="content">
                            <div class="close-btn" onclick="togglePopup()">&times;</div>
                            <h2>Formule Sans Limite®</h2>
                            <p>Formulaire de soucription à l'abonnement</p>
                            <form method="post" action="form.php">
                            <input type="text" name="nom" placeholder="Nom">
                            <input type="text" name="prenom" placeholder="Prénom">
                            <input type="email" name="mail" placeholder="E-mail">
                            <input type="tel" name="tel" placeholder="N° tel">
                            <input type="submit" value="Valider">
                            </form>
                        </div>
                    </div>
                    <button onclick="togglePopup()" class="btn-blue">Je souscris</button>
                </div>
                
                <div class="pricing-card">
                    <h2 class="pricing-card-header">Sans Souci®</h2>
                    <div class="price">29,90€/mois</div>
                    <ul>
                        <li><strong>12 mois</strong> minimum</li>
                        <li>Accès <strong>illimité</strong></li>
                        <li><strong>Pause</strong> vacances*</li>
                        <li>1er mois <strong>offert</strong></li>
                        <li><strong>Coaching gratuit</strong> les week-ends</li>
                    </ul>
                    <div class="popup" id="popup-1">
                        <div class="overlay"></div>
                        <div class="content">
                            <div class="close-btn" onclick="togglePopup()">&times;</div>
                            <h2>Formule Sans Souci®</h2>
                            <p>Formulaire de soucription à l'abonnement</p>
                        </div>
                    </div>
                    <button onclick="togglePopup()" class="btn-blue up">Je souscris</button>
                </div>
                
                <div class="pricing-card">
                    <h2 class="pricing-card-header">Sans Contrainte®</h2>
                    <div class="price">44,90€/mois</div>
                    <ul>
                        <li><strong>Sans engagement</strong></li>
                        <li>Accès <strong>illimité</strong></li>
                        <li><strong>Pause</strong> vacances*</li>
                        <li>1er mois <strong>offert</strong></li>
                        <li><strong>Coaching gratuit</strong> les week-ends</li>
                    </ul>
                    <div class="popup" id="popup-1">
                        <div class="overlay"></div>
                        <div class="content">
                            <div class="close-btn" onclick="togglePopup()">&times;</div>
                            <h2>Formule Sans Contrainte®</h2>
                            <p>Formulaire de soucription à l'abonnement</p>
                        </div>
                    </div>
                    <button onclick="togglePopup()" class="btn-blue up">Je souscris</button>
            </div>
            <!-- Section Parrainage -->
            <div class="parrainage" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="illustration-parrainage">
                    <img src="img/img5.png" alt="Illustration du programme de parrainage">
                </div>
                <div class="content-parrainage">
                    <p><span>Parrainage</span></p>
                    <h2 class="title-parrainage">Notre programme de parrainage permet aux membres et aux filleuls de bénéficier d'<span>un mois offert</span>
                        chez En Forme, mais aussi de <span>gagner des crédits</span> sous forme de cours.</h1>
                    <h3>Profitez dès maintenant de nos formules Sans Souci® et Sans Contrainte® et recevez votre code de parrainage en quelques clics.</h3>
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
        <script src="main.js" type="text/javascript"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>AOS.init();</script>
    </body>
</html>