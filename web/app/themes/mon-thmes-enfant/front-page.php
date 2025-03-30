<?php get_header(); ?>

    <div class="homepage-content">
        <section class="introduction">
            <h1>Bienvenue sur mon Portfolio</h1>
            <img src="<?php echo get_template_directory_uri(); ?>Portfolio/web/app/themes/mon-thmes-enfant/assets/images/photo.jpg" alt="Ma photo" class="photo-intro">
            <p>Je suis un étudiant en informatique passionné par le développement web et la création d'applications. Voici un aperçu de mes compétences et de mes réalisations.</p>
        </section>

        <section class="competences">
            <h2>Mes Compétences</h2>
            <ul>
                <li>Développement web</li>
                <li>Conception d'applications</li>
                <li>Gestion de projets</li>
                <li>SQL et bases de données</li>
                <li>Utilisation de GitHub et des outils de versionning</li>
            </ul>
        </section>

        <section class="meilleures-realisations">
            <h2>Mes Meilleures Réalisations</h2>
            <div class="portfolio-grid">
                <?php
                // Requête pour récupérer les 3 meilleures réalisations
                $args = array(
                    'post_type' => 'portfolio',
                    'meta_key' => 'meilleure_realisation',
                    'meta_value' => true,
                    'posts_per_page' => 3
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        ?>
                        <div class="portfolio-item">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="portfolio-thumbnail">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php
                    endwhile;
                else :
                    echo '<p>Aucune réalisation mise en avant.</p>';
                endif;

                wp_reset_postdata();
                ?>
            </div>
        </section>
    </div>

<?php get_footer(); ?>