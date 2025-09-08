<?php 
if(isset($_GET["id"])){
    include("../../includes/config.php");
    $id = $_GET["id"];
    $deleteQuery = "DELETE FROM category WHERE c_id = $id";
    $response = mysqli_query($conn,$deleteQuery) or die("Something Went Wrong...");
    if($response){
        echo "<script> window.location.href = '/myweb/admin/category/categoryList.php'</script>";
    }
}


?>