<?php get_header(); ?>
    <main>
        <?php if(have_posts( )){
            while(have_posts(  )){
                the_post(  );
                ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="menu-container">
                                <?php the_post_thumbnail("large"); ?>
                            </div>    
                        </div>
                    </div>
                <?php
            }
        }?>
    </main>
<?php get_footer(); ?>