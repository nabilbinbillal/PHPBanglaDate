<?php
require '../PHPBanglaDate.php';

use PHPBanglaDate\PHPBanglaDate;

$banglaDate = new PHPBanglaDate(time());
list($date, $month, $year) = $banglaDate->get_date();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHPBanglaDate - Demo 2</title>
<style>
body { font-family: 'Verdana', sans-serif; margin: 0; }
.banner { background: linear-gradient(90deg, #f093fb, #f5576c); color: white; padding: 50px 0; text-align: center; }
.banner h1 { font-size: 3em; margin: 0; }
.banner span { display: block; margin-top: 10px; font-size: 1.2em; }
</style>
</head>
<body>
<div class="banner">
    <h1><?php echo "$date $month $year"; ?></h1>
    <span>Today’s Bangla Date</span>
</div>
</body>
</html>
