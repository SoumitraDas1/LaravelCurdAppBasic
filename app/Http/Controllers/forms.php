<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class forms extends Controller
{
    function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:4|max:10'
        ]);
        $usr = new User();
        $usr->name = $request->name;
        $usr->email = $request->email;
        $usr->password = Hash::make($request->password);
        $res = $usr->save();
        if($res){
            return back()->with('successmsg','Registration Successful');
        }
        else{
            return back()->with('successmsg','Registration UnSuccessful');   
        }
    }
    function login(Request $request){
        
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if (Hash::check($request->password, $user->password)){
                //return back()->with('successmsg','Login Successful');
                $request = session()->put('loginId',$user->id);
                return redirect('dashboard');
            }
            else{
                return back()->with('successmsg','Login UnSuccessful');
            }
            
            //echo "success";//back()->with('successmsg','Login Successful');
        } else{
            return back()->with('successmsg','Login UnSuccessful');
            //echo "fail";// back()->with('successmsg','Login UnSuccessful');
        }  

    }
    function logout(Request $request){
        $request->session()->pull('loginId');
        return redirect('/');

    }

    function employee(Request $request){
        $request->validate([
            'gender'=>'required'
        ]);
        $image  = $request->file('file');
        $filename = time().'.'.'png';
        $image->move('uploads/',$filename);
        $filename = 'uploads/'.$filename;
        $empname = $request->empname;
        $email = $request->email;
        $userId = Session::get('loginId');
        $country = $request->country;
        $state = $request->state;
        $gender = $request->gender;
        $address = $request->address;
        $res = DB::insert('insert into employees(empname,userid,email,country,state,gender,address,image) values(?,?,?,?,?,?,?,?)',[$empname,$userId,$email,$country,$state,$gender,$address,$filename]);
         
        
         if($res){
              return back()->with('successmsg','Employee Registration Successful');
         }
         else{
             return back()->with('successmsg',' Employee Registration UnSuccessful');   
         }

        
    }

    function dashboard(){
        $data=array();
        if(Session::has('loginId')){
            //$data = User::where('id','=',Session::get('loginId'))->first();
            $data1['country'] = DB::table('countries')->get();
            return view('dashboard',$data1);
        }
        else{
            return redirect('/');
        }
        
    }
    function delete($id){
        Employee::where('id', $id)->delete();
        return redirect()->back();
    }

    function update(Request $request){
        $request->validate([
            'gender'=>'required'
        ]);
        $image  = $request->file('file');
        $filename = time().'.'.'png';
        $image->move('uploads/',$filename);
        $filename = 'uploads/'.$filename;
        $empname = $request->empname;
        $email = $request->email;
        $id = $request->id;
        $country = $request->country;
        $state = $request->state;
        $gender = $request->gender;
        $address = $request->address;
        $res = Employee::where('id',$id)->update(array(
            'empname'=>$empname,
            'email'=>$email,
            'country'=>$country,
            'state'=>$state,
            'gender'=>$gender,
            'address'=>$address,
            'image'=>$filename,
            
)); 
         if($res){
              return back()->with('successmsg','Update Successfull');
         }
         else{
             return back()->with('successmsg',' Update UnSuccessful');   
         }
    }

   function getState(Request $request){
        $cid=$request->post('cid');
        $state= DB::table('states')->where('countryid',$cid)->get();
        $html='<option value="">Select State</option>';
        foreach($state as $list){
            $html.='<option value="'.$list->state.'">'.$list->state.'</option>';
        }
        echo $html;
    }
}
