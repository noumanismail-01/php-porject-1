<?php
 include("includes/header.php");
 if($_SESSION["role"] != "admin"){
    header("location: http://localhost/myweb/index.php");
 }
    ?>
<main id="indexpage" class="text-light">
    <h1 class="display-1 text-center">Admin Page</h1>
</main>
<?php include("includes/footer.php") ?>