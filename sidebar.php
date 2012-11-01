<!-- begin sidebar -->
<aside id="sidebar" class="grid_4">
<a href="#search" class="openModal">
<h2>Search</h2>
</a>
<aside id="search" class="modal">
<div>
<h2>Newest</h2>  
<ul>
<?php wp_get_archives('type=postbypost&limit=4'); ?>
</ul> 
      <h2>Search</h2>
   
<?php get_search_form(); ?>
<a href="#close" title="Close"></a>
</div>
</aside>
    <div class="break"></div> <br>
	<div class="cutting_line"></div>
 <ol>
 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
    <li id="categories">
      <h2>Categories</h2>
      <ul>
        <?php wp_list_categories('sort_column=name&title_li='); ?>
      </ul>
    </li>
    <li id="archives">
      <h2>Archives</h2>
      <ul>
        <?php wp_get_archives('type=monthly'); ?>
      </ul>
    </li>
    <li id="links">
      <h2>Links</h2>
      <ul>
        <?php get_bookmarks(-1, '<li>', '</li>', ' - '); ?>
      </ul>
    </li>
    <?php endif; ?>
  </ol>
</aside>
<!-- end sidebar -->