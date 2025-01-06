// Initialise la variable 'total' pour suivre la somme des prix des articles ajoutés au panier
let total = 0;

// Fonction pour ajouter un article au panier
function addToCart(name, price) {
    const button = event.target;
    button.disabled = true;

    total += price; // Ajoute le prix de l'article au total
    document.getElementById("total").textContent = `Total : ${total}€`;

    //Ce code ajoute un article à la liste affichée et réactive le bouton après 100 ms.
    const list = document.getElementById("article-list");
    const item = document.createElement("div");
    item.className = "article-item";
    item.innerHTML = `
        ${name} - ${price}€ 
        <button onclick="removeArticle(this, ${price})">❌</button>
    `;
    list.appendChild(item);

    setTimeout(() => {
        button.disabled = false;
    }, 100);
}

// Fonction pour retirer un article du panier
function removeArticle(button, price) {
    const articleItem = button.parentElement;
    articleItem.remove();
    total -= price;
    document.getElementById("total").textContent = `Total : ${total}€`;
}

// Fonction pour vider complètement le panier
function clearOrder() {
    total = 0;
    document.getElementById("total").textContent = "Total : 0€";
    document.getElementById("article-list").innerHTML = "";
}
