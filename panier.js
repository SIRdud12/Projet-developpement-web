// Fonction pour ouvrir la fenêtre modale du panier
document.querySelector('.fa-shopping-cart').onclick = function() {
  document.getElementById('cart-modal').style.display = "block";
}

// Fonction pour fermer la fenêtre modale du panier en cliquant sur le bouton "X"
document.querySelector('#cart-modal .close').onclick = function() {
  document.getElementById('cart-modal').style.display = "none";
}

// Fonction pour ajouter un produit au panier
document.querySelectorAll('.panier').forEach(button => {
  button.onclick = function() {
    const product = this.parentElement.querySelector('h4').textContent;
    const price = parseFloat(this.parentElement.querySelector('p').textContent);
    const item = document.createElement('div');
    item.classList.add('cart-item');
    item.innerHTML = `
      <img src="placeholder.jpg" alt="${product}">
      <div>
        <div class="cart-item-name">${product}</div>
        <div class="cart-item-price">${price.toFixed(2)}€</div>
      </div>
    `;
    document.getElementById('cart-items').appendChild(item);
    updateTotal(price);
  }
});

// Fonction pour mettre à jour le total du panier
function updateTotal(price) {
  const totalElement = document.getElementById('cart-total-value');
  const currentTotal = parseFloat(totalElement.textContent);
  const newTotal = currentTotal + price;
  totalElement.textContent = newTotal.toFixed(2) + "€";
}
