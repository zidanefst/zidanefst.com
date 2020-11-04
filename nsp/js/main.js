/* smooth scroll navbar */
$('a[href*=\\#]').on('click', function(event){     
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top-110}, 500);
});

/* onclick hide show div videos */
 $("#filter1").on('click', function() {
    $(".videos-best").fadeIn();
    $(".videos-mostviewed,.videos-mostrecent").fadeOut();
 });
 $("#filter2").on('click', function() {
    $(".videos-mostrecent").fadeIn();
    $(".videos-mostviewed,.videos-best").fadeOut();
 });
$("#filter3").on('click', function() {
    $(".videos-mostviewed").fadeIn();
    $(".videos-mostrecent,.videos-best").fadeOut(100);
 });

/* most recent videos API call */
var reqURL = "https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent("https://www.youtube.com/feeds/videos.xml?channel_id=");
function loadVideo(iframe) {
  $.getJSON(reqURL + iframe.getAttribute('cid'),
    function(data) {
      var videoNumber = (iframe.getAttribute('vnum') ? Number(iframe.getAttribute('vnum')) : 0);
      console.log(videoNumber);
      var link = data.items[videoNumber].link;
      id = link.substr(link.indexOf("=") + 1);
      iframe.setAttribute("src", "https://youtube.com/embed/" + id + "?controls=0&autoplay=1");
    }
  );
}
var iframes = document.getElementsByClassName('latestVideoEmbed');
for (var i = 0, len = iframes.length; i < len; i++) {
  loadVideo(iframes[i]);
}

