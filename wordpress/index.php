<?php get_header(); ?>  <!--импорт хедера -->

<?php wp_head(); ?>  <!--подключение скриптов и стилей (вставляется в header.php) -->

<?php get_footer(); ?> <!--импорт футера -->


<!--вывод записи с определенным id (в данный момент вывод id3) -->

            <?php
            $args = array(
                'category__in' => 3, // Рубрика с ID 3
                'posts_per_page' => -1 // -1 обозначает что выводим все записи (если надо вывести определенное кол-во записей, то пишем нужное нам число)
            );
            $query = new WP_Query($args);

            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    ?>
                    <!-- <div class="swiper-slide">
                        <div
                            class="bg-gradient-to-r   <?php the_field('color_slider') ?> <?php the_field('color_slider2') ?>  text-white py-20">
                            <div class="container mx-auto px-4 text-center">
                                <h1 class="text-4xl md:text-5xl font-bold mb-4"><?php the_title(); ?></h1>
                                <p class="text-xl mb-8 max-w-2xl mx-auto"><?php the_content(); ?> <br></p>
                                <button
                                    class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">Узнать
                                    больше</button>
                            </div>
                        </div>
                    </div> -->
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

<?php the_title(); ?> <!--вывод тайтла записи -->
<?php the_content(); ?> <!--вывод текста записи -->

<?php the_permalink(); ?> <!-- Вывод ссылки на запись -->
<?php the_ID(); ?> <!-- Вывод ID записи -->
<?php the_excerpt(); ?> <!-- Вывод краткого описания (эксперта) -->
<?php the_date(); ?> <!-- Вывод даты публикации -->
<?php the_time(); ?> <!-- Вывод времени публикации -->
<?php the_author(); ?> <!-- Вывод имени автора -->
<?php the_category(', '); ?> <!-- Вывод категорий через запятую -->
<?php the_tags('', ', '); ?> <!-- Вывод меток через запятую -->
<?php comments_number(); ?> <!-- Вывод количества комментариев -->
<?php edit_post_link(); ?> <!-- Ссылка на редактирование записи (для админов) -->

<?php the_post_thumbnail(); ?> <!-- Вывод миниатюры записи -->
<?php the_post_thumbnail('medium'); ?> <!-- Вывод миниатюры среднего размера -->
<?php the_post_thumbnail('large'); ?> <!-- Вывод большой миниатюры -->

<?php the_field('название_поля'); ?> <!-- Вывод простого поля ACF -->
<?php the_sub_field('название_подполя'); ?> <!-- Вывод подполя (внутри repeater/flexible) -->
<?php if(get_field('название_поля')): ?> <!-- Проверка на заполненность поля -->
<?php echo get_field('название_поля', $post_id); ?>  <!-- Получение поля для конкретного поста -->




                            <!-- вывод в acf свг изображений -->
                            <?php
                                $svg_code = get_field('svg');
                                if ($svg_code) {
                                    echo $svg_code; // Выведет чистый SVG без изменений
                                }
                            ?>