<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/lib.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="main">
		<header class="header color-white">
			<div class="row">
				<div class="col-md-12">
					<div class="logo pull-left"> <a href="<?php echo esc_url(home_url('/')); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Black Packers" title="Black Packers"> </a> </div>
					<div class="menu pull-right">
						<div class="mobile-menu-toggle"> 
							<span></span>
							<span></span>
						  </div>
						<?php if (has_nav_menu('primary')):
                            $menuargs = array(
                                'theme_location' => 'primary',
                                'container' => false,
                                'menu_class' => 'main-menu',
                            );
                            wp_nav_menu($menuargs);
                        endif;
                        ?>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</header>