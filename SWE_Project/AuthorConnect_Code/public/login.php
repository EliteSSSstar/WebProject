
<?php include "templates/header.php";

/*NOTE : THIS PAGE STILL NEED TO GIVE USER SESSION AND REDIRECT USER WHEN LOGIN
THE STRING ECHO SUCCESSFULLY LOGIN STILL DOES NOT SHOW UP.
PLUS SIDE ITS CONNECT TO DB*/

require "../common.php";
require_once ('../src/DBconnect.php');
    //Connect to the DB
    //Compare input value with DB value


if(isset($_POST['submit'])){

    /** @var TYPE_NAME $username */
    if($_POST['username'] == $username) {

        /** @var TYPE_NAME $password */
        if ($_POST['password'] == $password) {
            echo 'success';
        } else
            echo 'Incorrect Login Detail';
    } else
        echo 'Incorrect Login Detail';
}
?>

<main class="main">

<p>Not a member yet? go to
    <a href="register.php">Register</a>
</p>


<h2> Login Page:</h2>
<form method="get">
    <!-- Username -->
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>

    <!-- Password -->
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>

    <br><br>
    <!-- login Button -->
    <input type="submit" name="submit" value="Login">
</form>

</main>
<?php include "templates/footer.php"; ?>