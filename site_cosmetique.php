<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Votre boutique G R I M G A R</title>
  <link rel="stylesheet" href="siteWeb-cosmetique.css">
  <!-- Ajouter le lien vers la bibliothèque FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
  <!-- Barre de navigation -->
  <nav>
    <h1>DERMAFLORE</h1>
    <div class="onglets">
      <p class="link"><a href="Sérums.html">Sérum</a></p>
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
  <!-- Fin de la barre de navigation -->
  
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
  <header class="video-container">
    <video autoplay loop muted class="background-video">
      <source src="WhatsApp Video 2024-03-29 at 15.53.20.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <!-- Contenu du header -->
    <div class="header-content">
      
    </div>
    <!-- Fin du contenu du header -->
  </header>
  <!-- Fin du header -->
  
  <!-- Section principale -->
  <section class="main">
    <!-- Section Meilleures ventes -->
    <section class="best-sellers">
      <h2>Meilleures ventes</h2>
      <div class="best-sellers-grid">
        <!-- Exemple de carte de produit -->
        <div class="product-card">
          <img src="Cerav.JPG" alt="Produit 1">
          <div class="product-info">
            <h3>Nom du produit 1</h3>
            <p>Description du produit 1</p>
            <p>Prix: 25€</p>
            <button>Ajouter au panier</button>
            <button>Ajouter aux favoris</button>
          </div>
        </div>
        
        <!-- Répéter ce bloc pour chaque produit -->
        <!-- Exemple d'autres cartes de produit -->
        <div class="product-card">
          <img src="y1.jpg" alt="Produit 2">
          <div class="product-info">
            <h3>Nom du produit 2</h3>
            <p>Description du produit 2</p>
            <p>Prix: 30€</p>
            <button>Ajouter au panier</button>
            <button>Ajouter aux favoris</button>
          </div>
        </div>
        <div class="product-card">
          <img src="B2.jpg" alt="Produit 3">
          <div class="product-info">
            <h3>Nom du produit 3</h3>
            <p>Description du produit 3</p>
            <p>Prix: 35€</p>
            <button>Ajouter au panier</button>
            <button>Ajouter aux favoris</button>
          </div>
        </div>
        <div class="product-card">
          <img src="GR1.JPG" alt="Produit 4">
          <div class="product-info">
            <h3>Nom du produit 4</h3>
            <p>Description du produit 4</p>
            <p>Prix: 40€</p>
            <button>Ajouter au panier</button>
            <button>Ajouter aux favoris</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin de la section Meilleures ventes -->
    
    <!-- Section Saison -->
    <section class="Nouveautés">
      <h2>Nouveautés</h2>
      <div class="seasons-grid">
        <!-- Exemple de carte de saison -->
        <div class="season-card">
          <img src="ro1.png" alt="Printemps">
          <h3>Nom du produit 4</h3>
          <p>Description du produit 3</p>
            <p>Prix: 35€</p>
            <button>Ajouter au panier</button>
            <button>Ajouter aux favoris</button>

          <div class="season-info">
            <h3></h3>
          </div>
        </div>
        <!-- Répéter ce bloc pour chaque saison -->
        <!-- Exemple d'autres cartes de saison -->
        <div class="season-card">
          <img src="y2.jpg" alt="Été">
          <div class="season-info">
            <h3>Nom du produit 4</h3>
          <p>Description du produit 3</p>
            <p>Prix: 35€</p>
            <button>Ajouter au panier</button>
            <button>Ajouter aux favoris</button>

            <h3></h3>
          </div>
        </div>
        <div class="season-card">
          <img src="Cor2.JPG" alt="Automne">
          <div class="season-info">
            <h3>Nom du produit 4</h3>
          <p>Description du produit 3</p>
            <p>Prix: 35€</p>
            <button>Ajouter au panier</button>
            <button>Ajouter aux favoris</button>

            <h3></h3>
          </div>
        </div>
        <div class="season-card">
          <img src="Serum2.JPG" alt="Hiver">
          <div class="season-info">
            <h3>Nom du produit 4</h3>
          <p>Description du produit 3</p>
            <p>Prix: 35€</p>
            <button>Ajouter au panier</button>
            <button>Ajouter aux favoris</button>

            <h3></h3>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin de la section Saison -->
    
    <!-- Section Top catégorie -->
    <section class="top-categories">
      <h2>Top catégories</h2>
      <div class="top-categories-grid">
        <!-- Exemple de carte de catégorie -->
        <div class="category-card">
          <img src="Cor2.JPG" alt="Lèvres">
          <div class="category-info">
            <h3>Nom du produit 4</h3>
          <p>Description du produit 3</p>
            <p>Prix: 35€</p>
            <button>Ajouter au panier</button>
            <button>Ajouter aux favoris</button>

          </div>
        </div>
        <!-- Répéter ce bloc pour chaque catégorie -->
        <!-- Exemple d'autres cartes de catégorie -->
        <div class="category-card">
          <img src="Cor3.JPG" alt="Yeux">
          <div class="category-info">
            <h3>Nom du produit 4</h3>
          <p>Description du produit 3</p>
            <p>Prix: 35€</p>
            <button>Ajouter au panier</button>
            <button>Ajouter aux favoris</button>
           
          </div>
        </div>
        <div class="category-card">
          <img src="COR1.JPG" alt="Visage">
          <div class="category-info">
            <h3>Nom du produit 4</h3>
          <p>Description du produit 3</p>
            <p>Prix: 35€</p>
            <button>Ajouter au panier</button>
            <button>Ajouter aux favoris</button>

          </div>
        </div>
        <div class="category-card">
          <img src="Cor2.JPG" alt="Soin de peau">
          <div class="category-info">
           <h3>Nom du produit 4</h3>
          <p>Description du produit 3</p>
            <p>Prix: 35€</p>
            <button>Ajouter au panier</button>
            <button>Ajouter aux favoris</button>

          </div>
        </div>
      </div>
    </section>
    <!-- Fin de la section Top catégorie -->
    
    
  </section>

  <!-- Fin de la section principale -->
  
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


