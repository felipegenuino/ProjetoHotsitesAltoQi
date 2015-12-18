
<!-- ||||||||||||||||||||||||  BLOCO GENÉRICO |||||||||||||||||||||||| -->
<section id="<?php the_sub_field('acf_block_generic__id'); ?>"
	class="
		structure-main__section
		<?php if (get_sub_field('acf_block_generic__newblock_question_have') ==  "escolha-bloco-rodape") { echo "section-footer"; } ?>
		<?php if (get_sub_field('acf_block_generic__newblock_question_have') ==  "escolha-bloco-video") { echo "section-video"; } ?>
		<?php the_sub_field('acf_block_generic__type_layout'); ?>
		<?php if( !empty( get_sub_field('acf_block_generic__custom_background_image') ) ): echo 'section-background-image'; endif; ?>
		"

	<?php if( !empty(get_sub_field('acf_block_generic__custom_background')) ): ?>
      style="background: <?php echo get_sub_field('acf_block_generic__custom_background_color'); ?> url(<?php echo get_sub_field('acf_block_generic__custom_background_image'); ?>) ; "
   <?php endif; ?>
>

<?php if( !empty( get_sub_field('acf_block_generic__icon_question_have') ) ): ?>
	<span class="structure-main__section--icon"  <?php  get_sub_field('acf_block_generic__icon') ?> 	style="background-image:  url(<?php echo get_sub_field('acf_block_generic__icon'); ?>) ; "  ></span>
<?php endif;  ?>

<div class="row">
		<div class="medium-12 columns">
      <?php the_sub_field('acf_block_generic__content'); ?>
		</div> <!-- //row -->
</div> <!-- //columns -->




<?php

$block = get_sub_field('acf_block_generic__newblock_question_have');

switch ($block) {
	case 'escolha-bloco-video':
		get_template_part( 'parts/include-video' );
	  break;

  case 'escolha-bloco-recursos':
		get_template_part( 'parts/include-resourses' );
		break;

	case 'escolha-bloco-modulos':
		get_template_part( 'parts/include-modules' );
		break;

	case 'escolha-bloco-rodape':
		get_template_part( 'parts/include-footer' );
		break;
 


	default:
		# code...
		break;
}

?>




</section>
<!-- |||||||||||||||||||||| END BLOCOS GENERICOS ||||||||||||||||||||||| -->
