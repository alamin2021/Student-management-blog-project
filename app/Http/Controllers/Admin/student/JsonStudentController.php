<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Subjects;
use App\Admin\Divisions;
use App\Admin\Districts;
use App\Admin\Upazilas;
use App\Department;
use App\Admin\Courses;
use App\Admin\Teachers;
use App\Admin\Books;
use App\Admin\CourseAssigns;
use App\Students;
use App\Admin\SubjectAssigns;

class JsonStudentController extends Controller
{
    public function subject(Request $request){
        $departments_id = $request->Input('departments_id');
        $subject = Subjects::where('departments_id', '=', $departments_id)->get();
        return response()->json($subject);
      }
      public function fetchStudents(Request $request){
        
        $student_id = $request->Input('student_id');
  
        $enrol = Students::join('departments','students.departments_id','=','departments.id')
        ->select('students.*','departments.dpt_name')->where('std_id', '=', $student_id)->first();

        // $dpt = Students::join('departments','students.departments_id','=','departments.id')
        // ->select('students.*','departments.dpt_name')->where('std_id', '=', $student_id)->first()->departments_id;
        
        if($request->Input('student_id')){
          return response()->json($enrol);
        }elseif($request->Input('semisters_id')){
          
          $semisters_id = $request->Input('semisters_id');
          $sub = SubjectAssigns::where('semisters_id', '=', $semisters_id)->get();
          return response()->json($sub);
        }
        
      }
    public function fetchSubject(Request $request){
        $semisters_id = $request->Input('semisters_id');
        $subject = Subjects::where('departments_id', '=', $departments_id)->get();
        return response()->json($subject);
      }
    public function fetchSemiterSub(Request $request){
        $semisters_id = $request->Input('semisters_id');
        $sub = SubjectAssigns::where('semisters_id', '=', $semisters_id)->get()->department_id;
        return response()->json($sub);
      }
}
