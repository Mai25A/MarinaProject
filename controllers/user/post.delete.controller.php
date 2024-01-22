<?php
include_once("models/post.user.model.php");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['id'])) {
        // Kiểm tra và làm sạch đầu vào
        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
        $success = deleteUserById($id);
        if ($success) {
            // Xóa thành công
            header("Location: /user");
            exit;
        } else {
            // Xử lý lỗi khi xóa không thành công
            echo "Có lỗi xảy ra khi xóa người dùng. Vui lòng thử lại.";
            exit;
        }
    }
}
echo "Yêu cầu không hợp lệ.";
exit;
?>
