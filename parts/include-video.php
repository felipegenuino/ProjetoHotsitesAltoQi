<div class="block-container-video">
  <a href="#" class="block-container-video__link" data-reveal-id="modal-presentation" <?php blockVideoImageThumb(); ?>  > </a>
</div> <!-- //block-container-video -->


<!-- ||||||||||||||||||||||| MODAL video ||||||||||||||||||||||||| -->
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
  </div> <!-- //modal-presentation -->
<!-- ||||||||||||||||||||||| MODAL  ||||||||||||||||||||||||| -->
