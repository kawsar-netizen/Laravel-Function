<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function checkHelper(Request $request){
        $value = getMyText();
        return $value;
    }
}
