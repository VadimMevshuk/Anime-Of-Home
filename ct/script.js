function addToCartOrFavourites(animeName, rating, description, actionType) {
    // Створюємо об'єкт для відправки даних
    const formData = new FormData();
    formData.append('anime_name', animeName);
    formData.append('rating', rating);
    formData.append('description', description);
    formData.append('action_type', actionType); // Тип дії: "cart" або "favourite"

    // Вибір URL залежно від дії
    let url = actionType === 'cart' ? 's1.php' : 'add_to_favourites.php';

    // Відправляємо запит без перезавантаження сторінки
    fetch(url, {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        // Додатково можна додати повідомлення для користувача
        if (actionType === 'cart') {
            console.log("Аніме додано до кошика");
            alert("Аніме додано до кошика!");
        } else if (actionType === 'favourite') {
            console.log("Аніме додано в улюблені");
            alert("Аніме додано в улюблені!");
        }
    })
    .catch(error => console.error('Помилка:', error));
}
function toggleHeart(animeName, messageId) {
    const messageElement = document.getElementById(messageId);
    
    if (localStorage.getItem(animeName)) {
        messageElement.textContent = 'Це аніме вже є в кошику.';
    } else {
        localStorage.setItem(animeName, true);
        messageElement.textContent = 'Аніме додано до кошика!';
    }
}