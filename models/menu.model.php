<?php
include("../../database/database.php");
function get_all_menu()
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM products");
    $statement->execute();
    $menu = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $menu;
}
function getMenuByCategory($categoryId)
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM products WHERE category_id = :category_id");
    $statement->bindParam(':category_id', $categoryId);
    $statement->execute();
    $menu = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $menu;
}

function createMenuManagement( $name, $image,$category_id, $price, $description)
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO products (name, image, category_id, price, description) VALUES (?, ?, ?, ?, ?)");
    $createMenu = $statement->execute([$name, $image, $category_id, $price, $description]);
    return $createMenu;
}
function delete_dish($id)
{
    global $connection;
    $statement = $connection->prepare("DELETE from products where id=:id;");
    $statement->bindParam(":id", $id);
    $statement->execute();
    return $statement;
}
function updateMenuManagement($id, $name, $image, $category_id, $price, $description)
{
    global $connection;
    if (isset($id)) {
        $statement = $connection->prepare('UPDATE products SET name = :name, image = :image, category_id = :category_id, price = :price, description = :description WHERE id = :id');
        $statement->bindParam(":name", $name);
        $statement->bindParam(":image", $image);
        $statement->bindParam(":category_id", $category_id);
        $statement->bindParam(":price", $price);
        $statement->bindParam(":description", $description);
        $statement->bindParam(":id", $id);

        // Thực thi câu lệnh SQL
        if ($statement->execute()) {
            return true;
        } else {
            $errorInfo = $statement->errorInfo();
            // In ra thông tin lỗi
            echo "Lỗi khi cập nhật: " . $errorInfo[2];
            return false;
        }
    }
    return false;
}
function getProductById($id)
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM products WHERE id = :id");
    $statement->execute([':id' => $id]);
    $products = $statement->fetch(PDO::FETCH_ASSOC);
    return $products;

}
function get_dishes_by_type($type_menu)
{
    global $connection;
    $st = $connection->prepare("SELECT pd.id,pd.name,pd.image,pd.category_id,pd.price,pd.description,pd.quantity, mc.id AS type_menu_id, mc.name AS type_name
    from products pd join menu_categories mc on pd.category_id = mc.id where mc.name = :type_menu ;");
    $st->bindParam(":type_menu",$type_menu);
    $st->execute();
    $products = $st->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}
function get_one_user($id)
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users WHERE id = :id");
    $statement->execute([':id' => $id]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    return $user;
}
?>