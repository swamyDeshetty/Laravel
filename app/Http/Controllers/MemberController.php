<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    //
    // fetching the data
    public function index()
    {
        $data= Member::paginate(3);
        return view('student-list',compact('data'));
    }
    // adding the new user..
    public function addStudent()
    {
        return view('add-student');
    }
    
    public function Savestudent(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'age'=>'required',

        ]);

        $firstname=$request->first_name;
        $lastname=$request->last_name;
        $email=$request->email;
        $age=$request->age;


        $Member= new Member();
        $Member->first_name=$firstname;
        $Member->last_name=$lastname;
        $Member->email=$email;
        $Member->age=$age;

        // it saves into the database
        $Member->save();

        return redirect('index')->with('success', 'New User added successfully');


    }
    // Edit operation..
    public function EditStudent($id)
    {
        $data=Member::where('id','=',$id)->first();
        return view('edit',compact('data'));
    }
    public function Updatestudent(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'age'=>'required',

        ]);
        $id=$request->id;
        $firstname=$request->first_name;
        $lastname=$request->last_name;
        $email=$request->email;
        $age=$request->age;

        Member::where('id','=',$id)->update([
            'first_name'=>$firstname,
            'last_name'=>$lastname,
            'email'=>$email,
            'age'=>$age,

        ]);
        return redirect('index')->with('success', 'User Updated successfully');


    }
    // Delete operation..

    public function DeleteStudent($id)
    {
        Member::where('id','=',$id)->delete();
        return redirect('index')->with('success','User Deleted succesfully');

    }


}
