<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Define the file path
$filePath = 'contact_messages.txt';

// Create or open the file in append mode
$file = fopen($filePath, 'a');

// Write the contact message to the file
fwrite($file, "Name: $name\nEmail: $email\nMessage: $message\n\n");

// Close the file
fclose($file);

// Send a response back to the client
echo 'Message saved successfully!';
?>
