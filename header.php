<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OnPoint
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="main-wrapper">
    <div class="topbar-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <div class="widget">
                        <h4>Widget One</h4>
                    </div>
                </div>
                <div class="col-4">
                    <div class="widget">
                        <h4>Widget One</h4>
                    </div>
                </div>
                <div class="col-4">
                    <div class="widget">
                        <h4>Widget One</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navigation">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10">
				<?php
					$args = array(
						'theme_location' => 'primary',
					);
					wp_nav_menu($args);
					
				?>
                </div>
                <div class="col-lg-2">
                    <form action="#">
                          <div class="form-group">
                            <input type="text" class="form-control search-custom" id="exampleFormControlInput1" placeholder="Search...">
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col mx-auto">
                    <h3>ON POINT</h3>
                    <h5>A Wordpress Theme for Everyone</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Only -->
    <div class="mobile-menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <ul>
                        <li><button class="btn mobile-menu-btn"><i class="fa fa-list"></i></button></li>
                        <li><button class="btn close-menu-btn">;&times;</button></li>
                        <li><h3>ON POINT</h3></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-mobile">
		<?php
		$args = array(
			'theme_location' => 'primary',
		);
		wp_nav_menu($args);
		
		?>
    </div>
    <!-- End Mobile Only -->