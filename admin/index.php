<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $mysqli = require '../config/db.php';

    // Fetch data ordered for grouping
    $sql = "SELECT category, type, sub_type 
        FROM verbal 
        ORDER BY category, type, sub_type";

    $result = $mysqli->query($sql);

    $lastCategory = '';
    $lastType     = '';
    $lastSubType  = '';

    echo "<div style='font-family: Arial, sans-serif; line-height: 1.6;'>";

    while ($row = $result->fetch_assoc()) {
        $category = $row['category'];
        $type     = $row['type'];
        $sub_type = $row['sub_type'];

        // Show category only if new
        if ($category !== $lastCategory) {
            echo "<div class='toggle' data-target='cat-$category' style='margin-left:0px; cursor:pointer;'>📂 <strong>$category</strong></div>";
            echo "<div id='cat-$category' style='display:none; margin-left:20px;'>";
            $lastCategory = $category;
            $lastType = '';
            $lastSubType = '';
        }

        // Show type only if new
        if ($type !== $lastType) {
            echo "<div class='toggle' data-target='type-$category-$type' style='cursor:pointer;'>📁 $type</div>";
            echo "<div id='type-$category-$type' style='display:none; margin-left:20px;'>";
            $lastType = $type;
            $lastSubType = '';
        }

        // Show sub_type only if new
        if ($sub_type !== $lastSubType) {
            echo "<div style='margin-left:20px;'>🔹 $sub_type</div>";
            $lastSubType = $sub_type;
        }

        // Close type div if next type/category will change
        $peek = $result->fetch_assoc();
        if (!$peek || $peek['type'] !== $type || $peek['category'] !== $category) {
            echo "</div>"; // close type div
        }
        if (!$peek || $peek['category'] !== $category) {
            echo "</div>"; // close category div
        }
        if ($peek) {
            $result->data_seek($result->current_field - 1); // step back 1 row
        }
    }

    echo "</div>";
    ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.toggle').forEach(function(el) {
                el.addEventListener('click', function() {
                    const target = document.getElementById(el.dataset.target);
                    if (target.style.display === 'none') {
                        target.style.display = 'block';
                    } else {
                        target.style.display = 'none';
                    }
                });
            });
        });
    </script>


</body>

</html>