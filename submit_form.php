<?php
// Get the reCAPTCHA response from the form submission
$captchaResponse = $_POST['g-recaptcha-response'];

// Verify reCAPTCHA response using the Secret Key
$secretKey = '6LcAR6YnAAAAACEGF2VXx7ya0BSDIiRQtUDRJZlW';
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captchaResponse");
$responseKeys = json_decode($response, true);

// Check if the reCAPTCHA verification was successful
if (intval($responseKeys["success"]) !== 1) {
  echo "reCAPTCHA verification failed. Please try again.";
  exit;
}

// Process the rest of the form data
// ...

?>
