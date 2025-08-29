<?php include_once("includes/header.php") ?>

<?php
include("includes/config.php");
if(isset($_POST["signin"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $password = $_POST["password"];
  $validateQuery = "SELECT u_email FROM users WHERE u_email = '$email'";
  $validate = mysqli_query($conn,$validateQuery);
  if(mysqli_num_rows($validate)> 0){
    echo "<script>
     alert('Email alerady Exist')
     </script>";
  }
  else{
    $query = "INSERT INTO users(u_username,u_email,u_password,u_phone) VALUES('$username','$email','$password','$phone')";
    $result = mysqli_query($conn,$query) or die("something went wrong.");
    if($result){
      echo "<script>
       alert('Data Created Successfully') 
       window.location.href = '/myweb/login.php';
       </script>";
    }
  }
}

?>
<div id="signup-page">
  <div class="container mt-5 text-light border p-5 rounded-4">
    <h1 class="mt-2 mb-4 ">Sign Up </h1>
    <form class="row g-3" method="post">
      <div class="col-md-6">
        <label class="form-label">Username</label>
        <input type="text" class="form-control" name="username">
      </div>
      <div class="col-md-6">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="col-6">
        <label class="form-label">phone</label>
        <input type="tel" class="form-control" name="phone">
      </div>
      <div class="col-6">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <div class="col-12">
        <button type="submit" name="signin" class="btn btn-primary ">Sign in</button>
      </div>
    </form>
  </div>
</div>
<?php include("includes/footer.php"); ?>