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

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data['years'] = Year::orderBy('id','asc')->get();
        $data['classes'] = Classes::all();
        
        $data['user'] = User::all();
        $data['year_id'] = Year::orderBy('id','asc')->first()->id;
        $data['class_id'] = Classes::orderBy('id','asc')->first()->id;
        $data['allData'] = AssignStudent::where('year_id',$data['year_id'])->where('class_id',$data['class_id'])->get();
        return view('admin.studentmanagement.registration.view',$data);
    }

    //    create
    public function create()
    {
        $data['shift'] = Shift::all();
        $data['group'] = Group::all();
        $data['years']= Year::all();
        $data['classes'] = Classes::all();
        return view('admin.studentmanagement.registration.create',$data);
    }
    // search 
    public function student_search(Request $request){
        $data['years'] = Year::orderBy('id','asc')->get();
        $data['classes'] = Classes::all();
        
        $data['user'] = User::all();
        $data['year_id'] = $request->year_id;
        $data['class_id'] = $request->class_id;
        $data['allData'] = AssignStudent::where('year_id',$request->year_id )->where('class_id',$request->class_id)->get();
        return view('admin.studentmanagement.registration.view',$data);
    }
    
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            
            $checkYear = Year::find($request->year_id)->year;
            $student = User::where('usertype','students')->orderBy('id','DESC')->first();
            if($student == null){
                $firstReg = 0 ;
                $studentId = $firstReg + 1 ;
                if($studentId < 10 ){
                    $id_no = '000'.$studentId;
                }elseif($studentId < 100 ){
                    $id_no = '00'.$studentId;
                }elseif($studentId < 1000 ){
                    $id_no = '0'.$studentId;
                }
            }else{
                $student = User::where('usertype','students')->orderBy('id','DESC')->first()->id;
                $studentId = $student + 1;
                if($studentId < 10 ){
                    $id_no = '000'.$studentId;
                }elseif($studentId < 100 ){
                    $id_no = '00'.$studentId;
                }elseif($studentId < 1000 ){
                    $id_no = '0'.$studentId;
                }
            }
            $final_id_no = $checkYear.$id_no;
            $user = new User();
            $code = rand(0000,9999);
            $user->id_no = $final_id_no;
            $user->password = bcrypt($code);
            $user->code = $code;
            $user->usertype = 'students';
            $user->role = 'operator';

            $user->name = $request->name;
            $user->father_name = $request->father_name;
            $user->mother_name = $request->mother_name;
            $user->mobile = $request->mobile;
            $user->present_addr = $request->present_addr;
            $user->gender = $request->gender;
            $user->religion = $request->religion;
            $user->date_of_birth = date('d-M-Y',strtotime($request->date_of_birth));
            if($request->file('image')){
                $file = $request->file('image');
                $filename = date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('backend/images/student/'),$filename);
                $user->image = $filename;
            }
            $user->save();

            $assign_student = new AssignStudent;
            $assign_student->student_id = $user->id;
            $assign_student->year_id = $request->year_id;
            $assign_student->group_id = $request->group_id;
            $assign_student->shift_id = $request->shift_id;
            $assign_student->class_id = $request->class_id;
            $assign_student->save();

            $discount_student = new DiscountStudent ;
            $discount_student->assign_student_id = $assign_student->id;
            $discount_student->fee_category_id = "1";
            $discount_student->discount = $request->discount;
            $discount_student->save();
            
            
        });
        return redirect()->back()->with('success','Student Registration Successfully ! Your registration Id is  !.. Please Consume this For Login To Your Dhashbord');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($student_id)
    {
        $data['shift'] = Shift::all();
        $data['group'] = Group::all();
        $data['years']= Year::all();
        $data['classes'] = Classes::all();
        $data['editData'] = AssignStudent::with(['student','discount'])->where('student_id',$student_id)->first();
        // dd($data['editData']->toArray());
        return view('admin.studentmanagement.registration.edit',$data);
    }

    
    public function update(Request $request, $student_id)
    {
        DB::transaction(function () use ($request,$student_id) {
            
            $user = User::where('id',$student_id)->first();
            $user->name = $request->name;
            $user->father_name = $request->father_name;
            $user->mother_name = $request->mother_name;
            $user->mobile = $request->mobile;
            $user->present_addr = $request->present_addr;
            $user->gender = $request->gender;
            $user->religion = $request->religion;
            $user->date_of_birth = date('Y-m-d',strtotime($request->date_of_birth));
            if($request->file('image')){
                $file = $request->file('image');
                @unlink(public_path('backend/images/student/'.$user->image));
                $filename = date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('backend/images/student/'),$filename);
                $user->image = $filename;
            }
            $user->save();

            $assign_student =AssignStudent::where('id',$request->id)->where('student_id',$student_id)->first();
            $assign_student->year_id = $request->year_id;
            $assign_student->group_id = $request->group_id;
            $assign_student->shift_id = $request->shift_id;
            $assign_student->class_id = $request->class_id;
            $assign_student->save();

            $discount_student = DiscountStudent::where('assign_student_id',$request->id)->first();
            $discount_student->discount = $request->discount;
            $discount_student->save();
            
            
        });
        return redirect()->back()->with('success','Register Data Update Successfully ');
    }
    // promotion 
    public function promotion($student_id)
    {
        $data['shift'] = Shift::all();
        $data['group'] = Group::all();
        $data['years']= Year::all();
        $data['classes'] = Classes::all();
        $data['promotionData'] = AssignStudent::with(['student','discount'])->where('student_id',$student_id)->first();
        // dd($data['promotionData']->toArray());
        return view('admin.studentmanagement.registration.promotion',$data);
    }
    // promotion Add
    public function promotionStore(Request $request, $student_id)
    {
        DB::transaction(function () use ($request,$student_id) {
            
            
            $user = User::where('id',$student_id)->first();
            $user->name = $request->name;
            $user->father_name = $request->father_name;
            $user->mother_name = $request->mother_name;
            $user->mobile = $request->mobile;
            $user->present_addr = $request->present_addr;
            $user->gender = $request->gender;
            $user->religion = $request->religion;
            $user->date_of_birth = date('Y-m-d',strtotime($request->date_of_birth));
            if($request->file('image')){
                $file = $request->file('image');
                @unlink(public_path('backend/images/student/'.$user->image));
                $filename = date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('backend/images/student/'),$filename);
                $user->image = $filename;
            }
            $user->save();

            $assign_student = new AssignStudent();
            $assign_student->student_id = $student_id;
            $assign_student->year_id = $request->year_id;
            $assign_student->group_id = $request->group_id;
            $assign_student->shift_id = $request->shift_id;
            $assign_student->class_id = $request->class_id;
            $assign_student->save();

            $discount_student = new DiscountStudent();
            $discount_student->assign_student_id = $assign_student->id;
            $discount_student->fee_category_id = "1";
            $discount_student->discount = $request->discount;
            $discount_student->save();
            
            
        });
        return redirect()->back()->with('success','Student Promotion Successfully ');
    }
    // generate pdf 
    public function details($student_id){
        $data['details'] = AssignStudent::with(['student','discount'])->where('student_id',$student_id)->first();
        $pdf = PDF::loadView('admin.studentmanagement.registration.details', $data);
        $pdf->SetProtection(['copy', 'print'], '', 'pass');
        return $pdf->stream('document.pdf');
        // return view('admin.studentmanagement.registration.details',$data);
    }
    
    public function destroy($id)
    {
        $data = Subject::find($id);
        $data->delete();
        return back()->with('success','Subject Deleted Successfully');
    }
}
