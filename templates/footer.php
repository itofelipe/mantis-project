	<footer>
		<section class="section-footer text-center">
			<img src="<?php echo get_template_directory_uri(); ?>/images/icon.png">
			<p><span>MANTIS</span> PROJECT</p>
		</section>
	</footer>

	<?php 

add_action( 'dynamic_sidebar', 'wpse_96681_hr' );

function wpse_96681_hr( $widget )
{
    static $counter = 0;

    // right sidebar in Twenty Ten. Adjust to your needs.
    if ( 'primary-widget-area' !== key( $GLOBALS['wp_registered_sidebars'] ) )
        return;

    if ( 0 !== $counter && 0 === $counter % 3 )
        print '<hr>';

    $counter += 1;
}
	 ?>