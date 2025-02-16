// Создаем новый элемент header
let header = document.createElement('header');

// Добавляем содержимое в header (убираем лишний тег <header> в строке innerHTML)
header.innerHTML = `

<nav>
    header
</nav>

<style>
    nav {
        width: 80%;
        height: 80px;
        border: solid;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
    }
</style>


`;




// Находим элемент, к которому будем добавлять header
const body = document.body;



// Вставляем header в body
body.insertBefore(header, body.firstChild);