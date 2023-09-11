<?php
get_header();
?>
<section class="categories">
    <h1>Catégories</h1>
    <div class="containerCat">
        <?php
        $excluded_category_id = 1;

        $categories = get_terms(array(
            'taxonomy' => 'category',
            'hide_empty' => false,
            'exclude' => array($excluded_category_id)
        ));

        foreach ($categories as $category) {

            $category_link = get_category_link($category->term_id);
            $category_name = $category->name;
            $category_description = $category->description;
            $category_thumbnail_id = get_field('thumbnailcategory', 'category_' . $category->term_id);
            $size = 'thumbnail';


        ?>

            <div class="items">
                <a href=" <?= $category_link ?> ">
                    <div class="icon-wrapper">
                    <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">
                    </div>
                    <div class="project-name">
                        <p><?= $category_name ?></p>

                    </div>
                </a>
            </div>
        <?php
        }
        ?>
    </div>
</section>

<?php wp_enqueue_script('main', get_template_directory_uri() . '/asset/main.js'); ?>

