<?php
$args = array(
    'post_type' => 'stagiaire',
    'posts_per_page' => -1,
);

$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) :
        $query->the_post();
        ?>
        <h2 class="studentName"><a href="<?php the_permalink(); ?>" class="stName"><?php the_title(); ?>  </a></h2>
        <?php
    endwhile;
    wp_reset_postdata();
else :
    echo 'Aucun stagiaire trouvé.';
endif;
?>
