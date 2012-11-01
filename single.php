<?php get_header(); ?>
<section>
<article class="grid_8">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="post-single">
    <h3 id="title">
      <?php the_title(); ?>
    </h3>
    <div id="content-single">
     <p> <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?></p>
	 

	</div><br>
    <!-- end entry-content -->
    <div class="meta">
Posted on <?php the_date(); ?> @ <?php the_time() ?>
     
    </div><br>
<div class="postauthor">

<p>
<a href="<?php bloginfo('url'); ?>/?author=<?php  the_author_meta('ID'); ?>" title="<?php the_author_meta ('first_name'); ?> <?php the_author_meta ('last_name'); ?>" alt="<?php the_author_meta ('first_name'); ?> <?php the_author_meta ('last_name'); ?>"><?php the_author_meta ('first_name'); ?> <?php the_author_meta ('last_name'); ?> | has posted <?php the_author_posts(); ?> articles.</a>
</p>
<p><?php echo get_avatar( get_the_author_id() , 30 ); ?></p>

<p><?php the_author() ?></p>
</div>	<br>
  <!-- end post --> 

 <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>


 <?php wp_list_comments( $args ); ?>


 <?php comments_template( $file, $separate_comments ); ?>
 <?php endwhile; else: ?>
  <?php _e('Sorry, no posts matched your criteria', 'blank'); ?>
  .
  <?php endif; ?>  </div>
</article>

<!-- end posts-wrap -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>