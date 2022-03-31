const logo = document.querySelector('#logo');
const ul = document.querySelector('#collapse_target');	
const introtxt = document.querySelector('#introtxt');
const intro = document.querySelector('#intro');
const pside = document.querySelector('#pside');
const imgside = document.querySelector('#imgside');

const tl = new TimelineMax();

tl.fromTo(intro, 1, { height: "" }, {height: "", ease: Power2.easeinOut })
	.fromTo(
		intro,
	 	1.5, 
	 	{width: '10%'}, 
	 	{width: '100%' , ease: Power2.easeinOut },
	 	"-=1"
	 	)
	.fromTo(logo, 1, { opacity: 0 , x:30}, {opacity:1, x:0 }, "-=0.5")
	.fromTo(ul, 1.5, { opacity: 0 , y:-50}, {opacity:1, y:0}, "-=1.5")
	.fromTo(introtxt, 1 ,{ opacity: 0 , x:100}, {opacity:1, x:0}, "-=1")
	.fromTo(pside, 1 , {opacity: 0 , x:-500}, {opacity:1, x:0}, "-=1")
	.fromTo(imgside, 1, {opacity: 0 , x:500}, {opacity:1, x:0}, "-=2")

			

	$(document).ready(function() {
	   $(".nav li.disabled a").click(function() {
	     return false;
	   });
	});
		


