<?php
/**
 * Template Name: Hotsites #1
 *
 */
?>

<?php get_header(); ?>

 
<!-- |||||||||||||||||||||||| HEADER |||||||||||||||||||||||| -->
	 <header class="strutcture-header z-2">
	     <a href="#" class="strutcture-header__brand strutcture-header__brand--altoqi">AltoQi</a>
	 		<a href="#" class="right show-for-small-only trigger-menu">menu</a>
	         <nav class="strutcture-header__nav">
	           <ul class="strutcture-header__list">
	             <li class="strutcture-header__list--item"> <a class="strutcture-header__list--item-link" href="#surpreenda-se">  <span class="strutcture-header__list--item-link-text">Surpreenda-se</span> </a></li>
	             <li class="strutcture-header__list--item"> <a class="strutcture-header__list--item-link" href="#recursos"> 		  <span class="strutcture-header__list--item-link-icon icon-recursos-lite"></span> 		<span class="strutcture-header__list--item-link-text">Recursos</span> </a></li>
	             <li class="strutcture-header__list--item"> <a class="strutcture-header__list--item-link" href="#ifc-bim"> 		  	<span class="strutcture-header__list--item-link-icon icon-ifcbim-lite"></span> 			<span class="strutcture-header__list--item-link-text">IFC/BIM</span> </a></li>
	             <li class="strutcture-header__list--item"> <a class="strutcture-header__list--item-link" href="#modulos"> 	      <span class="strutcture-header__list--item-link-icon icon-modulos-lite"></span>  		<span class="strutcture-header__list--item-link-text">Novos Módulos</span> </a></li>
	             <li class="strutcture-header__list--item"> <a class="strutcture-header__list--item-link" href="#eberick-next"> 	<span class="strutcture-header__list--item-link-icon icon-eberick-next-lite"></span> 	<span class="strutcture-header__list--item-link-text">Eberick Next</span> </a></li>
	           </ul>
	         </nav>
	 </header>
<!-- |||||||||||||||||||||| ENDHEADER ||||||||||||||||||||||| -->











<?php

// check if the flexible content field has rows of data
if( have_rows('acf_flexible_content_blocks') ):

     // loop through the rows of data
    while ( have_rows('acf_flexible_content_blocks') ) : the_row();
            if( get_row_layout() == 'bloco_hero' ):   		get_template_part( 'parts/block-hero' );
      	elseif( get_row_layout() == 'bloco_video' ): 		  get_template_part( 'parts/block-video' );
			  elseif( get_row_layout() == 'bloco_recursos' ): 	get_template_part( 'parts/block-resourses' );
        endif;


    endwhile;
else :

    // no layouts found

endif;

?>











<!-- |||||||||||||||||||||||| IFC-BIM |||||||||||||||||||||||| -->
 <section id="ifc-bim" class="structure-main__section  section-dark section-background-image"  style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/elements/backgrounds/img-projetos.jpg)" >
	<div class="row">
			<div class="medium-12 columns">
		  		<img class="section__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eberick-v10/logotipo-eberick-v10.svg" alt="">
		  		<h1 class="section__title"> <span>O futuro da </span>  <strong>construção civil chegou</strong>  </h1>
		  		<p class="lead">  O Eberick V10 trouxe consigo a revolução para as soluções aplicadas à projetos da construção civil ao incorporar a tecnologia BIM no seu DNA. Nessa nova versão, foi acrescentado o recurso que permite exportar o modelo da estrutura para um arquivo no formato IFC (Industry Foundation Classes), possibilitando aos diversos softwares BIM partilharem informações sobre os projetos. Assim, utilizando programas específicos para integração de projetos de diferentes disciplinas da construção (hidráulica, elétrica, estrutural, arquitetura e etc) é possível importar o modelo IFC do Eberick para realizar, por exemplo, a detecção de interferências entre os elementos da estrutura com demais disciplinas antes de sua efetiva construção.</p>
			</div> <!-- //row -->
	</div> <!-- //columns -->
</section> <!-- // section-hero -->
<!-- |||||||||||||||||||||||| END IFC-BIM |||||||||||||||||||||||| -->








<section id="modulos" class="structure-main__section section-dark">
	<div class="row">

			<span class="structure-main__section--icon structure-main__section--icon-modulos"></span>
			<div class="medium-12 columns">
				<h2 class="section__title--secondary">
					Confira os  <strong> novos módulos presentes no EBERICK V10 </strong>
				</h2>
			</div> <!-- //medium-12 -->

			<div class="medium-12 columns">

			<ul class="lista-de-modulos small-block-grid-1 medium-block-grid-2 medium-block-grid-3">
				<li class="lista-de-modulos__item">
					<figure class="lista-de-modulos__figure">
					  <img class="lista-de-modulos__figure--image" data-reveal-id="modal-modulos" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eberick-v10/modules/module1.jpg" alt="Maciço em Lajes">
					  <figcaption class="lista-de-modulos__figure--caption" >Maciço em Lajes</figcaption>
					</figure>
				 </li>
				<li class="lista-de-modulos__item">
					<figure class="lista-de-modulos__figure">
					  <img class="lista-de-modulos__figure--image" data-reveal-id="modal-modulos" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eberick-v10/modules/module2.jpg" alt="Editor de grelhas">
					  <figcaption class="lista-de-modulos__figure--caption" >Editor de grelhas</figcaption>
					</figure>
				 </li>
				<li class="lista-de-modulos__item">
					<figure class="lista-de-modulos__figure">
					  <img class="lista-de-modulos__figure--image" data-reveal-id="modal-modulos" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eberick-v10/modules/module3.jpg" alt="Concreto (CAD)">
					  <figcaption class="lista-de-modulos__figure--caption" >Concreto (CAD)</figcaption>
					</figure>
				 </li>
			</ul>
			</div> <!-- //large-8 columns-->

			<div class="small-12 columns">
				<a href="#" class="">Veja todos os módulos <i class="icon icon-modal"></i></a>
			</div> <!-- //small-12 columns-->

	</div> <!-- //columns -->

	</div> <!-- //columns -->
</section> <!-- //  -->





<!-- |||||||||||||||||||||||| EBERICK-NEXT |||||||||||||||||||||||| -->
<section id="eberick-next" class="structure-main__section section-light">
	<div class="row">
			<div class="medium-12 columns">
		  		<img class="section__brand" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eberick-v10/logotipo-eberick-next.png" alt="">
		  		<h1 class="section__title"> Participe do Eberick Next e ajude-nos a desenvolver a próxima versão do Eberick. </h1>
		  		<h3 class="section__subtitle-secondary"> Quem melhor que os projetistas para nos ajudar a desenvolver um software melhor a cada dia? </h3>
		  		<a href="#" class="section__button section__button--green "> Clique aqui e veja como participar </a>
			</div> <!-- //row -->
	</div> <!-- //columns -->
</section> <!-- // section-hero -->
<!-- |||||||||||||||||||||| END EBERICK-NEXT ||||||||||||||||||||| -->



<!-- |||||||||||||||||||||||| FORMULARIO DE CONTATO |||||||||||||||||||||||| -->
<section id="formulario" class="structure-main__section section-dark">
	<div class="row">

			<span class="structure-main__section--icon structure-main__section--icon-contact"></span>

			<div class="medium-12 columns">
 		  		<h1 class="section__title"> <strong>Formulário de contato</strong> </h1>
		  		<h3 class="section__subtitle-secondary"> Recebemos mais de 400 inscrições caso queira ficar na lista de espera, preencha o formulário abaixo</h3>
			</div> <!-- //medium-12 columns-->
 	</div> <!-- //row -->

 	 <div class="row">
 		<div class="medium-10 medium-centered columns">

 	<?php echo do_shortcode( '[contact-form-7 id="10" title="Formulário #1" html_class="formulario formulario-dark"]' ); ?>



		</div> <!-- //medium-8 columns-->
</div> <!-- //row -->

</section> <!-- // section-hero -->
<!-- |||||||||||||||||||||| END FORMULARIO DE CONTATO ||||||||||||||||||||| -->

































<!-- ||||||||||||||||||||||| FOOTER ||||||||||||||||||||||||| -->
	<footer class="strutcture-footer section-dark">
		 <div class="footer-top">

		 	 <span class="container-brand-altoqi">
 	 				<svg version="1.1"  class="brand-altoqi__footer brand-altoqi__footer-light" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 width="200px" height="50px" viewBox="0 0 200 50" enable-background="new 0 0 200 50" xml:space="preserve">
						<g id="Brand">
							<g id="simbol">
								<polygon fill="#6EAA77" points="36.83,-0.348 57.66,35.708 50.719,47.731 29.887,11.676 		"/>
								<polygon fill="#5A656C" points="16,35.708 27.595,15.646 34.521,27.703 22.944,47.731 		"/>
							</g>
							<g id="brand-name">
								<path fill="#5C656E" d="M127.347,25.679c-5.835,0-9.145,3.523-9.145,8.007v6.513c0,4.484,3.31,8.007,9.145,8.007
									c5.964,0,9.086-3.575,9.086-8.007v-6.513C136.433,29.255,133.311,25.679,127.347,25.679z M127.339,45.625
									c-5.605,0-5.269-3.729-5.269-8.627c0-4.927-0.337-8.738,5.269-8.738c5.608,0,5.228,3.813,5.228,8.738
									C132.566,41.923,132.947,45.625,127.339,45.625z"/>
								<path fill="#5C656E" d="M92.609,47.781h-4.531l-3.32-8.838h-12.47l-3.275,8.838h-4.306L76.28,18.669h5.024L92.609,47.781z
									 M83.681,35.939l-4.933-13.144h-0.404l-4.935,13.144H83.681L83.681,35.939z"/>
								<path fill="#5C656E" d="M99.758,47.793H95.72V18.681h4.038V47.793z"/>
								<path fill="#5C656E" d="M115.97,48.242c-3.776,0.131-5.921-0.472-6.996-1.413c-1.078-0.942-1.615-2.729-1.615-5.361V28.28h-4.525
									v-2.646h4.525v-6.953h4.083v6.953h4.53v2.646h-4.53v13.412c0,1.555,0.298,2.595,0.896,3.117c0.599,0.524,1.809,0.785,3.635,0.785
									v2.647H115.97z"/>
								<path fill="#5C656E" d="M172.616,22.896h-4.038v-4.215h4.038V22.896z M172.616,47.793h-4.038V25.679h4.038V47.793z"/>
								<path fill="#5C656E" d="M163.207,38.402v-9.974c0-5.839-3.908-9.851-11.373-9.851c-7.303,0-11.445,3.944-11.445,9.851v9.974
									c0,5.909,4.143,9.853,11.445,9.853c2.266,0,4.199-0.37,5.8-1.048L160.427,50l2.2-2.212l-2.288-2.288
									C162.236,43.769,163.207,41.312,163.207,38.402z M154.034,39.192l-2.2,2.214l3.526,3.527c-0.928,0.333-2.087,0.513-3.532,0.513
									c-7.768,0-7.301-5.167-7.301-11.952c0-6.826-0.467-12.106,7.301-12.106c7.767,0,7.239,5.28,7.239,12.106
									c0,3.978,0.176,7.375-1.212,9.521L154.034,39.192z"/>
							</g>
						</g>
						</svg>
		 	 </span> <!-- //container-brand-altoqi -->


<ul class="footer-nav__list">
	<li class="footer-nav__list-item"> <a class="footer-nav__list-item--links" target="_blank" href="doc.doc"> doc </a> </li>

	<li class="footer-nav__list-item"> <a class="footer-nav__list-item--links" target="_blank" href="http://qisat.com.br/"> Cursos </a> </li>
	<li class="footer-nav__list-item"> <a class="footer-nav__list-item--links" target="_blank" href="http://faq.altoqi.com.br/"> Base de conhecimento </a> </li>
	<li class="footer-nav__list-item"> <a class="footer-nav__list-item--links" target="_blank" href="http://ebericknext.altoqi.com.br"> Desenvolvimento colaborativo </a> </li>
	<li class="footer-nav__list-item"> <a class="footer-nav__list-item--links" target="_blank" href="http://faq.altoqi.com.br/index.php?action=news&newsid=2&newslang=pt-br"> Suporte técnico prestado por engenheiros</a> </li>
</ul>

<ul class="footer-nav__social-media">
	<li class="footer-nav__social-media-item"> <a class="footer-nav__social-media-item--links social-media-icon social-media-facebook" target="_blank" href="https://www.facebook.com/AltoQiTecnologia" > Facebook </a> </li>
	<li class="footer-nav__social-media-item"> <a class="footer-nav__social-media-item--links social-media-icon social-media-youtube" target="_blank" href="https://www.youtube.com/user/AltoQiTecnologia" > Youtube</a> </li>
	<li class="footer-nav__social-media-item"> <a class="footer-nav__social-media-item--links social-media-icon social-media-twitter" target="_blank" href="https://twitter.com/altoqi"> Twitter	</a> </li>
 </ul>

		 </div> <!-- //footer-top -->

		 <div class="footer-bottom">


		 	<p class="footer-content footer-contact">
		 		 ©S3ENG - TECNOLOGIA APLICADA À ENGENHARIA S/A.
			 	<span class="separador"> | </span>
			 	 (11) 2666.4920 - (21) 2169.8725 - (48) 3027.9000 - (48) 3239-7000.
		 	</p>


		 	<p class="footer-content footer-address">
		 		Rodovia SC 401, 600 - Ed. Alfama, 4º andar, tecnópolis <span class="separador"> - </span>
				Bairro João Paulo, Florianópolis/SC - 88030-911
			</p>

		 </div> <!-- //footer-top -->

 	</footer>
<!-- |||||||||||||||||||||| ENDFOOTER ||||||||||||||||||||||| -->






































<!-- ||||||||||||||||||||||| MODAIS ||||||||||||||||||||||||| -->





<div id="modal-modulos" class="reveal-modal large" data-reveal aria-labelledby="videoModalTitle" aria-hidden="true" role="dialog">

	<div class="modal__midia">

				<div class="owl-carousel-single" >
								<div class="item">
												  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eberick-v10/modules/module3.jpg" alt="">
								</div>
								<div class="item">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eberick-v10/image-fake/cor-b.jpg" />
								 </div>
								 <div class="item">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eberick-v10/image-fake/cor-c.jpg" />
								 </div>
								 <div class="item">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eberick-v10/image-fake/cor-d.jpg" />
								 </div>

				</div>
 </div> <!-- // modal-midia -->



	<div class="modal__conteudo">
 		<h2 id="modal-title" class="modal__conteudo--title">Legenda</h2>
 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit necessitatibus sunt, maxime quis suscipit qui, ullam dolorem molestias repudiandae distinctio beatae. Similique porro esse hic nostrum culpa necessitatibus ratione quam.</p>
 	</div> <!-- // modal-conteudo -->
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>




<a href="#surpreenda-se" class="scrolltop"> &#9650;</a>
<!-- |||||||||||||||||||||| ENDMODAIS ||||||||||||||||||||||| -->



<?php get_footer(); ?>
