<?php get_header(); ?>

<div class="portfolio-grid">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="portfolio-item">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="portfolio-thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    <?php endif; ?>
                </div>
                <p><?php the_excerpt(); ?></p>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Aucune réalisation trouvée.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
