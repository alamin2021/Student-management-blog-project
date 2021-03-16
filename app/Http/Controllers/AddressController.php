<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Input;
use Symfony\Component\Console\Input\Input;
use App\Admin\Divisions;
use App\Admin\Districts;
use App\Admin\Upazilas;
use App\Department;
use App\Admin\Courses;
use App\Admin\Teachers;
use App\Admin\Books;
use App\Admin\CourseAssigns;
use App\Students;

class AddressController extends Controller
{
    public function divisions(){
// 
    }
    public function district(Request $request){
        $divisions_id = $request->Input('divisions_id');
      $districts = Districts::where('divisions_id', '=', $divisions_id)->get();
      return response()->json($districts);
    }
    public function upazila(Request $request){
        $districts_id = $request->Input('districts_id');
      $upazila = Upazilas::where('districts_id', '=', $districts_id)->get();
      return response()->json($upazila);
    }
    public function course(Request $request){
        $departments_id = $request->Input('departments_id');
      $course = Courses::where('departments_id', '=', $departments_id)->get();
      return response()->json($course);
    }
    public function teacher(Request $request){
        $course_id = $request->Input('departments_id');
      $teacher = Teachers::where('departments_id', '=', $course_id)->get();
      return response()->json($teacher);
    }
    // public function updateAssign(Request $request){

    //   $teacher_id = $request->Input('teachers_id');
    //   $teacher = Teachers::join('departments','teachers.departments_id','=','departments.id')
    //             ->select('teachers.*','departments.dpt_name')->get();
    //   return response()->json($teacher);
    // }
    public function book(Request $request){
      $book_code = $request->Input('book_code');
      $book = Books::where('book_code','=', $book_code)->first();
      return response()->json($book);
    }
    public function selectTeacher(Request $request){
      $teachers_id = $request->Input('teachers_id');
      $teacher = Teachers::where('id','=', $teachers_id)->first();
      return response()->json($teacher);
    }
    public function selectCourse(Request $request){
      $course_id = $request->Input('course_id');
      $course = Courses::where('id','=', $course_id)->first();
      return response()->json($course);
    }
    public function dptBook(Request $request){
      $departments_id = $request->Input('departments_id');
      $find_book = Books::where('departments_id', '=', $departments_id)->get();
      return response()->json($find_book);
    }
    public function courseEnroll(Request $request){
      $student_id = $request->Input('student_id');

      $enrol = Students::join('departments','students.departments_id','=','departments.id')
      ->select('students.*','departments.dpt_name')->where('std_id', '=', $student_id)->first();
      return response()->json($enrol);
    }
    public function stdCourses(Request $request){
      $students_id = $request->Input('student_id');
      $find_dpt = Students::where('std_id', '=', $students_id)->first()->departments_id;
      $course = Courses::where('departments_id','=', $find_dpt)->get();
      return response()->json($course);
    }

    public function stdTeacher(Request $request){
      $course_id = $request->Input('course_id');
      $teacher_id = Courses::where('id', '=', $course_id)->first()->departments_id;
      $teacher = Teachers::where('departments_id','=', $teacher_id)->get();
      return response()->json($teacher);
    }
    public function selectStudent(Request $request){
      $departments_id = $request->Input('departments_id');
      $std_data = Students::where('departments_id', '=', $departments_id)->get();
      return response()->json($std_data);
    }
    public function fetchStudent(Request $request){
      $departments_id = $request->Input('students_id');
      $std_data_select = Students::where('id', '=', $departments_id)->first();
      return response()->json($std_data_select);
    }
}
