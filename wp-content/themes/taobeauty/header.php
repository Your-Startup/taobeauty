<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Taobeauty
 */

$sub_menu = get_field('menu', 'options')
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'taobeauty' ); ?></a>

	<header id="masthead" class="">
		<div class="container">
			<nav id="site-navigation" class="main-navigation header__nav">
				<div class="header__link">
					<?php the_custom_logo(); ?>
				</div><!-- .site-branding -->
				<div class="nav-wrapper">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-header',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</div>
			</nav><!-- #site-navigation -->
		</div>	
	</header><!-- #masthead -->

	<?php if ($sub_menu) : ?>
		<div class="fixed-menu">
			<div class="fixed-menu__bg"></div>
			<div class="fixed-menu__block">
				<div class="container">
					<ul class="fixed-menu__list">
						<?php foreach ($sub_menu as $item) : ?>
							<?php $section = $item['section']; ?>
							<li>
								<div class="fixed-menu__title">
									<?= $section['section_title'] ?>
								</div>
								<div class="fixed-menu__wrap">
									<?php if ($section['columns']) : ?>
										<?php foreach ($section['columns'] as $column) : ?>
											<?php if ($column['item']) : ?>
												<ul class="fixed-menu__list-sec">
													<?php foreach ($column['item'] as $menu_item) : ?>
														<?php 
															$link = '/'; 
															switch ($menu_item['type']) {
																case 'category':
																	$link = esc_url(get_category_link($menu_item['category']));
																	break;
																case 'service':
																	$link = get_permalink($menu_item['service']);
																	break;
																case 'custom-link':
																	$link = $menu_item['link'];
																	break;
															}
														?>
														<li>
															<a href="<?= $link ?>">
																<?= $menu_item['text'] ?>
															</a>
														</li>
													<?php endforeach; ?>
												</ul>
											<?php endif; ?>
										<?php endforeach; ?>
									<?php endif; ?>
								</div>
							</li> 
						<?php endforeach; ?>
					</ul>
					<div class="fixed-wrap__help">
						<span>
							Не знаете, какая процедура подходит именно Вам?
						</span>
						<a href="/#services-section" class="js-close-link">
							Выбрать услугу по проблемам
						</a>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
