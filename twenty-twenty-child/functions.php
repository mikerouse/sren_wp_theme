<?php
/**
 * Child functions and definitions
 */
function prefix_category_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'prefix_category_title' );

add_action( 'after_setup_theme', 'get_page_template_layout_type' );
/** Function to return the correct class or name of the type of template being used. For example full-page-no-title
 *
 * @return (string) $output
 */
function get_page_template_layout_type() 
{
	$content_layout_type = "thin";
	
	if (is_page_template( 'templates/template-full-width.php' ))
	{
		// Full Width with Title
		$content_layout_type = "full-width";
	}	
	
	if (is_page_template( 'templates/template-full-width-no-title.php' ))
	{
		// Full Width No Title	
		$content_layout_type = "full-width-no-title";
	}
	
	return $content_layout_type;
}
?>