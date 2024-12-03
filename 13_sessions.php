<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across
  multiple pages. Unlike cookies, sessions are stored on the server. 
  More secure than cookie
*/

session_start();

if (isset($_POST['submit'])) { //isset is used to check if the key exists
    $username  = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    if ($username == 'john' && $password == 'password') {
        $_SESSION['username'] = $username;
        header('Location: /php-crash/extras/dashboard.php');
    } else {
        echo 'Incorrect Login';
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"> <!-- htmlspecialchars = to protect ur website -->
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username">
    </div>
    <br>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>