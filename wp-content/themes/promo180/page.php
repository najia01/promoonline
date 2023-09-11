<?php get_header(); ?>



<main>
    <section class="actuality">



        <h2>
            <?php the_title(); ?>;
        </h2>
        <div class="post-content">
            <?php the_content(); ?>
        </div>




    </section>
</main>

<?php wp_footer();

?>