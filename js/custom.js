
$(function(){$('.vignette').click(function(){var link=$(this).data('link');window.open=link;});$('#myCarousel').carousel({interval:500,pause:"true",cycle:'false'});var videoUrl='//player.vimeo.com/video/';var videoId='';var playerCustom='?color=c3c3c3&autoplay=1';$('.action').click(function(){if($(this).hasClass("action-on")){return false;}
$(".action").removeClass("action-on");$(".bt-play").fadeIn(500).css('display','block');$(".playing").fadeOut(300);video=videoUrl+$(this).data('id')+playerCustom;$(".iframe-player").attr("src",video);$(".bt-play",this).fadeOut(300);$(".playing",this).fadeIn(500);$(this).addClass("action-on");});});