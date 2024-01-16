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
                        <p>Total price of dishes:</p>
                    </div>
                    <div class="col-6">
                        <p style="color:red;" class="dispoint"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Total deposit amount:</p>
                    </div>
                    <div class="col-6">
                        <p style="color:red;" class="total_dispoint"></p>
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
                <a
                    href="../../controllers/bookings/booking.controller.php?table_id=<?= htmlspecialchars($table['id']); ?>"><button
                        type="submit" id="bookingButton" class="btn btn-danger">Booking now</button></a>
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
                            <img src="<?= $product['image']; ?>" class="card-img-top mt-3" alt="...">
                        </div>
                        <div class="row mt-4">
                            <div class="col-7">
                                <h5 class="card-title">
                                    <?php
                                    $name = $product['name'];
                                    $maxLength = 10;
                                    echo strlen($name) > $maxLength ? substr($name, 0, $maxLength) . '...' : $name;
                                    ?>
                                </h5>
                                <p class="card-text price_dish_<?= $product['id']; ?>" id="dish"
                                    data-price="<?= $product['price']; ?>">
                                    <?= $product['price']; ?> VND
                                </p>
                            </div>
                            <div class="col-5 check_qty">
                                <div class="form-check">
                                    <input class="form-check-input" name="chosen_dish[]" type="checkbox" value=""
                                        id="dish_<?= $product['id']; ?>" data-id="<?= $product['id']; ?>"
                                        onchange="saveToLocalStorage(this)">
                                </div>
                                <div class="d-flex quantity_bx">
                                    <button class="col-2 minus-btn">-</button>
                                    <input class="form-control col-4" name="quantity[]" id="quantity_<?= $product['id']; ?>"
                                        type="number" value="1" size="4" />
                                    <button class="col-2 plus-btn">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <script>
            // Kiểm tra xem một sản phẩm có được chọn hay không
            function isSelected(productId) {
                let savedArray = localStorage.getItem('selectedItems');
                let selectedItems = savedArray ? JSON.parse(savedArray) : [];

                return selectedItems.includes(productId.toString());
            }
            // let globalQuantityInputValue;

            function saveToLocalStorage(checkbox) {
                const checkboxId = checkbox.dataset.id;
                const quantityInput = document.getElementById("quantity_" + checkboxId);
                const priceElement = document.querySelector(('.price_dish_') + checkboxId);
                const price = priceElement.dataset.price;
                // globalQuantityInputValue = quantityInput.value;
                let savedArray = localStorage.getItem('selectedItems');
                let selectedItems = savedArray ? JSON.parse(savedArray) : [];

                // Lấy mảng 2 chiều từ local storage (nếu có)
                let quantityValues = JSON.parse(localStorage.getItem('checkboxQuantityValues')) || [];

                if (checkbox.checked && !selectedItems.includes(checkboxId)) {
                    selectedItems.push(checkboxId);
                } else if (!checkbox.checked) {
                    const index = selectedItems.indexOf(checkboxId);
                    if (index > -1) {
                        selectedItems.splice(index, 1);
                        // Xóa thông tin số lượng khi checkbox bị giải chọn
                        deleteQuantityValue(quantityValues, checkboxId);
                    }
                }

                // Tìm index của checkboxId trong mảng quantityValues
                const valueIndex = quantityValues.findIndex(item => item[0] === checkboxId);

                // Nếu checkbox được chọn, cập nhật hoặc thêm mới thông tin số lượng
                if (checkbox.checked) {
                    if (valueIndex !== -1) {
                        // Cập nhật số lượng và thêm index vào mảng con
                        quantityValues[valueIndex][1] = quantityInput.value;
                        quantityValues[valueIndex][2] = price;

                    } else {
                        // Thêm mới thông tin số lượng và index vào mảng con
                        quantityValues.push([checkboxId, quantityInput.value, price]);
                    }
                }

                localStorage.setItem('selectedItems', JSON.stringify(selectedItems));
                localStorage.setItem('checkboxQuantityValues', JSON.stringify(quantityValues));

                const totalPriceElement = document.querySelector('.dispoint');
                const total = calculateTotalPrice();
                totalPriceElement.textContent = total.toFixed(0) + ' VND';
                // redirectToBookingPage(globalQuantityInputValue);

            }

            function deleteQuantityValue(array, checkboxId) {
                const index = array.findIndex(item => item[0] === checkboxId);
                if (index !== -1) {
                    array.splice(index, 1);
                }
            }
            document.addEventListener('DOMContentLoaded', function () {
                updateTotalDispoint();
                const total = calculateTotalPrice();
                const totalPriceElement = document.querySelector('.dispoint');
                totalPriceElement.textContent = total.toFixed(0) + ' VND';

                let checkboxes = document.querySelectorAll('.form-check-input');
                let savedArray = localStorage.getItem('selectedItems');
                let selectedItems = savedArray ? JSON.parse(savedArray) : [];

                checkboxes.forEach(function (checkbox) {
                    const checkboxId = checkbox.dataset.id;
                    const quantityInput = document.getElementById("quantity_" + checkboxId);

                    if (selectedItems.includes(checkboxId)) {
                        checkbox.checked = true;

                        // Khôi phục giá trị quantity từ local storage và cập nhật cho mỗi checkbox đã được chọn
                        let quantityValues = JSON.parse(localStorage.getItem('checkboxQuantityValues')) || [];
                        const valueIndex = quantityValues.findIndex(item => item[0] === checkboxId);

                        if (valueIndex !== -1) {
                            quantityInput.value = quantityValues[valueIndex][1];
                        }
                    }
                });
            });
            function calculateTotalPrice() {
                let total = 0;
                let quantityValues = JSON.parse(localStorage.getItem('checkboxQuantityValues')) || [];

                quantityValues.forEach(function (item) {
                    const quantity = parseFloat(item[1]);
                    const price = parseFloat(item[2]);
                    const subtotal = quantity * price;
                    total += subtotal;
                });

                const dispoint = total * 0.3;
                localStorage.setItem('dispoint', dispoint);
                updateTotalDispoint();
                return total;
            };

            function updateTotalDispoint() {
                const dispointAmount = parseFloat(localStorage.getItem('dispoint'));
                const priceElement = document.querySelector('.price');
                const priceAmount = parseFloat(priceElement.textContent);
                const totalDispoint = dispointAmount + priceAmount;
                const totalDispointElement = document.querySelector('.total_dispoint');
                localStorage.setItem("total_dispoint", totalDispoint.toFixed(0));
                totalDispointElement.textContent = totalDispoint.toFixed(0) + ' VND';
            }

            // Load total_dispoint from localStorage on page load
            window.onload = function () {
                const totalDispointElement = document.querySelector('.total_dispoint');
                const storedTotalDispoint = localStorage.getItem("total_dispoint");
                if (storedTotalDispoint) {
                    totalDispointElement.textContent = storedTotalDispoint + ' VND';
                }
            };

            // Call calculateTotalPrice to initialize the values
            calculateTotalPrice();


            // const bookingButton = document.getElementById("bookingButton");
            // bookingButton.addEventListener("click", function () {
            //     saveToLocalStorage();
            //     redirectToBookingPage();
            // });
            var currentType = "Seafood";
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
                redirectToURL(currentType);
            }
            function redirectToURL(type) {
                var currentURL = new URL(window.location.href);
                var searchParams = currentURL.searchParams;
                searchParams.set('type_menu', type);
                searchParams.delete('type_menu');
                searchParams.append('type_menu', type);
                window.location.href = currentURL.toString();
            }
            function updateActiveButton() {
                var seafoodButton = document.getElementById('seafoodButton');
                var fruitsButton = document.getElementById('fruitsButton');
                var drinksButton = document.getElementById('drinksButton');
                seafoodButton.classList.remove('active');
                fruitsButton.classList.remove('active');
                drinksButton.classList.remove('active');
                if (currentType === "Seafood") {
                    seafoodButton.classList.add('active');
                } else if (currentType === "Fruits") {
                    fruitsButton.classList.add('active');
                } else if (currentType === "Drinks") {
                    drinksButton.classList.add('active');
                }
            }
            function checkCurrentType() {
                var currentURL = new URL(window.location.href);
                var typeParam = currentURL.searchParams.get('type_menu');

                if (typeParam) {
                    currentType = typeParam;
                }
            }
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
                var minusBtns = document.querySelectorAll(".minus-btn");
                var plusBtns = document.querySelectorAll(".plus-btn");
                var inputs = document.querySelectorAll("input[name='quantity[]");

                minusBtns.forEach(function (minusBtn, index) {
                    minusBtn.addEventListener("click", function () {
                        var input = inputs[index];
                        input.value = parseInt(input.value) - 1;
                        if (input.value < 1) {
                            input.value = 1;
                        }
                    });
                });
                plusBtns.forEach(function (plusBtn, index) {
                    plusBtn.addEventListener("click", function () {
                        var input = inputs[index];
                        input.value = parseInt(input.value) + 1;
                    });
                });
            });
        </script>
    </div>
</body>
<?php
include("../../views/partials/footer.php");
?>