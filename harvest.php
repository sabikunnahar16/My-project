<?php
include_once 'config.php';

// Example query to fetch some data from the database
$stmt = $pdo->query("SELECT * FROM your_table_name");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- HTML content for the homepage -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArtisanHarvest</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file -->
</head>

<body>
    <header>
        <!-- Your header content here -->
    </header>

    <nav>
        <!-- Your navigation menu here -->
    </nav>

    <div class="section1">
        <!-- Section 1 content -->
    </div>

    <div class="section2">
        <!-- Section 2 content -->
    </div>

    <div class="section3">
        <!-- Section 3 content -->
    </div>

    <div class="section4">
        <!-- Section 4 content -->
    </div>

    <div class="section5">
        <!-- Section 5 content -->
    </div>

    <footer>
        <!-- Footer content -->
    </footer>

</body>

</html>
