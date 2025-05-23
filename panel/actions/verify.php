<?php
if (isset($_POST['h-captcha-response'])) {
    $data = [
        'secret' => 'ES_844a1111c873437f9c5468ac44d735fc', // hCAPTCHA secret key
        'response' => $_POST['h-captcha-response']
    ];
    
    $verify = curl_init();
    curl_setopt($verify, CURLOPT_URL, 'https://hcaptcha.com/siteverify');
    curl_setopt($verify, CURLOPT_POST, true);
    curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($verify);
    $responseData = json_decode($response);

    if ($responseData->success) {
        echo "success";
    } else {
        echo "failure";
    }
}
?>
