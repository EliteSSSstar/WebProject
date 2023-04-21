
<?php
//If submit button has been clicked it will connect to the DB
//and try to add(post) data into database.
if (isset($_POST['submit'])){
    require "../common.php";

    try {
        //Connect to the DB
        require_once '../src/DBconnect.php';
        //insert new user code will go here
        //escape method will take an input the sanitize in common.php file
        $new_user = array(
                "username"  => escape($_POST['username']),
                "password"  => escape($_POST['password']),
                "firstname" => escape($_POST['firstname']),
                "lastname"  => escape($_POST['lastname']),
                "email"     => escape($_POST['email']),
                "phoneNum"  => escape($_POST['phoneNum']),
        );

        //This line of code will insert our data into a table
        $sql = sprintf( "INSERT INTO %s (%s) values (%s)", "user", implode(", ",
            array_keys($new_user)), ":" . implode(", :", array_keys($new_user)) );



        if (!empty($connection)) $statement = $connection->prepare($sql);
        $statement->execute($new_user);

    }catch (PDOException $error){
        if (!empty($sql)) {
            echo $sql . "<br>" . $error->getMessage();
        }
    }

}
//include Header html
include "templates/header.php";

//This will check if code has submitted and updated to the DB

if (isset($_POST['submit']) && $statement){
    echo $new_user['firstname'] . ' successfully registered and added to DB';
}
?>

<main class="main">
<p>Already registered go to :
    <a href="login.php"> Login </a>
</p>
<h2>Register Page:</h2>
<form method="post">
    <p>please choose your role for register:</p>
    <input type="button" name="author" value="Author">
    <input type="button" name="reader" value="Reader">
    <p>NOTE: BUTTON FOR ROLE STILL NOT WORKING</p>


    <!-- Username -->
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>

    <!-- Password -->
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>

    <!-- First name -->
    <label for="firstname">First Name:</label>
    <input type="text" name="firstname" id="firstname" required>

    <!-- Last Name -->
    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname" id="lastname" required>

    <!-- Email -->
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <!-- Phone -->
    <label for="phoneNum">Phone Number:</label>
    <input type="number" name="phoneNum" id="phoneNum" >

    <!-- need to add register role -->
    <!-- Method to assign a value of that role
    For example assign for author need a method to assign an increment value to that author-->

    <br><br>
    <!-- Register Button -->
    <input type="submit" name="submit" value="Register">
</form>
<p>Search for an author or Book
    <a href="search.php">Search</a>
</p>
</main>

<?php include "templates/footer.php"; ?>