$(document).ready(function(){
  $.getScript("config.js.php");
  $(".nav li").click(function() {
    var pad = $(this).data('pad');
    $(".original iframe").attr("src", "static_pad.php?pad="+pad);
    $(".translated iframe").attr("src", epurl+"/p/"+pad.replace('en_', 'tw_')+"?showLineNumbers=false&showControls=false&useMonospaceFont=true&noColors=true&showChat=false");
    $(".nav li").removeClass('focus');
    $(this).addClass('focus');
  });
});
