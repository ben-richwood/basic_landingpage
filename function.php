<?php

include './config.php';

	////////////////////////////////////
	// Variables and libs URL
	//////////////////////////////////
	$include = array('modernizr' => true, 'jquery' => true, 'waypoint' => true, 'sticky' => false, 'smoothAnchor' => false);

	// print_r($include);
	$data = json_decode($include, true);
	// echo '$data';
	// print_r($data);

	// $include = (object) array(); // Or new stdClass();
	// $include->modernizr = true;
	// $include->jquerry = true;
	// $include->waypoint = true;
	// $include->sticky = true;
	// $include->smoothAnchor = true;
	// $include->twinLight = false;

	// !!!!!!!! http://krisjordan.com/dynamic-properties-in-php-with-stdclass
	// !!!!!!!! http://php.net/manual/en/language.types.object.php

	$libsURL = (object) array(); // Or new stdClass();
	$libsURL->modernizr = "./assets/js/modernizr.js";
	$libsURL->jquerry = "https://code.jquery.com/jquery-3.2.1.min.js";
	$libsURL->waypoint = "./assets/js/waypoint.js";
	$libsURL->sticky = "./assets/js/sticky.min.js";
	$libsURL->smoothAnchor = "./assets/js/sticky.min.js";

	if ($include.waypoint == true || $include[sticky] == true || $include[smoothAnchor] == true) {
		$include[jquerry] == true;
	}

	////////////////////////////////////
	// Enqueue librairies
	//////////////////////////////////
	function enqueueJS(){
		$libs = array();

		// $includeJson = json_encode($include);
		// $libsJson = json_encode($libsURL);
		// $stdClass = json_decode(json_encode($include));
		// $array = json_decode(json_encode($stdClass), true);

		for($i = 0 ; $i < count($include) ; $i++ ){
			$include[$i] == true ? array_push($libs, '<script src="'.$libsJson[$i].'"></script>') : null;
		}
		return $libs;
	}

	function displayTitle($d, $e) {
		$result = $d." | ".$e;
		return $result;
	}

?>
