<?php
include('DB.php');
$limit = 20;
$page = isset($_GET['offset']) ? intval($_GET['offset']) : 0;
$offset = $page * $limit;

$sql = "SELECT * FROM products";
if (isset($_GET['category']) && !empty($_GET['category'])) {
    $category = $conn->real_escape_string($_GET['category']);
    $sql .= " WHERE category_name = '$category'";
}
$sql .= " LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);
$currentCategory = '';
$lineCounter = 0; // Initialisation du compteur de ligne

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row['category_name'] !== $currentCategory) {
            $currentCategory = $row['category_name'];
            echo '<tr class="services-list-category-title" data-filter-table-category-id="">
                    <td colspan="100%" class="style-bg-primary-alpha-20 style-text-primary services-category editor__component-wrapper">
                        <div class="w-100"><h4><span class="align-middle">' . htmlspecialchars($currentCategory) . '</span></h4></div>
                    </td>
                  </tr>';
        }

        echo '<tr data-filter-table-category-id="' . $row['product_id'] . '" style="--animation-order: ' . $lineCounter . ';">
                <td><a href="#" data-favorite-service-id="' . $row['product_id'] . '"><span data-favorite-icon="" class="far fa-star"></span></a></td>
                <td>' . $row['product_id'] . '</td>
                <td class="table-service" data-filter-table-service-name="true">' . htmlspecialchars($row['product_name']) . '</td>
                <td>' . number_format((float)$row['price'], 2) . '</td>
                <td>' . $row['min_order'] . '</td>
                <td>' . $row['max_order'] . '</td>
                <td class="services-list__description">
                    <div class="component_button_view">
                        <div>
                            <button class="btn btn-actions btn-view-service-description"
                                data-service-id="' . $row['product_id'] . '"
                                data-service-name="' . htmlspecialchars($row['product_name']) . '"
                                data-min="' . $row['min_order'] . '" data-max="' . $row['max_order'] . '"
                                onclick="redirectToOrder(this)">
                                Order
                            </button>
                        </div>
                    </div>
                </td>
              </tr>';
              
        $lineCounter++; 

              
    }
} else {
    echo '';
}
$conn->close();
$lineCounter++; // Incrémentez le compteur pour chaque ligne

?>
