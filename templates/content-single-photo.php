<?php
/**
 * @package MF2_S
 * Single View For the Photo Post Kind
 */

if (!has_post_thumbnail() )
    {
	get_template_part('templates/content-single');
    }
else {
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); mf2_s_semantics("post"); ?>>
        <?php get_template_part( 'templates/entry', 'header' ); ?>
	<! -- Displays the featured image sizes as a responsive image -->
	<div class="entry-content e-content" itemprop="description articleBody">
	  <?php resp_featured_image( get_post_thumbnail_id( $post->ID ), "75vw"); ?>
	<!-- srcset full size image -->
	</div>
	<?php get_template_part( 'templates/entry', 'footer' ); ?>
</article><!-- #post-## -->
<?php } ?>
