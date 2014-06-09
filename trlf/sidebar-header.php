<?php theme_print_sidebar('header-widget-area'); ?>


    <div class="art-shapes">
        <div class="art-object412944306"></div>

            </div>

<?php if(theme_get_option('theme_header_show_headline')): ?>
	<?php $headline = theme_get_option('theme_'.(is_home()?'posts':'single').'_headline_tag'); ?>
	<<?php echo $headline; ?> class="art-headline-one">
    <a href="<?php echo get_option('home'); ?>/">THE<br /></a>
</<?php echo $headline; ?>>
	<<?php echo $headline; ?> class="art-headline">
    <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
</<?php echo $headline; ?>>
<?php endif; ?>
<?php if(theme_get_option('theme_header_show_slogan')): ?>
	<?php $slogan = theme_get_option('theme_'.(is_home()?'posts':'single').'_slogan_tag'); ?>
		<<?php echo $slogan; ?> class="art-slogan">
			<?php bloginfo('description'); ?>
			<div class="art-header-text">1777 Western Ave. Albany, NY 12203 • Phone: 518-869-1205 • Fax: 518-452-2145</div>
			<div class="art-header-attorney-left">Denise McCarthy Randall</div>
			<div class="art-header-attorney-right">Robert G. Randall</div>
		</<?php echo $slogan; ?>>
<?php endif; ?>



<a href="#" class="art-logo art-logo-497160856">
    <img src="<?php bloginfo('template_url'); ?>/images/logo-497160856.png" alt="" />
</a>

<?php if (theme_get_option('theme_use_default_menu')) { wp_nav_menu( array('theme_location' => 'primary-menu') );} else { ?><nav class="art-nav">
    <div class="art-nav-inner">
    <?php
	echo theme_get_menu(array(
			'source' => theme_get_option('theme_menu_source'),
			'depth' => theme_get_option('theme_menu_depth'),
			'menu' => 'primary-menu',
			'class' => 'art-hmenu'
		)
	);
	get_sidebar('nav'); 
?> 
        </div>
    </nav><?php } ?>                  