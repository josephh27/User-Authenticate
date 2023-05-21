<?php
    include_once 'header.php'
?>

<section class="signup-form">
    <h2>Log In</h2>
    <form action="includes/login.inc.php" method="post">
        <div class="form-inputs">
            <div class="input-box">
                <label class="input-label">Username</label>
                <input type="text" name="name" class="input-1">
            </div>
            <div class="input-box">
                <label class="input-label">Password</label>
                <input type="password" name="pwd" class="input-1">
            </div>
            <button type="submit" name="submit">Log In</button>
        </div>
        
    </form>
</section>

<?php
    include_once 'footer.php'
?>