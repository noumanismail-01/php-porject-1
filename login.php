<?php 
include("includes/header.php");
include("includes/config.php");
if(isset($_POST["login"])){
    $email = $_POST["login_email"];
    $pass = $_POST["login_password"];
    $validateQuery = "SELECT * FROM users WHERE u_email = '$email' AND u_password = '$pass'";
    $validate = mysqli_query($conn,$validateQuery);
    if(mysqli_num_rows($validate)> 0){
        echo "<script> alert('Welcome') </script>";
        foreach($validate as $v){
            $_SESSION["username"] = $v["u_username"];
            $_SESSION["role"] = $v["u_role"];
            if($v["u_role"] == 'user'){
                
                echo "<script> 
                window.location.href = '/myweb/index.php'
                </script>";
            }else{
                echo "<script> 
                window.location.href = '/myweb/admin/'
                </script>";
            }
        }
    }else{
            echo "<script> alert('incorrect Email or Password') </script>";
    }

}
?>
<div id="login-page" class="row">
    <div class="container mt-5 text-light border p-5 rounded-4 col-md-6">
        <h1 class="mt-2 mb-4 ">Login </h1>
        <form class="row g-3" method="post"  >
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" name="login_email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" name="login_password" class="form-control" id="inputPassword4">
            </div>

            <div class="col-12">
                <button type="submit" name="login" class="btn btn-primary ">Log in</button>
            </div>
        </form>
    </div>
</div>
<?php include("includes/footer.php"); ?>