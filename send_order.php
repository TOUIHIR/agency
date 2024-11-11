<!-- <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Collect form data
//     $item = isset($_POST['item']) ? $_POST['item'] : '';
//     $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
//     $link = isset($_POST['link']) ? $_POST['link'] : '';
//     $desc = isset($_POST['desc']) ? $_POST['desc'] : '';
//     $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';
//     $total = isset($_POST['total']) ? $_POST['total'] : '';
//     $payment_method = isset($_POST['payment_method']) ? $_POST['payment_method'] : '';
//     $terms = isset($_POST['terms']) ? $_POST['terms'] : 'Not Accepted';

//     // Prepare email
//     $to = "elhariri056@gmail.com";
//     $subject = "$desc";
//     $message = "
//     New order received: \n
//     Item: $item \n
//     Phone Number: $phone \n
//     Link: $link \n
//     Quantity: $quantity \n
//     Total: $total \n
//     Payment Method: $payment_method \n
//     Terms and Conditions: $terms \n
//     ";
//     $headers = "From: no-reply@yourdomain.com";

//     // Send email
//     if (mail($to, $subject, $message, $headers)) {
//         echo "Order successfully sent!";
//     } else {
//         echo "Failed to send order.";
//     }
// }

include('include/DB.php'); // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST" or $_SERVER["REQUEST_METHOD"] == "GET") {
    // Get the form values
    $product_id = intval($_GET['product_id']);
    $phone = htmlspecialchars($_POST['phone']);
    $link = htmlspecialchars($_POST['link']);
    $title = htmlspecialchars($_POST['item']);
    $quantity = intval($_POST['quantity']);
    $total = floatval($_POST['total']);
    $phoneNumber = "+212607500401"; 
    $message = urlencode("Hello, I would like to order the following: \nID: ".$product_id ."\nProduct: ".$item."\nlink: ".$link."\nProduct: ".$product."\nQuantity:". $quantity ."\nTotal: ". $total);
    // Prepare and execute the insert statement
    $sql = "INSERT INTO orders (product_id, quantity, phone, link, total_price) VALUES ($product_id, $quantity,'$phone', '$link', $total)";


    if ($conn->query($sql) === TRUE) {
        // Redirect to a success page or show a success message
        header("Location: https://wa.me/".$phoneNumber."?text= ".$message ); // Replace with your success page
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}


?> -->
