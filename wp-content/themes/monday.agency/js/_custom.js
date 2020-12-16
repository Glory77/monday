document.addEventListener("DOMContentLoaded", function() {
	$('a[href*="#"]')
		  // Remove links that don't actually link to anything
		  .not('[href="#"]')
		  .not('[href="#0"]')
		  .click(function(event) {
		    // On-page links
		    $('.menu-wrapper').find('li.active').removeClass('active')
		    $(this).parent().addClass('active')
		    if (
		    	location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
		    	&& 
		    	location.hostname == this.hostname
		    	) {
		      // Figure out element to scroll to
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		      // Does a scroll target exist?
		      if (target.length) {
		        // Only prevent default if animation is actually gonna happen
		        event.preventDefault();

		        $('html, body').animate({
		        	scrollTop: target.offset().top
		        }, 1000, function() {
		          // Callback after animation
		          // Must change focus!
		          var $target = $(target);
		          if ($target.is(":focus")) { // Checking if the target was focused
		          	return false;
		          } else {
		            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
		        };
		    });
		    }
		}

	});

	$(function() {
		$(".btn-modal").fancybox({
			touch: false,
			'padding'    : 0,
			beforeLoad: function (noop) {
				var url = $(this.src).data("href");
				if (typeof url !== typeof undefined){
					this.src = url
				} 
			}
		});   
		$(".btn-answer").fancybox({
			'padding'    : 0,
			beforeLoad: function (noop) {
				$('.fancybox-close-small').click();
				var url = $(this.src).data("href");
				if (typeof url === 'undefined'){
					url = $(this.src).attr("href");
				}
				this.src = url   
			}
		});
	});

	$('.menu-btn').click(function(event) { 
		$('body').toggleClass('menu-open')
	});
	$('.testimonials-slider').slick({
		autoplay: true,
		autoplaySpeed: 5000,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: true,
		loop: true
	});	
	if ($('.what-wrapper').length > 0){
		var followLink = $( " <div class='follow-link'><span></span></div>")
		$('body').append($(followLink));
	};
	$('.what-wrapper').on('mousemove', function(e){
		const wrapperHeight = $('.what-wrapper').height()
		const height = $('.follow-link').height() / 2;
		const width = $('.follow-link').width();
		$('.follow-link').css({
			left:e.pageX, 
			top:e.pageY - 40,
			opacity: 1
		});
		$('.what-item').mouseenter(function(event) {
			var linkText = $(this).find('.what-wrapper__inner').attr('data-href')
			$('.follow-link span').text(linkText)
		})
	});
	$('.how-element').mouseenter(function(event) {
		$(this).addClass('active visited')
		$(this).prev().removeClass('active')
		$(this).nextAll().removeClass('active')
		let width = $(this).attr( "data-width" )
		$('.how-line').css('width', width)
	})

	$('.team-name').hover(function(event) {
		var index = $(this).parent().index();
		$('.team-image').find('.svg-circle').eq(index).addClass('show')
	})
	$('.team-name').mouseleave(function(event) {
		$('.team-image').find('.svg-circle').removeClass('show')
	})
	// var npoints = 100;
	var ptdata = [];
	var session = [];
	var path;
	var drawing = false;

	var line = d3.svg.line()
	    .interpolate("bundle") // basis, see http://bl.ocks.org/mbostock/4342190
	    .tension(1)
	    .x(function(d, i) { return d.x; })
	    .y(function(d, i) { return d.y; });

	var svg = d3.select("body").append("svg")
	    .attr("class", "line-body")

	svg.append("g")
	svg
	  .on("mousedown", listen)
	  .on("touchstart", listen)
	  .on("touchend", ignore)
	  .on("touchleave", ignore)
	  .on("mouseup", ignore)
	  .on("mouseleave", ignore);

	function listen () {
	  drawing = true;
	  ptdata = []; // reset point data
	  path = svg.append("path") // start a new line
	    .data([ptdata])
	    .attr("class", "line")
	    .attr("d", line);

	  if (d3.event.type === 'mousedown') {
	    svg.on("mousemove", onmove);
	  } else {
	    svg.on("touchmove", onmove);
	  }

	}

	function ignore () {
	  var before, after;
	  svg.on("mousemove", null);
	  svg.on("touchmove", null);

	  // skip out if we're not drawing
	  if (!drawing) return;
	  drawing = false;

	  before = ptdata.length;
	  console.group('Line Simplification');
	  console.log("Before simplification:", before)
	  
	  // simplify
	  ptdata = simplify(ptdata);
	  after = ptdata.length;

	  console.log("After simplification:", ptdata.length)
	  console.groupEnd();

	  var percentage = parseInt(100 - (after/before)*100, 10);

	  // add newly created line to the drawing session
	  session.push(ptdata);
	  
	  // redraw the line after simplification
	  tick();

	}


	function onmove (e) {
		if (!$(event.target).closest('div').length && !$(event.target).closest('.svg-circle').length && !$(event.target).closest('.how-wrapper__inner').length && !$(event.target).closest('span').length && !$(event.target).closest('a').length && !$(event.target).closest('p').length && !$(event.target).closest('slick-slide').length && !$(event.target).closest('.team-name span').length){

			  var type = d3.event.type;
			  var point;

			  if (type === 'mousemove') {
			    point = d3.mouse(this);
			  } else {
			    // only deal with a single touch input
			    point = d3.touches(this)[0];
			  }

			  // push a new data point onto the back
			  ptdata.push({ x: point[0], y: point[1] });
			  tick();
		}

	}

	function tick() {
	  path.attr("d", function(d) { return line(d); }) // Redraw the path:
	}
	$('.required').focus(function(event) {
		$(this).addClass('focus')
	});
	$('.required').focusout(function(event) {
		if(!$(this).val()) {
			$(this).removeClass('focus')
		} else {			
			$(this).addClass('focus')
		}
	});
	if(window.innerWidth < 1024){
        $('.projects-rows .what-item').bind('touchstart', function(e) {
			var bottomWindowPos = $(window).height();
			var topWindowPos = 0;
			var bottomDivPos = $(this).position().top + $(this).outerHeight(true);
			var topDivPos = $(this).position().top;
			var bottomDivPosOnScreen = bottomDivPos - $(window).scrollTop();	
			var topDivPosOnScreen = topDivPos - $(window).scrollTop();	
			var topHeight = topDivPosOnScreen + $('.projects-rows').position().top + $(this).outerHeight(true);
			var bottomHeight = bottomWindowPos - bottomDivPosOnScreen - $('.projects-rows').position().top - ($(this).outerHeight(true)/2);
			if(topHeight > bottomHeight ) {
				$(this).find('.hover-image').css({'top': 'unset', 'bottom': 'calc(100% + 30px)'})
			} else {			
				$(this).find('.hover-image').css({'top': 'calc(100% + 30px)', 'bottom': 'unset'})
			}
        }); 
    }; 
	if(window.innerWidth > 1024){
		$('.projects-rows .what-item').hover(function(event) {
			var bottomWindowPos = $(window).height();
			var topWindowPos = 0;
			var bottomDivPos = $(this).position().top + $(this).outerHeight(true);
			var topDivPos = $(this).position().top;
			var bottomDivPosOnScreen = bottomDivPos - $(window).scrollTop();	
			var topDivPosOnScreen = topDivPos - $(window).scrollTop();	
			var topHeight = topDivPosOnScreen + $('.projects-rows').position().top + $(this).outerHeight(true);
			var bottomHeight = bottomWindowPos - bottomDivPosOnScreen - $('.projects-rows').position().top - ($(this).outerHeight(true)/2);
			if(topHeight > bottomHeight ) {
				$(this).find('.hover-image').css({'top': 'unset', 'bottom': 'calc(100% + 30px)'})
			} else {			
				$(this).find('.hover-image').css({'top': 'calc(100% + 30px)', 'bottom': 'unset'})
			}
		});
    }; 

    $('.how-wrapper__inner').mouseleave(function() {
	  $( ".how-element" ).removeClass('active visited');
	  $('.how-line').css('width', '0')
	});

});
