<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<body>
    <?php
    if ($_POST['ziller']){
        $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://bio.ziller.vn/api/qr/add",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 2,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer 1ce1dabef93dbd497483b0c23d5d2bf2",
            "Content-Type: application/json",
        ),
        CURLOPT_POSTFIELDS => json_encode(
            array(
                'type' => 'link',
                'data' => 'https://google.com',
                'background' => 'rgb(255,255,255)',
                'foreground' => 'rgb(0,0,0)',
                'logo' => 'https://site.com/logo.png',
            )
        ),
    )
    );

    $response = curl_exec($curl);
    curl_close($curl);
    // var_dump($response);
    $mai = json_decode($response);
    };
    ?>
    <form action="#" method="post">
        <div class="mb-3">
            <label for="sdt" class="form-label">SĐT chuyển đến:</label>
            <input type="text" name="sdt" id="sdt" class="form-control">
        </div>

        <div class="mb-3">
            <label for="st" class="form-label">Số tiền:</label>
            <input type="text" name="st" id="st" class="form-control">
        </div>

        <div class="mb-3">
            <label for="nd" class="form-label">Nội dung:</label>
            <input type="text" name="nd" id="nd" class="form-control">
        </div>

        <div class="mb-3">
            <label for="cl" class="form-label">Màu QR:</label>
            <input type="text" name="cl" id="cl" class="form-control">
        </div>

        <div class="mb-3">
            <label for="bg" class="form-label">Màu nền QR:</label>
            <input type="text" name="bg" id="bg" class="form-control">
        </div>

        <div class="mb-3">
            <label for="logo" class="form-label">Link Logo:</label>
            <input type="text" name="logo" id="logo" class="form-control">
        </div>

        <button type="submit" name="ziller" class="btn btn-primary">Create QR</button>
    </form>
    <img src="<?= $mai->link; ?>" alt="">
</body>