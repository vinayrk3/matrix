<?php
if (isset($_POST['submitBtn'])) {

    // Retrieve form data and trim
    $mail = trim($_POST['email']);

    $password = htmlspecialchars(trim($_POST['password']));

    require_once 'database.php';

    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

    $query = 'SELECT * 
            FROM user 
            WHERE email = "' . $mail . '"';

    $results = mysqli_query($conn, $query);

    // Check if I got a result
    if (mysqli_num_rows($results) == 0) {
        echo 'Email is not in our database!';
    } else {
        // Check if passwords are matching
        $user = mysqli_fetch_assoc($results);
        if (!password_verify($password, $user['password'])) {
            echo 'Password is not correct.';
        } else {
            session_start();
            $_SESSION['name'] = $user['name'];
            $_SESSION['last_activity'] = strtotime('now');
            // redirection :
            //header('Location: account.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!--<?php require_once 'createAccount.html'; ?>-->
    <br>
    <br>

    <form action="" method="post">
        <input type="text" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="submitBtn" value="LOG IN">
    </form>

</body>

</html>