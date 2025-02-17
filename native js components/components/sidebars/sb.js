document.addEventListener("DOMContentLoaded", () => {
    let sideBar = document.createElement('sidebar');
    let container = document.querySelector('.container');
   

    sideBar.innerHTML = `
    
      <div class="sidebar">sidebar</div>

      <style>
        .sidebar {
            width:100px;
            height:200px;
            border:solid;
            margin:10px;
        }
      </style>

    `;

    // document.body.appendChild(sideBar);

    if (container) {
        // Если элемент найден, добавляем sideBar внутрь container
        container.appendChild(sideBar);
    } else {
        // Логируем ошибку, если элемент не найден
        console.error("Элемент с классом '.test' не найден в DOM.");
    }
   


    




});