<div class="row">
 	<div class="medium-12 columns">
			<!-- ul.small-block-grid-2.medium-block-grid-3>(li>img[src="assets/img/features/img$" alt="nome-do-recurso"]{legenda})*6 -->
			<ul class="lista-de-modulos small-block-grid-2 medium-block-grid-3">

								<?php /*contadores */ $i=0;	$id=0;?>
									<?php	if( have_rows('acf_block_module__list_modules') ):  ?>

							 				     	<?php  while ( have_rows('acf_block_module__list_modules')   ) : the_row() ;  ?>
																	<?php /*contadores */ 	$id++;?>

																	<?php // Se estiver clicado em listado na pagina inicial
																			if( get_sub_field('acf_block_module__list_module__dastaque') == TRUE ) {  ?>



																				<li class="lista-de-modulos__item">
																							<figure class="lista-de-modulos__figure">
																								<img class="lista-de-modulos__figure--image" data-reveal-id="modal-modulos-<?php echo $id; ?>" src="<?php the_sub_field('acf_block_module__list_module__thumb'); ?>" alt="<?php the_sub_field('acf_block_module__list_module__title'); ?>">
																								<figcaption class="lista-de-modulos__figure--caption"> <?php the_sub_field('acf_block_module__list_module__title'); ?>  </figcaption>
																							</figure>

																						<!--   inicia modal -->
																							<div id="modal-modulos-<?php echo $id; ?>" class="reveal-modal xlarge" data-reveal aria-labelledby="videoModalTitle" aria-hidden="true" role="dialog">
																								 <div class="modal__midia">

																											 <div  class="owl-carousel-single owl-carousel owl-theme">
																													 <?php $acfBlockmoduleListmoduleVideo = get_sub_field('acf_block_module__list_module__video');
																														 if( !empty($acfBlockmoduleListmoduleVideo) ): ?>
																														 <div class="item">
																																	 <div class="flex-video widescreen vimeo">
																																			<?php echo $acfBlockmoduleListmoduleVideo; ?>
																																	 </div> <!-- //flex-video -->
																															 </div><!-- //item -->
																														 <?php endif;  ?>

																														 <?php $images = get_sub_field('acf_block_module__list_module__gallery');
																														 if( $images ): ?>
																													 <?php foreach( $images as $image ): ?>
																															 <div class="item">
																																	 <!-- <a href="<?php echo $image['url']; ?>"> -->
																																				<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
																																	 <!-- </a> -->
																																	 <p class="owl-carousel-caption"><?php echo $image['caption']; ?></p>
																															 </div>
																													 <?php endforeach; ?>
																											 </div>
																									 <?php endif; ?>
																							 </div> <!-- // modal-midia -->
																										<div class="modal__conteudo">
																											 <div class="large-5 columns">
																														 <h2 id="modal-title" class="modal__conteudo--title"><?php the_sub_field('acf_block_module__list_module__title'); ?> </h2>
																											 </div><!-- //large-4 columns -->
																											 <div class="large-7 columns">
																												 <?php the_sub_field('acf_block_module__list_module__description');?>
																											 </div><!-- //large-8 columns -->
																										</div> <!-- // modal-conteudo -->
																								<a class="close-reveal-modal" aria-label="Close">&#215;</a>
																							</div> <!-- //fecha modal modal -->
																				</li>

																		<?php	} ?>


														<?php  endwhile;  ?>


 						  <?php  endif;   ?>

			</ul>
</div> <!-- //large-8 columns-->

			<div class="small-12 columns">
				<a href="#" class="" data-reveal-id="modal-modulos-todos" >Veja todos os Módulos <i class="icon icon-modal"></i></a>

				<!--   inicia modal -->
					<div id="modal-modulos-todos" class="reveal-modal xlarge" data-reveal aria-labelledby="videoModalTitle" aria-hidden="true" role="dialog">
						<header class="reveal-modal-header">
			            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
		                  <span class="brand-altoqi-small brand-altoqi-small-light"></span>
		           </header>
								<div class="modal__conteudo">
	 								 <div class="medium-12 columns">
									 	<h2 class="modal__content__title">Lista de Módulos</h2>
									 	<ul class="modal__content__list__basic--list">


									 				 <?php  if( have_rows('acf_block_module__list_modules') ):  ?>
									 					 <?php  while ( have_rows('acf_block_module__list_modules') ) : the_row() ;  ?>
									 								 <li class="modal__content__list__basic--list--item"><?php the_sub_field('acf_block_module__list_module__title'); ?> 	</li>
									 					 <?php  endwhile;  ?>
									 			 <?php  endif; ?>
									 	</ul>
									 </div><!-- //small-12 columns -->
								</div> <!-- // modal-conteudo -->
 					</div> <!-- //fecha modal modal -->
 			</div> <!-- //small-12 columns-->

	</div> <!-- //row -->

 
