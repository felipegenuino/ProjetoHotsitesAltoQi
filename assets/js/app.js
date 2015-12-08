/*  
    #1 inicialização dos scripts do foundation
    #2 Google Analytics
    #3 Show/Hide menu para celular
    #4 Bug de visualização do youtube
    #5 Smooth Scrolling
*/


 


/* |||||||||||||| #1 initi foundation ||||||||||||||  */
	    $(document).foundation();
/* |||||||||||||| end #1 initi foundation |||||||||||||| */









/* |||||||||||||| #2 google aalytics ||||||||||||||  */
 	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-0000000-0', 'auto');
	  ga('send', 'pageview');
/* |||||||||||||| end #2 google aalytics ||||||||||||||  */










/* |||||||||||||| #3 Show/Hide menu para celular ||||||||||||||  */
     $(function() {
         $('.trigger-menu').on('click', function(event){
               event.preventDefault();
              // alert("foi")
              $(".strutcture-header__nav").toggleClass("show-menu-active");
         });
    }());
/* |||||||||||||| Show/Hide menu para celular ||||||||||||||  */










 /* |||||||||||||| #4  bug de visualização do youtube ||||||||||||||  */
    function Wj(a){return"chrome-extension://"+a+"/cast_sender.js"}
 /* ||||||||||||||  bug de visualização do youtube||||||||||||||  */










 /* |||||||||||||| #5 Smooth Scrolling ||||||||||||||  */
    $(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top+(-70)
            }, 1000);
            return false;
          }
        }
      });
    });
 /* |||||||||||||| #5 Smooth Scrolling ||||||||||||||  */

 