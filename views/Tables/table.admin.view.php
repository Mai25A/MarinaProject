<?php
    include_once("../../views/partials/head.php");
    include_once("../../views/css/table.admin.php");
?>
<div class="container">
    <form action="#" method="post">
        <div class="btn_create">
            <button type="submit" name="create" class="btn btn-primary">Create</button>
        </div>
        <div class="table">
            <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($tables as $table):
                        ?>
                            <tr>
                            <td><?= $table['table_type_id'] ?></td>
                            <td><?= $table['name'] ?></td>
                            <td><div class="image_table">
                                <img src="<?= $table['image'] ?>" alt="Table">
                            </div></td>
                            <td><?= $table['price'] ?></td>
                            <td><?= $table['description'] ?></td>
                            <td>
                                <?php
                                    if ($table['table_type_id'] < 5) {
                                        echo "Normal Table";
                                    } else {
                                        echo "Private room";
                                    }
                                ?>
                            </td>
                        <td>
                            <div class="action">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </td>
                        </tr>
                        <?php
                    endforeach;
                ?>
                <!-- Add more rows for additional tables -->
            </tbody>
            </table>
        </div>
    </form>
</div>