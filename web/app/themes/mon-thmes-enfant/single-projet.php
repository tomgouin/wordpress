<?php get_header(); ?>

<main class="project-container">
    <article class="project-details">
        <h1><?php the_title(); ?></h1>

        <?php if (has_post_thumbnail()) : ?>
            <div class="project-thumbnail">
                <?php the_post_thumbnail('large'); ?>
            </div>
        <?php endif; ?>

        <p><strong>Client :</strong> <?php the_field('client'); ?></p>
        <p><strong>Date de réalisation :</strong> <?php the_field('date'); ?></p>
        <p><strong>Lien du projet :</strong> <a href="<?php the_field('lien'); ?>" target="_blank">Voir le projet</a></p>

        <div class="project-description">
            <?php the_content(); ?>
        </div>

        <?php if (have_rows('galerie')) : ?>
            <div class="project-gallery">
                <h2>Galerie d'images</h2>
                <?php while (have_rows('galerie')) : the_row(); ?>
                    <img src="<?php the_sub_field('image'); ?>" alt="Image du projet">
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </article>
</main>

<?php get_footer(); ?>; ?>