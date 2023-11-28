<?php
if (isset($_GET['name'], $_GET['mail'], $_GET['age'])) {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    
    $nameLengthCheck = strlen($name) > 3;
    $mailFormatCheck = filter_var($mail, FILTER_VALIDATE_EMAIL);
    $ageNumberCheck = is_numeric($age);

    
    if ($nameLengthCheck && $mailFormatCheck && $ageNumberCheck) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }
};
?>