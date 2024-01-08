<?php
include("../../views/partials/head.php");
include("../../views/css/tables/table.detail.php");
?>

<body>
    <div class="container-lg">
        <div class="row detail_item">
            <div class="col-lg-5 image_dt">
                <img src="<?php echo $table['image']; ?>" alt="Product Image" class="img-fluid">
            </div>
            <div class="col-lg-7">
                <div class="row name_price">
                    <h3 class="col-8">
                        <?php echo $table['name']; ?>
                    </h3>
                    <h4 class="col-4 price">
                        <?php echo $table['price']; ?> VND
                    </h4>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>
                            <?php
                            if ($table['table_type_id'] < 5) {
                                echo "Table for " . $table['number_of_seat'];
                            } else {
                                echo "Private room for " . $table['number_of_seat'];
                            }
                            ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Dishes Deposit Amount:</p>
                    </div>
                    <div class="col-6">
                        <p class="dispoint">50000 VND</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Total Deposit Amount:</p>
                    </div>
                    <div class="col-6">
                        <p class="total_dispoint">200000 VND</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h4>Description:</h4>
                        <p>
                            <?php echo $table['description']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center btn_chosen mt-4">
            <div class="col-3">
                <button type="submit" class="btn btn-danger">Booking now</button>
            </div>
            <div class="col-3">
                <button class="btn btn_menu" onclick="showMenu()">Choose Dishes</button>
            </div>
        </div>
        <div class="menu_on_table" id="menu" <?php if (!isset($_GET['type_menu'])) { ?>style="display: none;" <?php ;
        } ?>">
            <div class="row menu_title d-flex justify-content-center mt-5">
                <div class="row col-8">
                    <button class="col-4 button" onclick="redirectToURL('seafood')" id="seafoodButton">Seafood</button>
                    <button class="col-4 button" onclick="redirectToURL('fruit')" id="fruitsButton">Fruits</button>
                    <button class="col-4 button" onclick="redirectToURL('drink')" id="drinksButton">Drinks</button>
                </div>
            </div>
            <div class="row list_dishes gap-5 d-flex ms-5 flex-wrap mt-4">
                <?php foreach ($products as $product): ?>
                    <div class="card-item-dish col-3 mt-4">
                        <div class="menu_image">
                            <img src="<?php echo $product['image']; ?>" class="card-img-top mt-3" alt="...">
                        </div>
                        <div class="row mt-4">
                            <div class="col-7">
                                <h5 class="card-title">
                                    <?php $name = $product['name'];
                                    $maxLength = 10;
                                    if (strlen($name) > $maxLength) {
                                        $name = substr($name, 0, $maxLength) . '...';
                                    }
                                    echo $name; ?>
                                </h5>
                                <p class="card-text">
                                    <?php echo $product['price']; ?> VND
                                </p>
                            </div>
                            <div class="col-5 check_qty">
                                <div class="form-check">
                                    <input class="form-check-input" name="chosen_dish[]" type="checkbox" value=""
                                        id="checked">
                                </div>
                                <div class="d-flex quantity_bx">
                                    <button class="col-2 minus-btn">-</button>
                                    <input class="col-4" name="quantity" id="qty" type="number" value="1" />
                                    <button class="col-2 plus-btn">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <script>
            var currentType = "Seafood"; // Giá trị mặc định là "Seafood"
            function showMenu() {
                var menu = document.getElementById('menu');
                var seafoodButton = document.getElementById('seafoodButton');

                if (menu.style.display === 'none') {
                    menu.style.display = 'block';
                    seafoodButton.classList.add('active');
                } else {
                    menu.style.display = 'none';
                    seafoodButton.classList.remove('active');
                }
                // Gọi hàm redirectToURL khi chọn menu để cập nhật giá trị và gửi lên URL
                redirectToURL(currentType);
            }
            function redirectToURL(type) {
                var currentURL = new URL(window.location.href);
                var searchParams = currentURL.searchParams;
                // Đặt giá trị mới cho type_menu
                searchParams.set('type_menu', type);
                // Xóa các tham số type_menu cũ khỏi URL
                searchParams.delete('type_menu');
                // Thêm tham số type_menu mới vào URL
                searchParams.append('type_menu', type);
                // Cập nhật URL với các tham số mới
                window.location.href = currentURL.toString();
            }
            // Cập nhật trạng thái active của các nút
            function updateActiveButton() {
                var seafoodButton = document.getElementById('seafoodButton');
                var fruitsButton = document.getElementById('fruitsButton');
                var drinksButton = document.getElementById('drinksButton');
                // Xóa lớp active khỏi tất cả các nút
                seafoodButton.classList.remove('active');
                fruitsButton.classList.remove('active');
                drinksButton.classList.remove('active');
                // Thêm lớp active vào nút hiện tại
                if (currentType === "Seafood") {
                    seafoodButton.classList.add('active');
                } else if (currentType === "Fruits") {
                    fruitsButton.classList.add('active');
                } else if (currentType === "Drinks") {
                    drinksButton.classList.add('active');
                }
            }
            // Kiểm tra URL hiện tại để cập nhật giá trị hiện tại của type_menu
            function checkCurrentType() {
                var currentURL = new URL(window.location.href);
                var typeParam = currentURL.searchParams.get('type_menu');

                if (typeParam) {
                    currentType = typeParam;
                }
            }
            // Gọi các hàm để cập nhật trạng thái ban đầu
            checkCurrentType();
            updateActiveButton();
            document.addEventListener("DOMContentLoaded", function () {
                var quantityInput = document.getElementById("qty");

                quantityInput.addEventListener("change", function () {
                    var value = parseInt(quantityInput.value);

                    if (isNaN(value) || value < 1) {
                        quantityInput.value = 1;
                    }
                });
            });
            document.addEventListener("DOMContentLoaded", function () {
                var minusBtn = document.querySelector(".minus-btn");
                var plusBtn = document.querySelector(".plus-btn");
                var input = document.querySelector("input[name='quantity']");

                minusBtn.addEventListener("click", function () {
                    input.value = parseInt(input.value) - 1;
                    if (input.value < 1) {
                        input.value = 1;
                    }
                });
                plusBtn.addEventListener("click", function () {
                    input.value = parseInt(input.value) + 1;
                });
            });
        </script>
    </div>
</body>
<?php
include("../../views/partials/footer.php");
?>