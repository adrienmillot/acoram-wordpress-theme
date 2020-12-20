<?php get_header() ?>

<?php if (have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
        <header>
            <h1><?php the_title() ?></h1>
            <?php the_date() ?>
        </header>
        <?php the_content() ?>
    <?php endwhile; ?>
<?php else: ?>
<?php endif; ?>

<?php get_footer() ?>
