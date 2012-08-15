function bgScaling(){
	var db = $(window);
	var winWidth = $(window).width();
	var winHeight = $(window).height();
	var img = $('#holder img');
	var imgWidth = img.width();
	var imgHeight = img.height();
	
	var dbsize={}; //needed to store body size
	var imgsrc=img.src; //needed to store images src
	var keyStop=function(e){
		var e=window.event||e||{};
		var tag=e.target.tagName.toLowerCase();
		if(tag!='textarea'&&!(tag=='input'&&(e.target.type=='text'||e.target.type=='password'))){ //are the user not writing?
			if(e.keyCode==32||e.keyCode==39||e.keyCode==40){ //Did he press any of the "scrolling-keys"? (down, right, and space key)
				if(e.preventDefault)e.preventDefault();
				else e.returnValue=false;
			}
		}
	}

	if(this.addEventListener)window.addEventListener('keydown',keyStop,false);
	else window.attachEvent('onkeydown',keyStop);

	setInterval(function(){
		winWidth = $(window).width();
		winHeight = $(window).height();
		winRatio = winWidth/winHeight;
		imgRatio = imgWidth/imgHeight;
		//window.scrollTo(0,0);
		if(img.load){ //check if image has loaded
			if(winWidth!=dbsize.w||winHeight!=dbsize.h||img.src!=imgsrc){
				imgsrc=img.src; //store current src
				dbsize.w=winWidth; //store current body width
				dbsize.h=winHeight; //store current body height
				
				if(winRatio >= imgRatio){
					img.css('width', dbsize.w);
					//$('#holderImg').css('top', -((imgHeight-winHeight)/2));
					//$('#holderImg').css('left', 0);
				}
				else if(winRatio < imgRatio){
					var newWidth = Math.round((imgWidth/imgHeight)*dbsize.h);
					img.css('width', newWidth);
					//$('#holderImg').css('top', 0);
					//$('#holderImg').css('left', -((imgWidth-winWidth)/2));
				}
				img.css('visibility', 'visible');
			}
		}
	}, 100);
}

$(window).load(function(){
	bgScaling();
});

