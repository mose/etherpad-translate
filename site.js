$(document).ready(function(){
  $(".nav li").click(function() {
    var pad = $(this).data('pad');
    $(".nav li").removeClass('focus');
    $(this).addClass('focus');
  });
});
