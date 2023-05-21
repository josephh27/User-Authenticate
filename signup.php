<?php
    include_once 'header.php'
?>

<section class="signup-form">
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
        <div class="form-inputs">
            <div class="input-box">
                <label class="input-label">Username</label>
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
</section>

<?php
    include_once 'footer.php'
?>