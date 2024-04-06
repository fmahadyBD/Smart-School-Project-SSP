<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Attendance;
class TeacherController extends Controller
{
    function dashboard(){

        $date_of_today=now()->toDateString();
        return view('teacher.dashboard',compact('date_of_today'));
    }


    function loadStudentData(Request $request){

        $pclass = $request->input('id');
        $date_of_today = now()->toDateString();
        $student = DB::table('students')->get();

        return view('teacher.loadStudent', ['key' => $student], compact('pclass', 'date_of_today'));
    }

    function Attendence(Request $request){
        foreach ($request->attendance as $studentId => $status) {
            $attendance = new Attendance();
            $attendance->roll = $studentId;
            $attendance->status = $status;
            $attendance->class = '6';
            $attendance->date_of_attendances = now()->toDateString();
            $attendance->save();
        }

        return redirect()->route('dashboard')->with('success', 'Attendance saved successfully');
    }

}
