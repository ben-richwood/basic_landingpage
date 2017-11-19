<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title><?php echo displayTitle($websiteName, $pageName); ?></title>
  <meta name="description" content="<?php echo $websiteDesc ?>" />
  <link rel="manifest" href="./manifest.json">
  <meta name="author" content="<?php echo $websiteAuthor ?>">

  <!-- Mobile settings -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="<?php echo $websiteColor ?>">

  <!-- FAVICONS -->
  <link rel="icon" href="./assets/img/flavicon.ico">
  <link rel="apple-touch-icon" href="./assets/img/flavicon.ico">

	<!-- CSS
	================================= -->
	<?php if ($isBootstrapOn) { ?>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
  <?php } ?>

<!--
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <link rel="stylesheet" type="text/css" href="css/fxfullwidth.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
-->

	<link rel="stylesheet" href="./assets/css/style.css" />

	<!-- GOOGLE FONT
	================================= -->
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif|Ubuntu|Sintony" rel="stylesheet">



	<!-- **OPEN GRAPH** -->
	<link rel="canonical" href="<?php echo $websiteURL; ?>" />
	<meta property="og:locale" content="fr_FR" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo $websiteTitle; ?>" />
	<meta property="og:url" content="<?php echo $websiteURL; ?>" />
	<meta property="og:site_name" content="Richwood"/>
	<meta property="og:description" content="<?php echo $websiteDesc; ?>" />
	<meta property="og:image" content="<?php echo $websiteURL; ?>/assets/img/Richwood-og.png" />
	<meta property="og:image:url" content="<?php echo $websiteURL; ?>/assets/img/Richwood-og.png" />
	<meta property="og:image:width" content="1300" />
	<meta property="og:image:height" content="730" />
	<meta property="og:image" content="<?php echo $websiteURL; ?>/assets/img/og-image-large.png" />
	<meta property="og:image:url" content="<?php echo $websiteURL; ?>/assets/img/og-image-large.png" />
	<meta property="og:image:width" content="1250" />
	<meta property="og:image:height" content="702" />
	<meta property="og:image" content="<?php echo $websiteURL; ?>/assets/img/og-image-thumb.png" />
	<meta property="og:image:url" content="<?php echo $websiteURL; ?>/assets/img/og-image-thumb.png" />
	<meta property="og:image:width" content="650" />
	<meta property="og:image:height" content="350" />

	<meta name="twitter:card" content="logo" />
	<meta name="twitter:site" content="<?php echo $websiteTwitter; ?>" />
	<meta name="twitter:title" content="<?php echo $websiteTitle; ?>" />
	<meta name="twitter:description" content="<?php echo $websiteDesc; ?>" />
	<meta name="twitter:image" content="<?php echo $websiteURL; ?>/assets/img/og-image-large.png" />
	<meta name="twitter:url" content="<?php echo $websiteURL; ?>" />


	<!-- **SCRIPT** -->
  <?php if ($isJqueryOn == true) { ?>
	   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <?php } ?>
	<script src="./assets/js/modernizr.custom.js"></script>

</head>
