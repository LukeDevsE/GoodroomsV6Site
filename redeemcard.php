<?php
// GoodRooms Card Redeemer
// Version 1.0

include 'config.php';
include 'member.php';

$inputCode = $_GET['code'];

// Check if code exists in the database
$sql = "SELECT code, used, money, currency FROM codecards WHERE code = '$inputCode'";
$result = mysqli_query($link, $sql);
if (!$result || mysqli_num_rows($result) === 0) {
    header("Location: redeemgcard.php?redeemed=0");
    exit();
}

// Fetch the code from the database
$row = mysqli_fetch_assoc($result);

// Check if code is used
if ($row['used'] === 1) {
    header("Location: redeemgcard.php?redeemed=0");
    exit();
}

$insertColumn = '';
$actualBalanceResult = null;
$newBalance = 0;

// Determine the currency
switch ($row['currency']) {
    case 1:
        $insertColumn = 'money';
        $actualBalanceResult = mysqli_query($link, "SELECT money FROM users WHERE id = $userid");
        if (!$actualBalanceResult) {
            echo 'Error: '. mysqli_error($link);
            exit();
        }
        $actualBalance = mysqli_fetch_assoc($actualBalanceResult)['money'];
        $newBalance = $actualBalance + $row['money'];
        break;
    case 2:
        $insertColumn = 'xit';
        $actualBalanceResult = mysqli_query($link, "SELECT xit FROM users WHERE id = $userid");
        if (!$actualBalanceResult) {
            echo 'Error: '. mysqli_error($link);
            exit();
        }
        $actualBalance = mysqli_fetch_assoc($actualBalanceResult)['xit'];
        $newBalance = $actualBalance + $row['money'];
        break;
    case 3:
        $updateStarterpackResult = mysqli_query($link, "UPDATE users set starterpack = 'true' WHERE id = $userid");
        if (!$updateStarterpackResult) {
            echo 'Error: '. mysqli_error($link);
            exit();
        }
        $actualBalanceResult = mysqli_query($link, "SELECT money FROM users WHERE id = $userid");
        if (!$actualBalanceResult) {
            echo 'Error: '. mysqli_error($link);
            exit();
        }
        $actualBalance = mysqli_fetch_assoc($actualBalanceResult)['money'];
        $newBalance = $actualBalance + 1500;
        break;
    default:
        header("Location: redeemgcard.php?redeemed=0");
        exit();
}

// Update the user balance
if (!empty($insertColumn)) {
    $updateQuery = "UPDATE users SET $insertColumn = $newBalance WHERE id = $userid";
    $updateResult = mysqli_query($link, $updateQuery);
    if (!$updateResult) {
        echo 'Error: '. mysqli_error($link);
    }
    // Update the code in the database as used
$updateCodeQuery = "UPDATE codecards SET used = 1 WHERE code = '$inputCode'";
$updateCodeResult = mysqli_query($link, $updateCodeQuery);
if (!$updateCodeResult) {
echo 'Error: '. mysqli_error($link);
exit();
}

// Redirect to the redemption page with a success message
header("Location: redeemgcard.php?redeemed=1");
exit();

// Close the database connection
mysqli_close($link);

}
?>
