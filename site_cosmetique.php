<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Votre boutique KIKO</title>
  <link rel="stylesheet" href="siteWeb-cosmetique.css">
  <!-- Ajouter le lien vers la bibliothèque FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
  <!-- Barre de navigation -->
  <nav>
    <h1>KIKO</h1>
    <div class="onglets">
      <p class="link">Nouveautés</p>
      <p class="link">Sérums</p>
      <p class="link">Crèmes</p>
      <p class="link">Nettoyants</p>
      <p class="link">Conseils</p>
      <form>
        <input type="search" placeholder="Rechercher">
      </form>
      <p><i class="far fa-heart"></i></p>
      <p><i class="fas fa-shopping-cart"></i></p>
    </div>
  </nav>
  <!-- Fin de la barre de navigation -->
  
  <!-- Header avec la vidéo en arrière-plan -->
  <header class="video-container">
    <video autoplay loop muted class="background-video">
      <source src="WhatsApp Video 2024-03-29 at 15.53.20.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <!-- Contenu du header -->
    <div class="header-content">
      <h1>C'est votre boutique, votre chez-vous.</h1>
      <button>Naviguer <i class="fas fa-paper-plane"></i></button>
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
          <img src="image1.jpg" alt="Produit 1">
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
          <img src="image2.jpg" alt="Produit 2">
          <div class="product-info">
            <h3>Nom du produit 2</h3>
            <p>Description du produit 2</p>
            <p>Prix: 30€</p>
            <button>Ajouter au panier</button>
            <button>Ajouter aux favoris</button>
          </div>
        </div>
        <div class="product-card">
          <img src="image3.jpg" alt="Produit 3">
          <div class="product-info">
            <h3>Nom du produit 3</h3>
            <p>Description du produit 3</p>
            <p>Prix: 35€</p>
            <button>Ajouter au panier</button>
            <button>Ajouter aux favoris</button>
          </div>
        </div>
        <div class="product-card">
          <img src="image4.jpg" alt="Produit 4">
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
    <section class="seasons">
      <h2>Saisons</h2>
      <div class="seasons-grid">
        <!-- Exemple de carte de saison -->
        <div class="season-card">
          <img src="printemps.jpg" alt="Printemps">
          <div class="season-info">
            <h3>Printemps</h3>
          </div>
        </div>
        <!-- Répéter ce bloc pour chaque saison -->
        <!-- Exemple d'autres cartes de saison -->
        <div class="season-card">
          <img src="ete.jpg" alt="Été">
          <div class="season-info">
            <h3>Été</h3>
          </div>
        </div>
        <div class="season-card">
          <img src="automne.jpg" alt="Automne">
          <div class="season-info">
            <h3>Automne</h3>
          </div>
        </div>
        <div class="season-card">
          <img src="hiver.jpg" alt="Hiver">
          <div class="season-info">
            <h3>Hiver</h3>
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
          <img src="levres.jpg" alt="Lèvres">
          <div class="category-info">
            <h3>Lèvres</h3>
          </div>
        </div>
        <!-- Répéter ce bloc pour chaque catégorie -->
        <!-- Exemple d'autres cartes de catégorie -->
        <div class="category-card">
          <img src="yeux.jpg" alt="Yeux">
          <div class="category-info">
            <h3>Yeux</h3>
          </div>
        </div>
        <div class="category-card">
          <img src="visage.jpg" alt="Visage">
          <div class="category-info">
            <h3>Visage</h3>
          </div>
        </div>
        <div class="category-card">
          <img src="soin-peau.jpg" alt="Soin de peau">
          <div class="category-info">
            <h3>Soin de peau</h3>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin de la section Top catégorie -->
    
    
  </section>
  <!-- Fin de la section principale -->
  
  <!-- Pied de page -->
  <footer>
    <p>&copy; Contactez-nous</p>
    <div class="social-media">
      <p><i class="fab fa-facebook-f"></i></p>
      <p><i class="fab fa-twitter"></i></p>
      <p><i class="fab fa-instagram"></i></p>
      <p><i class="fab fa-linkedin-in"></i></p>
    </div>
  </footer>
  <!-- Fin du pied de page -->
</body>
</html>

