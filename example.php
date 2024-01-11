<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Student Records</title>
</head>

<body>
    <style>
        /* Add your CSS styles here */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <?php
    echo "<br>";

    $database_host = 'localhost';
    $database_username = 'root';
    $database_password = '';
    $database_name = 'collagedb';
    $database_port = 3307;

    $database_connection = mysqli_connect($database_host, $database_username, $database_password, $database_name, $database_port);

    if (!$database_connection) {
        // Connection failed
        die("Connection failed: " . mysqli_connect_error());
    } else {
        // Connection successful
        echo "Connected successfully";

        // Fetch and display data from the 'students' table using prepared statements
        $query = "SELECT student_id, last_name, first_name, gender FROM students";
        $statement = mysqli_prepare($database_connection, $query);

        if ($statement) {
            // Execute the query
            mysqli_stmt_execute($statement);

            // Get the result set
            $result = mysqli_stmt_get_result($statement);

            if ($result) {
                // Check if there are rows in the result
                if (mysqli_num_rows($result) > 0) {
                    // Output data as a styled HTML table
                    echo "<table border='1'>";
                    echo "<tr><th>Student ID</th><th>Last Name</th><th>First Name</th><th>Gender</th></tr>";

                    // Output data for each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<pre>";
                        print_r($row); // You can use print_r or var_dump based on your preference
                        echo "</pre>";
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['student_id']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['last_name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['first_name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['gender']) . "</td>";
                        echo "</tr>";
                    }

                    echo "</table>";
                } else {
                    // No rows in the result
                    echo "No records found in the 'students' table.";
                }
            } else {
                // Error in the query
                echo "Error: " . mysqli_stmt_error($statement);
            }

            // Close the statement
            mysqli_stmt_close($statement);
        } else {
            // Error preparing the statement
            echo "Error: " . mysqli_error($database_connection);
        }
    }

    // Close the database connection
    mysqli_close($database_connection);
    ?>
</body>

</html>