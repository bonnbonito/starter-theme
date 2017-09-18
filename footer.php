<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BonnJoel
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bonnjoel' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'bonnjoel' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'bonnjoel' ), 'bonnjoel', '<a href="https://automattic.com/">Automattic</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<nav id="mobile-menu" class="mobile-menu" role="navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
</nav><!-- #site-navigation -->

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(function() {
            FastClick.attach(document.body);
        });
        $('#mobile-menu').mmenu({
            'extensions': [
                'pagedim-black',
                'theme-dark'
            ],
            'navbar': {
                'add': true
            },
            'navbars': [
                {
                    'position': 'top'
                },
                {
                    'position': 'bottom',
                    'content': [
                        '<a href="#/" title="Follow Our Facebook"><i class="facebook f icon"></i></a>',
                        '<a href="#/" title="Follow Our Twitter"><i class="twitter icon"></i></a>',
                        '<a href="#/" title="Follow Our Instagram"><i class="instagram icon"></i></a>',
                    ]
                }
            ]
        });
        var API = $("#mobile-menu").data( "mmenu" );
        $(".menu-toggle").click(function() {
            API.open();
        });
    });
</script>

<?php wp_footer(); ?>

</body>
</html>