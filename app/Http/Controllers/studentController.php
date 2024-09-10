<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function createStudent(){
        return view('students.create');
    }

    public function viewStudent(){
        return view('students.index');
    }

    public function storeStudent(Request $request){
        return $request;
    }


}
