let total = 0;

function addToCart(name, price) {
    total += price;
    document.getElementById("total").textContent = `Total : ${total}€`;
    const list = document.getElementById("article-list");
    const item = document.createElement("div");
    item.className = "article-item";
    item.innerHTML = `
        ${name} - ${price}€ 
        <button onclick="removeArticle(this, ${price})">❌</button>
    `;
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
