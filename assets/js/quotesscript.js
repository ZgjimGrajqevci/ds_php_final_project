const logo = document.querySelector('#logo');
const ul = document.querySelector('#collapse_target');	
const titleside = document.querySelector('#titleside');
const title = document.querySelector('#title');
// const pside = document.querySelector('#pside');
// const imgside = document.querySelector('#imgside');

const tl = new TimelineMax();

tl.fromTo( titleside, 1, { height: "" }, {height: "", ease: Power2.easeinOut })
	.fromTo(
		titleside,
	 	1.5, 
	 	{width: '10%'}, 
	 	{width: '100%' , ease: Power2.easeinOut },
	 	"-=1"
	 	)
	.fromTo(logo, 1,{ opacity: 0 , x:30}, {opacity:1, x:0 }, "-=0.5")
	.fromTo(ul, 1.5,{ opacity: 0 , y:-50}, {opacity:1, y:0}, "-=1.5")
	.fromTo(title, 1,{ opacity: 0 , x:100}, {opacity:1, x:0}, "-=0.5")
	// .fromTo(txtside, 1 ,{ opacity: 0 , y:100}, {opacity:1, y:0}, "-=1")
	// .fromTo(img1, 1 ,{ opacity: 0 , x:-100}, {opacity:1, x:0}, "-=1")
	// .fromTo(img2, 1 ,{ opacity: 0 , x:100}, {opacity:1, x:0}, "-=1")
	


$(document).ready(function() {
	$(".nav li.disabled a").click(function() {
	     return false;
	   });
	});
		




// $(document).ready(function(){  
//     $('#add').click(function(){  
//         var image_name = $('#image').val();  
//         if(image_name == ''){  
//                 alert("Please Select Image");  
//                 return false;  
//            }  
//            else{  
//                 var extension = $('#image').val().split('.').pop().toLowerCase();  
//                 if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1){  
//                      alert('Invalid Image File');  
//                      $('#image').val('');  
//                      return false;  
//                 }  
//            }  
//       });  
//  });  

