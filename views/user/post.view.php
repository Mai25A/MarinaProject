<?php require_once "views/partials/sidebav.php";
require_once'views/css/user/post.css.php';
require_once "views/partials/link.php";
?>

<div class="container p-4 mr-4">
    <div class="d-flex justify-content-start ms-5 p-2">
        <a href="/user/create" class="btn btn-primary">Add</a>
    </div>
    <table class="table ms-5 table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
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
                            <a href="/user/update?id=<?= $user['id']; ?>"
                                class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                
                            <a href="/user/delete?id=<?= $user['id']; ?>"
                                class="btn btn-danger" id="deleteLink"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>