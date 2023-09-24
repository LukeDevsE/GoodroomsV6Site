<?php
include '../config.php';
include '../member.php';

// Assuming you have already established a connection to the MySQL database and stored it in $link variable

// Get the user's ID and item ID from the request
$item_id = $_POST['item_id'];

// Check if the user already owns the item
$checkOwnershipQuery = "SELECT COUNT(*) as count FROM user_items WHERE user_id = $id AND item_id = $item_id";
$result = mysqli_query($link, $checkOwnershipQuery);
$row = mysqli_fetch_assoc($result);
$ownershipCount = $row['count'];

if ($ownershipCount > 0) {
    echo "You already own this item.";
} else {
    // Retrieve the price of the item from the catalog table
    $priceQuery = "SELECT Price FROM catalog WHERE id = $item_id";
    $result = mysqli_query($link, $priceQuery);
    $row = mysqli_fetch_assoc($result);
    $price = $row['Price'];

    // Check if the user has enough money
    $moneyQuery = "SELECT money FROM users WHERE id = $id";
    $result = mysqli_query($link, $moneyQuery);
    $row = mysqli_fetch_assoc($result);
    $money = $row['money'];

    if ($money === "INF") {
        echo "No charge is required. Infinity money detected.";
    } else {
        if ($money >= $price) {
            // Subtract the price from the user's money
            $newMoney = $money - $price;
            $updateQuery = "UPDATE users SET money = $newMoney WHERE id = $id";
            mysqli_query($link, $updateQuery);

            // Add a new row to user_items table
            $insertQuery = "INSERT INTO user_items (user_id, item_id) VALUES ($id, $item_id)";
            mysqli_query($link, $insertQuery);

            echo "Purchase successful!";
        } else {
            echo "Insufficient funds.";
        }
    }
}

// Close the database connection
mysqli_close($link);
?>
