<?php get_header();?>

  <div class="content-area bg-info text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <?php while(have_posts()): the_post(); ?>
                           <div class="post">
                                <h3><?php //the_title();?></h3>
                                <p><?php the_content();?></p>
                            </div>
                        <?php endwhile;?>
                </div>
            </div>
        </div>
  </div>




  <?php get_footer();?>