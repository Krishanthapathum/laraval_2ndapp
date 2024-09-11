<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student2;

class studentController extends Controller
{
    public function createStudent(){
        return view('students.create');
    }

    public function viewStudent(){
        return view('students.index');
    }

    public function storeStudent(request $request){
        $student =  new Student2();

        $student->first_name = $request->firstName;
        $student->last_name = $request->lastName;
        $student->contact_number = $request->contactNumber;
        $student->address = $request->address;
        $student->dob = $request->dob;
        $student->save();

        return ("Success");

    }
}
