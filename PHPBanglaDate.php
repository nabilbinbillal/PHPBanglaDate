<?php
/**
 * PHPBanglaDate Library
 * 
 * @package PHPBanglaDate
 * @version 1.0
 * @author Nabil Bin Billal
 * @license MIT
 * 
 * A simple PHP class to generate Bangla date from English timestamp.
 * Free to use and modify. Keep credit if redistributed.
 */

namespace PHPBanglaDate;


class PHPBanglaDate {

    private $timestamp;
    private $morning;
    private $engHour;
    private $engDate;
    private $engMonth;
    private $engYear;
    private $bangDate;
    private $bangMonth;
    private $bangYear;

    private $bn_months = ["পৌষ", "মাঘ", "ফাল্গুন", "চৈত্র", "বৈশাখ", "জ্যৈষ্ঠ", "আষাঢ়", "শ্রাবণ", "ভাদ্র", "আশ্বিন", "কার্তিক", "অগ্রহায়ণ"];
    private $bn_month_dates = [30,30,30,30,31,31,31,31,31,30,30,30];
    private $bn_month_middate = [13,12,14,13,14,14,15,15,15,15,14,14];	
    private $leapYearMonthIndex = 3;

    /**
     * Constructor
     *
     * @param int $timestamp Unix timestamp
     * @param int $hour Hour when Bangla date should change (default 6AM)
     */
    public function __construct($timestamp = null, $hour = 6) {
        $this->set_time($timestamp ?? time(), $hour);
    }

    /**
     * Set or reset the time
     *
     * @param int $timestamp Unix timestamp
     * @param int $hour Hour when Bangla date changes
     */
    public function set_time($timestamp, $hour = 6) {
        $this->engDate = date('d', $timestamp);
        $this->engMonth = date('m', $timestamp);
        $this->engYear = date('Y', $timestamp);
        $this->morning = $hour;
        $this->engHour = date('G', $timestamp);

        $this->calculate_date();
        $this->calculate_year();
        $this->convert_to_bangla_numbers();
    }

    /**
     * Calculate Bangla date and month
     */
    private function calculate_date() {
        $this->bangDate = $this->engDate - $this->bn_month_middate[$this->engMonth - 1];

        if ($this->engHour < $this->morning) 
            $this->bangDate -= 1;

        if ($this->engDate <= $this->bn_month_middate[$this->engMonth - 1] || 
            ($this->engDate == $this->bn_month_middate[$this->engMonth - 1] + 1 && $this->engHour < $this->morning)) {
            
            $this->bangDate += $this->bn_month_dates[$this->engMonth - 1];
            
            if ($this->is_leap_year() && $this->leapYearMonthIndex == $this->engMonth) 
                $this->bangDate += 1;

            $this->bangMonth = $this->bn_months[$this->engMonth - 1];
        } else {
            $this->bangMonth = $this->bn_months[$this->engMonth % 12];		
        }
    }

    /**
     * Check leap year
     *
     * @return bool
     */
    private function is_leap_year() {
        return ($this->engYear % 400 == 0 || ($this->engYear % 100 != 0 && $this->engYear % 4 == 0));
    }

    /**
     * Calculate Bangla year
     */
    private function calculate_year() {
        $this->bangYear = $this->engYear - 593;
        if ($this->engMonth < 4 || ($this->engMonth == 4 && ($this->engDate < 14 || ($this->engDate == 14 && $this->engHour < $this->morning))))
            $this->bangYear -= 1;
    }

    /**
     * Convert English numbers to Bangla numbers
     */
    private function convert_to_bangla_numbers() {
        $engNumbers = ['1','2','3','4','5','6','7','8','9','0'];
        $bnNumbers = ['১','২','৩','৪','৫','৬','৭','৮','৯','০'];

        $this->bangDate = str_replace($engNumbers, $bnNumbers, $this->bangDate);
        $this->bangYear = str_replace($engNumbers, $bnNumbers, $this->bangYear);
    }

    /**
     * Get Bangla date
     *
     * @return array [$date, $month, $year]
     */
    public function get_date() {
        return [$this->bangDate, $this->bangMonth, $this->bangYear];
    }
}
?>
