<?php require_once "../../views/partials/sidebav.php";
require_once "../../views/partials/link.php";
?>

<div class="container p-4 mr-4">
    <div class="d-flex justify-content-start p-2">
        <a href="../../views/user/post.create.view.php" class="btn btn-primary">Add</a>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr class="info">
                    <td>
                        <?= $user["id"] ?>
                    </td>
                    <td class="display-4">
                        <?= $user['name']; ?>
                    </td>
                    <td><img src="<?= $user['image']; ?>" alt=""></td>
                    <td>
                        <?= $user['phone']; ?>
                    </td>
                    <td>
                        <?= $user['email']; ?>
                    </td>
                    <td>
                        <?= $user['password']; ?>
                    </td>
                    <td>
                        <div class="action">
                            <a href="../../views/user/post.update.view.php?id=<?= $user['id']; ?>"
                                class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                
                            <a href="../../controllers/user/post.delete.controller.php?id=<?= $user['id']; ?>"
                                class="btn btn-danger" id="deleteLink"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
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