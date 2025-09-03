<?php
include_once("../includes/header.php");
include_once("../../includes/config.php")

 ?>

<main>
    <div class="container">
        <div class="table">
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Image
                </th>
            </tr>
            <?php
            $get = "SELECT * FROM category";
            $res = mysqli_query($conn,$get);
             ?>
            <tr>
                <td></td>
            </tr>
        </div>
    </div>
</main>

<?php include_once("../includes/footer.php"); ?>