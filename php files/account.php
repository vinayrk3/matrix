<?php

session_start();

// Check if we need to logout
if (isset($_POST['logoutBtn'])) {
    unset($_SESSION['name']);
    header('Location: login.php');
}

// Check if user logged in (username has to exist and not be empty)
// But also check for last activity
if (
    isset($_SESSION['name'])
    && !empty($_SESSION['name'])
    && (strtotime('now') - $_SESSION['last_activity']) < 60
) {
    echo 'Welcome, ' . $_SESSION['name'];
} else {
    echo 'You need to login';
}

?>

<!--<?php require_once 'nav.html'; ?>-->

<form method="post">
    <input type="submit" name="logoutBtn" value="LOG OUT">
</form>