<footer>

</footer>


<!-- LIBS
================================= -->
<?php print_r (enqueueJS()); ?>
<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/modernizr.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/sticky.min.js"></script>

<!-- PERSONAL SCRIPTS
================================= -->
<script type="text/javascript">
	 ////////////////////////////////////////////
	// VARIABLES
	var isMobile = false,
	    eventType = 'click';

	 ////////////////////////////////////////////
	// SIZING
	tailor();
	window.addEventListener('resize', tailor);

	  ////////////////////////////////////////////
	 // EVENTS
	// for desktop
	// document.getElementById('scale_1').addEventListener(eventType, function() { displayGreeting(0); }, false);


	 ///////////////////////////////////////////
	// MAIN
	quote();

	 ////////////////////////////////////////////
	// FUNCTIONS
	function tailor() {
		if ( /WinCE|iPhone|iPod|iPad|Android|BlackBerry/i.test(navigator.platform) ||
				screen.width < 500 )
		{
				isMobile = true,
				eventType = 'touchstart';
		} else {
				eventType = 'click';
		}
	}

	function quote() {
			var quote = '“But, said Alice,\nif the world has absolutely no sense,\nwho\'s stopping us from inventing one?”';
			console.log(quote);
			console.log('--');
			console.log('%cAlice in Wonderland', "font-weight:normal;font-style:italic;font-size:12px;color:#666;");
	}
</script>

<!-- WAYPOINT -->
<!-- <script type="text/javascript">
	var waypoint = new Waypoint({
		  element: document.getElementById('waypoint'),
		  handler: function(direction) {
		    console.log('Scrolled to waypoint!')
		  }
	})
	var sticky = new Waypoint.Sticky({
	element: $('#topNav')
	})
</script> -->

<!-- COOKIE
================================= -->
<script type="text/javascript">
	if (document.cookie.indexOf("visited") >= 0) {}
	else {
	  // set a new cookie
	  expiry = new Date();
	  expiry.setTime(expiry.getTime()+(10*24*60*60*1000)); // Ten minutes

	  // Date()'s toGMTSting() method will format the date correctly for a cookie
	  document.cookie = "visited=yes; expires=" + expiry.toGMTString();
	  console.log('tuto');
	  document.getElementById('tuto').style.display='block';
	}
	var isTutoDisplayed = false;
	//window.addEventListener("keydown",keyboard);

	function keyboard(t){
		var e=document.getElementById("tuto");
		isTutoDisplayed && "32"==t.keyCode ? (e.style.display="none", isTutoDisplayed = true) : "" ;
	}
</script>
