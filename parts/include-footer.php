<!-- ||||||||||||||||||||||| FOOTER ||||||||||||||||||||||||| -->
	<footer class="strutcture-footer  ">
		 <div class="footer-top">

		 	 <span class="container-brand-altoqi">



          <?php if (!empty(get_sub_field('acf_block_footer__brand')) ) {  ?>
               <?php $footerimage = get_sub_field('acf_block_footer__brand');
                      if( !empty($footerimage) ): ?>
                        <img src="<?php echo $footerimage['url']; ?>" alt="<?php echo $footerimage['alt']; ?>"  style="<?php echo the_sub_field('acf_block_footer__brand_with'); ?>" />
                  <?php endif; ?>
          <?php  } else {  ?>
            <svg version="1.1"  class="brand-altoqi__footer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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

          <?php  }   ?>
 		 	 </span> <!-- //container-brand-altoqi -->


<?php  if (get_sub_field('acf_block_footer__have_links') == TRUE) { ?>
    <?php if ( have_rows('acf_block_footer__repeater_link') ) { ?>
             <ul class='footer-nav__list'>
                  <?php while ( have_rows('acf_block_footer__repeater_link') ) : the_row(); ?>
                       <li class="footer-nav__list-item">
                          <a class="footer-nav__list-item--links" target="_blank" href="<?php echo the_sub_field('acf_block_footer__repeater_link_item_address'); ?>">
                              <?php echo the_sub_field('acf_block_footer__repeater_link_item_name'); ?>
                          </a>
                       </li>
                 <?php endwhile;   ?>
           </ul>
    <?php }  /*acf_block_footer__repeater_link */ ?>
<?php } /*acf_block_footer__have_links*/  ?>







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
