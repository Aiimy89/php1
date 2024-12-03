<?php
/* --- $_GET & $_POST Superglobals -- */

// get = get data through url and forms
// post = get data through just forms

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if (isset($_POST['submit'])) { //isset is used to check if the key exists
    $name  = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age  = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name;
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"> <!-- htmlspecialchars = to protect ur website -->
    <div>
        <label>Name: </label>
        <input type="text" name="name">
    </div>
    <br>
    <div>
        <label>Age: </label>
        <input type="text" name="age">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>