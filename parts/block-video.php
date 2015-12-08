<!-- |||||||||||||||||||||||| APRESENTAÇÃO |||||||||||||||||||||||| -->
<section id="apresentacao" class="structure-main__section structure-main__section--no-padding-bottom <?php blockVideoBackgroundType(); ?>" <?php videoCustomBackground(); ?> >
    	<div class="row">
     			<div class="medium-12 columns">
            <?php blockVideoTitle();?>
            <?php blockVideoSubTitle();?>
            <?php blockVideoImageLegend();?>
     			</div> <!-- //row -->
    	</div> <!-- //columns -->

    	<div class="block-container-video">
    		<a href="#" class="block-container-video__link" data-reveal-id="modal-presentation" <?php blockVideoImageThumb(); ?>  > </a>
    	</div> <!-- //block-container-video -->

</section> <!-- // section-presentation  -->
<!-- |||||||||||||||||||||| ENDNOVOS APRESENTAÇÃO ||||||||||||||||||||||| -->



<!-- ||||||||||||||||||||||| MODAL APRESENTAÇÃO ||||||||||||||||||||||||| -->
  <div id="modal-presentation" class="reveal-modal large" data-reveal aria-labelledby="modal-title" aria-hidden="true" role="dialog">
  	<div class="modal__midia">
  		  <div class="flex-video widescreen vimeo">
            <?php blockVideoVideoLink() ?>
   		  </div> <!-- //flex-video -->
  	</div> <!-- // modal-midia -->
  	<div class="modal__conteudo">
       	<?php blockVideoVideoTitle() ?>
        <?php blockVideoVideoDescription() ?>
    </div> <!-- // modal-conteudo -->

      <a class="close-reveal-modal" aria-label="Close">&#215;</a>
  </div>
<!-- ||||||||||||||||||||||| MODAL APRESENTAÇÃO ||||||||||||||||||||||||| -->

<?php /*  ?>
<ol class="vars">
  <li> <em> acf_block_video__title: </em> <?php the_sub_field('acf_block_video__title'); ?>  </li>
  <li> <em> acf_block_video__helpline: </em> <?php the_sub_field('acf_block_video__helpline'); ?> </li>
  <li> <em> acf_block_video__image_legend: </em> <?php the_sub_field('acf_block_video__image_legend'); ?> </li>
  <li> <em> acf_block_video__image_thumb: </em>  <?php the_sub_field('acf_block_video__image_thumb'); ?> </li>

  <li> <em> acf_block_video__video_link </em> <?php the_sub_field('acf_block_video__video_link'); ?> </li>
  <li> <em> acf_block_video__video_title: </em> <?php the_sub_field('acf_block_video__video_title'); ?> </li>
  <li> <em> acf_block_video__video_description: </em> <?php the_sub_field('acf_block_video__video_description'); ?> </li>

  <li> <em> acf_block_video__type_layout: </em> <?php the_sub_field('acf_block_video__type_layout'); ?> </li>
  <li> <em> acf_block_video__custom_background: </em> <?php the_sub_field('acf_block_video__custom_background'); ?> </li>
  <li> <em> acf_block_video__custom_background_image: </em> <?php the_sub_field('acf_block_video__custom_background_image'); ?> </li>
  <li> <em> acf_block_hero__custom_background_color: </em> <?php the_sub_field('acf_block_video__custom_background_color'); ?> </li>
</ol>
<?php */  ?>
