<?php
include_once("../../models/post.user.model.php");


if (isset($_GET['id'])) {
    $id = urldecode($_GET['id']);
    deleteUserById($id);
    header("Location: post.controller.php");
    exit;
}