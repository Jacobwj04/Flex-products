<?php
require_once "functions.php";

if (!empty($_POST['email'])) {
    $email = validateFormData("email");
    $name = validateFormData("name");
    $nieuwsbrief = validateFormData("nieuwsbriefOptions");
} else {
    echo 'veld is leeg';
}

require_once "database.php";