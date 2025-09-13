<?php
require 'PHPBanglaDate.php';

// Initialize PHPBanglaDate
$banglaDate = new PHPBanglaDate(time());

// Get Bangla date
list($date, $month, $year) = $banglaDate->get_date();

echo "Bangla Date: $date $month $year";
?>
