<?php get_header();?>

  <div class="content-area bg-info text-white p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                        <h2>Blog post</h2>
                        <hr>
                        <div class="row">
                        <?php while(have_posts()): the_post(); ?>
                           <div class="col-md-6">
                           <div class="post">
                                <h3><a class="text-white" href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                <?php the_post_thumbnail('blog-post-image-size',array(
                                    'class' => 'img-fluid img-thumbnail'
                                ));?>
                                <p><?php the_excerpt();?></p>
                                <a class="btn btn-primary" href="<?php the_permalink();?>">Read more</a>
                            </div>
                        </div>
                        <?php endwhile;?>
                        <?php the_posts_pagination(array(
                            'screen_reader_text' => ' ',
                        ));?>
                    </div>

                </div>
                <?php get_sidebar();?>
            </div>
        </div>
  </div>




  <?php get_footer();?>