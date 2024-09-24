<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student2;
use Illuminate\Support\Facades\Validator;

class studentController extends Controller
{
    public function createStudent()
    {
        return view('students.create');
    }

    public function viewStudent()
    {
        return view('students.index');
    }

    public function storeStudent(request $request)
    {

        $rules = [
            'firstName' => 'required|string',
            'address' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        // 1st method insert
        $student = new Student2();
        $student->first_name = $request->firstName;
        $student->last_name = $request->lastName;
        $student->contact_number = $request->contactNumber;
        $student->address = $request->address;
        $student->dob = $request->dob;
        $student->save();

        // 2nd method insert(+fillable properties)
        // $student2 = Student2::create($request->all());
        return ("Success");

    }
}
