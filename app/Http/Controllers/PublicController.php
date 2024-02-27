<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        return view("welcome");
    }

    public function student(){
        $students = [
            [
                'name' => 'Carla',
                'surname' => 'Motti'
            ],

            [
                'name' => 'Ivan',
                'surname' => 'Iaco',
            ],

            [
                'name' => 'Sara',
                'surname' => 'Iaco',
            ],
        ];
        return view ('student' , compact('students'));
    }

    public function show($name){
        $students = [
            [
                'name' => 'Carla',
                'surname' => 'Motti'
            ],

            [
                'name' => 'Ivan',
                'surname' => 'Iaco',
            ],

            [
                'name' => 'Sara',
                'surname' => 'Iaco',
            ],
        ];
        foreach($students as $student){
            if ($student['name'] == $name) {
                return view('show' , compact('student'));
            }
        }
    }
}
