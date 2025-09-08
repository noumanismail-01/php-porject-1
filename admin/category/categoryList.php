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
            $get = mysqli_query($conn, $q);
            if (mysqli_num_rows($get) > 0) {
                foreach ($get as $cat) { ?>
                    <tr>
                        <td><?php echo $cat["c_id"] ?></td>
                        <td><?php echo $cat["c_name"] ?></td>
                        <td><img src="../upload/<?php echo $cat["c_image"] ?>" alt="" width="100"></td>
                        <td>
                            <a href="" class="btn btn-warning">Update</a>
                            <button data-bs-toggle="modal" data-bs-target="#m<?php echo $cat['c_id'];?>" class="btn btn-danger">Delete</button>
                            <div class="modal fade" id="m<?php echo $cat['c_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Are Your Sure...</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <?php echo $cat["c_name"]; ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <a type="button" class="btn btn-danger" href="/myweb/admin/category/deleteCategory.php/?id=<?php echo $cat["c_id"]; ?>">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr><?php }
                    } else { ?>
                <tr>
                    <th colspan="4">
                        <h1 class="display-1">Nothing to show</h1>
                    </th>
                </tr><?php } ?>
        </table>
    </div>
</main>
<?php include_once("../includes/footer.php"); ?>