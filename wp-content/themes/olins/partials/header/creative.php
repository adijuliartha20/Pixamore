<?php
$front_header = '';
if(is_front_page()){
	$front_header = 'fixed_header';
} ?>

<div id="mobilenav" class="mobilenav">
  <div class="middle-mv">
    <div class="center">
      <?php 
        wp_nav_menu( 
              array(
                  'menu' => 'Header Menu',
                  'menu_id'=> 'menu-mobile',
                  'menu_class'=>'mobile-menu clearfix',
                  'link_before'     => '<span>',
                  'link_after'      => '</span>',
              ) 
          );
      ?>
    </div>  
  </div>  
</div>




<header class="ale_header ale_header_creative font_two <?php echo esc_attr($front_header); ?> cf">
	<div class="content_wrapper desktop_header cf">
		<div class="header_flex_box">
			<div class="header_flex_child logo_container">
				<a href="<?php echo esc_url(home_url("/")); ?>" class="logo">
					<?php if(ale_get_option('sitelogo')){?>
						<img src="<?php echo esc_url(ale_get_option('sitelogo')); ?>" alt="logo" />
					<?php } else { ?>
						<h1><?php esc_attr(bloginfo('title')); ?></h1>
					<?php } ?>
					<span class="tagline">
						<?php echo esc_attr(get_bloginfo('description')); ?>
					</span>
				</a>
			</div>
			<div class="header_flex_child navigation_container">
				<?php if ( has_nav_menu( 'header_menu' ) ) { ?>
					<nav class="navigation header_nav">
						<?php
						wp_nav_menu(array(
							'theme_location'=> 'header_menu',
							'menu'			=> 'Header Menu',
							'menu_class'	=> 'menu menu-header ',
							'walker'		=> new Aletheme_Nav_Walker(),
							'container'		=> '',
						)); ?>
					</nav>
				<?php
				} ?>
				<?php


				/*if ( has_nav_menu( 'mobile_menu' ) ) {
					wp_nav_menu(array(
						'theme_location'=> 'mobile_menu',
						'menu'   => 'Mobile Menu',
						'menu_class' => 'mobilemenu',
						'container'  => '',
						'items_wrap' => '<select id="%1$s" class="%2$s drop">%3$s</select>',
						'indent_string' => '&ndash;&nbsp;',
						'indent_after' => '',
						'walker' => new Aletheme_Dropdown_Nav_Walker(),
					));
				} */

				?>
				<a href="javascript:void(0)" class="icon">
			      <div class="hamburger">
			        <div class="menui top-menu"></div>
			        <div class="menui mid-menu"></div>
			        <div class="menui bottom-menu"></div>
			      </div>
			    </a>

				
			</div>
			<div class="header_flex_child cart_container">
				<?php get_template_part('partials/header/cart_link'); ?>
			</div>
			<div class="header_flex_child search_container menu_pop_search">
				<div class="search_open_button">
					<i class="fa fa-search" aria-hidden="true"></i>
				</div>
				<div class="pop_search_form_container cf">
					<form class="search" role="search" method="get" id="header_search_form" action="<?php echo site_url()?>" >
						<fieldset>
							<input type="text" class="searchinput" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php esc_html_e('Type here...', 'olins')?>" />
							<input type="submit" id="searchsubmit" value="&#xf002" />
							<span class="close_the_form"><i class="fa fa-times" aria-hidden="true"></i></span>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</header>