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