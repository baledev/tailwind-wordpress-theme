<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tailwind
 */

?>

<div class="max-w-screen-xl mx-auto px-5">
	<header id="masthead" class="flex flex-col lg:flex-row justify-between items-center my-5">
		<div class="flex w-full lg:w-auto items-center justify-between">
			<?php
			if (is_front_page()) :
			?>
				<h1 class="text-lg font-bold text-primary-500"><?php bloginfo('name'); ?></h1>
			<?php
			else :
			?>
				<a class="text-lg font-bold text-primary-500" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
			<?php
			endif;
			?>

			<div class="block lg:hidden">
				<button id="astronav-menu" aria-label="Toggle Menu">
					<svg fill="currentColor" class="w-4 h-4 text-gray-800" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<title>Toggle Menu</title>
						<path class="astronav-close-icon astronav-toggle hidden" fill-rule="evenodd" clip-rule="evenodd" d="M18.278 16.864a1 1 0 01-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 01-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 011.414-1.414l4.829 4.828 4.828-4.828a1 1 0 111.414 1.414l-4.828 4.829 4.828 4.828z">
						</path>
						<path class="astronav-open-icon astronav-toggle" fill-rule="evenodd" d="M4 5h16a1 1 0 010 2H4a1 1 0 110-2zm0 6h16a1 1 0 010 2H4a1 1 0 010-2zm0 6h16a1 1 0 010 2H4a1 1 0 010-2z"></path>
					</svg>
				</button>
			</div>
		</div>
		
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id' => 'primary-menu',
				'container' => 'nav',
				'container_class' => 'astronav-items astronav-toggle hidden w-full lg:w-auto mt-2 lg:flex lg:mt-0',
				'menu_class' => 'flex flex-col lg:flex-row lg:gap-3',
				'anchor_class' => 'flex lg:px-3 py-2 items-center text-gray-600 hover:text-gray-900',
				'walker' => new Tailwind_Menu_Walker(),
				'show_caret' => true,
			)
		);
		?>

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-2',
				'menu_id' => 'auth-menu',
				'container' => 'nav',
				'container_class' => 'astronav-items astronav-toggle hidden w-full lg:w-auto mt-2 lg:flex lg:mt-0',
				'menu_class' => 'flex flex-col lg:flex-row lg:gap-3',
				'anchor_class' => 'flex lg:px-3 py-2 items-center text-gray-600 hover:text-gray-900',
			)
		);
		?>
	</header><!-- #masthead -->
</div>