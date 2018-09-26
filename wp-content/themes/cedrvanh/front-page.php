<!--- THE HEADER -->
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
    
            <div class="row">
                <div class="col-12">
                    <div class="jumbotron">
                        <!-- als er posts zijn, loop door de posts, geef mij de huidige post -->
                        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                            <h1 class="display-4"><?php the_title(); ?></h1>
                            <p class="lead"><?php the_content(); ?></p>
                        <!-- loop sluiten -->
                        <?php endwhile; ?>
                        <!-- sluit de if-conditional -->
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h2><?php echo __('Recente posts'); ?></h2>
                </div>
            </div>


            <?php $myfirstquery = new WP_Query(array('category_name' => 'algemeen', 'posts_per_page' => 2, 'order' => 'DESC')); ?>
            <?php $mysecondquery = new WP_Query(array('category_name' => 'weetjes', 'posts_per_page' => 2, 'order' => 'ASC')); ?>

            <div class="row">
                <?php if($myfirstquery->have_posts()) : while($myfirstquery->have_posts()) : $myfirstquery->the_post(); ?>    
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile;  else : ?>
                    <div class="col-12">
                        <h2>Geen posts gevonden!</h2>
                    </div>
                <?php endif; ?>
            </div>
                
            <div class="row">
                <div class="col-12">
                    <h2 class="mt-4"><?php echo __('Weetjes'); ?></h2>
                </div>
            </div>

            <div class="row">
                <?php if($mysecondquery->have_posts()) : while($mysecondquery->have_posts()) : $mysecondquery->the_post(); ?>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; else : ?>
                    <div class="col-12">
                        <h2>Geen weetjes gevonden!</h2>
                    </div>
                <?php endif; ?>
            </div>
    
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="col-4">
            <!--- THE SIDEBAR -->
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<!--- THE FOOTER -->
<?php get_footer(); ?>
