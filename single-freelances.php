<?php get_header() ?>

<main class="freelance-page">
    <section>
        <div class="section-container">
            <div class="main-informations">
                <div>
                    <h2><?php the_title(); ?></h2>
                    <p>
                        <i class="fa-solid fa-briefcase"></i>
                        <?php the_field('metier'); ?></p>
                    <p>
                        <i class="fa-solid fa-location-dot"></i>
                        Localisé(e) à <?php the_field('localisation'); ?></p>
                    <p><?php the_field('taux_journalier_moyen'); ?>€ / jour</p>
                    <p><?php the_excerpt(); ?></p>
                </div>
                <figure>
                    <img src="<?php the_field('photo_du_freelance'); ?>">
                </figure>
            </div>
            <div class="technos">






                <?php
                $images = get_field('outils_maitrises');
                if( $images ): ?>
                    <ul>
                        <?php foreach( $images as $image_id ): ?>
                            <li>
                                <figure>
                                    <?php echo wp_get_attachment_image( $image_id ); ?>
                                </figure>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>








            </div>
        </div>
    </section>

    <?php

    /* Start the Loop */
    while (have_posts()) : the_post();
        get_template_part('template-parts/post/content', get_post_format());
    endwhile; // End of the loop.



    ?>




</main>

<?php get_footer() ?>
