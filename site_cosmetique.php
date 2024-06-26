
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
<body>
  <!-- Barre de navigation principal -->
  <nav>
      <h1><p class="link"><a href="site_cosmetique.php">DERMAFLORE</a></p></h1>
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
     <?php
session_start();

// Vérifier si le panier existe dans la session
if (isset($_SESSION["panier"]) && !empty($_SESSION["panier"])) {
    // Calculer le nombre total de produits dans le panier
    $nombre_produits = count($_SESSION["panier"]);

    // Afficher le nombre de produits dans le panier
    echo "<span>$nombre_produits</span>";
} else {
    // Si le panier est vide
    echo "<span>0</span>";
}
?>

        <p><a href="Panier.html"><i class="fas fa-shopping-cart"></i></a></p>

      <p id="open-modal"><i class="fas fa-user"></i></p>
    </div>
  </nav>
  <!-- Fin de la barre de navigation  principal-->
 
  
  <!-- Fenêtre modale -->
  <div id="modal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <!--formulaire de connexion ou d'inscription -->
      <div id="login-form">
        <h2>Connexion</h2>
         <?php if (isset($error_message)) : ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>
        <form method="post" action="">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" name="username" required><br>
        <label for="password">Mot de passe:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Se connecter</button>
    </form>
      </div>

      <!-- Section pour s'inscrire -->
    <div id="signup-section">
      
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
        <div class="text">
          <h1>NAUTHY skin care
          </h1>
          <p>Plongez dans l'univers de la beauté et de l'élégance. Découvrez le secret d'une peau éclatante et d'un teint resplendissant.</p>
        </div>
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
        <div class="text">Explorez le monde de la beauté avec notre collection exclusive de produits. Découvrez la quintessence du luxe et de l'élégance pour sublimer votre quotidien.</div>
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
      
    </div>
    <!-- Fin du contenu du header -->
  </header>
  <!-- Fin du header -->
  
  <!-- Section principale -->
 
    <section>
      <h2>Meilleures <span>Ventes</span></h2>
        
    </div>
    <div class="products">
        <div class="row">
            <img src="M1.jpg">
            <div class="product-text"> 
                  <h5>Vente</h5>
          </div>
          <div class="heart-icon">
              <i class="fa-regular fa-heart"></i>
          </div>
          <div class="ratting">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
          </div>
            <div>
            <h4>Lotion hydratante</h4>
            <p>9,60€</p>
            <h4 class="panier">Ajouter au panier</h4>
            
            </div>
           </div> 
           <div class="row">
            <img src="M2.jpg">
            <div class="product-text"> 
                <h5>-10%</h5>
          </div>
          <div class="heart-icon">
              <i class="fa-regular fa-heart"></i>
          </div>
          <div class="ratting">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
          </div>
            <div>
            <h4>Anti-rugosité</h4>
             <p>15,00€</p>
            <h4 class="panier">Ajouter au panier</h4>
           
            </div>
           </div> 
       
       <div class="row">
        <img src="M3.webp">
        <div class="product-text"> 
              <h5>-40%</h5>
          </div>
          <div class="heart-icon">
              <i class="fa-regular fa-heart"></i>
          </div>
          <div class="ratting">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
          </div>
        <div>
        <h4>Lait hydratant</h4>
          <p>25,15€</p>
        <h4 class="panier">Ajouter au panier</h4>
      
        </div>
       </div> 
       <div class="row">
        <img src="M4.jpg">
        <div class="product-text"> 
             <h5>Vente</h5>
              </div>
              <div class="heart-icon">
                  <i class="fa-regular fa-heart"></i>
              </div>
              <div class="ratting">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
              </div>
        <div>
        <h4>Crème hydratante</h4>
         <p>30,45€</p>
        <h4 class="panier">Ajouter au panier</h4>
       
        </div>
       </div> 
      </section>


       <section class="nouvelle-section">
            <div class="section-content">
                <div class="section-image">
                    <img src="photo accueil.jpeg" alt="Image de la nouvelle section">
                </div>
                <div class="section-text">
                    <h2>Susciter la joie de vivre et la confiance</h2>
                    <p>DERMAFLORE est une marque qui a pour but de favoriser l'expression de soi. Nous nous saisissons des tendances mondiales et leur insufflons notre propre style, inspiré de nos racines italiennes, avant de les partager avec notre communeauté</p>
                </div>
            </div>
        </section>
      <section>
        <h2>Nouveautés</h2>
          
      </div>
      <div class="products">
          <div class="row">
              <img src="M1.jpg">
              <div class="product-text"> 
               <h5>Vente</h5>
              </div>
              <div class="heart-icon">
                  <i class="fa-regular fa-heart"></i>
              </div>
              <div class="ratting">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
              </div>
              <div>
              <h4>Lotion hydratante</h4>
               <p>9,60€</p>
              <h4 class="panier">Ajouter au panier</h4>
             
              </div>
             </div> 
             <div class="row">
              <img src="M2.jpg">
              <div class="product-text"> 
                  <h5>Vente</h5>
              </div>
              <div class="heart-icon">
                  <i class="fa-regular fa-heart"></i>
              </div>
              <div class="ratting">
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-solid fa-star-half-stroke"></i>
              </div>
              <div>
              <h4>Anti-rugosité</h4>
              <p>15,00€</p>
              <h4 class="panier">Ajouter au panier</h4>
              
              </div>
             </div> 
         
         <div class="row">
          <img src="M3.webp">
          <div class="product-text"> 
              <h5>-10%</h5>
          </div>
          <div class="heart-icon">
              <i class="fa-regular fa-heart"></i>
          </div>
          <div class="ratting">
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>
          </div>
          <div>
          <h4>Lait hydratant</h4>
          <p>25,15€</p>
          <h4 class="panier">Ajouter au panier</h4>
          
          </div>
         </div> 
         <div class="row">
          <img src="M4.jpg">
          <div class="product-text"> 
                <h5>Vente</h5>
          </div>
          <div class="heart-icon">
              <i class="fa-regular fa-heart"></i>
          </div>
          <div class="ratting">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
          </div>
          <div>
          <h4>Crème hydratante</h4>
            <p>30,45€</p>
          <h4 class="panier">Ajouter au panier</h4>
          <?php
session_start();
require_once("config.php"); // Inclure le fichier de configuration de la base de données

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ajouter au panier"])) {
    // Récupérer l'ID du produit à ajouter au panier
    $produit_id = $_POST["produit_id"];

    // Récupérer les informations sur le produit depuis la base de données
    $query = "SELECT * FROM produits WHERE id = :produit_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":produit_id", $produit_id);
    $stmt->execute();
    $produit = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($produit) {
        // Ajouter le produit au panier de l'utilisateur
        $_SESSION["panier"][$produit_id] = $produit;
        
        // Rediriger l'utilisateur vers une page de confirmation ou vers la même page
        header("Location: page_produit.php?id=$produit_id");
        exit();
    } else {
        // Gérer l'erreur si le produit n'est pas trouvé dans la base de données
        echo "Le produit n'existe pas.";
    }
}
?>
        
          </div>
         </div> 
        </section>
        <section>
          <h2>Top <span>Catégories</span></h2>
            
        </div>
        <div class="products">
            <div class="row">
                <img src="M1.jpg">
                <div class="product-text"> 
                      <h5>Vente</h5>
          </div>
          <div class="heart-icon">
              <i class="fa-regular fa-heart"></i>
          </div>
          <div class="ratting">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
          </div>
                <div>
                <h4>Lotion hydratante</h4>
                <p>9,60€</p>
                <h4 class="panier">Ajouter au panier</h4>
                
                </div>
               </div> 
               <div class="row">
                <img src="M2.jpg">
                <div class="product-text"> 
                    <h5>Vente</h5>
          </div>
          <div class="heart-icon">
              <i class="fa-regular fa-heart"></i>
          </div>
          <div class="ratting">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
          </div>
                <div>
                <h4>Anti-rugosité</h4>
                 <p>15,00€</p>
                <h4 class="panier">Ajouter au panier</h4>
               
                </div>
               </div> 
           
           <div class="row">
            <img src="M3.webp">
            <div class="product-text"> 
                  <h5>Vente</h5>
          </div>
          <div class="heart-icon">
              <i class="fa-regular fa-heart"></i>
          </div>
          <div class="ratting">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
          </div>
            <div>
            <h4>Lait hydratant</h4>
            <p>25,15€</p>
            <h4 class="panier">Ajouter au panier</h4>
            
            </div>
           </div> 
           <div class="row">
            <img src="M4.jpg">
            <div class="product-text"> 
                  <h5>Vente</h5>
          </div>
          <div class="heart-icon">
              <i class="fa-regular fa-heart"></i>
          </div>
          <div class="ratting">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
          </div>
            <div>
            <h4>Crème hydratante</h4>
             <p>30,45€</p>
            <h4 class="panier">Ajouter au panier</h4>
           
            </div>
           </div> 
          </section>

     
       

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
