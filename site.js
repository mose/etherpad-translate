$(document).ready(function(){
  $.getScript("config.js.php");

  var pad = "en_home";
  var title = pad.substring(3);
  var status = $(".nav li[data-pad=en_home]").attr("class").split(' ')[0].substr(6);

  $(".buttons span.status"+status).addClass('focus');

  function refresh_status() {
    $.get("last.php", function(data) {
      meat = $.parseJSON(data);
      $.each(meat, function(k, v) {
        $(".nav li[data-pad="+k+"]").removeClass().addClass('status'+v);
      });
    });
  }

  $(".nav li").click(function() {
    pad = $(this).data('pad');
    title = pad.substring(3);
    status = $(this).attr("class").substr(6);
    $(".original iframe").attr("src", "static_pad.php?pad="+pad);
    $(".translated iframe").attr("src", epurl+"/p/"+pad.replace('en_', 'tw_')+"?showLineNumbers=false&showControls=false&useMonospaceFont=true&noColors=true&showChat=false");
    $(".nav li").removeClass('focus');
    $(this).addClass('focus');
    $(".header .status .page").text(title);
    $(".buttons span").removeClass('focus');
    $(".buttons span.status"+status).addClass('focus');
    refresh_status();
  });

  $(".buttons span").click(function() {
    status = $(this).attr("class").split(' ')[0].substr(6);
    var that = $(this);
    $.post("status.php", { status: status, pad: pad }, function(data) {
      $(".buttons span").removeClass('focus');
      $(".nav li[data-pad="+pad+"]").removeClass().addClass('status'+status);
      that.addClass('focus');
    });
  });

});
