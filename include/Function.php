<?php
// functions.php

function getCategoryId($categoryName, $conn) {
    $stmt = $conn->prepare("SELECT category_id FROM categories WHERE category_name = ?");
    $stmt->bind_param("s", $categoryName);
    $stmt->execute();
    $stmt->bind_result($category_id);
    $stmt->fetch();
    $stmt->close();
    return $category_id;
}
?>
