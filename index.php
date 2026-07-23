<?php
// استدعاء ملف الاتصال بقاعدة البيانات
include 'db.php';

// الاستعلام لجلب كل الأماكن السياحية من الجدول
$sql = "SELECT * FROM places";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>السياحة في السودان</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f4; padding: 20px; }
        h1 { color: #2c3e50; text-align: center; }
        .card { background: white; padding: 15px; margin-bottom: 15px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .location { color: #e67e22; font-weight: bold; }
    </style>
</head>
<body>

    <h1>معالم السياحة في السودان 🇸🇩</h1>

    <?php
    if ($result && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='card'>";
            echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
            echo "<p class='location'>الموقع: " . htmlspecialchars($row['location']) . "</p>";
            echo "<p>" . htmlspecialchars($row['description']) . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p style='text-align:center;'>لا توجد أماكن مضافة حالياً في قاعدة البيانات.</p>";
    }
    ?>

</body>
</html>
