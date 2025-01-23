<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $role = $_POST['role'];

    if (empty($email) || empty($role)) {
        echo 'All fields are required!';
        exit;
    }

    $file = 'submissions.csv';
    $data = "$email,$role\n";

    if (file_put_contents($file, $data, FILE_APPEND)) {
        echo 'Thank you for joining the waitlist!';
    } else {
        echo 'Failed to save data. Please try again later.';
    }
}
?>
