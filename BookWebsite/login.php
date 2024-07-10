<?php  
require('test.php');

if (isset($_POST['email']) and isset($_POST['psw'])) {
    $email = $_POST['email'];
    $password = $_POST['psw'];

    $query = "SELECT * FROM users WHERE email='$email' and pass='$password'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        echo "Login Credentials verified";
        // Redirect to home page
        header("Location: home.html");
        exit();
    } else {
        echo "Invalid Login Credentials";
    }
}
?>
