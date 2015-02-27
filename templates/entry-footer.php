<?php
/**
 * @package MF2_S
 * Entry Footer Separated into 
 */
?>
	<footer class="entry-footer section col span_3_of_3">
	<?php
        
	edit_post_link( __( 'Edit', 'mf2_s') , ' <span class="edit-link genericon genericon-edit">', '</span> ' );
	echo '<span class="kind-link genericon genericon-standard">';
	if (function_exists('get_post_kind'))
		{
			mf2_s_post_kind(true);
		}
	else{
			mf2_s_post_format(true);
	    }
	echo '</span> ';
        // Hide category and tag text for pages.
        if ( 'post' == get_post_type() ) {
		  echo '<span class="tagcat-links genericon genericon-tag">';
                  mf2_s_post_categories();
		  echo ' ';
                  mf2_s_post_tags() . ' </span>';
                  if (!is_single()) {
			echo ' ';
                        mf2_s_responses();
                                    }
        }
        // If the Syndication Links Plugin is installed, display links
        if (function_exists('get_syndication_links'))
                {
                   echo get_syndication_links();
                }
        // Defines a simple function to retrieve location, for use/future use by Simple Location
        if (function_exists('get_simple_location'))
                {
                   echo get_simple_location();
                }
	// add a filter to add additional footer_entry_meta as needed
	echo apply_filters( 'footer_entry_meta' , ''); 
	?>
	</footer><!-- .entry-footer -->
