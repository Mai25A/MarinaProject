<?php require_once 'css/acount/bokingtable.css.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <div> 
        <h3>Booking table</h3>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <?php foreach ($tables as $table) : ?>
                <div class="col-md-4">
                    <img src="<?php echo $table['image']; ?>" class="img-fluid rounded-start" alt="tables name">
                </div>
                <div class="col-md-8 infomation">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $table['name']; ?></h5>
                        <p class="card-text"><?php echo $table['table_type_id']; ?></p>
                        <p class="card-text">Booking time
                            <?php
                            echo $table['datetime'];
                            ?></p>
                        <p class="card-text">Status
                            <?php
                            $bookingtime = strtotime($table['datetime']);

                            if (date("Y-m-d H:i:s",$bookingtime)< date("Y-m-d H:i:s")){
                                echo "booked";
                            }
                            else{
                                echo "waiting";
                            }
                            ?></p>
                        <hr>
                        <p class="card-text">Total Deposit amount
                            <?php
                            echo $table['total'];
                            ?>
                        </p>
                        <hr>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>