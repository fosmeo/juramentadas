$(document).ready(function() {
   $('.scroll-contato').click(function(){
      $("html, body").animate({ scrollTop: $(document).height() - $('#section-height').height() }, 'slow');
   });
});
