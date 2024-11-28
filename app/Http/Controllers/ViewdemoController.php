<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class ViewdemoController extends Controller
{
    public function view4()
    {
        return view('view4')
            ->with('name','Luc Van Son')
            ->with('company', 'The Shady');;
    }
    public function view5()
    {
    // dữ liệu
        $info = "THE SHADY GRADEN";
        $emp = array(
        "Name"=>"Luc van Son",
        "Email"=>"Shadyfyrix@gmail.com",
        "Phone"=>"0823760578",
        );
        if(View::exists('view5')){
    return view('view5',compact('info','emp'));
        }   
        else{
    return "Không tồn tại view5";
        }
    }
}
