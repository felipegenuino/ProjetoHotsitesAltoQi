
<div class="block-container-video">
  <a href="#" class="block-container-video__link" data-reveal-id="modal-presentation" <?php if( !empty(get_sub_field('acf_block_video__image_thumb')) ): ?> style="background-image: url(<?php echo get_sub_field('acf_block_video__image_thumb'); ?>) ; " <?php endif; ?>  > </a>
</div> <!-- //block-container-video -->


<!-- ||||||||||||||||||||||| MODAL video ||||||||||||||||||||||||| -->
  <div id="modal-presentation" class="reveal-modal large" data-reveal aria-labelledby="modal-title" aria-hidden="true" role="dialog">
  	<div class="modal__midia">
  		  <div class="flex-video widescreen vimeo">
            <?php  if( !empty(get_sub_field('acf_block_video__video_link')) ):
                    echo get_sub_field('acf_block_video__video_link');
             endif; ?>
   		  </div> <!-- //flex-video -->
  	</div> <!-- // modal-midia -->
  	<div class="modal__conteudo">
        <?php  if( !empty(get_sub_field('acf_block_video__video_title')) ): ?>
            <h2 id="modal-title" class="modal__conteudo--title"> <?php echo get_sub_field('acf_block_video__video_title'); ?> </h2>
        <?php endif; ?>

        <?php if( !empty(get_sub_field('acf_block_video__video_description')) ):
           echo get_sub_field('acf_block_video__video_description');
          endif; ?>
    </div> <!-- // modal-conteudo -->

      <a class="close-reveal-modal" aria-label="Close">&#215;</a>
  </div> <!-- //modal-presentation -->
<!-- ||||||||||||||||||||||| MODAL  ||||||||||||||||||||||||| -->
