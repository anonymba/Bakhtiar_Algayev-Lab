<!DOCTYPE html>
<html>
<body>

<?php


$correct_username = "admin";
$correct_password = "Password123";


$error_count = 0;


$username = readline("username: ");


while ($error_count < 3) {
    $password = readline("Telebe uygun Sifreni daxil edin : ");

   
    if ($username === $correct_username && strlen($password) >= 8 && preg_match('/[A-Z]/', $password)) {
        echo "Ugurlu!\n";
        break;
    } else {
        echo "Kriteriyalari qarsilamir.Yeniden tekrar edin.\n";
        $error_count++;
    }
}

if ($error_count === 3) {
    echo "Hesab bloklandi\n";
}
?>