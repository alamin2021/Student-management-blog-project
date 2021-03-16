<?php

namespace App\Http\Controllers\Admin\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Feecategories;
use App\Admin\FeeCategoryAmounts;
use App\Department;

class FeeAmountController extends Controller
{
    public function index()
    {
        $data = Feecategories::all();
        return view('backend.student-management.fee-amount.view',compact('data'));
    }

   
    public function create()
    {
        $data['department'] = Department::all();
        $data['feeCategories'] = Feecategories::all();
        return view('backend.student-management.fee-amount.create',$data);
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'feecategories_id' => 'required',
            'departments_id' => 'required',
            'amount' => 'required',
        ]);
        // $data = $request->all();
        // $lastid = Feecategories::create($data)->id;
        // if(count($request->departments_id)>0){
        //     foreach($request->departments_id As $key => $value )
        //         $data2 = array(
        //             'feecategories_id'=> $request->feecategories_id ,
        //             'departments_id' => $request->departments_id[$key],
        //             'count' => $request->count[$key],
        //         );
        //         FeeCategoryAmounts::insert($data2);
            
        // };
        // $count_department = count($request->departments_id);
        // // // return $count_department;
        
        // if($count_department ){
        //     foreach( $request->feecategories_id as $i => $value ){
                
        //         $fee_amount = new FeeCategoryAmounts;
        //         $fee_amount->feecategories_id = $value;
        //         $fee_amount->departments_id = $request->departments_id[$i++];
        //         $fee_amount->amount = $request->amount[$i++];
                
        //         $fee_amount->save();
        //         return back()->with('success','fee-amount Added Successfully');
        //     }
        // }

        // ------------------
        if(count($request->departments_id) > 0)
        {
        foreach($request->departments_id as $item=>$v){
            $data2=array(
                'departments_id'=>$request->departments_id[$item],
                'feecategories_id'=>$request->feecategories_id[$item],
                'amount'=>$request->amount[$item]
            );
            FeeCategoryAmounts::create($data2);
      }
        }
        return redirect()->back()->with('success','data insert successfully');

       
        // return redirect()->back()->with('success','fee-amount Added Successfully');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $data = Feecategories::find($id);
        return view('backend.student-management.fee-amount.edit',compact('data'));
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'fee_category' => 'required|unique:fstudent-management.eecategories|max:25',
        ]);
        $data = Feecategories::find($id);
        $new_data = $request->all();
        $data->update($new_data);
        return back()->with('success','fee-amount Update Successfully');
    }

    
    public function destroy($id)
    {
        $data = Feecategories::find($id);
        $data->delete();
        return back()->with('success','fee-amount Deleted Successfully');
    }
}
