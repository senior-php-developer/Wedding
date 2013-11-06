$(init);

function init() {
	initSlider();
	initScroller();
	initCloud();
	$('a[rel]').fancybox({transitionIn:'elastic', transitionOut:'none', opacity:true});
	$('.boxframe').fancybox({transitionIn:'elastic', transitionOut:'none', opacity:true, type:'iframe', width:'86%', height:'85%'});
	
};

function initScroller() {
	$('.menu a').click(function(e){
		$.scrollTo( this.hash, 1500);
		//e.preventDefault();
	});
}

function initSlider() {
	var currentPosition = 0;
	var slideWidth = 900;
	var slides = $('.slide');
	var numberOfSlides = slides.length;
  $('#slidesContainer').css('overflow', 'hidden');
  slides
		.wrapAll('<div id="slideInner"></div>')
		.css({'float' : 'left','width' : slideWidth});
  $('#slideInner').css('width', slideWidth * numberOfSlides);
  $('#slideshow')
		.prepend('<div class="control" id="leftControl">Clicking moves left</div>')
		.append('<div class="control" id="rightControl">Clicking moves right</div>');
  manageControls(currentPosition);
  $('.control').bind('click', function(){
		currentPosition = ($(this).attr('id')=='rightControl') ? currentPosition+1 : currentPosition-1;
    manageControls(currentPosition);
    $('#slideInner').animate({
      'marginLeft' : slideWidth*(-currentPosition)
    });
  });
	
	function manageControls(position) {
		if(position==0){ $('#leftControl').hide() } else{ $('#leftControl').show() }
		if(position==numberOfSlides-1){ $('#rightControl').hide() } else{ $('#rightControl').show() }
	}	
}

function initCloud() {
	$('#skills p').randomize('span');
}

(function($) {
$.fn.randomize = function(childElem) {
  return this.each(function() {
    var $this = $(this);
    var elems = $this.children(childElem);
    elems.sort(function() { return (Math.round(Math.random())-0.5); });  
    $this.remove(childElem);  
    for(var i=0; i < elems.length; i++) {
			$(elems[i]).text($(elems[i]).text()+' ');
			$this.append(elems[i]);      
		}
      
  });    
}
})(jQuery);