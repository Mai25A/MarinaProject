<?php

$id = $_GET["id"] ? $_GET["id"] : null;
if (isset($id)) {
    require dirname(dirname(__FILE__)) ."../../models/User/post.model.php";
    $post = selectAllUser($id);

    require dirname(dirname(__FILE__)) ."../../views/post/user/post.edit.view.php";
}

