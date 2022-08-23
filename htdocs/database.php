<?php
include_once ('input_san.php');
//starting session, when database.php is included in files, all files will have session start
 

$username = "";
$email = "";
$password = "";
$password2 = "";

$errors = array();

//connecting to database
$connection = mysqli_connect('localhost', 'root', '', 'accountreg');

if(isset($_POST['submit'])){

    $username = sanitize($_POST['username']);
    $email =sanitize($_POST['emailaddress']); 
    $password = sanitize($_POST ['password']);
    $password2 = sanitize($_POST ['password2']);

    
    //this is to add an error to each individual field if they are empty

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if ($password != $password2) {
        array_push($errors, "Passwords don't match");
    }

    //if no errors were made, we can continue adding to the information to the database
    if(count($errors) == 0){

        $checkUsername = "SELECT * FROM users WHERE username = '$username'";

        $usernameResult = mysqli_query($connection, $checkUsername);

        $usernameCount = mysqli_num_rows($usernameResult);

        $checkEmail = "SELECT * FROM users WHERE email = '$email'";

        $emailResult = mysqli_query($connection, $checkEmail);

        $emailCount = mysqli_num_rows($emailResult);

        if($usernameCount == 0 && $emailCount == 0){
        //hash password, making it even more secure
        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

        mysqli_query($connection, $sql);

        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;

        header("location: main.php");
        }
        if ($usernameCount == 1 && $emailCount == 0) {
            array_push($errors, "Username already exists.");
        }
        if ($usernameCount == 1 && $emailCount == 1) {
            array_push($errors, "Username already exists and email already in use, try another email.");
        }
        else{
            array_push($errors, "Email already in use, try another email.");
        }
    }
}

//checking for login form

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username)) {
        array_push($errors, "Username is required");
    }
    if(empty($password)){
        array_push($errors, "Password is required");
    }
    if(count($errors)==0)
    $queryuser = "SELECT * FROM users WHERE username='$username'";
    $resultuser = mysqli_query($connection, $queryuser);
    $count1 = mysqli_num_rows($resultuser);

    if($count1 == 1){
        $queryuser2 = "SELECT password FROM users WHERE username = '$username'";
        $resultuser2 = mysqli_query($connection, $queryuser2);
        $passwordRow = mysqli_fetch_array($resultuser2);
        $hashed = $passwordRow['password'];

        if(password_verify($password, $hashed)) {

            $_SESSION['username'] = $username;
            $_SESSION['loggedin'] = true;
            header ('location: main.php');
        }
    }
    else{
        array_push($errors, "Either your username or password are invalid.");
        header('location: index.php');
    }
}

if (isset($_POST['deleteaccount'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username)) {
        array_push($errors, "Username is required");
    }
    if(empty($password)){
        array_push($errors, "Password is required");
    }
    if(count($errors) == 0){
    $query1 = "SELECT * FROM users WHERE username = '$username'";
    $result1 = mysqli_query($connection, $query1);
    $count1 = mysqli_num_rows($result1);
    
    if ($count1 == 1){
        $query2 = "SELECT password FROM users WHERE username ='$username'";
        $result2 = mysqli_query($connection, $query2);
        $password_row= mysqli_fetch_array($result2);
        $hashed = $password_row['password'];
        if (password_verify($password, $hashed)) {
            $query3 = "DELETE FROM users WHERE username = '$username'";

            if(mysqli_query($connection, $query3)) {
                session_destroy();
                unset($_SESSION['username']);
            }else{
                echo "error" . mysqli_error($connection);
            }
        }
   
    } else {
        array_push($errors, "Username or Password is incorrect, try again.");
    }

    }
}
?>



