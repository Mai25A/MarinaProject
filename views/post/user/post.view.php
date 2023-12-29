<?php require_once dirname(dirname(__DIR__)) . "../../views/partials/head.php"; ?>
<a href="../../post/user/post.create.view.php" class="btn btn-primary mt-2">Add Post</a>
<main>
  <div class="p-3">
    <?php foreach ($posts as $post): ?>
      <li>
        <?= $post['name']; ?>
        <?= $post['phone']; ?>  
        <?= $post['email']; ?>  
        <?= $post['password']; ?>  
        <?= $post['image']; ?>
        <a href="/controllers/post/user/post.delete.controller.php?id=<?= $post['id']; ?>">Delete</a> |
        <a href="/controllers/post/user/post.edit.controller.php?id=<?= $post['id']; ?>">Edit</a>
      </li>
    <?php endforeach; ?>
  </div>
</main>

<?php require_once dirname(dirname(__DIR__)) . "../../views/partials/footer.php"; ?>