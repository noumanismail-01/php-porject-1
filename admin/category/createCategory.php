<?php 
include("../includes/header.php");
include("../../includes/config.php");
if(isset($_POST["category"])){
   $image =  $_FILES["cimage"]["name"];
   $name = $_POST["cname"];
    $validateQuery = "SELECT * FROM category WHERE c_name = '$name'";
    $validate = mysqli_query($conn,$validateQuery);
    if(mysqli_num_rows($validate)> 0){
        echo "<script>
     alert('Category alerady Exist')
     </script>";
    }else{
        $path = "../upload/";
        $imageFullname = $name . "-" .  $image;
        move_uploaded_file($_FILES["cimage"]["tmp_name"], $path . $imageFullname   );
        $query = "INSERT INTO category(c_name , c_image) VALUE('$name','$imageFullname ')";
        $res = mysqli_query($conn,$query);
        if($res){
      echo "<script>
       alert('Category Created Successfully') 
       </script>";
    }
    }
    mysqli_close($conn);
}

?>
<h1 class="text-center display-2">Create Cateogry</h1>
<div class="container border p-5 rounded-3">
    <form method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Category Name" name="cname">
            <span class="input-group-text" ><i class="fa-solid fa-layer-group"></i></span>
        </div>
           <div class="input-group mb-3">
               <input type="file"  class="form-control" placeholder="Category Image" name="cimage">
               <span class="input-group-text" ><i class="fa-solid fa-image"></i></span>
        </div>
        <div>
            <button class="btn btn-primary" name="category">Create +</button>
        </div>
    </form>
</div>
<?php include("../includes/footer.php") ?>