<?php
require 'PHPBanglaDate.php';

use PHPBanglaDate\PHPBanglaDate;

$banglaDate = new PHPBanglaDate(time());
list($date, $month, $year) = $banglaDate->get_date();

echo "Bangla Date: $date $month $year";
?>
