<?php
    include_once("../../views/partials/head.php");
    include_once("../../views/css/tables/table.admin.php");
?>
<div class="container">
    <form action="#" method="post">
        <div class="btn_create">
        <?php
            if(isset($_POST['create'])){
                header("Location: table.create.controller.php");
                exit();
            }
        ?>
            <button type="submit" name="create" class="btn btn-primary">Create</button>
        </div>
        <div class="table">
            <table class="table table-striped">
            <thead>
                <tr style="text-align:center;">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody  >
                <?php
                    foreach($tables as $table):
                        ?>
                            <tr class="row_table    ">
                                <td><?= $table['id'] ?></td>
                                <td style="width: 150px;"><?= $table['name'] ?></td>
                                <td><div class="image_table">
                                    <img src="<?= $table['image'] ?>" alt="Table">
                                </div></td>
                                <td style="width: 150px;"><?= $table['price'] ?> VND</td>
                                <td><?= $table['description'] ?></td>
                                <td style="width: 150px;">
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
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-pencil"></i></button>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-trash"></i></button>
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