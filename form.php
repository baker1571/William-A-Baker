<?php
if (isset($_POST['submit'])) {
    $to = "baker1571@gmail.com"; // Your email address
    $from = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $message = $first_name . " " . $last_name . " wrote the following:\n\n" . $_POST['message'];

    // Send email
    mail($to, $subject, $message, "From: $from");

    // Send a copy to the sender
    // mail($from, "Copy of your form submission", $message, "From: $to");

    // echo "Mail Sent. Thank you, $first_name! We will contact you shortly.";
}
?>