<?php

include './config.php';

	////////////////////////////////////
	// Variables and libs URL
	//////////////////////////////////
	$include = array('modernizr' => true, 'jquery' => true, 'waypoint' => true, 'sticky' => false, 'smoothAnchor' => false);

	$is_mobile = false;

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

	function detect_is_mobile() {
		global $is_mobile;
    if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
            $is_mobile = false;
    } elseif ( strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false // many mobile devices (all iPhone, iPad, etc.)
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi') !== false ) {
                    $is_mobile = true;
    } else {
            $is_mobile = false;
    }

    return $is_mobile;
	}

	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	     $ip=$_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	     $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
	     $ip=$_SERVER['REMOTE_ADDR'];
	}
	// detect_city($ip);

	// other alt = https://css-tricks.com/snippets/php/get-geo-ip-information/
	function detect_city($ip) {
		global $websiteName;
    $default = 'UNKNOWN';
    if (!is_string($ip) || strlen($ip) < 1 || $ip == '127.0.0.1' || $ip == 'localhost')
        $ip = '8.8.8.8';
  	// Fake user agent
		// $curlopt_useragent = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2) Gecko/20100115 Firefox/3.6 (.NET CLR 3.5.30729)';
		// It's nice to use a useful one too
		$curlopt_useragent = $websiteName.' Version/0.1 (20120117;  contact: john@example.org)';
    $url = 'http://ipinfodb.com/ip_locator.php?ip=' . urlencode($ip);
    $ch = curl_init();
    $curl_opt = array(
        CURLOPT_FOLLOWLOCATION  => 1,
        CURLOPT_HEADER      => 0,
        CURLOPT_RETURNTRANSFER  => 1,
        CURLOPT_USERAGENT   => $curlopt_useragent,
        CURLOPT_URL       => $url,
        CURLOPT_TIMEOUT         => 1,
        CURLOPT_REFERER         => 'http://' . $_SERVER['HTTP_HOST'],
    );
    curl_setopt_array($ch, $curl_opt);
    $content = curl_exec($ch);
    if (!is_null($curl_info)) {
        $curl_info = curl_getinfo($ch);
    }
    curl_close($ch);
    if ( preg_match('{<li>City : ([^<]*)</li>}i', $content, $regs) )  {
        $city = $regs[1];
    }
    if ( preg_match('{<li>State/Province : ([^<]*)</li>}i', $content, $regs) )  {
        $state = $regs[1];
    }
    if( $city!='' && $state!='' ){
      $location = $city . ', ' . $state;
      return $location;
    }else{
      return $default;
    }
	}

?>
