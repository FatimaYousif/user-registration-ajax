<?php

session_start();
require ('./headfoot/header.php');

if($_SESSION['username'] == ""){
    header("Location: login_form.php");
}

?>

<div class="welcome">


    <div id="welcome-head">

        <h1> Welcome <?php echo $_SESSION['username']?></h1>
    </div>

    <submit class="btn"><a href="./logout.php">Logout</a></submit>



</div>
<?php
require ('./headfoot/footer.php');

?>
?>