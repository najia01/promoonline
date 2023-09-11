<?php get_header(); ?>



<main>
 
    
      <article>
                                   
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                    <div class="post-meta">
                <span>Catégories : <?php the_category(', '); ?></span>
                <span>Tags  <?php the_tags('', ', '); ?></span>
            </div>
                  
                
   </article>
</main>

<?php wp_enqueue_script('main', get_template_directory_uri() . '/asset/main.js'); ?>

<?php get_footer();

?>