<?php get_header(); ?>
<!-- content start -->
<section>
<article class="grid_8">

  <?php if (have_posts()) : while (have_posts()) : the_post(); 
  if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
<div id="post">
  <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
    <div id="content">
	<?php
    $attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order'));
    if ( ! is_array($attachments) ) continue;
    $count = count($attachments);
    $first_attachment = array_shift($attachments);
    ?>
<p><?php echo wp_get_attachment_image($first_attachment->ID); ?><?php
$myExcerpt = get_the_excerpt();
if ($myExcerpt != '') {
    // Some string manipulation performed
}
echo $myExcerpt; // Outputs the processed value to the page
?></p> 
    </div>       
    <div class="clear"></div><br>

    <div class="meta">Posted <?php the_date(); ?> @<?php the_time() ?>
      <br>
      <?php _e("Filed under:"); ?>
      <?php the_category(',') ?>
      <?php wp_link_pages(); ?>
    </div>
    <div class="clear"></div>
  </div>
  </div>
  <?php endwhile; else: ?>
  <p>
    <?php _e('Sorry, no posts matched your criteria.'); ?>
  </p>
  <?php endif; ?>
<nav class="meta grid_5">
    <?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>
  </nav>
  
</article>
  
<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>
