<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;

class StudentController extends Controller
{
   public function index()
   {
   	$tampil = Student::all();
   	return view('tampil', compact('tampil'));
}
}