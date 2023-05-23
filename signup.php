<?php
    include_once 'header.php'
?>

<section class="signup-form">
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
        <div class="form-inputs">
            <div class="input-box">
                <label class="input-label">Full Name</label>
                <input type="text" name="name" class="input-1">
            </div>
            <div class="input-box">
                <label class="input-label">Email</label>
                <input type="email" name="email" class="input-1">
            </div>
            <div class="input-box">
                <label class="input-label">Username</label>
                <input type="text" name="uid" class="input-1">
            </div>
            <div class="input-box">
                <label class="input-label">Password</label>
                <input type="password" name="pwd" class="input-1">
            </div>
            <div class="input-box">
                <label class="input-label">Confirm password</label>
                <input type="password" name="pwdrepeat" class="input-1">
            </div>
            <button type="submit" name="submit">Sign Up</button>
        </div>
    </form>
    <?php 
    if (isset($_GET['error'])) {
        if ($_GET['error'] == 'emptyinput') {
            echo "<p>Fill in all fields.</p>";
        }
        else if ($_GET['error'] == 'invaliduid') {
            echo "<p>Username must only be letters and numbers.</p>";
        }
        else if ($_GET['error'] == 'invalidemail') {
            echo "<p>Invalid email format.</p>";
        }
        else if ($_GET['error'] == 'passwordsdontmatch') {
            echo "<p>Passwords don't match.</p>";
        }
        else if ($_GET['error'] == 'usernametaken') {
            echo "<p>Username is already taken.</p>";
        }
        else if ($_GET['error'] == 'stmtfailed') {
            echo "<p>Something went wrong, please try again.</p>";
        }
        else if ($_GET['error'] == 'none') {
            echo "<p>You have successfully signed up!</p>";
        }
    }
    ?>
</section>



<?php
    include_once 'footer.php'   
?>