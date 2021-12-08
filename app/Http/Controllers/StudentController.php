<?php

namespace App\Http\Controllers;
// F:\laragon\www\laravelone\vendor\haruncpi\laravel-id-generator
use Haruncpi\LaravelIdGenerator\IdGenerator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use App\student;

class StudentController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');
   }
   public function create(){
       return  view('student.create');
   }
   public function index()
   {
       $students = DB::table('students')->get();
    //    dd($students);
    return view('student/student',compact('students'));
   }
   public function store(Request $request)
   {
    // dd($request['first_name']);

       $data = request()->validate([
        'first_name'=> '',
        'last_name'=> '',
        'birthday'=> '',
        'gender'=> '',
        'email'=> '',
        'phone'=> '',
      
    ]);  
    // $id = IdGenerator::generate(['table' => 'todos', 'length' => 6, 'prefix' => date('y')]);
    $user=new Student();

    // $user->student_id = $id;
    $user->first_name = $request->first_name;
    $user->last_name = $request->last_name;
    $user->email = $request->email;
    $user->gender = $request->gender;
    $user->birthday = $request->birthday;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->save();   
    return redirect('/student');
    
   }
   public function edit(Student $user)
   {
    return view('student.edit',compact('user'));
   }
   public function update(Request $request, $id)
   {   

    DB::table('students')->where('id',$id)->update(array(
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'gender' => $request->gender,       
        'email' => $request->email,
        'phone' => $request->phone,
    ));
        return redirect('student');
   }
   public function delete($id){
    // dd($id);
    DB::table('students')->where('id',$id)->delete();
        return redirect('student');
   }
}

