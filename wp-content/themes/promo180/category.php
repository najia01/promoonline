<?php
get_header();
?>

<section class="background" class="row-limit-size>
        
        <?php

        if (have_posts()) {
            
            while (have_posts()) : the_post();

        ?>
               <h1 id="titleBack">L'intelligence artificielle : une révolution technologique en marche</h1>
               <img class="techno" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                   
                        <a class="linkArticle" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                        <p class="describe"><?php the_excerpt(); ?></p>
                        <span class="author">Publié par <?php the_author(); ?></span>
                        <span class="date"><?php the_date(); ?></span>
                    </div>
                </article>

        <?php
            endwhile;
        } else {
            echo "<p>pas d'article</p>";
        }

        ?>

    </section>

    <?php wp_enqueue_script('main', get_template_directory_uri() . '/asset/main.js'); ?>

    <?php
    get_footer();
    ?>