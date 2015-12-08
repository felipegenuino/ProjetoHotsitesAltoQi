
<!-- ||||||||||||||||||||||||  NOVOS SURPREENDA-SE |||||||||||||||||||||||| -->
<section id="surpreenda-se" class="structure-main__section <?php heroBackgroundType(); ?>"  <?php heroCustomBackground(); ?> >
	<div class="row">
			<div class="medium-12 columns">
          <?php brandProduct();?>
          <?php heroTitle();?>
          <?php heroSubTitle();?>
          <?php heroButton();?>

			</div> <!-- //row -->
	</div> <!-- //columns -->
</section> <!-- // section-hero -->
<!-- |||||||||||||||||||||| ENDNOVOS SURPREENDA-SE ||||||||||||||||||||||| -->


<ol class="debug" style="display:none">
	<li> <em> Tipo de layout :</em> <?php the_sub_field('acf_block_hero__type_layout'); ?>  </li>
	<li> <em> Deseja customizar o background do bloco?: </em> <?php the_sub_field('acf_block_hero__custom_background'); ?> </li>
	<li> <em> Background do bloco - Imagem: </em> <?php the_sub_field('acf_block_hero__custom_background_image'); ?> </li>
	<li> <em> Background do bloco - Cor: </em> <?php the_sub_field('acf_block_hero__custom_background_color'); ?> </li>
	<li> <em> Logotipo do produto: </em> <?php the_sub_field('acf_block_hero__brand_product'); ?> </li>
	<li> <em> Titulo do bloco: </em> <?php the_sub_field('acf_block_hero__title'); ?> </li>
	<li> <em> Linha de apoio: </em> <?php the_sub_field('acf_block_hero__helpline'); ?> </li>
 	<li> <em> Botão - Link: </em> <?php the_sub_field('acf_block_hero__button_link'); ?> </li>
	<li> <em> Botão -Texto: </em> <?php the_sub_field('acf_block_hero__button_text'); ?> </li>
	<li> <em> Adicionar ao menu?: </em> <?php the_sub_field('acf_block_hero__menu_question_have'); ?> </li>
	<li> <em> Menu - Nome: </em> <?php the_sub_field('acf_block_hero__menu_name'); ?> </li>
	<li> <em> Menu - ID: </em> <?php the_sub_field('acf_block_hero__menu_id'); ?> </li>
	<li> <em> Menu - icone: </em> <?php the_sub_field('acf_block_hero__menu_icon'); ?> </li>
</ol>
