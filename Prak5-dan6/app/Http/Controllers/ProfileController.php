<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('modules.profiles.profile');
    }

    public function indentity(){
        return view ('modules.profiles.identity');
    }

    public function family(){
        return view ('modules.profiles.family');
    }

    public function array(){
        $data = array();
        $data['title'] = "Array";
        $students[] = array("course"=>"Matematika", "type"=>"Diskrit", "rate"=> 4);
        $students[] = array("course"=>"Matematika", "type"=>"Aljabar Linear", "rate"=> 3);
        $students[] = array("course"=>"Basis Data", "type"=>"DDL", "rate"=> 2);
        $students[] = array("course"=>"Bhs Inggris", "type"=>"Speaker", "rate"=> 1);
        
        $data['students'] = $students;
        return view('modules.profiles.profile')->with("data", $data);
    }

   
}
