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
<title>PHPBanglaDate - Demo 3</title>
<style>
body { font-family: 'Helvetica', sans-serif; background: linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%); height: 100vh; display: flex; justify-content: center; align-items: center; }
.glass { background: rgba(255,255,255,0.2); border-radius: 20px; padding: 60px 80px; backdrop-filter: blur(10px); text-align: center; color: #fff; box-shadow: 0 8px 32px rgba(0,0,0,0.2); }
.glass h1 { font-size: 3em; margin: 0; }
.glass p { font-size: 1.3em; margin-top: 15px; color: #f0f0f0; }
</style>
</head>
<body>
<div class="glass">
    <h1><?php echo "$date $month $year"; ?></h1>
    <p>Bangla Date in Glass Design</p>
</div>
</body>
</html>
