<?php get_header(); ?>



<section class="hero1" class="row-limit-size">

    <div class="heroPicture">
        <img id="imgGroup" src="<?php echo get_template_directory_uri(); ?>/asset/img/groupe.jpg" alt="groupe de stagiaire">
    </div>

    <p class="presentation">Découvrez l'univers passionnant de la PROMO 180 de stagiaires année 2022/2023 en développement web et web mobiles d'OnlineFormaPro !<br> Plongez-vous dans un monde captivant où la technologie et la créativité fusionnent pour créer des expériences uniques.<br> Notre groupe est composé de personnes venant de différents horizons, tous liés par leur passion pour la création en ligne.<br> Rejoignez-nous pour suivre les aventures palpitantes de notre PROMO 180 et explorer cet excitant voyage au cœur de l'innovation digitale !</p>

</section>

<h1>Les dernières actualités du blog</h1>

<section class="actu">
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

<section class="cardStudent">
    <h2 class="title-recommand">Stagiaires 2022/2023</h2>
    <div class="wrapper">
        <div class="card">
            <input type="checkbox" id="card1" class="more">
            <div class="content">
                <div class="front" style="background-image: url('<?php echo get_template_directory_uri(); ?>/asset/img/najia.JPG');">
                    <div class="inner">
                        <h2>Najia LIGALI</h2>
                        <label for="card1" class="button" aria-hidden="true">Détails</label>
                    </div>
                </div>
                <div class="back">
                    <div class="inner">
                        <div class="info">
                            <span class="titleSpan">Langage</span>
                            <span>HTML, CSS, JS, PHP, PYTHON</span>
                        </div>
                        <div class="info">
                            <span class="titleSpan">Outils</span>
                            <span>VSCode, CodePen, Github, ChatGPT, Notion, Figma, Trello</span>
                        </div>
                        <div class="description">
                            <a href="http://fr.linkedin.com/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/linkedin.png" alt="compte linkedin"></a>
                            <a href="http://github.com/najia01/portfolio"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/github.png" alt="compte github"></a>
                            <a href="mailto:validress@outlook.fr"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/message.png" alt="adresse e-mail"></a>
                        </div>
                        <label for="card1" class="button return" aria-hidden="true">
                            <span>Retour</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <input type="checkbox" id="card2" class="more">
            <div class="content">
                <div class="front" style="background-image: url('<?php echo get_template_directory_uri(); ?>/asset/img/cocotte.JPG');">
                    <div class="inner">
                        <h2>Elisa RAVINET</h2>
                        <label for="card2" class="button" aria-hidden="true">Détails</label>
                    </div>
                </div>
                <div class="back">
                    <div class="inner">
                        <div class="info">
                            <span class="titleSpan">Langage</span>
                            <span>HTML, CSS, JS, PHP, PYTHON</span>
                        </div>
                        <div class="info">
                            <span class="titleSpan">Outils</span>
                            <span>VSCode, CodePen, Github, ChatGPT, Notion, Figma, Trello</span>
                        </div>
                        <div class="description">
                            <a href="http://fr.linkedin.com/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/linkedin.png" alt="compte linkedin"></a>
                            <a href="http://github.com/najia01/portfolio"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/github.png" alt="compte github"></a>
                            <a href="mailto:validress@outlook.fr"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/message.png" alt="adresse e-mail"></a>
                        </div>
                        <label for="card2" class="button return" aria-hidden="true">
                            <span>Retour</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <input type="checkbox" id="card3" class="more">
            <div class="content">
                <div class="front" style="background-image: url('<?php echo get_template_directory_uri(); ?>/asset/img/wal.JPG');">
                    <div class="inner">
                        <h2>Walesca TELEMAQUE</h2>
                        <label for="card3" class="button" aria-hidden="true">Détails</label>
                    </div>
                </div>
                <div class="back">
                    <div class="inner">
                        <div class="info">
                            <span class="titleSpan">Langage</span>
                            <span>HTML, CSS, JS, PHP, PYTHON</span>
                        </div>
                        <div class="info">
                            <span class="titleSpan">Outils</span>
                            <span>VSCode, CodePen, Github, ChatGPT,Notion, Figma, Trello</span>
                        </div>
                        <div class="description">
                            <a href="http://fr.linkedin.com/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/linkedin.png" alt="compte linkedin"></a>
                            <a href="http://github.com/najia01/portfolio"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/github.png" alt="compte github"></a>
                            <a href="mailto:validress@outlook.fr"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/message.png" alt="adresse e-mail"></a>
                        </div>
                        <label for="card3" class="button return" aria-hidden="true">
                            <span>Retour</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <input type="checkbox" id="card4" class="more">
            <div class="content">
                <div class="front" style="background-image: url('<?php echo get_template_directory_uri(); ?>/asset/img/angeline.JPG');">
                    <div class="inner">
                        <h2>Angéline GILLOT</h2>
                        <label for="card4" class="button" aria-hidden="true">Détails</label>
                    </div>
                </div>
                <div class="back">
                    <div class="inner">
                        <div class="info">
                            <span class="titleSpan">Langage</span>
                            <span>HTML, CSS, JS, PHP, PYTHON</span>
                        </div>
                        <div class="info">
                            <span class="titleSpan">Outils</span>
                            <span>VSCode, CodePen, Github, ChatGPT,Notion, Figma, Trello</span>
                        </div>
                        <div class="description">
                            <a href="http://fr.linkedin.com/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/linkedin.png" alt="compte linkedin"></a>
                            <a href="http://github.com/najia01/portfolio"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/github.png" alt="compte github"></a>
                            <a href="mailto:validress@outlook.fr"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/message.png" alt="adresse e-mail"></a>
                        </div>
                        <label for="card4" class="button return" aria-hidden="true">
                            <span>Retour</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <input type="checkbox" id="card5" class="more">
            <div class="content">
                <div class="front" style="background-image: url('<?php echo get_template_directory_uri(); ?>/asset/img/fred.JPG');">
                    <div class="inner">
                        <h2>Frédéric FAVREAU</h2>
                        <label for="card5" class="button" aria-hidden="true">Détails</label>
                    </div>
                </div>
                <div class="back">
                    <div class="inner">
                        <div class="info">
                            <span class="titleSpan">Langage</span>
                            <span>HTML, CSS, JS, PHP, PYTHON</span>
                        </div>
                        <div class="info">
                            <span class="titleSpan">Outils</span>
                            <span>VSCode, CodePen, Github, ChatGPT,Notion, Figma, Trello</span>
                        </div>
                        <div class="description">
                            <a href="http://fr.linkedin.com/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/linkedin.png" alt="compte linkedin"></a>
                            <a href="http://github.com/najia01/portfolio"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/github.png" alt="compte github"></a>
                            <a href="mailto:validress@outlook.fr"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/message.png" alt="adresse e-mail"></a>
                        </div>
                        <label for="card5" class="button return" aria-hidden="true">
                            <span>Retour</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <input type="checkbox" id="card6" class="more">
            <div class="content">
                <div class="front" style="background-image: url('<?php echo get_template_directory_uri(); ?>/asset/img/dim.JPG');">
                    <div class="inner">
                        <h2>Dimitri JOHAN</h2>
                        <label for="card6" class="button" aria-hidden="true">Détails</label>
                    </div>
                </div>
                <div class="back">
                    <div class="inner">
                        <div class="info">
                            <span class="titleSpan">Langage</span>
                            <span>HTML, CSS, JS, PHP, PYTHON</span>
                        </div>
                        <div class="info">
                            <span class="titleSpan">Outils</span>
                            <span>VSCode, CodePen, Github, ChatGPT,Notion, Figma, Trello</span>
                        </div>
                        <div class="description">
                            <a href="http://fr.linkedin.com/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/linkedin.png" alt="compte linkedin"></a>
                            <a href="http://github.com/najia01/portfolio"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/github.png" alt="compte github"></a>
                            <a href="mailto:validress@outlook.fr"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/message.png" alt="adresse e-mail"></a>
                        </div>
                        <label for="card6" class="button return" aria-hidden="true">
                            <span>Retour</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <input type="checkbox" id="card7" class="more">
            <div class="content">
                <div class="front" style="background-image: url('<?php echo get_template_directory_uri(); ?>/asset/img/hamid1.JPG');">
                    <div class="inner">
                        <h2>Hamid ACHAHBOUNE</h2>
                        <label for="card7" class="button" aria-hidden="true">Détails</label>
                    </div>
                </div>
                <div class="back">
                    <div class="inner">
                        <div class="info">
                            <span class="titleSpan">Langage</span>
                            <span>HTML, CSS, JS, PHP, PYTHON</span>
                        </div>
                        <div class="info">
                            <span class="titleSpan">Outils</span>
                            <span>VSCode, CodePen, Github, ChatGPT,Notion, Figma, Trello</span>
                        </div>
                        <div class="description">
                            <a href="http://fr.linkedin.com/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/linkedin.png" alt="compte linkedin"></a>
                            <a href="http://github.com/najia01/portfolio"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/github.png" alt="compte github"></a>
                            <a href="mailto:validress@outlook.fr"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/message.png" alt="adresse e-mail"></a>
                        </div>
                        <label for="card7" class="button return" aria-hidden="true">
                            <span>Retour</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <input type="checkbox" id="card8" class="more">
            <div class="content">
                <div class="front" style="background-image: url('<?php echo get_template_directory_uri(); ?>/asset/img/karim.JPG');">
                    <div class="inner">
                        <h2>Karim RYAHI</h2>
                        <label for="card8" class="button" aria-hidden="true">Détails</label>
                    </div>
                </div>
                <div class="back">
                    <div class="inner">
                        <div class="info">
                            <span class="titleSpan">Langage</span>
                            <span>HTML, CSS, JS, PHP, PYTHON</span>
                        </div>
                        <div class="info">
                            <span class="titleSpan">Outils</span>
                            <span>VSCode, CodePen, Github, ChatGPT,Notion, Figma, Trello</span>
                        </div>
                        <div class="description">
                            <a href="http://fr.linkedin.com/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/linkedin.png" alt="compte linkedin"></a>
                            <a href="http://github.com/najia01/portfolio"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/github.png" alt="compte github"></a>
                            <a href="mailto:validress@outlook.fr"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/message.png" alt="adresse e-mail"></a>
                        </div>
                        <label for="card8" class="button return" aria-hidden="true">
                            <span>Retour</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <input type="checkbox" id="card9" class="more">
            <div class="content">
                <div class="front" style="background-image: url('<?php echo get_template_directory_uri(); ?>/asset/img/alex.JPG');">
                    <div class="inner">
                        <h2>Alexandre SEQUEIRA</h2>
                        <label for="card9" class="button" aria-hidden="true">Détails</label>
                    </div>
                </div>
                <div class="back">
                    <div class="inner">
                        <div class="info">
                            <span class="titleSpan">Langage</span>
                            <span>HTML, CSS, JS, PHP, PYTHON</span>
                        </div>
                        <div class="info">
                            <span class="titleSpan">Outils</span>
                            <span>VSCode, CodePen, Github, ChatGPT,Notion, Figma, Trello</span>
                        </div>
                        <div class="description">
                            <a href="http://fr.linkedin.com/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/linkedin.png" alt="compte linkedin"></a>
                            <a href="http://github.com/najia01/portfolio"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/github.png" alt="compte github"></a>
                            <a href="mailto:validress@outlook.fr"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/message.png" alt="adresse e-mail"></a>
                        </div>
                        <label for="card9" class="button return" aria-hidden="true">
                            <span>Retour</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <input type="checkbox" id="card10" class="more">
            <div class="content">
                <div class="front" style="background-image: url('<?php echo get_template_directory_uri(); ?>/asset/img/jirka.JPG');">
                    <div class="inner">
                        <h2>Jirka FISCHER</h2>
                        <label for="card10" class="button" aria-hidden="true">Détails</label>
                    </div>
                </div>
                <div class="back">
                    <div class="inner">
                        <div class="info">
                            <span class="titleSpan">Langage</span>
                            <span>HTML, CSS, JS, PHP, PYTHON</span>
                        </div>
                        <div class="info">
                            <span class="titleSpan">Outils</span>
                            <span>VSCode, CodePen, Github, ChatGPT,Notion, Figma, Trello</span>
                        </div>
                        <div class="description">
                            <a href="http://fr.linkedin.com/"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/linkedin.png" alt="compte linkedin"></a>
                            <a href="http://github.com/najia01/portfolio"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/github.png" alt="compte github"></a>
                            <a href="mailto:validress@outlook.fr"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/message.png" alt="adresse e-mail"></a>
                        </div>
                        <label for="card10" class="button return" aria-hidden="true">
                            <span>Retour</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<?php wp_enqueue_script('main', get_template_directory_uri() . '/asset/main.js'); ?>

<?php get_footer(); ?>