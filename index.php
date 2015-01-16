<?php get_header(); ?>

  <input type="hidden" name="site" value="mylife">
  <input type="hidden" name="template" value="index">

  <div class="container-fluid fixme-holder" id="bgfg-primary">
    <div class="fixme">
      <div class="background">
        <img src="<?php bloginfo('template_directory');?>/assets/background.jpg">
        <div class="overlay"></div>
      </div>
      <div class="foreground">
        <div class="container">
          <div class="span12">
            <p class="tk-brandon-grotesque bigBrandon">WELCOME TO MYLIFE</p>
            <p class="tk-ff-tisa-web-pro jumbo">A collection of stories from our community on ways <br> they face adversity, see the world, and live their dreams.</p>
            <a href="/share-your-story" class="btn btn-primary btn-large tk-brandon-grotesque">Share your story &amp; passion</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid raise">

    <div class="container-fluid hide" id="mylife-secondary-dummy" style="height:98px">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </div>

    <div class="container-fluid" id="mylife-secondary">
      <div class="container">
        <div class="row">
          <div class="span12 tk-ff-tisa-web-pro jumbo" id="swap">
            <h2 id="swap-quote">“The moment I fell in love with dinosaurs and spaceships...”</h2>
            <a href="/about" id="swap-link"><span id="swap-name">Lee Ann</span> <span id="swap-location" class="hide">Texas<span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid tk-brandon-grotesque" id="mylife-tertiary">
      <div class="container">
        <div class="row">
            <a href="/share-your-story" class="span3"><i class="icon-pencil"></i> Share your story</a>
            <a href="#share" class="span3"><i class="icon-share-sign"></i> Share with friends</a>
            <a href="#search" class="span3"><i class="icon-search"></i> Search Mylife</a>
        </div>
      </div>
    </div>

    <div class="container-fluid" id="mylife-quaternary">
      <div class="container">
        <div class="thumbnails masonry">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="span3 item">
            <a href="<?php the_permalink();?>" data-quote="<?php echo get_post_meta($post->ID, 'cf_quote', true); ?>" data-location="<?php echo get_post_meta($post->ID, 'cf_location', true); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
          </div>
          <?php endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="container-fluid" id="mylife-quinary">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="prev-link"><?php previous_posts_link('« Newer Entries', 0) ?></div>
            <div class="next-link"><?php next_posts_link('Older Entries »', 0); ?></div>
          </div>    
        </div>
      </div>
    </div>

  </div>

<?php get_footer(); ?>