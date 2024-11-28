<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function index()
    {
        return "<h1> Acc:";
    }
    public function create()
    {
        return view('acc-create');
    }
    public function showData()
{
    $data = array(
        'id' => '2310900087',
        'name' => 'ShadyFyrix'
    );
    return view('acc-show', compact('data'));
}

    public function list()
    {
    $data = array(
        ["id"=>1,"UserName"=>"ShadyFyrix","Password"=>"TheShady2211169","FullName"=>"Luc Van Son"],
        
        ["id"=>2,"UserName"=>"Eyja","Password"=>"696969@bruh","FullName"=>"Luc Thi Eyja"]);
    return view('acc-showlist',['data'=>$data]);
    }   
    public function getALLAccount()
    {
        $data= DB::table('accounts')->get();
        return view('acc-getAll',compact('data'));
    }
    
}