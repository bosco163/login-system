<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if username is not already taken
    $users = file("users.txt", FILE_IGNORE_NEW_LINES);
    foreach ($users as $user) {
        list($existingUsername, $existingPassword) = explode("|", $user);
        if ($username === $existingUsername) {
            die("Username already exists. Please choose a different username.");
        }
    }

    // Check if password meets minimum length requirement
    if (strlen($password) < 8) {
        die("Password must be at least 8 characters long.");
    }

    // Hash the password and save to the database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $newUser = "$username|$hashedPassword\n";
    file_put_contents("users.txt", $newUser, FILE_APPEND);

    echo "Registration successful ! ";
}
?>
