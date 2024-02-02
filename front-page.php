<?php

get_header();
?>

<main id="primary" class="site-main">
    <section class="bannerSection">
        <img class='bannerTitle' id="bannerTitle" src=" <?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'; ?> ">
        <video class="videoBanner" src="<?php echo get_stylesheet_directory_uri() . '/assets/video_koukaki.mp4'; ?> " autoplay loop muted> </video>
    </section>
    <section  id="#story" class="story  down-animation-1">
        <article id="" class="story__article sectionObs">
            <h2> <span class="sectionTitle delayedObs" style="display: inline-block;"> L'histoire </span></h2>
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>
        <?php
        $args = array(
            'post_type' => 'characters',
            'posts_per_page' => -1,
            'meta_key'  => '_main_char_field',
            'orderby'   => 'meta_value_num',

        );
        $characters_query = new WP_Query($args);
        ?>


        <article id="characters">
            <article class="personnageSlider">
                <div class="personnageTitle">
                    <h3 class="">Les personnages</h3>
                </div>
                <?php get_template_part('slider'); ?>
            </article>
        </article>

        
        <?php
        $args = array(
            'post_type' => 'characters',
            'posts_per_page' => -1,
            'meta_key'  => '_main_char_field',
            'orderby'   => 'meta_value_num',

        );
        $characters_query = new WP_Query($args);
        ?>
        <article id="charactersMobile">
            <div class="main-character">
                <h3>Les personnages</h3>
                <?php
                $main_character = $characters_query->posts[0];
                echo '<figure>';
                echo get_the_post_thumbnail($main_character->ID, 'full');
                echo '<figcaption>' . $main_character->post_title . '</figcaption>';
                echo '</figure>';
                $characters_query->next_post();
                ?>
            </div>
            <div class="other-characters">
                <?php
                while ($characters_query->have_posts()) {
                    $characters_query->the_post();
                    echo '<figure>';
                    echo get_the_post_thumbnail(get_the_ID(), 'full');
                    echo '<figcaption>';
                    the_title();
                    echo '</figcaption>';
                    echo '</figure>';
                }
                ?>
            </div>
        </article>

        <article id="place" class="hiddenObs">
            <span class="nuageLayer">
                <img alt="little_cloud" class="nuage1" id="nuage1" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png'; ?>">
                <img alt="bigCloud" class="nuage2" id="nuage2" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png'; ?>">
            </span>
            <div class="place_textAreas">
                <h3>Le Lieu</h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>

        </article>
    </section>
    <section id="studio"  class="sectionObs">
        <h2> <span style="display: inline-block;" class="sectionTitle up-animation-1 hiddenObs" >Studio</span> <span class="sectionTitle XXX delayedObs" style="display: inline-block;"> Koukaki </span></h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
        <article id="oscar" class="oscar">
            <div class="oscarContent">
                <h3>Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !</h3>
                <img class="oscarLogoImg" src="<?php echo get_template_directory_uri() . '-child' . '/assets/images/oscar_logo2.png'; ?>" alt="logo des Oscars ">
            </div>
        </article>
    </section>

</main><!-- #main -->
<?php

get_footer();
