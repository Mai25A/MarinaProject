<?php
    include("database/database.php");
    function get_all_bookings(){
        global $connection;
        $statement=$connection->prepare("SELECT
        u.id AS user_id,
        u.name AS user_name,
        u.email AS user_email,
        b.id AS booking_id,
        b.datetime AS datetime,
        b.total AS booking_total,
        p.id AS product_id,
        p.name AS product_name,
        p.image AS product_image,
        p.price AS product_price,
        p.quantity AS product_quantity,
        t.id AS table_id,
        t.name AS table_name,
        t.image AS table_image,
        t.price AS table_price,
        t.table_type_id AS tables_type_id,
        bp.id AS booking_products_id,
        bp.quantity AS bp_quantity
      FROM
        users u
        INNER JOIN bookings b ON u.id = b.user_id
        INNER JOIN booking_products bp ON b.id = bp.booking_id
        INNER JOIN products p ON bp.product_id = p.id
        INNER JOIN tables t ON b.table_id = t.id;");
  $statement->execute();
  $bookings = $statement->fetchAll(PDO::FETCH_ASSOC);
  return $bookings;
}

function get_booking_by_id($bookingId)
{
  global $connection;
  $statement = $connection->prepare("SELECT
      u.id AS user_id,
      u.name AS user_name,
      u.email AS user_email,
      b.id AS booking_id,
      b.datetime AS datetime,
      b.total AS booking_total,
      p.id AS product_id,
      p.name AS product_name,
      p.image AS product_image,
      p.price AS product_price,
      p.quantity AS product_quantity,
      t.id AS table_id,
      t.name AS table_name,
      t.image AS table_image,
      t.price AS table_price,
      bp.id AS booking_products_id,
      bp.quantity AS bp_quantity
      FROM
        users u
        INNER JOIN bookings b ON u.id = b.user_id
        INNER JOIN booking_products bp ON b.id = bp.booking_id
        INNER JOIN products p ON bp.product_id = p.id
        INNER JOIN tables t ON b.table_id = t.id
      WHERE
        b.id = :bookingId;");
  $statement->bindValue(':bookingId', $bookingId);
  $statement->execute();
  $booking = $statement->fetchAll(PDO::FETCH_ASSOC);
  return $booking;
}
function add_to_booking($user_id, $datetime, $total, $table_id) {
  global $connection;
  $sttm = $connection->prepare('INSERT INTO bookings (user_id, datetime, total, table_id) VALUES (:user_id, :datetime, :total, :table_id)');
  $sttm->bindParam(':user_id', $user_id);
  $sttm->bindParam(':datetime', $datetime);
  $sttm->bindParam(':total', $total);
  $sttm->bindParam(':table_id', $table_id);
  $sttm->execute();
  return true;
}

function add_to_bookings_product($bookingId, $product_id, $quantity) {
  global $connection;
  $sttm = $connection->prepare("INSERT INTO booking_products (booking_id, product_id, quantitY) VALUES (:booking_id, :product_id, :quantity)");
  $sttm->bindParam(':booking_id', $bookingId);
  $sttm->bindParam(':product_id', $product_id);
  $sttm->bindParam(':quantity', $quantity);
  $sttm->execute();
  return true;
}

function get_id_booking(){
  global $connection;
  $sttm = $connection->prepare("SELECT bookings.id FROM bookings ORDER BY bookings.id DESC LIMIT 1;");
  $sttm->execute();
  $result = $sttm->fetch(PDO::FETCH_ASSOC);
  if ($result) {
      return $result['id'];
  } else {
      return null;
  }
}
