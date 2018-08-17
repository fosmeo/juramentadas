$(document).ready(function() {
   $('#topo').click(function(){
      $('html, body').animate({scrollTop:0}, 'slow');
      return false;
   });
   $('#contato').click(function(){
      $('html, body').animate({scrollBottom:500}, 'slow');
      return false;
   });
}); 

// $(document).ready(function() {
//    $('#contato').click(function(){
//       $('html, body').animate({scrollBottom:500}, 'slow');
//       return false;
//    });
// }); 