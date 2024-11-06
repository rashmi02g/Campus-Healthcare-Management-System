<?php
 require_once 'connect.php';
$did = $_POST["did"];
$pid = $_POST["pid"];
$date = $_POST["date"];
$issue = $_POST["issue"];
$pres = $_POST["pres"];

    // Set error mode to exception for better error handling
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO $myDB.prescription (did, pid, date, issue, pres) VALUES (:did, :pid, :date, :issue, :pres)";
    $stmt = $conn->prepare($sql);

    // Bind parameters to the statement
    $stmt->bindParam(':did', $did, PDO::PARAM_INT);
    $stmt->bindParam(':pid', $pid, PDO::PARAM_INT);
    $stmt->bindParam(':date', $date, PDO::PARAM_STR);
    $stmt->bindParam(':issue', $issue, PDO::PARAM_STR);
    $stmt->bindParam(':pres', $pres, PDO::PARAM_STR);

    // Execute the prepared statement
    $stmt->execute();
    header("Location:doctor_profile.php");

?>

