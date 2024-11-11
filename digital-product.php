<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('include/link.php'); ?>
    <style>
    @keyframes pulseEffect {
    0%, 100% {
        background-color: #ff7323; /* Couleur de base */
        transform: scale(1); /* État normal */
    }
    50% {
        background-color: #b74301; /* Couleur allumée */
        transform: scale(1.1); /* Légère extension pour l'effet */
    }
}

.btn-view-service-description {
    animation: pulseEffect 2s infinite;
    animation-delay: calc(var(--animation-order) * 0.1s); /* Décalage pour chaque ligne */
}


        /* Custom styles */
        .page-title {
            background-image: url('images/BG-Products.png') !important;
            background-size: cover;
            color: white;
            padding: 50px 0;
        }

        .container-box {
            display: flex;
            gap: 20px;
            align-items: center;
            margin: 20px auto;
            max-width: 800px;
        }

        /* Category Filter Box */
        .search-box {
            padding: 15px;
            border-radius: 8px;
            background: #f8f9fa;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            flex: 1;
        }

        .search-box form {
            display: flex;
            align-items: center;
        }

        .search-box label {
            font-weight: bold;
            color: #495057;
            margin-right: 10px;
        }

        .form-control {
            border: 1px solid #ced4da;
            padding: 5px 12px;
            border-radius: 5px;
        }

        .form-control:focus {
            border-color: #6c757d;
            box-shadow: none;
        }

        /* Promotion Card */
        .promo-card {
            background-color: #f0f5ff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            flex: 1;
            text-align: center;
        }

        .promo-card h5 {
            color: #007bff;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .promo-card p {
            color: #555;
            margin-bottom: 15px;
        }

        .promo-card .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .promo-card .btn-primary:hover {
            background-color: #0056b3;
        }
        .table th, .table td {
            vertical-align: middle;
        }
    </style>
</head>

<body>

    <div class="page-wrapper">
        <?php include('include/header.php'); ?>

        <section class="page-title text-center">
            <div class="container">
                <h1>Digital Product</h1>
            </div>
        </section>

        <div class="page-content">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="search-box">
                                <form method="GET" action="digital-product.php" class="d-flex">
                                    <label for="category" class="mr-2">Select Category:</label>
                                    <select name="category" id="category" class="form-control" onchange="filterByCategory()">
                                        <option value="">All Categories</option>
                                        <?php
                                        include('include/DB.php');
                                        $categoryQuery = "SELECT DISTINCT category_name FROM products";
                                        $categoryResult = $conn->query($categoryQuery);
                                        while ($category = $categoryResult->fetch_assoc()) {
                                            echo '<option value="' . htmlspecialchars($category['category_name']) . '">' . htmlspecialchars($category['category_name']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </form>
                            </div>
                            <div class="promo-card">
                                    <h5>Boost Your Community Today!</h5>
                                    <p>Looking to grow your social media presence? Our expert service can help increase your followers quickly and organically.</p>
                                    <a href="https://x.com/Speed_x_agency" class="btn btn-primary" target="_blank">Learn More</a>
                                </div>
                            </div>
                            <div class="services-list__table mt-3">
                                <div class="table-bg component_table">
                                    <div class="table-wr table-responsive editor__component-wrapper">
                                        <table class="table table-striped table-hover" id="service-table-30">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th style="width: 42px"></th>
                                                    <th>ID</th>
                                                    <th class="nowrap">Service</th>
                                                    <th class="nowrap">Rate per 1000</th>
                                                    <th class="nowrap">Min order</th>
                                                    <th class="nowrap">Max order</th>
                                                    <th class="hidden-xs hidden-sm service-description__th">Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php include('include/fetch_data.php'); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            function redirectToOrder(button) {
                const productId = button.getAttribute('data-service-id');
                const productName = encodeURIComponent(button.getAttribute('data-service-name'));
                const minOrder = button.getAttribute('data-min');
                const maxOrder = button.getAttribute('data-max');
                const orderUrl = `create-Order.php?product_id=${productId}&product_name=${productName}&min_order=${minOrder}&max_order=${maxOrder}`;
                window.location.href = orderUrl;
            }

            $(document).ready(function () {
                let offset = 0;
                let isLoading = false;
                const limit = 20;

                function fetchData(category = "") {
                    if (isLoading) return;
                    isLoading = true;
                    $.ajax({
                        url: 'include/fetch_data.php',
                        method: 'GET',
                        data: {
                            offset: offset,
                            limit: limit,
                            category: category
                        },
                        beforeSend: function () {
                            $('#service-table-30 tbody').append('<tr class="loading"><td colspan="7">Loading...</td></tr>');
                        },
                        success: function (data) {
                            $('#service-table-30 tbody .loading').remove();
                            if (data.trim() === '') {
                                $(window).off('scroll');
                                return;
                            }
                            $('#service-table-30 tbody').append(data);
                            offset += limit;
                            isLoading = false;
                        },
                        error: function (xhr, status, error) {
                            $('#service-table-30 tbody .loading').remove();
                            console.error('Failed to load data:', status, error);
                            alert('Failed to load data. Please check the console for more details.');
                            isLoading = false;
                        }
                    });
                }

                fetchData();

                $('#category').on('change', function () {
                    offset = 0;
                    $('#service-table-30 tbody').empty();
                    fetchData($(this).val());
                });

                $(window).on('scroll', function () {
                    if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
                        fetchData($('#category').val());
                    }
                });
            });
        </script>
    </div>
    <div class="scroll-top">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
</body>
</html>
