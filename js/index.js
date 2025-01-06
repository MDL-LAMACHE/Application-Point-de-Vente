let total = 0;

function addToCart(name, price) {
    const button = event.target; // Récupère le bouton qui a déclenché l'événement

    // Désactive temporairement le bouton pour éviter les clics multiples
    button.disabled = true;

    // Ajoute l'article au total
    total += price;
    document.getElementById("total").textContent = `Total : ${total}€`;

    // Ajoute l'article à la liste
    const list = document.getElementById("article-list");
    const item = document.createElement("div");
    item.className = "article-item";
    item.innerHTML = `
        ${name} - ${price}€ 
        <button onclick="removeArticle(this, ${price})">❌</button>
    `;
    list.appendChild(item);

    // Réactive le bouton après une courte période
    setTimeout(() => {
        button.disabled = false;
    }, 300); // Délai de 300ms
}

function removeArticle(button, price) {
    const articleItem = button.parentElement;
    articleItem.remove();
    total -= price;
    document.getElementById("total").textContent = `Total : ${total}€`;
}

function clearOrder() {
    total = 0;
    document.getElementById("total").textContent = "Total : 0€";
    document.getElementById("article-list").innerHTML = "";
}
