 <!-- ajax форма компонент для wp -->
    <script>
        document.getElementById('popupForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(this);

            fetch('/wp-content/themes/vector/assets/php/send.php', {
                method: 'POST',
                body: formData
            })
                .then(response => {
                    // Добавляем класс active к overlay2 и mister_ajax
                    document.getElementById('overlay2').classList.add('active');
                    document.getElementById('mister_ajax').classList.add('active');

                    // Показываем сообщение об успехе (скрываем ошибку если была показана)
                    document.querySelector('.ajax_error').style.display = 'none';
                    document.querySelector('.ajax_succes').style.display = 'block';

                    this.reset();

                    document.getElementById('popupOverlay').click();
                })
                .catch(error => {
                    // Добавляем класс active к overlay2 и mister_ajax
                    document.getElementById('overlay2').classList.add('active');
                    document.getElementById('mister_ajax').classList.add('active');

                    // Показываем сообщение об ошибке
                    document.querySelector('.ajax_succes').style.display = 'none';
                    document.querySelector('.ajax_error').style.display = 'block';

                    document.getElementById('popupOverlay').click();

                });
        });
    </script>

    <div onclick="closeAjax();" id="overlay2"></div>

    <div id="mister_ajax">
        <div class="ajax_succes">Ваша заявка отправлена, пожалуйста ожидайте ответа от нашего оператора!</div>
        <div class="ajax_error">Ошибка отправки, пожалуйста, попробуйте еще раз или позвоните по номеру <a href="tel:+73912726055">+7 (391) 272-60-55</a>.</div>
    </div>

    <style>
        #overlay2 {
            height: 100%;
            width: 100%;
            position: fixed;
            background-color: #0000008f;
            top: 0;
            transition: 0.15s;
            cursor: pointer;
            opacity: 0;
            pointer-events: none;
        }

        #overlay2.active {
            opacity: 1;
            pointer-events: all;
        }

        #mister_ajax {
            display: none;
        }

        #mister_ajax.active {
            display: block;
            position: absolute;
            background-color: white;

            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            padding: 20px;
            color: #0086DB;
            font-size: 24px;
            font-weight: 500;
            text-align: center;
        }
    </style>

    <script>
        function closeAjax() {
            let overlay2 = document.getElementById('overlay2');
            let mister_ajax = document.getElementById('mister_ajax');

            overlay2.classList.remove('active');
            mister_ajax.classList.remove('active');
        }
    </script>


    <!-- ajax форма компонент -->
