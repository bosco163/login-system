<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $users = file("users.txt", FILE_IGNORE_NEW_LINES);

    foreach ($users as $user) {
        list($savedUsername, $savedPassword) = explode("|", $user);

        if ($username === $savedUsername && password_verify($password, $savedPassword)) {
            echo "<h1>Welcome !</h1>";
            echo "Now Time : " . date("Y-m-d H:i:s");
            exit;
        }
    }

    echo "Username or password errors ! ";
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $users = file("users.txt", FILE_IGNORE_NEW_LINES);

    foreach ($users as $user) {
        list($savedUsername, $savedPassword) = explode("|", $user);

        if ($username === $savedUsername && password_verify($password, $savedPassword)) {
            echo "<h1>Welcome ! </h1>";
            echo "Now time : " . date("Y-m-d H:i:s");
            exit;
        }
    }

}
?>
