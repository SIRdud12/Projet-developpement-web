<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Votre boutique G R I M G A R</title>
  <link rel="stylesheet" href="siteWeb-cosmetique.css">
  <!-- Ajouter le lien vers la bibliothèque FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="https://kit.fontawesome.com/8ddecbbdca.js" crossorigin="anonymous"></script>
</head>

<style>
   @import url('https://fonts.googleapis.com/css2?family=YourKikoFont&display=swap'); 

    body {
      margin: 0;
      padding: 0;
      font-family: 'YourKikoFont', sans-serif; /* Utiliser la police Kiko */
      background-color: #F2F2F2;
    }
    h1, h2, h3, p {
      color: #333333;
    }
    /* Styles pour les titres importants */
    h1, h2 {
      color: #D81B60; /* Couleur rose vif */
      text-transform: uppercase; /* Mettre en majuscules */
      text-align: center; /* Centrer le texte */
      margin-bottom: 20px; /* Ajouter un espacement en bas */
    }
    
    /* Style pour le titre de la barre de navigation */
    nav h1 {
      font-size: 24px; /* Augmenter la taille du titre */
    }
    
    /* Style pour les titres de section */
    section h2 {
      font-size: 30px; /* Augmenter la taille du titre */
    }
    
    /* Style pour les titres des cartes de produit, saison et catégorie */
    .product-info h3,
    .season-info h3,
    .category-info h3 {
      font-size: 25px; /* Augmenter la taille du titre */
      margin-bottom: 10px; /* Ajouter un espacement en bas */
    }
    
    
    /* Styles pour la barre de navigation */
    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0px 0px;
      background-color: #F2F2F2; /* Couleur de fond de la barre de navigation */
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    .nav-hidden {
      top: -100px;
    }
    
    nav a {
      text-decoration: none;
      color: black;
    }
    
    nav h1 {
      font-size: 20px;
      color:  #333333;
    }
    
    nav .onglets {
      display: flex;
      align-items: center;
    }
    
    nav .onglets p {
      font-size: 17px;
      margin-right: 10px;
      cursor: pointer;
    }
    
    nav .onglets input {
      margin: 8px 20px;
      padding: 15px;
      border-radius: 30px;
      border: none;
      background-color: lightgray;
      outline: none;
    }
       /* Style pour la deuxième barre de navigation */
        .second-navbar {
            background-color: #555;
            overflow: hidden;
            justify-content: space-between;

        }


        .second-navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 5px 12px;
            text-decoration: none;


        }

        .second-navbar a:hover {
            background-color: #ddd;
            color: black;

        }
         /* Style pour le logo 
        .navbar-logo {
            height: 30px;
            margin-top: 6px;
            margin-left: 10px;
            background-color:  #f2f2f2;
        } */
    /* Styles pour la vidéo en arrière-plan */
  
  .image-container {
    position: relative;
    top: -50px;
    width: 100%;
    height: 700px; /* Ajustez la hauteur en fonction de vos images */
    overflow: hidden;
    
  }

  .image-container img {
    width: 100%;
    height: auto;
    transition: transform 0.8s ease;
  }

  .overlay {
    position: absolute;
    top: 20%;
    left: 5%;
    width: 30%;
    height: 50%;
    background: rgba(255, 255, 255, 0.5); /* Fond flou de l'image */
    backdrop-filter: blur(50px); /* Effet de flou */
    overflow: hidden;
    display: flex;
    align-items: center;
    padding: 20px;
    box-sizing: border-box;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); /* Ajout d'une ombre */
     border-top-left-radius: 10px; /* Coins arrondis pour l'overlay */
    border-bottom-left-radius: 10px; /* Coins arrondis pour l'overlay */
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
  }

  .text {
    color: black;
    font-size: 20px;
  }


    
    .header-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: white;
    }
    
    /* Styles pour les sections */
    section {
      padding: 50px 0;
    }
    
  
    
    /* Styles pour les boutons */
    button {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      background-color:#D81B60;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    
    button:hover {
      background-color: #d81b60;
    }
    
    /* Styles pour le pied de page */
    .footer {
      background-color: #111;
      color: #fff;
      padding: 30px 0;
    }
    
    .footer-inner {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }
    
    .footer-section {
      flex: 1 1 200px;
      margin-bottom: 20px;
    }
    
    .footer-heading {
      font-size: 20px;
      margin-bottom: 15px;
    }
    
    .footer-list {
      list-style: none;
      padding: 0;
    }
    
    .footer-list li {
      margin-bottom: 10px;
    }
    
    .footer-list li a {
      color: #fff;
      text-decoration: none;
    }
    
    .social-icons {
      display: flex;
    }
    
    .social-icons li {
      margin-right: 10px;
    }
    
    .social-icons li:last-child {
      margin-right: 0;
    }
    
    .social-icons li a {
      color: #fff;
      font-size: 16px;
    }
    
    .footer-bottom {
      border-top: 1px solid #444;
      padding-top: 20px;
    }
    
    .footer-legal {
      text-align: center;
    }
    
    .legal-links {
      list-style: none;
      padding: 0;
      margin-top: 10px;
    }
    
    .legal-links li {
      display: inline;
      margin-right: 10px;
    }
    
    .legal-links li:last-child {
      margin-right: 0;
    }
    
    .legal-links li a {
      color: #ccc;
      text-decoration: none;
    }
    
    
    /* Media query pour les écrans plus petits */
    @media screen and (max-width: 640px) {
      nav .onglets .link,
      nav h1 {
        display: none;
      }
    }
    
    /* Styles pour la fenêtre modale */
    .modal {
      display: none; /* Masquer la fenêtre modale par défaut */
      position: fixed; /* Position fixe pour couvrir l'écran */
      z-index: 1000; /* Mettre la fenêtre modale au-dessus de tout le reste */
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.6); /* Fond semi-transparent */
      overflow: auto; /* Activer le défilement si nécessaire */
      backdrop-filter: blur(5px);  /* flou de fond */
    }
    
    .modal-content {
      background-color: #ffffff;
      margin: 10% auto; /* Centrer la fenêtre modale */
      margin-left: 50%;
      margin-right: 2%;
      
      padding: 20px;
      border: none;
      border-radius: 10px;
      max-width: 500px; /* Largeur maximale de la fenêtre modale */
    }
    
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }
    
    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
    }
    
    /* Styles pour le formulaire de connexion */
    #login-form {
      display: block;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    #login-form h2 {
      margin-bottom: 20px;
      color: #333;
    }
    
    #login-form label {
      display: block;
      margin-bottom: 10px;
      color: #555;
    }
    
    #login-form input[type="email"],
    #login-form input[type="password"] {
      width: calc(100% - 24px);
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }
    
    #login-form input[type="email"]:focus,
    #login-form input[type="password"]:focus {
      border-color: #D81B60;
    }
    
    #login-form button[type="submit"] {
      width: 100%;
      padding: 12px;
      background-color: #D81B60;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    
    #login-form button[type="submit"]:hover {
      background-color: #C21850;


</style>
<body>
  <!-- Barre de navigation principal -->
  <nav>
    <h1>DERMAFLORE</h1>
    <div class="onglets">
      <p class="link"><a href="Marques.html">Marques</a>
      <p class="link"><a href="Sérums.html">Sérums</a></p>
      <p class="link"><a href="Crème.html">Crèmes</a></p>
      <p class="link"><a href="Nettoyants.html">Nettoyants</a></p>
      <p class="link"><a href="Conseils.html">Conseils</a></p>

      <form>
        <input type="search" placeholder="Rechercher">
      </form>
      <p><i class="far fa-heart"></i></p>
      <p><i class="fas fa-shopping-cart"></i></p>
      <p id="open-modal"><i class="fas fa-user"></i></p>
    </div>
  </nav>
  <!-- Fin de la barre de navigation  principal-->
  <!-- Deuxième barre de navigation -->
<div class="second-navbar">
    <a href="second-link">MAGAZINS</a>
    <a href="third-link">AIDE</a>
    <a href="">FR | FR</a>
    
</div>
  
  <!-- Fenêtre modale -->
  <div id="modal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <!--formulaire de connexion ou d'inscription -->
      <div id="login-form">
        <h2>Se connecter</h2>
        <form>
          <label for="email">Adresse e-mail:</label><br>
           <input type="email" id="email" name="email"><br>
        <label for="password">Mot de passe:</label><br>
        <input type="password" id="password" name="password"><br>
        <button type="submit">Se connecter</button>
        </form>
      </div>

      <!-- Section pour s'inscrire -->
    <div id="signup-section">
      <h2>Vous n'avez pas de compte?</h2>
      <p>Inscrivez-vous dès maintenant!</p>
      <button id="signup-button">S'inscrire</button>
    </div>

    </div>
  </div>
  <!-- Fin de la fenêtre modale -->
  
  <!-- Header avec la vidéo en arrière-plan -->
  <section class="slideshow-container">
  <!-- Première image -->
  <div class="mySlides fade">
    <div class="image-container">
      <img src="neauthy-skincare-8ZKwW-2SR28-unsplash.jpg" alt="Image 1">
      <div class="overlay">
        <div class="text">Description de l'image 1</div>
      </div>
    </div>
  </div>

  <!-- Deuxième image -->
  <div class="mySlides fade">
    <div class="image-container">
      <img src="photo-1515377905703-c4788e51af15.webp" alt="Image 2">
      <div class="overlay">
        <div class="text">Description de l'image 2</div>
      </div>
    </div>
  </div>

  <!-- Troisième image -->
  <div class="mySlides fade">
    <div class="image-container">
      <img src="michela-ampolo-7tDGb3HrITg-unsplash.jpg" alt="Image 3">
      <div class="overlay">
        <div class="text">Description de l'image 3</div>
      </div>
    </div>
  </div>
</section>
<!-- Script JavaScript pour le défilement automatique -->
<script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 3000); // Change image every 3 seconds
  }
</script>

    <!-- Contenu du header -->
    <div class="header-content">
      
  

     
       

  <!-- Pied de page -->
<footer class="footer">
  <div class="footer-inner">
    <div class="footer-section">
      <h4 class="footer-heading">Service client</h4>
      <ul class="footer-list">
        <li><a href="#">Aide</a></li>
        <li><a href="#">Suivi de commande</a></li>
        <li><a href="#">Retours</a></li>
        <li><a href="#">FAQ</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h4 class="footer-heading">À propos de Dermaflore</h4>
      <ul class="footer-list">
        <li><a href="#">Nous contacter</a></li>
        <li><a href="#">Actualités</a></li>
        <li><a href="#">Investisseurs</a></li>
        <li><a href="#">Carrières</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h4 class="footer-heading">Plus de Dermaflore</h4>
      <ul class="footer-list">
        <li><a href="#">Cartes cadeaux</a></li>
        <li><a href="#">Rechercher un magasin</a></li>
        <li><a href="#">Bulletin</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h4 class="footer-heading">Nous suivre</h4>
      <ul class="footer-list social-icons">
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="footer-legal">
      <p>&copy; 2024 G R I M G A R. Tous droits réservés.</p>
      <ul class="legal-links">
        <li><a href="#">Conditions d'utilisation</a></li>
        <li><a href="#">Politique de confidentialité</a></li>
        <li><a href="#">Politique relative aux cookies</a></li>
        <li><a href="#">Droit d'auteur</a></li>
      </ul>
    </div>
  </div>
</footer>




  <!-- Fin du pied de page -->
<script>
  let lastScrollTop = 0;
  const navbar = document.querySelector('nav');

  window.addEventListener('scroll', () => {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
      // Faites défiler vers le bas
      navbar.classList.add('nav-hidden');
    } else {
      // Faites défiler vers le haut
      navbar.classList.remove('nav-hidden');
    }

    lastScrollTop = scrollTop;
  });

  // Fonction pour ouvrir la fenêtre modale
  document.getElementById('open-modal').onclick = function() {
    document.getElementById('modal').style.display = "block";
  }

  // Fonction pour fermer la fenêtre modale en cliquant sur le bouton "X"
  document.getElementsByClassName('close')[0].onclick = function() {
    document.getElementById('modal').style.display = "none";
  }

  // Fonction pour fermer la fenêtre modale en cliquant en dehors de celle-ci
  window.onclick = function(event) {
    if (event.target == document.getElementById('modal')) {
      document.getElementById('modal').style.display = "none";
    }
  }
</script>
</body>
</html>