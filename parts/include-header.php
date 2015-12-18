
<!-- |||||||||||||||||||||||| HEADER |||||||||||||||||||||||| -->
	 <header class="strutcture-header z-2">
	    <a href="#" class="strutcture-header__brand strutcture-header__brand--altoqi">AltoQi</a>
	 		<a href="#" class="right show-for-small-only trigger-menu">menu</a>
	         <nav class="strutcture-header__nav">
	           <ul class="strutcture-header__list">
							 <?php while ( have_rows('acf_flexible_content_blocks') ) : the_row(); ?>

								 <?php if (get_sub_field('acf_block_generic__menu_question_have') == TRUE): ?>
									 			<li class="strutcture-header__list--item">
															<a class="strutcture-header__list--item-link" href="#<?php echo the_sub_field('acf_block_generic__id'); ?>">

<span class="strutcture-header__list--item-link-icon">
<?php

$imageIcon = get_sub_field('acf_block_generic__menu_icon');

if( !empty($imageIcon) ): ?>

	<img src="<?php echo $imageIcon['url']; ?>" alt="<?php echo $imageIcon['alt']; ?>" />

<?php endif; ?>

 																		</span>

																	<span class="strutcture-header__list--item-link-text">	<?php echo the_sub_field('acf_block_generic__menu_name'); ?></span>
														</a>
												</li>
								 <?php  endif; ?>
							<?php endwhile;   ?>
						 </ul>
	         </nav>
	 </header>
<!-- |||||||||||||||||||||| ENDHEADER ||||||||||||||||||||||| -->
