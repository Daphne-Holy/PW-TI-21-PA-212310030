<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = array();
        $data['title'] = "Array";
        $students[] = array("course"=>"Matematika", "type"=>"Diskrit", "rate"=> 4);
        $students[] = array("course"=>"Matematika", "type"=>"Aljabar Linear", "rate"=> 3);
        $students[] = array("course"=>"Basis Data", "type"=>"DDL", "rate"=> 2);
        $students[] = array("course"=>"Bhs Inggris", "type"=>"Speaker", "rate"=> 1);
        
        $data['students'] = $students;
        return view('modules.home')->with("data", $data);
    }
}
