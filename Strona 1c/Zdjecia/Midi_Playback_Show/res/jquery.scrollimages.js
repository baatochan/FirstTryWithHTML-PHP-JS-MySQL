$.fn.scrollImages = function(options) {
	$.galleria.stop();
	
	var defaults = {
		onScroll: function() {},
		direction: "right",
		imageWidth: 106,
		duration: 200,
		jumpDuration: 200,
		size: 7,
		container: "thumbnails_container"
	};
		
	var o = jQuery.extend(defaults, options);	
	var el = $("#" + o.container);		
	var pos = Math.round(el.position().left);
	var scrollLeft = Math.round(-pos/o.imageWidth);
	var scrollRight = o.size + scrollLeft + 1;
	
	var active = el.find(".active");
	var jump = false;
	if(o.direction == "right") {
		if (active.is(":first-child")) {
	 		pos = 0;
	 		jump = true;	
	 	} else if (active.is(":nth-child(" + scrollRight + ")")) {
	 		pos -= o.imageWidth; 		
	 	}
	} else {
		if (active.is(":last-child")) {
			pos = (el.parent().width() - el.width());
			jump = true;
		} else if (active.is(":nth-child(" + scrollLeft + ")")) {			
			pos += o.imageWidth;
		}
	}
	
	el.stop().animate({ left:pos + "px" }, jump ? o.jumpDuration : o.duration, "linear", o.onScroll());
};
