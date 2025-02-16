// Создаем новый элемент header
let header = document.createElement('header');

// Добавляем содержимое в header (убираем лишний тег <header> в строке innerHTML)
header.innerHTML = `

<nav>header</nav>


`;




// Находим элемент, к которому будем добавлять header
const body2 = document.body;



// Вставляем header в body
body2.insertBefore(header, body2.firstChild);