<?php

//importent functions

if (!function_exists('p')) {
    function p($data)
    {
        echo "<per>";
        print_r($data);
        echo "<per>";
    }
    //view file include
    //p($request->all());
    //die();
}

// Date Formatted function
if (!function_exists('get_formatted_date')) {
    function get_formatted_date($data, $format)
    {
        $formattedDate = date($format, strtotime($data));
        return $formattedDate;
    }
    //view file include
    //{{get_formatted_date($item->dob,"d-M-Y")}}
}

// Route view function
function getMyText(){

    return "Learning helper function by Kawsar Khan";

}
