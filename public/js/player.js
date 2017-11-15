var player = videojs("myVideo",
{
    controls: true,
    width: 320,
    height: 240,
    plugins: {
        record: {
            audio: true,
            video: true,
            maxLength: 20,
            debug: true
        }
    }
});
// error handling
player.on('deviceError', function()
{
    console.log('device error:', player.deviceErrorCode);
});
player.on('error', function(error)
{
    console.log('error:', error);
});
// user clicked the record button and started recording
player.on('startRecord', function()
{   
    $('#questions').css( "display", "block" );

    

});
// user completed recording and stream is available
player.on('finishRecord', function()
{
    


    var data = new FormData();

    var isChrome = !!window.chrome && !!window.chrome.webstore;

    if(isChrome){
        data.append('file', player.recordedData.video);
    }
    else{
    data.append('file', player.recordedData);

    }


   $.ajax({
        url :  "videos",
        type: 'POST',
        data: data,
        contentType: false,
        processData: false,
        success: function(data) {
             

            $('#finishButton').css( "display", "none" );
            $('#questions').css( "display", "none" );
            $('#nxt-testimonial').css( "display", "none" );
            $('#loadingMessage').css( "display", "none" );
            $('#successMessage').css( "display", "block" );
        },    
        error: function() {
            $('#finishButton').css( "display", "none" );
            $('#questions').css( "display", "none" );
            $('#nxt-testimonial').css( "display", "none" );
            $('#loadingMessage').css( "display", "none" );
            $('#errorMessage').css( "display", "block" );
        }
      });
    // the blob object contains the recorded data that
    // can be downloaded by the user, stored on server etc.
});