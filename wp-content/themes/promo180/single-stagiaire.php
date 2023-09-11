<?php get_header(); ?>

<main>
    <section class="custom-post-type-single">
        <?php
        while (have_posts()) :
            the_post();
        ?>

            <article>

                <div class="student">
                    <?php if (has_post_thumbnail()) : ?>
                        <img id="imgStagiaire" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>

                </div>
                <h2 id="titleStudent">
                    <?php the_title(); ?>
                </h2>

                <div class="post-content">
                    <?php the_content(); ?>
                </div>

                <div class="links">
                    <a href=" <?php echo  get_post_meta(get_the_ID(), 'portfolio', true); ?>">Portfolio</a>

                    <a href=" <?php echo  get_post_meta(get_the_ID(), 'linkedin', true); ?>">LinkedIn</a>

                    <a href=" <?php echo  get_post_meta(get_the_ID(), 'github', true); ?>">Github</a>
                </div>
            </article>

        <?php endwhile; ?>
    </section>
</main>

<?php wp_enqueue_script('main', get_template_directory_uri() . '/asset/main.js'); ?>

<?php get_footer();

?>