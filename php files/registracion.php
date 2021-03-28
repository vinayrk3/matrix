<?php
/*
$conn = mysqli_connect('localhost', 'root', '', 'db');

if ($conn)
    echo 'database connect';
else
    echo 'fuck off';

*/
$errors = array();

// Do something only if I get data
if (!empty($_POST)) {
    // Basics validations
    if (empty($_POST['name']))
        $errors['name'] = 'Name is mandatory';

    elseif (!(strlen($_POST['email']) > 8 and strlen($_POST['email']) < 50))
        $errors['email'] = 'Your email should be between 8 and 50 characters';
    elseif (!(strpos($_POST['email'], '@')))
        $errors['email'] = 'Your email doesn\'t contain @ symbol';

    elseif (strlen($_POST['password']) < 8)
        $errors['password'] = 'Your password must have at least 8 character long';
    elseif (!($_POST['password'] == $_POST['passwordConfirmation']))
        $errors['passwordConfirmation'] = 'Your password are not indentical';



    if (count($errors) == 0) {

        $password = ($_POST['password']);
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);

        $passwordConfirmation = ($_POST['passwordConfirmation']);
        $hashPasswordConfirmation = password_hash($passwordConfirmation, PASSWORD_DEFAULT);


        $conn = mysqli_connect('localhost', 'root', '', 'db');


        $query = "INSERT INTO user(name, email, password, passwordConfirmation)
    VALUES('" . $_POST['name']  . "', '" . $_POST['email']  . "', '" . $hashPassword  . "', '" . $hashPasswordConfirmation . "')";


        // execute the query
        $result_query = mysqli_query($conn, $query);

        if ($result_query)
            echo 'User successfully added!';
        else
            echo 'Error inserting into DB';
    } else {
        echo implode('<br>', $errors);
    }
}
