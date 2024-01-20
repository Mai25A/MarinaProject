<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php require_once "views/partials/sidebav.php";
include_once('views/css/menu/menu.admin.css.php');
include('controllers/menu/menu.admin.controller.php');
    ?>

<div class="container p-4 mr-4">
    <div class="d-flex justify-content-start p-2">
        <a href="/menu/create" class="btn btn-primary">Add</a>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($menu as $value) { ?>
                <tr>
                    <th scope="row">
                        <?= $value['id'] ?>
                    </th>
                    <td>
                        <?= $value['name'] ?>
                    </td>
                    <td>
                        <div class="img_menu">
                            <img src="<?= $value['image'] ?>" alt="">
                        </div>
                    </td>
                    <td>
                        <?= $value['price'] ?>
                    </td>
                    <td>
                        <?= $value['description'] ?>
                    </td>
                    <td>
                        <?= $value['category_id'] ?>
                    </td>
                    <td>
                        <a href="/menu/update?id=<?= $value['id'] ?>"
                            class="btn btn-success"><i class="fa fa-pencil"></i></a>

                        <a href="/menu/delete?action=delete&id=<?= $value['id'] ?>"
                            class="btn btn-danger" id="deleteLink"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<Style>
    .container {
        padding: 4px;
    }

    .d-flex.justify-content-start {
        justify-content: flex-start;
    }

    .card {
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .card-body {
        padding: 20px;
    }

    .card-image {
        margin-right: 15px;
    }

    .card-image img {
        width: 200px;
        height: auto;
    }

    .info {
        flex-grow: 1;
    }

    .display-4 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .action {
        margin-top: 10px;
        justify-content: flex-end;
    }

    .action a {
        margin-right: 5px;
    }

    .btn-sm {
        padding: 5px 10px;
        font-size: 12px;
    }
</Style>