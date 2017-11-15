$( document ).ready(function() {

var permissionsBtn=$('.vjs-device-button');
var recordingBtn=$('.vjs-record-button');
var startButton=$('#startButton');
var finishButton=$('#finishButton');
var submitButton=$('#submitButton');
var questions=$('#questions');
var videoForm=$('#videoForm');
var successMessage=$('#successMessage');
var loadingMessage=$('#loadingMessage');

var nextTestimonialBtn=$('#nxt-testimonial');

// vars for testimonials carousel
var $txtcarousel = $('#testimonial-list');
var txtcount = $txtcarousel.children().length;
var wrapwidth = (txtcount * 415) + 415; // 400px width for each testimonial item
$txtcarousel.css('width',wrapwidth);
var animtime = 750; // milliseconds for clients carousel


var totalQuestions=$('#totalQuestions');
var currentQuestion=$('#currentQuestion');

currentQuestion.text(1);

var isChrome = !!window.chrome && !!window.chrome.webstore;
var isFirefox = typeof InstallTrigger !== 'undefined';

if (!(isChrome || isFirefox)) {

	$('#userLoginForm').css( "display", "none" );
	$('#warnBrowserMessage').css( "display", "block" );


}

  permissionsBtn.click();
  recordingBtn.css( "display", "none" );


  startButton.on('click',function(){

  	//Check if video is recording
  	// questions.css( "display", "block" );
  	startButton.css( "display", "none" );


 //  	navigator.getMedia = ( navigator.getUserMedia || // use the proper vendor prefix
 //                       navigator.webkitGetUserMedia ||
 //                       navigator.mozGetUserMedia ||
 //                       navigator.msGetUserMedia);


	// navigator.getMedia({video: true,audio:true}, function() {
	// 	console.log("on");
	// }, function() {
	// 	console.log('off');
	// });
 //  	console.log(navigator.getMedia);

  	recordingBtn.click();
  	// $('ol.carousel-indicators li:first-child').addClass('active');
  	// $('div.carousel-inner div:first-child').addClass('active');

  });

  finishButton.on('click',function(){

  	questions.css( "display", "none" );
  	finishButton.css( "display", "none" );
  	loadingMessage.css( "display", "block" );
  	recordingBtn.click();

  });

  // submitButton.on('click',function(){

  // 	videoForm.css( "display", "none" );
  // 	submitButton.css( "display", "none" );
  // 	successMessage.css( "display", "block" );

  // });
 
  
  nextTestimonialBtn.on('click', function(){

  	if (totalQuestions.text()===(currentQuestion).text()) {
  		finishButton.css( "display", "block" );
  		nextTestimonialBtn.css( "display", "none" );

  	}
  	else{
  		var $first = $('#testimonial-list li:first');
	    $first.animate({ 'margin-left': '-415px' }, animtime, function() {
	      $first.remove().css({ 'margin-left': '0px' });
	      $('#testimonial-list li:last').after($first);
	    }); 
	    currentQuestion.text(+currentQuestion.text()+1);
  	}
     



  });

  

  
});

 function sumbitVideo(data){

 	console.log(data);
	var videoForm=$('#videoForm');
	var submitButton=$('#submitButton');
	var questions=$('#questions');
		var finishButton=$('#finishButton');



	var fd = new FormData();
	fd.append('_token', "{{csrf_token()}}");
	fd.append('fname', 'test.wav');
	fd.append('data', data);

	submitButton.on('click',function(){

	  	questions.css( "display", "none" );
	  	finishButton.css( "display", "none" );

	 //  	console.log(fd);
	 //  	for (var key of fd.values()) {
		//    console.log(key); 
		// }
		$.ajax({
		    type: 'POST',
		    url: 'videos',
		    data: fd,
		    processData: false,
		    contentType: false
		}).done(function(data) {
		       console.log(data);
		});

 

	});
 }