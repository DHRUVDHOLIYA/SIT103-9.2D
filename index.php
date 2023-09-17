<!DOCTYPE html>
<html>
<head>
    <title>Insert Member Record</title>
</head>
<body>
    <h1>Insert Member Record</h1>
    
    <!-- Form to insert a new member record -->
    <form action="new.php" method="POST">
        <label for="First_Name">First Name:</label>
        <input type="text" name="First_Name" required><br><br>
        
        <label for="Last_Name">Last Name:</label>
        <input type="text" name="Last_Name" required><br><br>
        
        <label for="Birth_Date">Birth Date:</label>
        <input type="date" name="Birth_Date" required><br><br>
        
        <label for="Address">Address:</label>
        <input type="text" name="Address" required><br><br>
        
        <label for="Phone_Num">Phone Number:</label>
        <input type="text" name="Phone_Num" required><br><br>
        
        <label for="Email">Email:</label>
        <input type="email" name="Email" required><br><br>
        
        <input type="submit" name="insert" value="Insert">
    </form>
</body>
</html>
