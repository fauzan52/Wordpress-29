<div class="latestpost distance">
    <div class="latestpost-title">
        <h1>LATEST POST</h1>
    </div>
    <div class="latestpost-text">
        <div class="card">
            <ul>
                <?php
                $latestpost = new WP_Query('posts_per_page=5'); ?>
                <?php
                while ($latestpost->have_posts()) : $latestpost->the_post();
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