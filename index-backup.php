<!DOCTYPE html>
<html>
<head>
        <title>MySQL Table Viewer</title>
</head>
<body>
        <h1>MySQL Table Viewer12</h1>
        <?php
                // Define database connection variables
                $servername = "gl-project-db.mysql.database.azure.com";
                $username = "gldbadmin";
                $password = "admin123$";
                $dbname = "glprojectdb";

                // Create database connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                        echo "connection error";
                        die("Connection failed: " . $conn->connect_error);
                } else {
                        echo "connection successful";
                }

                // Query database for all rows in the table
                $sql = "SELECT * FROM departments";
                $result = $conn->query($sql);
                echo "Hello Senthil";
                if ($result->num_rows > 0) {
                        // Display table headers
                        echo "<table><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
                        // Loop through results and display each row in the table
                        while($row = $result->fetch_assoc()) {
                                echo "<tr><td>" . $row["dept_no"] . "</td><td>" . $row["dept_name"] . "</td><td>" . $row["dept_name"] . "</td></tr>";
                        }
                        echo "</table>";
                } else {
                        echo "0 results";
                }

                // Close database connection
                $conn->close();
        ?>
</body>
</html>