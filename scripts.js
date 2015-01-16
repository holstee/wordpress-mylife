var mylife = {};

mylife.masonry = function(){
  $(function(){
    
    var $container = $('.masonry');

    $container.infinitescroll({
        nextSelector: "#mylife-quinary .next-link a",
        navSelector: "#mylife-quinary .next-link",
        itemSelector: "#mylife-quaternary .item"
      }, function( newElements ) {
        mylife.quote();
        var $newElems = $( newElements ).css({ opacity: 0 });;
        $newElems.imagesLoaded(function(){
          $newElems.animate({ opacity: 1 });
          $container.masonry( 'appended', $newElems );
        });
      }
    );
    
    $container.imagesLoaded( function(){
      $container.masonry({
        itemSelector : '.item',
        columnWidth : $(".item").outerWidth(true)
      });
    });

  });
};

mylife.quote = function(){
  $(".item a").hover(function(){
    var data = {
      "location": $(this).attr("data-location"),
      "name": $(this).attr("title"),
      "permalink": $(this).attr("href"),
      "quote": $(this).attr("data-quote")
    };
    console.log(data);
    $("#swap-location").text(data.location);
    $("#swap-name").text(data.name);
    $("#swap-quote").html("&quot;"+data.quote+"&quot;");
    $("#swap-link").attr("href", data.permalink);
  });
};

mylife.fix = function(){
  var offset = $("#mylife-secondary").offset().top - $("#site-header").height();
  $(window).scroll(function(){
    if($(window).scrollTop() >= offset){
      $("#mylife-secondary-dummy").removeClass("hide");
      $("#mylife-secondary").addClass("fixed");
    }else{
      $("#mylife-secondary-dummy").addClass("hide");
      $("#mylife-secondary").removeClass("fixed");
    }
  });
}

mylife.share = function(){

  var html = '<!-- AddThis Button BEGIN -->'+
    '<div class="addthis_toolbox addthis_floating_style addthis_32x32_style hide">'+
    '<a class="addthis_button_facebook"></a>'+
    '<a class="addthis_button_twitter"></a>'+
    '<a class="addthis_button_pinterest_share"></a>'+
    '<a class="addthis_button_tumblr"></a>'+
    '<a class="addthis_button_thefancy"></a>'+
    '<a class="addthis_button_compact"></a>'+
    '</div>'+
    '<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=undefined"></script>'+
    '<!-- AddThis Button END -->';

  var template = '<div class="popover fade top in" id="share" style="top: 591px; left: 111.5px; display: block;">'+
    '<div class="arrow"></div>'+
    '<div class="popover-content"></div>'+
    '</div>';

  $("body").append(html);
  $('[href="#share"]')
    .show()
    .popover({
      content: function(){
        return '<div class="addthis_toolbox addthis_floating_style addthis_32x32_style">' + $('.addthis_toolbox').html() + '</div>';
      },
      html: true, 
      placement: "top",
      template: template,
      trigger: "manual"
    }).click(function(event){
      event.preventDefault();
      var toggle = ($(this).data('toggle') == undefined) ? true : $(this).data('toggle');
      if(toggle){
         $(this).popover("show");
      }else{
        $(this).popover("hide");
      }
      $(this).data('toggle', !toggle);
    });

}

$(document).ready(function(){
  var template = $('[name="template"]').val();
  if(template == "index"){
    mylife.masonry();
    mylife.quote();
    mylife.fix();
    mylife.share();
  }else if(template == "single"){
    mylife.share();
  }
});