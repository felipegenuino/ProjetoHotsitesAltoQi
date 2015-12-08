
<!-- |||||||||||||||||||||||| NOVOS RECURSOS |||||||||||||||||||||||| -->
<section id="recursos" class="structure-main__section  section-dark">
	<div class="row">
			<span class="structure-main__section--icon structure-main__section--icon-recursos"></span>
			<div class="medium-12 columns">
				<h2 class="section__title--secondary">
					<span>Além de todos os recursos presentes no Eberick V9, <strong>o Eberick V10</strong> </span>
					<span> <strong>conta com 6 novos recursos e melhorias</strong>, focados sempre  </span>
					<span> no ganho de tempo e aumento de produtividade: </span>
				</h2>
			</div> <!-- //medium-12 columns-->

<div class="medium-8 medium-centered columns">
			<!-- ul.small-block-grid-2.medium-block-grid-3>(li>img[src="assets/img/features/img$" alt="nome-do-recurso"]{legenda})*6 -->
			<ul class="lista-de-recursos small-block-grid-2 medium-block-grid-3">
				<li class="lista-de-recursos__item">
					<figure class="lista-de-recursos__figure">
					  <img class="lista-de-recursos__figure--image" data-reveal-id="modal-recursos" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eberick-v10/resources/resources_ifc.svg" alt="Exportar formato .IFC">
					  <figcaption class="lista-de-recursos__figure--caption" >Exportar formato .IFC</figcaption>
					</figure>
				 </li>
				<li class="lista-de-recursos__item">
					<figure class="lista-de-recursos__figure">
					  <img class="lista-de-recursos__figure--image" data-reveal-id="modal-recursos" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eberick-v10/resources/resources_planta-de-forma.svg" alt="Cotas automáticas na planta de forma ">
					  <figcaption class="lista-de-recursos__figure--caption" >Cotas automáticas na <br> planta de forma </figcaption>
					</figure>
				 </li>

				<li class="lista-de-recursos__item">
					<figure class="lista-de-recursos__figure">
					  <img class="lista-de-recursos__figure--image" data-reveal-id="modal-recursos" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eberick-v10/resources/resources_flexas.svg" alt="Verificações das Flechas">
					  <figcaption class="lista-de-recursos__figure--caption" >Verificações das Flechas</figcaption>
					</figure>
				 </li>

				<li class="lista-de-recursos__item">
					<figure class="lista-de-recursos__figure">
					  <img class="lista-de-recursos__figure--image" data-reveal-id="modal-recursos" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eberick-v10/resources/resources_estribos-multiplos-e-em-formato-u.svg" alt="Estribos Múltiplos e em formato U">
					  <figcaption class="lista-de-recursos__figure--caption" >Estribos Múltiplos e em <br> formato U</figcaption>
					</figure>
				 </li>

				<li class="lista-de-recursos__item">
					<figure class="lista-de-recursos__figure">
					  <img class="lista-de-recursos__figure--image" data-reveal-id="modal-recursos" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eberick-v10/resources/resources_exportar-arquivos-para-impressoras-3d.svg" alt="Exportar arquivos para impressoras 3D">
					  <figcaption class="lista-de-recursos__figure--caption" >Exportar arquivos para <br> impressoras 3D</figcaption>
					</figure>
				 </li>

 				<li class="lista-de-recursos__item">
					<figure class="lista-de-recursos__figure">
					  <img class="lista-de-recursos__figure--image" data-reveal-id="modal-recursos"  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eberick-v10/resources/resources_paredes-de-contencao-e-de-reservatorios-continuos.svg" alt="Paredes de contenção e de reservatórios contínuos">
					  <figcaption class="lista-de-recursos__figure--caption" >Paredes de contenção e de <br> reservatórios contínuos</figcaption>
					</figure>
				 </li>

			</ul>
</div> <!-- //large-8 columns-->

			<div class="small-12 columns">
				<a href="#" class="">Veja todos os recursos <i class="icon icon-modal"></i></a>
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
<pre>
<ol>
<li> <em>acf_block_resource__list_resource__title:  </em> <?php the_sub_field('acf_block_resource__list_resource__title');   ?> </li>
<li> <em>acf_block_resource__list_resource__thumb:  </em> <?php the_sub_field('acf_block_resource__list_resource__thumb');   ?> </li>
<li> <em>acf_block_resource__list_resource__description:  </em> <?php the_sub_field('acf_block_resource__list_resource__description');   ?>
<li>

   <em>acf_block_resource__list_resource__gallery:  </em>


<?php
$images = get_sub_field('acf_block_resource__list_resource__gallery');

if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo $image['url']; ?>">
                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <p><?php echo $image['caption']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<li>

<li> <em>acf_block_resource__list_resource__video:  </em> <?php the_sub_field('acf_block_resource__list_resource__video');   ?> </li>
</ol>
</pre>
    <?php  endwhile;

  else :

      // no rows found

  endif;

  ?>

<br>
<hr>
<br>

  </li>
</ol>
