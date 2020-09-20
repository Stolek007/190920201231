<?php

// Connecting to DataBase
require '../db/connect.php';

// Get data (Post method)
$name = filter_var(trim($_POST['user_name']), FILTER_SANITIZE_STRING);
$city = $_POST['user_city'];
$area = $_POST['user_area'];
$street = $_POST['user_street'];
$house = $_POST['user_house'];
$additional_info = $_POST['user_additional_info'];

// Creating errors array
$errors = array();

// Validation
if (mb_strlen($name) == 0) {
    array_push($errors, 'You did not fill in the "Name" field');
}

if (mb_strlen($city) == 0) {
    array_push($errors, 'You did not choose Your city');
}

if (mb_strlen($area) == 0) {
    array_push($errors, 'You did not choose Your area');
}

if (mb_strlen($street) == 0) {
    $street = '';
}

if (mb_strlen($house) == 0) {
    $house = '';
}

if (mb_strlen($additional_info) == 0) {
    $additional_info = '';
}

if (!empty($errors)) {
    $warnings = '';
    for ($i = 0; $i < count($errors); $i++) {
        $warnings .= '<p class="warning">' . $errors[$i] . '</p>';
    }
    echo $warnings;
    exit();
}

else if (empty($errors)) {
    $result = $mysql->prepare("INSERT INTO `addresses` (`name`, `city`, `area`, `street`, `house`, `additional_info`) VALUES ('$name', '$city', '$area', '$street', '$house', '$additional_info')");
    $result->execute();
}

// If something went wrong -> exit the code
exit();




























