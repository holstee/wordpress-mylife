<?php
/*
Template Name: form
*/
?>

<?php get_header(); ?>

   <div class="container-fluid" style="margin-top:20px">
      <div class="container">
        <div class="row">
          <div class="span12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
            endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>            
          </div>
        </div>
      </div>
    </div>


<?php get_footer(); ?>