<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Businesses, Reviews, and Categories</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Businesses, Reviews, and Categories</h1>
    <table>
        <thead>
            <tr>
                <th>Business Name</th>
                <th>Reviews</th>
                <th>Categories</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Sample data structure for businesses
            $businesses = [
                [
                    'name' => 'Business One',
                    'reviews' => ['Great service!', 'Very clean.'],
                    'categories' => ['Hotel', 'Luxury']
                ],
                [
                    'name' => 'Business Two',
                    'reviews' => ['Not bad.', 'Could be better.'],
                    'categories' => ['Restaurant', 'Fast Food']
                ],
                // Add more businesses as needed
            ];

            // Loop through each business
            foreach ($businesses as $business) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($business['name']) . "</td>";

                // Concatenate reviews into a single string
                $reviews = implode("<br>", array_map('htmlspecialchars', $business['reviews']));
                echo "<td>" . $reviews . "</td>";

                // Concatenate categories into a single string
                $categories = implode("<br>", array_map('htmlspecialchars', $business['categories']));
                echo "<td>" . $categories . "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
