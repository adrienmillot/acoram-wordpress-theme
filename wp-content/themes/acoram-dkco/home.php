<?php get_header() ?>

<?php if (have_posts()): ?>
    <section>
        <?php while(have_posts()): the_post(); ?>
            <a href="<?php the_permalink(); ?>">
                <div class="card" style="width: 18rem;">
                    <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height:auto;']); ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title() ?></h5>
                    </div>
                    <div class="card-footer text-muted">
                        <?php the_date() ?>
                    </div>
                </div>
            </a>
        <?php endwhile; ?>
    </section>
<?php else: ?>
<?php endif; ?>

<?php get_footer() ?>
