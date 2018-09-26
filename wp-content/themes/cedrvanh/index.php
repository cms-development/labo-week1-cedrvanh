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

        </div>
        <div class="col-4">
            <!--- THE SIDEBAR -->
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<!--- THE FOOTER -->
<?php get_footer(); ?>
