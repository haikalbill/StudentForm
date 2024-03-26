<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $matricNumber = $_POST["matricNumber"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
    $homeAddress = $_POST["homeAddress"];
    $homePhoneNumber = $_POST["homePhoneNumber"];
    $errors = array();
    // Validate name
    if (empty($fname)) {
        $errors[] = "First Name is required.";
    }
    if (empty($lname)) {
        $errors[] = "Last Name is required.";
    }
    // validate matricno
    if (empty($matricNumber)) {
        $errors[] = "Matric Number is required.";
    }
    // validate phone no
    if (empty($phoneNumber)) {
        $errors[] = "Phone Number is required.";
    }

    // Validate email

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required.";
    }

    // Validate home adrress
    if (empty($homeAddress)) {
        $errors[] = "Home Address is required.";
    }

    // Validate home phone number
    if (empty($homePhoneNumber)) {
        $errors[] = "Home Phone Address is required.";
    }

    // Display errors or proceed with registration
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>Error: $error</p>";
        }
    } else {
        // Perform registration (insert into database, etc.)
        // For demonstration purposes, let's just echo the success message
        echo "<p>Registration successful!</p>";
    }
} else {
    // Redirect or display an error message if accessed directly
    echo "<p>Error: Form submission method not allowed.</p>";
}
?>
