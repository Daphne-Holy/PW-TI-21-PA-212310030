<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index()
    // {
    //    return view('LaporPak.dashboard');
    // }

    // shift + alt + down

    public function index(){
        $data = array();
        $data['title'] = "Blade Directive";
        $data['npm'] = 212310030;
        $students[] = array("npm"=>212310030, "name"=>"Daphne Holy", "gender"=> "F", "address"=> "Bogor");
        $students[] = array("npm"=>212310029, "name"=>"Muhammad Ilham", "gender" => "M", "address"=> "Bogor");
        $students[] = array("npm"=>212310044, "name"=>"Hana Yulia", "gender" => "F", "address"=> "Bogor");
        $students[] = array("npm"=>212310004, "name"=>"Muhammad Agus", "gender" => "M", "address"=> "Bogor");
        $students[] = array("npm"=>212310005, "name"=>"Muhammad Askah", "gender" => "M", "address"=> "Bogor");
        $data['students'] = $students;
        return view('LaporPak.dashboard')->with("data", $data);
    }
}
