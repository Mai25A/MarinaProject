<?php require_once dirname(dirname(__DIR__))."../../views/partials/head.php"; 
    require_once( dirname(dirname(__DIR__))."../../database/database.php");
    require_once( dirname(dirname(__DIR__))."../../controllers/post/user/post.create.controller.php");

?>
    <div class="container p-4">
        <div class="d-flex justify-content-end p-2">
            <a href="../../post/user/post.create.view.php" class="btn btn-primary">Add +</a>
        </div>
        <?php 
        $new = selectAllUSer();
        foreach($new as $user){

        ?>
            <div class="card">
                <div class="card-body">
                <div class="d-flex">
                        <div class="card-image mr-3">
                            <img class="img-fluid" width="200" src="<?php echo $user['image']; ?>" alt="">
                        </div>
                        <div class="info">
                            <h1 class="display-4"><?php echo $user['name']; ?> </h1>
                            <strong><?php echo $user['age']; ?></strong> 
                            <p> <?php echo $user['email']; ?>  </p>
                        </div>
                </div>
                    <div class="action d-flex justify-content-end">
                        <a href="update_html.php?id=<?php echo $user['id'] ?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                        <a href="delete_model.php?id=<?php echo $user['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
            </div>
        <?php }    ?>
    </div>

  <?php require  dirname(dirname(__DIR__))."../../views/partials/footer.php";?>
