let articles = [{ name: "Article 1", price: 10 }];
let total = 0;

function init() {
    updateButtons();
}

function updateButtons() {
    const container = document.getElementById("buttons-container");
    container.innerHTML = "";
    articles.forEach((article, index) => {
        const btn = document.createElement("button");
        btn.textContent = `${article.name} (${article.price}€)`;
        btn.className = "button";
        btn.onclick = () => addToCart(article);
        container.appendChild(btn);
    });
}

function addToCart(article) {
    total += article.price;
    document.getElementById("total").textContent = `Total : ${total}€`;
    const list = document.getElementById("article-list");
    const item = document.createElement("div");
    item.className = "article-item";
    item.innerHTML = `${article.name} - ${article.price}€\n
<button onclick="removeArticle(this, ${article.price})">❌</button>\n            `;
    list.appendChild(item);
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

function confirmOrder() {
    alert("Commande confirmée !");
}

function showMenu() {
    alert("Menu non configuré !");
}

function openModal() {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("modal").style.display = "block";
}

function closeModal() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("modal").style.display = "none";
}

function saveArticle() {
    const name = document.getElementById("article-name").value;
    const price = parseFloat(document.getElementById("article-price").value);
    if (name && price > 0) {
        articles.push({ name, price });
        updateButtons();
        closeModal();
    } else {
        alert("Veuillez remplir correctement les informations.");
    }
}

init();