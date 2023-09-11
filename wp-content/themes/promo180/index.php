<?php get_header(); ?>


<!-- <section class="all-article">
    <?php
    // if (have_posts()) {
    //     while (have_posts()) : the_post();
    ?>

            <article>
                <h2><?php the_title(); ?></h2>
                <?php the_post_thumbnail('thumbnail'); ?>
                <p><?php the_excerpt(); ?></p>
                <p><a href="<?php the_permalink(); ?>">En savoir plus</a></p>
                <p>Publié: <? the_date(); ?> par <?php the_author(); ?></p>
            </article>
    <?php
    //     endwhile;
    // } else {
    //     echo "<p>Pas d'article</p>";
    // }
    ?>
</section> -->

<h1>Les dernières actualités du blog</h1>

<main>
    <section class="actuality">
        <?php

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
        ?>

                <div class="card1">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>

                    <div class="card-content">
                        <h2>
                            <?php the_title(); ?>
                        </h2>

                        <a href="<?php the_permalink(); ?>" class="button">
                            En savoir plus...
                        </a>
                    </div>
                </div>

        <?php endwhile;
            wp_reset_postdata();
        else :

            echo "<p>Pas d'article</p>";
        endif;
        ?>
    </section>
</main>



</body>

</html>
<?php wp_enqueue_script('main', get_template_directory_uri() . '/asset/main.js'); ?>

<?php get_footer(); ?>