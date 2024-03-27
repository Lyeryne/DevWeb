<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $dob = $_POST["dob"];

    // Calculate the age
    $birthdate = new DateTime($dob);
    $today = new DateTime();
    $age = $today->diff($birthdate)->y;

    // Display the greeting message
    echo "Hello, $firstName $lastName! You are $age years old.";
}
?>