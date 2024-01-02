<?php
    include("../../database/database.php");
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
        bp.id AS booking_products_id
      FROM
        users u
        INNER JOIN bookings b ON u.id = b.user_id
        INNER JOIN booking_products bp ON b.id = bp.booking_id
        INNER JOIN products p ON bp.product_id = p.id
        INNER JOIN tables t ON b.table_id = t.id;");
        $statement->execute();
        $bookings=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $bookings;
    }

    function get_booking_by_id($bookingId){
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
      bp.id AS booking_products_id
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
        $booking=$statement->fetchAll(PDO::FETCH_ASSOC);
      return $booking;
  }



?>