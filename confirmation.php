<!DOCTYPE html>
  
   <?php
      function isValid($code, $ip = null) {
        if (empty($code)) {
          // If not any code was added, just do nothing
          return false;
        }
        $params = [
            // INSERT HERE THE SECRET KEY FROM GOOGLE CONSOLE
            'secret'    => "6LcUNxEUAAAAABfYC7ckSqfs2RU6hYfmXqs_l8cK",
            'response'  => $code
        ];
        if( $ip ){
            $params['remoteip'] = $ip;
        }
        $url = "https://www.google.com/recaptcha/api/siteverify?" . http_build_query($params);
        if (function_exists('curl_version')) {
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_TIMEOUT, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // Evite les problèmes, si le ser
            $response = curl_exec($curl);
        } else {
            // If CURL is not available, let's use file_get_contents
            $response = file_get_contents($url);
        }

        if (empty($response) || is_null($response)) {
            return false;
        }

        $json = json_decode($response);
        return $json->success;
    }
   ?>

    <?php
      $email = $prenom = $nom = $adresse = $code_postal = $ville = $message = $captcha = $telephone = $contact_mode = "";
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $prenom = test_input($_POST["prenom"]);
        $nom = test_input($_POST["nom"]);
        $adresse = test_input($_POST["adresse"]);
        $code_postal = test_input($_POST["code_postal"]);
        $ville = test_input($_POST["ville"]);
        $telephone = test_input($_POST["telephone"]);
        $email = test_input($_POST["email"]);
        $contact_mode = test_input($_POST["contact_mode"]);
        $message = test_input($_POST["message"]);
        if(isset($_POST['g-recaptcha-response'])){$captcha=$_POST['g-recaptcha-response']; }
      }

     function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

     $ip = $_SERVER['REMOTE_ADDR'];

     

    // ***************************************
    //              TEXT TO CHANGE
    // ***************************************
    $expediteur = "richebois.benjamin@gmail.com";
    // ***************************************

    $date = date('\l\e D d F Y \à H:i:s');
    $header = 'From: '.$expediteur."\r\n" .
     'Reply-To: '.$expediteur. "\r\n" .
     'Content-Type: text/html; charset="iso-8859-1"\r\n'.
     'X-Mailer: PHP/' . phpversion();

    $mailPourMoi = "<b>[NOM]</b> → ".$prenom." ".$nom."<br><b>[EMAIL]</b> → ".$email."<br><b>[TELEPHONE]</b> → ".$telephone."<br><b>[Adresse]</b> → ".$adresse."<br>".$code_postal." ".$ville."<br><b>[DATE]</b> → ".$date."<br><b>Souhaite être recontacté(e) par</b> → ".$contact_mode."<br><b>[MESSAGE]</b> → ".$message;

    $mailPourClient="<html><body><h1>Merci pour ton message !</h1>".
    "Nous accusons réception de votre message ; Nous vous recontactons dans les plus brefs délais.<br>".
    "A bientôt<br><br><br>".
    "<b>ENEOM - transiteur énergétique</b><br>".
    "<a href='http://eneom.fr' title='Eneom - transiteur énergétique'>eneom.fr</a><br>";
    
   ?>


<html lang="fr" class="no-js">
  <head>
    <meta charset="utf-8">
    <title>
      <?php if( is_null(isValid($captcha, $ip)) ) {
        echo 'ENEOM - erreur de votre requête';
      }else{echo 'ENEOM - Merci pour votre message';}
      ?>
    </title>
    <meta name="description" content="Les ressources naturelles se font rares et précieuses. C’est pourquoi ENEOM s’engage à accroître la valeur de votre habitat et à vous faire réduire votre gaspillage énergétique." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/animate.min.css" />
    <link rel="stylesheet" href="./css/ionicons.min.css" />
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="./css/connexion.css" />
    <link rel="stylesheet" href="css/nav.css"> <!-- Resource style -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat:700" rel="stylesheet">

    <!-- FAVICONS -->
    <link rel="icon" href="assets/flavicon.ico">
    <link rel="apple-touch-icon" href="assets/flavicon.ico">

    <?php include_once "opengraph.php" ?>

  </head>
  <body>

   <?php include_once "header.php" ?>


   <section id="connexion">
      <div class="container">
            <div class="row">
                <div class="col-lg- col-md-10 col-md-offset-1 col-sm-offset-1">
                  <div class="tab-content">
                    <div class="col-lg-12 col-md-12">
                      <div id="login">   
                         <?php
                          if( is_null(isValid($captcha, $ip)) ) {
                           echo '<h2>Ceci ressemble à un spam :/</h2>';
                          } else { ?>
                            <h2 class="margin-top-0 vert wow fadeIn">ENEOM vous remercie</h2>
                            <svg version="1.1" class="primary vert" x="0px" y="0px" width="481.581px" height="17.9px" viewBox="0 0 481.581 17.9" xml:space="preserve">
                              <g>
                                <circle cx="9.287" cy="9.004" r="8.894"/> <circle cx="42.387" cy="9.004" r="8.896"/> <circle cx="75.487" cy="9.004" r="8.896"/> <circle cx="108.587" cy="9.004" r="8.896"/>
                                <circle cx="141.687" cy="9.004" r="8.896"/> <circle cx="174.786" cy="9.004" r="8.896"/> <circle cx="207.886" cy="9.004" r="8.896"/>
                                <circle cx="240.986" cy="9.004" r="8.896"/> <circle cx="274.086" cy="9.004" r="8.896"/>
                                <circle cx="307.186" cy="9.004" r="8.896"/> <circle cx="340.286" cy="9.004" r="8.896"/>
                                <circle cx="373.386" cy="9.004" r="8.896"/> <circle cx="406.486" cy="9.004" r="8.896"/>
                                <circle cx="439.586" cy="9.004" r="8.896"/> <circle cx="472.686" cy="9.004" r="8.896"/>
                              </g>
                            </svg>
                           <p>Merci pour votre message, nous nous efforçons d'y répondre au plus vite.</p>

                          <?php
                            mail("richebois.benjamin@gmail.com", "Nouvelle demande de contact - ENEOM !", $mailPourMoi, $header);
                            mail($email, 'ENEOM | Demande bien reçu', $mailPourClient, $header);
                          } ?>
                      </div>
                      <div class="nous-rejoindre">
                        <a href="/" class="button">← Retour sur le site</a>
                      </div>
                    </div>
                  </div>
                </div> <!-- div.tab-content -->
              </div>
        </div> <!-- /container -->
        <?php
          // Save the form in a CSV file in addition
          $concat = "\n\"".$prenom."\";\"".$nom."\";\"".$adresse."\";\"".$code_postal."\";\"".$ville."\";".$telephone.";\"".$email."\";".$contact_mode.";".$date.";\"".$message."\";".$ip;
          $handle = fopen("db/emailDB.csv", "a") or exit("can't fopen file");
          fwrite($handle, $concat) or exit("can't fwrite the file");
          fclose($handle) or exit("can't fclose the file");
        ?>
    </section>

</body>
</html>