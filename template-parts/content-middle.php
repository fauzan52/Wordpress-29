<div class="size-middlepost">
<div class="middlepost">
    <div class="middlepost__title">
        <h1>BASKET</h1>
    </div>
    <div class="middlepost__text">
        <div class="card">
            <ul>
                <?php
                $CategoryBasket = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 999,
                    'cat'            => 4
                ));
                ?>
                <?php
                while ($CategoryBasket->have_posts()) : $CategoryBasket->the_post();
                    ?>
                    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </ul>
        </div>
    </div>
</div>
<div class="middlepost">
    <div class="middlepost__title">
        <h1><?php $cat = get_the_category();
            echo $cat[0]->cat_name; ?></h1>
    </div>
    <div class="middlepost__text">
        <div class="card">
            <ul>
                <?php
                $CategoryBola = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 999,
                    'cat'            => 3,
                ));
                ?>
                <?php
                while ($CategoryBola->have_posts()) : $CategoryBola->the_post();
                    ?>
                    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </ul>
        </div>
    </div>
</div>
    <div class="middlepost">
        <div class="middlepost__title">
            <h1>KALENDER</h1>
        </div>
        <div class="middlepost__text">
            <div class="card">
                <div class="calenderfauzan">
                <?php get_template_part( 'template-parts/content', 'calender' ); ?>
                </div>
            </div>
        </div>

</div>