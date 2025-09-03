<?php
 include("includes/header.php");
 if(empty(isset($_SESSION["role"])) && ($_SESSION["role"] != "admin")){
    // header("location: http://localhost/myweb/index.php");
    echo "<script>window.location.href = '/myweb/login.php'</script>";
 }
    ?>
<main id="indexpage" class="text-light">
    <h1 class="display-1 text-center">Admin Page</h1>
</main>
<?php include("includes/footer.php") ?>