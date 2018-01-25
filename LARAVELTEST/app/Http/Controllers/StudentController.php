<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $name = "robin hood panday pande";
        $age = "70+50";
       //return view('HOME',compact('name','age'));
//       return view ('home')
//           ->with('name',$name)
//           ->with('age',$age);

        return view('HOME', [
            'name'=>$name,
            'age'=>$age
        ]);

    }


    public function add(){
        return 'Chupe chupe bolo';
    }
}
