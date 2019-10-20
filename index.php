<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="plugins/videojs/css/video-js.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <title>Video Analysis tool using canvas drawing, with capture support</title>
  </head>
  <body>
  	<div class="container mt-5">
    	<h1 class="text-center">Video Analysis tool using canvas drawing</h1>

		<div class="row">
			<div class="col-sm-12">
				<div class="swapvideo">
	 				<div class="swaptitle">
	 					<h2 id="swaptitle-for-video1">Video 1</h2>
	 				</div>
	 				<div class="overlayvideo canvas_videoblock">
	 					<canvas id="video-canvas" height="250" width="530">
						</canvas>

						<video height="290" width="539" preload="auto" controls id="sidebyside-video_1" class="video-js vjs-default-skin vjs-big-play-centered side-by-side-videos"
		                 	data-setup='{"customControlsOnMobile": true}'>

		                    <source src="videos/video-side-1.mp4" type="video/mp4">

		                    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		                </video>
	 				</div>
	 			</div>

	 			<div class="swapvideo">
	 				<div class="swaptitle">
	 					<h2 id="swaptitle-for-video1">Video 2</h2>
	 				</div>
	 				<div class="overlayvideo canvas_videoblock">
	 					<canvas id="video-canvas1" height="250" width="530">
						</canvas>

						<video height="290" width="539" preload="auto" controls id="sidebyside-video_2" class="video-js vjs-default-skin vjs-big-play-centered side-by-side-videos"
		                 	data-setup='{"customControlsOnMobile": true}'>

		                    <source src="videos/video-side-1.mp4" type="video/mp4">

		                    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		                </video>
	 				</div>
	 			</div>
				
			</div>
			
			<div class="col-sm-12">
				<div class="video_palybtnblock swap_video_btn">
		 			<div class="playbtninner">
		 				<div class="playblock">
		 					<button type="button" class="navbtn prebtn left-video-backward"><i class="preicon"></i></button>
		 					<button type="button" class="playbtn playVideoLeftBtn" data-action="play">Play Left</button>
		 					<button type="button" class="navbtn nextbtn left-video-forward"><i class="nexticon"></i></button>
		 				</div>
		 				<div class="zoombtn">
		 					<button type="button" class="left-video-zoom-in">zoom in</button>
		 					<button type="button" class="left-video-zoom-out">zoom out</button>
		 				</div>

		 				<div class="slowmotion">
							<h4>Slow Motion</h4>
							<div class="slowmotionblock">
								<button class="btn-slow-motion active" data-motion="1" data-playername='player'>1x</button>
								<button class="btn-slow-motion" data-motion="2" data-playername='player'>2x</button>
								<button class="btn-slow-motion" data-motion="4" data-playername='player'>4x</button>
								<button class="btn-slow-motion" data-motion="8" data-playername='player'>8x</button>
							</div>
						</div>
		 			</div>
		 			<div class="playbtninner">
		 				<div class="playblock bothplay">
		 					<button type="button" class="navbtn prebtn both-backward"><i class="preicon"></i></button>
		 					<button type="button" class="playbtn action-on-both" data-action="play">Play Both</button>
		 					<button type="button" class="navbtn nextbtn both-forward"><i class="nexticon"></i></button>
		 				</div>
		 				<div class="play_block_center">
							<div class="toolblock">
								<h4>Drawing Tools</h4>
								<div class="inner_tool">
									<button class="line-drawing-tools" data-value="circle">
										<i class="toolicon1"></i>
									</button>
									<button class="line-drawing-tools" data-value="line">
										<i class="toolicon2"></i>
									</button>
									<button class="line-drawing-tools" data-value="angle">
										<i class="toolicon3"></i>
									</button>
									<button class="line-drawing-tools" data-value="move">
										<i class="toolicon4"></i>
									</button>

								</div>
								<a href="javascript:void(0)" class="line-drawing-tools" data-value="delete">Delete Selected Shape</a>
								<br>
								<a href="javascript:void(0)" class="line-drawing-tools" data-value="clear">Delete All Shapes</a>
							</div>
							
						</div>
		 			</div>
					
					<div class="playbtninner">
		 				<div class="playblock">
		 					<button type="button" class="navbtn prebtn right-video-backward"><i class="preicon"></i></button>
		 					<button type="button" class="playbtn playVideoRightBtn" data-action="play">Play Right</button>
		 					<button type="button" class="navbtn nextbtn right-video-forward"><i class="nexticon"></i></button>
		 				</div>
		 				<div class="zoombtn">
		 					<button type="button" class="right-video-zoom-in">zoom in</button>
		 					<button type="button" class="right-video-zoom-out">zoom out</button>
		 				</div>
		 				<div class="slowmotion">
							<h4>Slow Motion</h4>
							<div class="slowmotionblock">
		                        <button class="btn-slow-motion active" data-motion="1" data-playername='otherPlayer'>1x</button>
								<button class="btn-slow-motion" data-motion="2" data-playername='otherPlayer'>2x</button>
								<button class="btn-slow-motion" data-motion="4" data-playername='otherPlayer'>4x</button>
								<button class="btn-slow-motion" data-motion="8" data-playername='otherPlayer'>8x</button>
							</div>
						</div>
                        <div class="slowmotion">
							<h4>Snapshot</h4>
							<div class="slowmotionblock">
                            	<button class="btn-slow-motion" type="button" onclick="shoot()">Capture</button><br/>
								<button class="btn-slow-motion" type="button" id="download_button">Download</button><br/>
                            	<div id="output" style="display: inline-block; top: 4px; position: relative ;border: dotted 1px #ccc; padding: 2px;"></div>
							</div>
                        </div>
		 			</div>
					 			
		 		</div>
			</div>

		</div>
  	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<!-- Video JS -->
	<script src="plugins/videojs/js/video-5-15-1.js"></script>
	<script src="plugins/videojs/js/videojs.zoomrotate.js"></script>

	<script src="plugins/fabric/fabric.min.js"></script>
	<script src="js/commanFunction.js"></script>
        
        <script>
            
            //Capture support , does not work with zoom or rotate, drawing is saved with a little shift on X-Axis
			//by sos-productions.com
 
            var videoId = 'sidebyside-video_2';
            var scaleFactor = 1; //0.25;
            var snapshots = [];
			var snapshotsMax=4;
			var snapshotMime='image/jpeg';
			var snapshotFile='bunny%d.jpg';
			var snapshotQuality=0.8;
			var snapshotWidth=300;
			var snapshotHeight=240;


            /**
             * Captures a image frame from the provided video element.
             *
             * @param {Video} video HTML5 video element from where the image frame will be captured.
             * @param {Number} scaleFactor Factor to scale the canvas element that will be return. This is an optional parameter.
             *
             * @return {Canvas}
             */
            function capture(video, scaleFactor) {
                if(scaleFactor == null){
                    scaleFactor = 1;
                }
                
                //see https://github.com/videojs/video.js/issues/2282
                var videoWidth=parseInt(getComputedStyle(otherPlayer.el()).width); // true video.videoWidth
                var videoHeight=parseInt(getComputedStyle(otherPlayer.el()).height);// true video.videoHeight
               
                var w = videoWidth * scaleFactor;
                var h = videoHeight * scaleFactor;
                var canvas = document.createElement('canvas');
                    canvas.width  = w;
                    canvas.height = h;
                var ctx = canvas.getContext('2d');
                    ctx.drawImage(video, 0, 0, w, h);
                return canvas;
            } 
 
		function getMergedDrawAndVideoCanvas() {
			 var video  = document.getElementById(videoId+'_html5_api');
          
            var canvas = capture(video, scaleFactor);
                canvas.onclick = function(){
                    window.open(this.toDataURL());
                };
            //Merge canvas_draw with canvas 
            var canvas_draw=document.getElementById('video-canvas1');
           
            //grab the context from your destination canvas "canvas"
            var destinationCanvas=canvas;
            var destCtx = destinationCanvas.getContext('2d');
            
            //call its drawImage() function passing it the source canvas directly
            var sourceCanvas=canvas_draw;
            var w = canvas.width;
            var h = canvas.height;
            destCtx.drawImage(sourceCanvas, 0, 0, w,h);

			return canvas;
		}

		var donwnloadMode=false;


        /**
         * Invokes the <code>capture</code> function and attaches the canvas element to the DOM.
         */
        function shoot(){

            var canvas = getMergedDrawAndVideoCanvas()
			donwnloadMode=false;
			resizeImageCanvas(canvas,snapshotWidth,snapshotHeight);

        }

		//Resize and Download support using Blob technique

		var links=[];
		

	   document.getElementById("download_button").onclick = function() {

		  var canvas = getMergedDrawAndVideoCanvas();
		  donwnloadMode=true;
		  resizeImageCanvas(canvas,snapshotWidth,snapshotHeight);
		}

		async function getImage({
		  canvas,
		  width,
		  height,
		  mime = snapshotMime,
		  quality = snapshotQuality,
		}) {
		  return new Promise(resolve => {
			const tmpCanvas = document.createElement('canvas');
			tmpCanvas.width = width;
			tmpCanvas.height = height;

			const ctx = tmpCanvas.getContext('2d');
			ctx.drawImage(
			  canvas,
			  0,
			  0,
			  canvas.width,
			  canvas.height,
			  0,
			  0,
			  width,
			  height,
			);

			tmpCanvas.toBlob(function(blob){
				var href = URL.createObjectURL(blob);
				console.log(href); // this line should be here

				var link = document.createElement("a");
				link.download = snapshotFile.replace(/%d/, links.length);
				link.href=href;

				var img = document.createElement("img");
				img.src=href;
				img.width=width;
				img.height=height;
				link.appendChild(img);

	 			 var output = document.getElementById('output');
			        
				 snapshots.unshift(link);
				output.innerHTML = '';

				var iMax=snapshots.length;
				if(iMax > snapshotsMax) {
					iMax=snapshotsMax;
				}

		         for(var i=0; i<iMax; i++){
		            output.appendChild(snapshots[i]);
		        }

		       if(donwnloadMode) {
					link.click();
				}

			 }, mime, quality);

		  });
		}

		async function resizeImageCanvas(canvas,width,height) {
			const photo = await getImage({ canvas, width: width, height: height });
		}
        </script>
	
  </body>
</html>
