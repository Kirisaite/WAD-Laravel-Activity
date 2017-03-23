<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
class StudentsController extends Controller
{
    public function home(Request $request){
    	$students = Students::all();
    	return view('index', compact('students'));
    }
    public function toRegister(Request $request){
    	return view('register-form');
    }
    public function save(Request $request){
    	$idnum = $request->idnum;
    	$fname = $request->fname;
    	$mname = $request->mname;
    	$lname = $request->lname;
    	$course = $request->course;
    	$contactnum = $request->contactnum;
    	$guardian = $request->guardian;

    	$student = new Students;
    	$student->idnum = $idnum;
    	$student->fname = $fname;
    	$student->mname = $mname;
    	$student->lname = $lname;
    	$student->course = $course;
    	$student->contactnum = $contactnum;
    	$student->guardian = $guardian;
    	$student->save();

    	return redirect('/start');
    }
    public function toEdit(Request $request, $id){
    	$student = Students::find($id);
    	return view('edit', compact('student'));
    }
    public function toUpdate(Request $request){
    	$id = $request->id;
    	$idnum = $request->idnum;
    	$fname = $request->fname;
    	$mname = $request->mname;
    	$lname = $request->lname;
    	$course = $request->course;
    	$contactnum = $request->contactnum;
    	$guardian = $request->guardian;

    	$student = Students::find($id);
    	$student->idnum = $idnum;
    	$student->fname = $fname;
    	$student->mname = $mname;
    	$student->lname = $lname;
    	$student->course = $course;
    	$student->contactnum = $contactnum;
    	$student->guardian = $guardian;
    	$student->save();

    	return redirect('/start');
    }
    public function toDelete(Request $request, $id){
    	$student = Students::find($id);
    	$student->delete();

    	return redirect('/start');
    }
}
