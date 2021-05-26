<?php get_header();?>

  <div class="content-area bg-info text-white p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                        <hr class="text-danger">
                        <div class="row">
                        <?php while(have_posts()): the_post(); ?>
                           <div class="col-md-12">
                           <div class="post">
                                <h3><a class="text-white" href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                <?php the_post_thumbnail('blog-post-image-size',array(
                                    'class' => 'img-fluid img-thumbnail'
                                ));?>
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php endwhile;?>
                    </div>
                    <?php echo comments_template();?>

                </div>
                <?php get_sidebar();?>
            </div>
        </div>
  </div>


  <?php get_footer();?>