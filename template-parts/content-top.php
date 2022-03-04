<br><br>
<?php
//$ourCurrentPage = get_query_var('paged');
$PrimaryPost = new WP_Query(array(
    'post_type'      => 'post',
    'posts_per_page' => 1,
));
?>
<?php if ($PrimaryPost->have_posts()) : ?>
    <?php while ($PrimaryPost->have_posts()) :
        $PrimaryPost->the_post(); ?>
    <main>

        <div class="primary-column">
        <div class="app-card">
            <div class="app-card__container">
                <div class="app-card__images__primary">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="image-post">
                    </a>
                </div>
                <div class="app-card__box">
                    <h3>
                        <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 10, ' ...'); ?></a>
                    </h3>
                    <p class="card-text"><?php echo wp_trim_words(get_the_content(), 60, ' ...'); ?></p>
                </div>
            </div>
        </div>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>
    <br><br>
    </div>
    <div class="flex">
    <?php
// code query
    $SekunderPost = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'offset'         => 1,
        'order'          => 'meta_value',
        'meta_query'     => array(
            'key'     => 'entry_views',
            'compare' => "=",
        )
    )); ?>
    <?php if ($SekunderPost->have_posts()) : ?>
        <?php while ($SekunderPost->have_posts()) : $SekunderPost->the_post(); ?>
            <div class="app-card distance">
                <div class="app-card__container">
                    <div class="app-card__images__secondary">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image-post">
                        </a>
                    </div>
                    <div class="app-card__box">
                        <h3>
                            <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 10, ' ...'); ?></a>
                        </h3>
                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 30, ' ...'); ?></p>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>

        </div>
        <br>
<!--        <div class="clear text-center">-->
<!--            <br>-->
<!--            --><?php
//            echo fauzan_pagination();
//            ?>
<!--        </div>-->

        </main>

    <?php endif; ?>
<?php endif; ?>
<br>
<br>
<br>


