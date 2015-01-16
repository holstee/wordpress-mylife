<?php get_header(); ?>
  
  <input type="hidden" name="site" value="mylife">
  <input type="hidden" name="template" value="single">

   <div class="container-fluid tk-ff-tisa-web-pro" id="mylife-single-primary">
      <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <div class="row">
          <div class="span5 padding-bottom20">
            <div class="image"> <?php the_post_thumbnail( 'large' ); ?> </div>
            <h1 class="name"> <?php the_title(); ?> </h1>
            <div class="location"> <?php echo get_post_meta($post->ID, 'cf_location', true); ?> </div>
            <hr>
            <div class="share tk-brandon-grotesque"> <a href="#share" class="hide"><i class="icon-share-sign"></i> Share this with friends </a></div>
            <div class="tk-brandon-grotesque"> <a href="#comments"><i class="icon-comment"></i> Comment on this story </a></div>
            <div class="tk-brandon-grotesque"> <a id="trigger-previous" href="<?php print(get_adjacent_post(false,"",false)->guid); ?>"><i class="icon-chevron-sign-left"></i>  Previous : </a> <?php print(get_adjacent_post(false,"",false)->post_title); ?></div>
            <div class="tk-brandon-grotesque"> <a id="trigger-next"href="<?php print(get_adjacent_post()->guid); ?>"><i class="icon-chevron-sign-right"></i> Next : </a> <?php print(get_adjacent_post()->post_title); ?></div>
          </div>
          <div class="span7">
            <div class="row">
              <div class="span7 content">
                <?php the_content(); ?>
              </div>
              <div class="span7" id="comments">
                <?php comments_template(); ?> 
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; else: ?>
        <div class="row">
          <div class="span12">
            <p>Sorry, no posts matched your criteria.</p>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>

    <!--
  <script src="<?php bloginfo('template_directory');?>/components/jquery/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory');?>/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_directory');?>/components/jquery-masonry/jquery.masonry.min.js"></script>
  <script src="<?php bloginfo('template_directory');?>/components/infinite-scroll/jquery.infinitescroll.js"></script>
  <script src="<?php bloginfo('template_directory');?>/scripts.js"></script>
  -->
<?php get_footer(); ?>

<?php /*
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
*/ ?>