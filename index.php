<?php
    include_once 'header.php';
?>
<div class="container">
<?php
    if (isset($_SESSION['userid'])) {
        echo "<p>Hello there " . $_SESSION['useruid'] . "</p>";
    }
?>
<div class="test-div">
    <span></span>
</div>
</div>

<?php
    include_once 'footer.php'
?>