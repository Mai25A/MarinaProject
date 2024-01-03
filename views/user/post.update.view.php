<?php 
$id = $_GET['id'];
require_once(dirname(__DIR__).'/partials/head.php'); 
require_once('../../database/database.php');
require_once dirname(__DIR__)."./css/user/update.css.php";
$users = getUserById($id);
?>

<div class="container p-4">
    <form action="../../controllers/user/post.update.controller.php" method="POST">
        <input type="hidden" name="id" value="<?=$id?>">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Name" name="name" value="<?= $users['name'] ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Phone" name="phone" value="<?= $users['phone'] ?>">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" name="email" value="<?= $users['email'] ?>">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" value="<?= $users['password'] ?>">
        </div>
        <div class="form-group">
        <input type="text" placeholder="image" class="form-control" name="image" value="<?= $users['image'] ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="submit">Update</button>
        </div>
    </form>
</div>

<?php require_once(dirname(__DIR__).'/partials/footer.php');  ?>