<?php
if (isset($_POST['insert'])) {
    // Database connection details
    $servername = "localhost";
    $username = "root"; // Replace with your database username
    $password = ""; // Replace with your database password
    $database = "e"; // Replace with your database name

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Birth_Date = $_POST['Birth_Date'];
    $Address = $_POST['Address'];
    $Phone_Num = $_POST['Phone_Num'];
    $Email = $_POST['Email'];

    // Use prepared statements to insert data
    $stmt = $conn->prepare("INSERT INTO member (First_Name, Last_Name, Birth_Date, Address, Phone_Num, Email) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $First_Name, $Last_Name, $Birth_Date, $Address, $Phone_Num, $Email);

    if (empty($First_Name) || empty($Last_Name) || empty($Birth_Date) || empty($Address) || empty($Phone_Num) || empty($Email)) {
        echo "Please fill in all required fields.";
    } elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } elseif ($stmt->execute()) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}

echo "hrllo";
?>
