<?php

namespace App\Http\Controllers\admin\studentmanagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\admin\studentmanagement\AssignStudent;
use App\admin\studentmanagement\DiscountStudent;
use App\User;
use App\admin\student\Shift;
use App\admin\student\Group;
use App\admin\student\Classes;
use App\admin\student\Year;
use DB;
use PDF;

class StudentRollController extends Controller
{
    public function index()
    {
        $data['years'] = Year::orderBy('year','desc')->get();
        $data['classes'] = Classes::all();
        return view('admin.studentmanagement.roll_generate.view',$data);
    }
    public function getstudent(Request $request ){
        dd('ok');
    }
}
