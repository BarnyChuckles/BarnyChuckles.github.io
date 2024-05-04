<?php
// The correct password
$correct_password = 'S.c.o.p.h.m.c.m.m.t.l.m.g.a.d';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the password is correct
    if (isset($_POST['password']) && $_POST['password'] === $correct_password) {
        // Password is correct, redirect or include the secret content
        echo "Access Granted. Welcome to the secret page!";
        // Optionally, redirect to another page or include secret content here
    } else {
        // Incorrect password, show an error
        echo "Access Denied. Incorrect password.";
    }
} else {
    // Form not submitted
    echo "Please enter the password.";
}
?>
