<?php get_header(); ?>
<section>
<article class="grid_8">
  <?php if (have_posts()) : while (have_posts()) : the_post();?>
<div id="post-single">
  <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <h3 class="storytitle"><?php the_title(); ?></h3>
<?php the_content() ?>
    <div class="meta"> Posted by:
      <?php the_author() ?>
      on
      <?php the_date(); ?>
      @
      <?php the_time() ?>
      <?php edit_post_link(__('Edit This')); ?>
      <br />
      <?php _e("Filed under:"); ?>
      <?php the_category(',') ?>
      <?php wp_link_pages(); ?>
    </div>
    <div class="clear"></div>
  </div>
  </div>
  <?php endwhile; else: ?>
   <?php comment_form(); ?>

  <p>
    <?php _e('Sorry, no posts matched your criteria.'); ?>
  </p>
  <?php endif; ?>

</article>
<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>