<!-- |||||||||||||||||||||||| NOVOS RECURSOS |||||||||||||||||||||||| -->
<section id="recursos" class="structure-main__section  <?php blockResourceBackgroundType(); ?>" <?php resourceCustomBackground(); ?>>
	<div class="row">
			<span class="structure-main__section--icon structure-main__section--icon-recursos"></span>
			<div class="medium-12 columns">
			<?php blockResourceTitle(); ?>
			</div> <!-- //medium-12 columns-->

<div class="medium-8 medium-centered columns">
			<!-- ul.small-block-grid-2.medium-block-grid-3>(li>img[src="assets/img/features/img$" alt="nome-do-recurso"]{legenda})*6 -->
			<ul class="lista-de-recursos small-block-grid-2 medium-block-grid-3">





								<?php /*contadores */ $i=0;	$id=0;?>
									<?php	if( have_rows('acf_block_resource__list_resource') ):  ?>

							 				     	<?php  while ( have_rows('acf_block_resource__list_resource')   ) : the_row() ;  ?>
																	<?php /*contadores */ 	$id++;?>

																	<?php $i++;
																			if( $i <= 6 ) {  ?>

																				<li class="lista-de-recursos__item">
																							<figure class="lista-de-recursos__figure">
																								<img class="lista-de-recursos__figure--image" data-reveal-id="modal-recursos-<?php echo $id; ?>" src="<?php the_sub_field('acf_block_resource__list_resource__thumb'); ?>" alt="<?php the_sub_field('acf_block_resource__list_resource__title'); ?>">
																								<figcaption class="lista-de-recursos__figure--caption"> <?php the_sub_field('acf_block_resource__list_resource__title'); ?>  </figcaption>
																							</figure>

																						<!--   inicia modal -->
																							<div id="modal-recursos-<?php echo $id; ?>" class="reveal-modal large" data-reveal aria-labelledby="videoModalTitle" aria-hidden="true" role="dialog">
																								 <div class="modal__midia">
																									 <?php $images = get_sub_field('acf_block_resource__list_resource__gallery');
																									 if( $images ): ?>
																											 <div  class="owl-carousel-single owl-carousel owl-theme">
																													 <?php $acfBlockResourceListResourceVideo = get_sub_field('acf_block_resource__list_resource__video');
																														 if( !empty($acfBlockResourceListResourceVideo) ): ?>
																														 <div class="item">
																																	 <div class="flex-video widescreen vimeo">
																																			<?php echo $acfBlockResourceListResourceVideo; ?>
																																	 </div> <!-- //flex-video -->
																															 </div><!-- //item -->
																														 <?php endif;  ?>

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
																														 <h2 id="modal-title" class="modal__conteudo--title"><?php the_sub_field('acf_block_resource__list_resource__title'); ?> </h2>
																											 </div><!-- //large-4 columns -->
																											 <div class="large-7 columns">
																												 <?php the_sub_field('acf_block_resource__list_resource__description');?>
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
				<a href="#" class="" data-reveal-id="modal-recursos-todos" >Veja todos os recursos <i class="icon icon-modal"></i></a>

				<!--   inicia modal -->
					<div id="modal-recursos-todos" class="reveal-modal large" data-reveal aria-labelledby="videoModalTitle" aria-hidden="true" role="dialog">
						<header class="reveal-modal-header">
			            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
		                  <span class="brand-altoqi-small brand-altoqi-small-light"></span>
		           </header>
								<div class="modal__conteudo">
	 								 <div class="medium-12 columns">
									 	<h2 class="bloco-recursos__lista__recursos--title">Lista de Recursos</h2>
									 	<ul class="bloco-recursos__lista__recursos--lista">


									 				 <?php  if( have_rows('acf_block_resource__list_resource') ):  ?>
									 					 <?php  while ( have_rows('acf_block_resource__list_resource') ) : the_row() ;  ?>

									 								 <li class="bloco-recursos__lista__recursos--lista--item"><?php the_sub_field('acf_block_resource__list_resource__title'); ?> 	</li>
									 					 <?php  endwhile;  ?>
									 			 <?php  endif; ?>
									 	</ul>
									 </div><!-- //small-12 columns -->



								</div> <!-- // modal-conteudo -->
 					</div> <!-- //fecha modal modal -->




			</div> <!-- //small-12 columns-->

	</div> <!-- //columns -->
</section> <!-- //  -->
<!-- |||||||||||||||||||||| ENDNOVOS RECURSOS ||||||||||||||||||||||| -->





<ol class="debug" style="display:_none">
	<li> <em> acf_block_resource__title :</em> <?php the_sub_field('acf_block_resource__title'); ?>  </li>
  <li> <em> acf_block_resource__helpline :</em> <?php the_sub_field('acf_block_resource__helpline'); ?>  </li>
  <li> <em> acf_block_resource__type_layout :</em> <?php the_sub_field('acf_block_resource__type_layout'); ?>  </li>
  <li> <em> acf_block_resource__custom_background :</em> <?php the_sub_field('acf_block_resource__custom_background'); ?>  </li>
  <li> <em> acf_block_resource__custom_background_image :</em> <?php the_sub_field('acf_block_resource__custom_background_image'); ?>  </li>
  <li> <em> acf_block_resource__custom_background_color :</em> <?php the_sub_field('acf_block_resource__custom_background_color'); ?>  </li>
  <li> <em> acf_block_resource__list_resource :</em>


  <?php

  // check if the repeater field has rows of data
  if( have_rows('acf_block_resource__list_resource') ):
   	// loop through the rows of data
      while ( have_rows('acf_block_resource__list_resource') ) : the_row();   ?>
        <?php // display a sub field value ?>

<ol>
<li> <em>acf_block_resource__list_resource__title:  </em> <?php the_sub_field('acf_block_resource__list_resource__title');   ?> </li>
<li> <em>acf_block_resource__list_resource__thumb:  </em> <?php the_sub_field('acf_block_resource__list_resource__thumb'); ?> </li>
<li> <em>acf_block_resource__list_resource__description:  </em> <?php the_sub_field('acf_block_resource__list_resource__description');?>
<li>

<?php $images = get_sub_field('acf_block_resource__list_resource__gallery');

if( $images ): ?>
    <div  class="owl-carousel-single" style="width: 600px">


				<?php  if( !empty(get_sub_field('acf_block_resource__list_resource__video') ) ): ?>
							<div class="item">
										<div class="flex-video widescreen vimeo">
											 <?php the_sub_field('acf_block_resource__list_resource__video');   ?>
										</div> <!-- //flex-video -->
								</div><!-- //item -->
				<?php endif;  ?>


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
<li>

<li> <em>acf_block_resource__list_resource__video:  </em> <?php the_sub_field('acf_block_resource__list_resource__video');   ?> </li>
</ol>

    <?php  endwhile;

  else :

      // no rows found

  endif;   ?>

<br>
<hr>
<br>

  </li>
</ol>
