// Définir les articles par catégorie
const articlesByCategory = {
    Boissons: [
        { name: "Coca-Cola", price: 2 },
        { name: "Eau", price: 1 },
        { name: "Jus d'orange", price: 3 },
    ],
    "En-cas": [
        { name: "Chips", price: 2 },
        { name: "Sandwich", price: 4 },
        { name: "Barre chocolatée", price: 1.5 },
    ],
    Cerveau: [
        { name: "Stimulant", price: 10 },
        { name: "Relaxant", price: 8 },
    ],
    Spécial: [
        { name: "Offre 1", price: 20 },
        { name: "Offre 2", price: 25 },
    ],
    test2: [
        { name: "Article Test", price: 5 },
    ],
};

// Initialisation du total
let total = 0;

// Fonction pour ajouter un article au panier
function addToCart(name, price) {
    const button = event.target;
    button.disabled = true;

    total += price; // Ajoute le prix de l'article au total
    document.getElementById("total").textContent = `Total : ${total}€`;

    // Ce code ajoute un article à la liste affichée et réactive le bouton après 100 ms.
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

// Fonction pour changer les boutons d'articles en fonction de la catégorie sélectionnée
function updateArticleButtons(category) {
    const buttonsContainer = document.getElementById("buttons-container");
    buttonsContainer.innerHTML = ""; // Vider les boutons existants

    // Obtenir les articles de la catégorie sélectionnée
    const articles = articlesByCategory[category];
    articles.forEach(article => {
        // Créer un bouton pour chaque article de la catégorie
        const button = document.createElement("button");
        button.className = "button";
        button.textContent = `${article.name} (${article.price}€)`;
        button.onclick = function() {
            addToCart(article.name, article.price);
        };
        buttonsContainer.appendChild(button);
    });
}

// Ajouter un événement pour chaque bouton de catégorie
document.getElementById("middle-buttons-container").addEventListener("click", function(event) {
    const category = event.target.textContent;
    if (articlesByCategory[category]) {
        updateArticleButtons(category); // Mettre à jour les articles
    }
});
