<?php

namespace App\Http\Controllers;

use App\Models\Student\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    function addStudent(){
        return view('admin.addStudent');
    }
    function allStudent(){

        $students=DB::table('students')->get();
        return view('admin.allStudent',['key'=>$students]);
    }



    function storeNewStudent(Request $request){
        // dd($request);
        $student=new Student();
        $student->name=$request->name;
        $student->phone=$request->phone;
        $addclass=$request->class;
        $maxRoll = DB::table('students')->where('class', $addclass)->max('roll');
        $newRoll = $maxRoll + 1;
        $student->roll=$newRoll;
        $student->class=$request->class;
        $student->sex=$request->sexSelect;

        $student->save();
        return redirect()->route('addNewStudentForAdmission');
    }

    function deleteStudent(){

        $students=DB::table('students')->get();
        return view('admin.deleteStudent',['key'=>$students]);
    }
    function deleteStudenti($id){
        DB::table('students')->where('id', $id)->delete();
        $students=DB::table('students')->get();
        return redirect()->route('deleteStudent');
    }
}
