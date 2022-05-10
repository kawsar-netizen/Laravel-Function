<?php

//importent functions

if (!function_exists('p')) {
    function p($data)
    {
        echo "<per>";
        print_r($data);
        echo "<per>";
    }
}

// Date Formatted function
if (!function_exists('get_formatted_date')) {
    function get_formatted_date($data, $format)
    {
        $formattedDate = date($format, strtotime($data));
        return $formattedDate;
    }
}
