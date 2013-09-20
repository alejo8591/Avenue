<?php get_header(); ?>

<div id="content">
<h1 class="pagetitle">		
<?php
	$mySearch =& new WP_Query("s=$s & showposts=-1");
	$num = $mySearch->post_count;
	echo $num.' search results for '; the_search_query();
	?> in <?php  get_num_queries(); ?> <?php timer_stop(1); ?> seconds.
</h1>

<?php if (have_posts()) : ?>
<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>	

<div class="post spost" id="post-<?php the_ID(); ?>">

<div class="title">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>

<div class="entry">
	<?php wpe_excerpt('wpe_excerptlength_archive', ''); ?>
	
</div>

</div>

<?php endwhile; ?>

<?php getpagenavi(); ?>

<?php else : ?>

<div class="title">
		<h2>Su búsqueda - <?php the_search_query();?> - no coincide con ninguna entrada.</h2>
</div>


<div class="entry">
<p>Sugerencias:</p>
<ul>
   <li>  Asegúrese de que todas las palabras estén escritas correctamente.</li>
   <li>  Pruebe con diferentes palabras clave.</li>
   <li>  Intente usar palabras más generales.</li>
</ul>
</div>

<?php endif; ?>


   
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>