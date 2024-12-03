<?php
/* --- $_GET & $_POST Superglobals -- */

// get = get data through url and forms
// post = get data through just forms

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if (isset($_POST['submit'])) { //isset is used to check if the key exists
    echo $_POST['name'];
    echo $_POST['age'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?
    name=John&age=30">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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