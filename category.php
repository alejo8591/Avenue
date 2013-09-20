<?php get_header(); ?>

<div id="content" >
		<?php if (have_posts()) : ?>

		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
		<h1 class="pagetitle">Archivo de la &#8216;<?php echo single_cat_title(); ?>&#8217; Categoría</h1>

 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h1 class="pagetitle">Archivo para <?php the_time('F jS, Y'); ?></h1>

	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h1 class="pagetitle">Archivo para <?php the_time('F, Y'); ?></h1>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h1 class="pagetitle">Archivo para <?php the_time('Y'); ?></h1>

	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h1 class="pagetitle">Autor del Archivo</h1>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1 class="pagetitle">Archivo del Blog</h1>
		<?php } ?>




<?php while (have_posts()) : the_post(); ?>

		
<div class="post" id="post-<?php the_ID(); ?>">
<div class="title">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>
<div class="postmeta">
	<span class="author">Publicado por <?php the_author(); ?> </span> <span class="clock">  <?php the_time('M - j - Y'); ?></span> <span class="comm"><?php comments_popup_link('0 Comment', '1 Comment', '% Comments'); ?></span>
</div>
<div class="entry">


<?php
if ( has_post_thumbnail() ) { ?>
	<img class="postimg" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;h=150&amp;w=200&amp;zc=1" alt="" />
<?php } else { ?>
	<img class="postimg" src="<?php bloginfo('template_directory'); ?>/images/dummy.jpg" alt="" />
<?php } ?>

<?php wpe_excerpt('wpe_excerptlength_index', ''); ?>
<div class="clear"></div>
</div>


<div class="singleinfo">
<span class="category">Categorías: <?php the_category(', '); ?> </span>
</div>

</div>
<?php endwhile; ?>

<?php getpagenavi(); ?>

<?php else : ?>

	<h1 class="title">No se ha encontrado</h1>
	<p>Lo sentimos, pero usted está buscando algo que no está aquí.</p>

<?php endif; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>