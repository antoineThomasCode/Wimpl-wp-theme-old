<?php get_header() ?>

<main>
    <section id="home-section">
        <div class="section-container">
            <h1>Maintenance</h1>
            <h2>Wimpl revient bientôt.</h2>
        </div>
    </section>
    <!--<section id="home-section" class="bcg-img">
        <div class="section-container">
            <h1><?php /*the_field("titre_principal_de_la_page"); */?></h1>
        </div>
    </section>
    <section id="numbers" class="bcg-img">
        <div class="section-container">
            <h2><?php /*the_field("titre_section_chiffres"); */?></h2>
            <div class="numbers-container">
                <article>
                    <p class="number"><span data-count="<?php /*the_field("chiffre_davis_positifs_section_chiffres"); */?>">0</span>%</p>
                    <h3><?php /*the_field("titre_davis_positifs_section_chiffres"); */?></h3>
                    <p><?php /*the_field("paragraphe_davis_positifs_section_chiffres"); */?></p>
                </article>
                <article>
                    <p class="number">+<span data-count="<?php /*the_field("nombre_de_projets_realises_section_chiffres"); */?>">0</span></p>
                    <h3><?php /*the_field("titre_nombre_de_projets_realises_section_chiffres"); */?></h3>
                    <p><?php /*the_field("paragraphe_nombre_de_projets_realises_section_chiffres"); */?></p>
                </article>
                <article>
                    <p class="number"><span data-count="<?php /*the_field("chiffre_pourcentage_origine_section_chiffres"); */?>">0</span>%</p>
                    <h3><?php /*the_field("titre_origine_section_chiffres"); */?></h3>
                    <p><?php /*the_field("paragraphe_origine_section_chiffres"); */?></p>
                </article>
            </div>
        </div>
    </section>
    <section id="review" class="bcg-img">
        <div class="left-linear-grad"></div>
        <div class="right-linear-grad"></div>
        <div class="section-container">
            <h2><?php /*the_field("titre_section_avis_clients"); */?></h2>
            <div class="review-container">
                <div class="review-banner">
                    <div class="splide" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <div class="splide__list">
                                <?php
/*                                $repeater = get_field('avis_clients_section_avis_clients');
                                if ($repeater) :
                                    foreach ($repeater as $row) :
                                        $image = $row['logo_du_client'];
                                        $name = $row['prenom__nom_du_client'];
                                        $function = $row['fonction_du_client'];
                                        $text = $row['texte_avis_client'];
                                        if ($image) :
                                            */?>
                                            <article class="splide__slide">
                                                <figure>
                                                    <img src="<?php /*echo esc_url($image); */?>" alt="Logo de l'entreprise partenaire">
                                                </figure>
                                                <?php /*echo $text */?>
                                                <h3>
                                                    <span><?php /*echo $name */?></span>
                                                    <?php /*echo $function */?>
                                                </h3>
                                            </article>
                                        <?php
/*                                        endif;
                                    endforeach;
                                endif;
                                */?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="review-banner">
                    <div class="splide splide-reverse" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <div class="splide__list">
                                <?php
/*                                $repeater = get_field('avis_clients_section_avis_clients');
                                if ($repeater) :
                                    foreach ($repeater as $row) :
                                        $image = $row['logo_du_client'];
                                        $name = $row['prenom__nom_du_client'];
                                        $function = $row['fonction_du_client'];
                                        $text = $row['texte_avis_client'];
                                        if ($image) :
                                            */?>
                                            <article class="splide__slide">
                                                <figure>
                                                    <img src="<?php /*echo esc_url($image); */?>" alt="Logo de l'entreprise partenaire">
                                                </figure>
                                                <?php /*echo $text */?>
                                                <h3>
                                                    <span><?php /*echo $name */?></span>
                                                    <?php /*echo $function */?>
                                                </h3>
                                            </article>
                                        <?php
/*                                        endif;
                                    endforeach;
                                endif;
                                */?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="calendly-section">
        <div class="section-container">
            <h2><?php /*the_field("titre_section_calendly"); */?></h2>
            <p><?php /*the_field("paragraphe_sous_titre_section_calendly"); */?></p>
        </div>
    </section>-->

</main>

<?php get_footer() ?>   