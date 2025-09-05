<?php
include_once("../includes/header.php");
include("../../includes/config.php");

?>

<main>
    <div class="container">
        <table class="table mt-2 table-bordered text-center">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
            <?php 
            $q = "SELECT * FROM category";
            $get = mysqli_query($conn,$q);
            if(mysqli_num_rows($get)>0){
                foreach($get as $cat){?>      
            <tr>
                <td><?php echo $cat["c_id"]?></td>
                 <td><?php echo $cat["c_name"]?></td>
                 <td><img src="../upload/<?php echo $cat["c_image"]?>" alt="" width="100"></td>
                 <td>
                    <a href="" class="btn btn-warning">Update</a>
                    <a href="" class="btn btn-danger">Delete</a>
                 </td>
            </tr>
            <?php }}else{ ?>
            <tr >
                <th colspan="4"><h1 class="display-1">Nothing to show</h1></th>
            </tr>
            <?php } ?>
        </table>
    </div>
</main>

<?php include_once("../includes/footer.php"); ?>