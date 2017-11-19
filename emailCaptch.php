<?php
$reCaptcha = new ReCaptcha('6LcUNxEUAAAAABfYC7ckSqfs2RU6hYfmXqs_l8cK');
if(isset($_POST["g-recaptcha-response"])) {
    $resp = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
        );
    if ($resp != null && $resp->success) {echo "OK";}
    else {echo "CAPTCHA incorrect";}
    }
?> 