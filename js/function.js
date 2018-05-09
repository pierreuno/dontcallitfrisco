$(function() {

  $('.play-video').on('click', function(e){
    e.preventDefault();

    var that = $(this);
    var dom = that.parent();

    console.log(that);

    var youtube_id = that.data('youtube-id');
    loadYoutubeVideoEmbed(dom, youtube_id);
  });

  function loadYoutubeVideoEmbed(dom, youtube_id){
    var width = dom.width();
    var height = dom.height();
    var html = '<iframe width="'+width+'" height="'+height+'" src="https://www.youtube.com/embed/'+youtube_id+'?autoplay=1&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe>';

    dom.html(html);
  }
});
