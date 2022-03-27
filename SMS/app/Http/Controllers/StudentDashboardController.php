<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;
use Session;

class StudentDashboardController extends Controller
{
    private $enrolls;
    private $student;

    public function index()
    {
        $this->enrolls = Enroll::where('student_id', Session::get('student_id'))->get();
        return view('student.home.home',['enrolls' => $this->enrolls]);
    }
    public function studentProfile()
    {
        $this->student = Student::find(Session::get('student_id'));

        return view('student.profile.profile', ['student' => $this->student]);
    }
    public function updateStudentProfile(Request $request,$id)
    {
        Student::updateProfile($request, $id);
        return redirect()->back()->with('message', 'Your Profile Updated Successfully');
    }
    public function changePassword()
    {
        return view('student.profile.change-password', ['id' => Session::get('student_id')]);
    }
    public function updatePassword(Request $request, $id)
    {
        $this->student = Student::find($id);
        if (password_verify($request->prev_password, $this->student->password))
        {
            Student::updateStudentPassword($request, $id);
            return redirect('/student-dashboard')->with('message', 'Password Updated');
        }
        else
        {
            return redirect()->back()->with('message', 'Sorry Incorrect previous password');
        }
    }
}
