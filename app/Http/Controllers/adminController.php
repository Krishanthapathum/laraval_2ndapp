<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function GoToAdminDashboard(){
        return view('adminDashboard');
    }

    public function GoToAdminGallery(){
        return view('adminGallery');
    }

    public function store(request $req){
       $stu = new Student();

       $stu->student_name = $req->StudentName;
       $stu->student_email = $req->StudentEmail;

       $stu->save();
    }
}