<!DOCTYPE html>
<html lang="en">

<head>
<?php include('include/link.php'); ?>
    <style>
        .error {
    border: 2px solid red;
}
        details {
            position: relative;
            width: auto;
        }

        details[open] {
            z-index: 1;
        }

        summary {
            padding: 1rem;
            /* cursor: pointer;
    border-radius: 5px;
    background-color: #f7f9fe;
    list-style: none; */

        }

        summary::-webkit-details-marker {
            display: none;
        }

        details[open] summary:before {
            content: '';
            display: block;
            width: 100vw;
            height: 100vh;
            background: transparent;
            position: fixed;
            top: 0;
            left: 0;
        }

        summary:after {
            content: '';
            display: inline-block;
            float: right;
            width: .5rem;
            height: .5rem;
            border-bottom: 1px solid currentColor;
            border-left: 1px solid currentColor;
            border-bottom-left-radius: 2px;
            transform: rotate(45deg) translate(50%, 0%);
            transform-origin: center center;
            transition: transform ease-in-out 100ms;
            margin-top: 8px;
        }

        summary:focus {
            outline: none;
        }

        details[open] summary:after {
            margin-top: 10px;
            transform: rotate(-45deg) translate(0%, 0%);
        }

        .list {
            width: 100%;
            background: #f7f9fe;
            position: absolute;
            top: calc(100% + .5rem);
            left: 0;
            padding: 1rem;
            margin: 0;
            box-sizing: border-box;
            border-radius: 5px;
            max-height: 200px;
            overflow-y: auto;
        }

        .list li {
            margin: 0;
            padding: 1rem 0;
            border-bottom: 1px solid #ccc;
        }

        .list li:first-child {
            padding-top: 0;
        }

        .list li:last-child {
            padding-bottom: 0;
            border-bottom: none;
        }

        /* FAKE SELECT */

        summary.radios {
            counter-reset: radios;
        }

        summary.radios:before {
            content: var(--selection);
        }

        input[type=radio] {
            counter-increment: radios;
            appearance: none;

        }

        input[type=radio]:checked {
            display: inline;
            --display: block;
        }

        input[type=radio]:after {
            content: attr(title);
            display: inline;
            font-size: 1rem;
        }

        ul.list {
            counter-reset: labels;
        }

        label {
            width: 100%;
            display: flex;
            cursor: pointer;
            justify-content: space-between;
        }

        label span {
            --display: none;
            display: var(--display);
            width: 1rem;
            height: 1rem;
            border: 1px solid #727272;
            border-radius: 3px;
        }

        .form-control {
            padding-top: 10px;
        }
        .form-check-label{
            padding-top: 6px;
        }
    </style>

</head>

<body>

    <!-- page wrapper start -->

    <div class="page-wrapper">

        <!-- preloader start -->

        <div id="ht-preloader">
            <div class="loader clear-loader">
                <img class="img-fluid" src="images/loader.png" alt="">
            </div>
        </div>

        <!-- preloader end -->


        <div id="particles-js"></div>

        <?php include('include/header.php'); ?>

        <!--page title start-->

        <section class="page-title">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-10">
                        <h1>
                            Create Order
                        </h1>
                    </div>
                </div>
            </div>
            <div class="page-title-wave">
                <img src="images/page-bg.svg" alt="">
            </div>
        </section>

        <!--page title end-->


        <!--body content start-->

        <div class="page-content">

            <!--checkout start-->
            <?php include('include/DB.php');

            // Check if the product_id is set in the URL
            if (isset($_GET['product_id'])) {
                // Get the product ID from the URL
                $product_id = intval($_GET['product_id']);

                // Fetch the product details from the database
                $sql = "SELECT * FROM products WHERE product_id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $product_id);
                $stmt->execute();
                $result = $stmt->get_result();

                // Check if the product exists
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $category = htmlspecialchars($row['category_name']);
                        $product = htmlspecialchars($row['product_name']);
            ?>

                        <section>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-md-12">
                                        <div class="checkout-form box-shadow white-bg rounded p-5">
                                            <h2 class="mb-4"><?php echo $product; ?></h2>
                                            <form class="row" action="send_order.php?product_id=<?php echo $product_id; ?>" method="POST">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <details class="custom-select">
                                                            <summary class="form-control">
                                                                <input type="radio"  name="category" id="default" title="<?php echo $category; ?>"
                                                                    checked>
                                                            </summary>
                                                        </details>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <details class="custom-select">
                                                            <summary class="form-control">
                                                                <input type="radio" data-price="<?php echo $row['price']; ?>" name="item" id="default" title="<?php echo $product; ?>"
                                                                    checked>
                                                            </summary>
                                                            
                                                        </details>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Email Address</label>
                                                        <input type="email" name="email" id="email" class="form-control" placeholder="example@example.com" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-md-0">
                                                        <label>Link</label>
                                                        <input type="text" name="link" id="Link" class="form-control"
                                                            placeholder="https://www.example.com" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="form-group fields component_service_description"
                                                            id="service_description">
                                                            <label for="service_description"
                                                                class="control-label">Description</label>
                                                            <div class="panel-description" name="desc" ><?php echo $row['description']; ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Quantity</label>
                                                        <input type="number" name="quantity" id="Quantity" step="1" class="form-control" min="<?php IF($row['min_order'] > 1000) echo $row['min_order']; ELSE echo "1000";?>" max="<?php echo $row['max_order']; ?>" placeholder="Min : <?php IF($row['min_order'] > 1000) echo $row['min_order']; ELSE echo "1000";?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-md-0">
                                                        <label>Total</label>
                                                        <input type="text" name="total" id="total" class="form-control" placeholder="" readonly>
                                                    </div>
                                                </div>
                                                <div class="cart-detail my-5">
                                            <h5 class="mb-3 text-theme">Payment Method</h5>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="payment_method"
                                                        id="customRadio1">
                                                    <label class="form-check-label" for="customRadio1">Direct Bank Tranfer</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="payment_method"
                                                        id="customRadio2">
                                                    <label class="form-check-label" for="customRadio2">Crypto</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="payment_method"
                                                        id="customRadio3">
                                                    <label class="form-check-label" for="customRadio3">Paypal Account</label>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="Accepted" id="terms" checked>
                                                    <label class="form-check-label" for="flexCheckDefault" >I have read and accept
                                                        the terms and conditions</label>
                                                </div>
                                            </div>
                                        </div>
                                                <button class="themeht-btn primary-btn" target="_blank" type="submit"><span>Proceed to Payment</span><i
                                                class="bi bi-arrow-right"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 mt-7 mt-lg-0 ps-lg-8">
                                        <div>
                                            <h5 class="mb-3 text-theme">Make sure to read before place an order</h5>
                                            <ul class="list-unstyled">
                                                <li class="mb-3 border-bottom border-light pb-3"><span> ✅ Updates </span></li>
                                                <li class="mb-3 border-bottom border-light pb-3"><span>HQ - High Quality</span> </li>
                                                <li class="mb-3 border-bottom border-light pb-3"><span> MQ - Medium Quality </span></li>
                                                <li class="mb-3 border-bottom border-light pb-3"><span> NQ - Nice Quality </span> </li>
                                                <li class="mb-3 border-bottom border-light pb-3"><span> LD - Less Drop </span></li>
                                                <li class="mb-3 border-bottom border-light pb-3"><span> ND - Non Drop </span> </li>
                                                <li class="mb-3 border-bottom border-light pb-3"><span> NR - No Refill </span></li>
                                                <li class="mb-3 border-bottom border-light pb-3"><span> R7 - 7 Days Refill </span> </li>
                                                <li class="mb-3 border-bottom border-light pb-3"><span> R15 - 15 Days Refill </span></li>
                                                <li class="mb-3 border-bottom border-light pb-3"><span> R∞ - Lifetime Refill </span> </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h5 class="mb-3 text-theme">Service Icons</h5>
                                            <ul class="list-unstyled">
                                                <li class="mb-3 border-bottom border-light pb-3"><span> 🔥 - Non Drop </span></li>
                                                <li class="mb-3 border-bottom border-light pb-3"><span>⚡- Fast</span> </li>
                                                <li class="mb-3 border-bottom border-light pb-3"><span> ♻️ - Refill </span></li>
                                                <li class="mb-3 border-bottom border-light pb-3"><span> ⛔ - Cancel Button </span> </li>
                                                <li class="mb-3 border-bottom border-light pb-3"><span> 💧 - Drip Feed </span></li>
                                                <li class="mb-3 border-bottom border-light pb-3"><span> ⭐ - Recomended </span> </li>
                                            </ul>
                                        </div>
                               
                                        
                                    </div>
                                </div>
                            </div>
                        </section>
            <?php }
                }
            } else {
            } ?>

            <!--checkout end-->


        </div>

        <!--body content end-->




        <!--footer start-->
        <?php include('include/footer.php') ?>

        <!--footer end-->


    </div>

    <!-- page wrapper end -->


    <!--color-customizer start-->



    <!--color-customizer end-->


    <!--back-to-top start-->

    <div class="scroll-top">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!--back-to-top end-->




    <script>
        function calculateTotal(quantity, price) {
            return quantity * price;
        }

        document.addEventListener('DOMContentLoaded', function() {
            const quantityInput = document.getElementById('quantity');
            const priceInput = document.getElementById('price');
            const totalDisplay = document.getElementById('total');

            function updateTotal() {
                const quantity = parseFloat(quantityInput.value) || 0;
                const price = parseFloat(priceInput.value) || 0;
                const total = calculateTotal(quantity, price);
                totalDisplay.textContent = total.toFixed(2);
            }

            quantityInput.addEventListener('input', updateTotal);
            priceInput.addEventListener('input', updateTotal);

            // Initial calculation
            updateTotal();
        });
    </script>
    <script>
document.querySelector('input[name="quantity"]').addEventListener('input', function() {
    let quantity = this.value;
    let servicePrice = document.querySelector('input[name="item"]:checked').getAttribute('data-price');
    let total = quantity * (servicePrice / 1000);
    document.getElementById('total').value = total.toFixed(2);
});
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form'); // Select your form
    const inputs = form.querySelectorAll('input, textarea'); // Get all inputs and textareas
    const errorClass = 'error'; // Define the error class

    // Function to check if an input is empty
    function checkInput(input) {
        if (input.value.trim() === '') {
            input.classList.add(errorClass); // Add error class if empty
            return false;
        } else {
            input.classList.remove(errorClass); // Remove error class if not empty
            return true;
        }
    }

    // Check inputs on form submission
    form.addEventListener('submit', function(event) {
        let isValid = true; // Assume the form is valid

        inputs.forEach(function(input) {
            if (!checkInput(input)) {
                isValid = false; // If any input is invalid, set to false
            }
        });

        // Prevent form submission if there are errors
        if (!isValid) {
            event.preventDefault();
            alert('Please fill in all required fields.');
        }
    });

    // Optional: Check inputs as user types or changes input
    inputs.forEach(function(input) {
        input.addEventListener('input', function() {
            checkInput(input); // Check on input change
        });
    });
});
document.getElementById('quantity').addEventListener('input', function (e) {
    let value = this.value;
    
    // Only allow positive numbers (remove negative signs or non-digits)
    if (!/^[1-9]\d*$/.test(value)) {
        this.value = value.replace(/[^0-9]/g, ''); // Replace any non-digit character
    }
});
document.getElementById('phone').addEventListener('input', function (e) {
    // Remove any non-numeric characters
    this.value = this.value.replace(/[^0-9]/g, '');
});
</script>


</body>



</html>