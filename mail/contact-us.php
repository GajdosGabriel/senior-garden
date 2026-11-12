<?php

header('Content-Type: text/plain; charset=utf-8');

// Iba POST požiadavky
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo "Nepovolená metóda.";
    exit;
}

// Odstráni riadiace znaky (ochrana pred vložením hlavičiek do e-mailu)
function sg_clean_line($value) {
    return trim(preg_replace('/[\r\n\t]+/', ' ', (string) $value));
}

$name          = sg_clean_line(isset($_POST['name']) ? $_POST['name'] : '');
$email_address = sg_clean_line(isset($_POST['email']) ? $_POST['email'] : '');
$phone         = sg_clean_line(isset($_POST['phone']) ? $_POST['phone'] : '');
$message       = trim(isset($_POST['message']) ? (string) $_POST['message'] : '');

// Kontrola povinných polí
if ($name === '' || $email_address === '' || $phone === '' || $message === ''
    || !filter_var($email_address, FILTER_VALIDATE_EMAIL)
    || mb_strlen($name) > 100 || mb_strlen($phone) > 30 || mb_strlen($message) > 5000) {
    http_response_code(400);
    echo "Vyplňte požadované údaje!";
    exit;
}

// Adresa, na ktorú sa správa odošle
$to = 'riaditel@seniorgarden.sk';

$email_subject = '=?UTF-8?B?' . base64_encode("Nová správa z webovej stránky SeniorGarden.sk od: $name") . '?=';

$email_body = "Správa z kontaktného formulára www.seniorgarden.sk.\n\n"
    . "Meno: $name\n\n"
    . "E-mail: $email_address\n\n"
    . "Telefón: $phone\n\n"
    . "Správa:\n$message\n";

$headers  = "From: seniorgarden.sk@gmail.com\r\n";
$headers .= "Reply-To: $email_address\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "Content-Transfer-Encoding: 8bit";

if (!mail($to, $email_subject, $email_body, $headers)) {
    http_response_code(500);
    echo "Správu sa nepodarilo odoslať.";
    exit;
}

echo "OK";
