<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $organization = htmlspecialchars($_POST['organization']);
    $contact = htmlspecialchars($_POST['contact']);
    $email = htmlspecialchars($_POST['email']);
    $partnershipType = htmlspecialchars($_POST['partnership-type']);
    $message = htmlspecialchars($_POST['message']);

    // Handle the form data (e.g., save to a database or send an email)
    echo "Thank you, $contact, for your inquiry regarding $partnershipType.";
}
?>
