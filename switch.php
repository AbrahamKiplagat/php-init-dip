<!DOCTYPE html>
<html>
<head>
    <title>Management Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #f9a825; /* Yellow color */
            color: #fff;
            padding: 15px;
            text-align: center;
        }
        .nav {
            background-color: #ffeb3b; /* Yellow color */
            padding: 10px;
            text-align: center;
        }
        .nav a {
            color: #333; /* Dark text color for contrast */
            text-decoration: none;
            padding: 8px 16px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .nav a:hover {
            background-color: #fdd835; /* Lighter shade on hover */
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Management Panel</h1>
</div>

<div class="nav">
    <a href="?action=users">Manage Users</a>
    <a href="?action=roles">Manage Roles</a>
    <a href="?action=products">Manage Products</a>
    <a href="?action=logout">Logout</a>
</div>

<?php
$action = isset($_GET['action']) ? $_GET['action'] : '';

echo '<table>';
echo '<tr><th colspan="2">Action Details</th></tr>';
echo '<tr><th>Action</th><th>Description</th></tr>';

switch ($action) {
    case "users":
        echo '<tr><td>Manage Users</td><td>Perform actions related to managing users</td></tr>';
        break;
    case "roles":
        echo '<tr><td>Manage Roles</td><td>Perform actions related to managing roles</td></tr>';
        break;
    case "products":
        echo '<tr><td>Manage Products</td><td>Perform actions related to managing products</td></tr>';
        break;
    case "logout":
        echo '<tr><td>Logout</td><td>Log out from the system</td></tr>';
        break;
    default:
        echo '<tr><td colspan="2"> 404 Invalid action</td></tr>';
        break;
}

echo '</table>';
?>

</body>
</html>
