<?php require_once('partial/header.php'); 
    require_once('./database/database.php');

    $id = $_GET['id'];
    $users = SelectoneUser($id);

    foreach ($users as $user){

    
?>
    <div class="container p-4">
        <form action="../../../controllers/post/user/post.update.controller.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id ;?>">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $user['name']; ?>"   >
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="phone" name="phone" value="<?php echo $user['phone']; ?>">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $user['email']; ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="password " name="password" value="<?php echo $user['password']; ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="submit" >Update</button>
                
            </div>
        </form>

    </div>
    <?php } ?>
<?php require_once('./partial/footer.php'); ?>