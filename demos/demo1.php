<?php
require '../PHPBanglaDate.php';  // include the main library

use PHPBanglaDate\PHPBanglaDate;  // import the namespaced class

$banglaDate = new PHPBanglaDate(time());
list($date, $month, $year) = $banglaDate->get_date();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHPBanglaDate - Demo 1</title>
<style>
body { font-family: 'Arial', sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background: #f0f4f8; }
.card { background: #fff; padding: 40px 60px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); text-align: center; }
.card h1 { font-size: 2.5em; color: #333; margin: 0; }
.card p { font-size: 1.2em; color: #666; margin-top: 10px; }
</style>
</head>
<body>
<div class="card">
    <h1><?php echo "$date $month $year"; ?></h1>
    <p>Bangla Date Today</p>
</div>
</body>
</html>
