<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin_table; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Auth;
class templateController extends Controller
{
    //
    public function index(){
        return view("index");
    }
    public function article(){
        return view("article");
    }
    public function login(){
        return view("log-in");
    }
    public function privacy(){
        return view("privacy");
    }
    public function signup(){
        return view("sign-up");
    }
    public function terms(){
        return view("terms");
    }


    public function adminLogin(){
        return view("admin_login");
    }
    public function verifyLogin(Request $request){
        Auth::guard('Admin_table')->attempt($request->only('username', 'password'));
        $user = Auth::guard('Admin_table')->user();
        if($user){
            return to_route('admin');
        }        
    }
    
    public function admin(){
        // 
        // if(!(Auth::guard('Admin_table')->check())){
        //     return to_route('adminLogin');
        // }
        return view("admin_dashboard");
    }
    public function adminProfile(Request $request){
        $user = Auth::guard('Admin_table')->user();
        // dd($userId);
        $url = Storage::url("{$user->profile_photo}");
        // dd($url);
        return view("admin_profile", ["data"=>$user, "photo"=>$url]);
    }
    public function adminRegister(){
        return view("admin_register");
    }
    public function adminLogout(){
        Auth::guard('Admin_table')->logout();
        return to_route("admin");
    }
    public function createAdmin(Request $request){
        
        $demo= new Admin_table();
        $demo->name = $request->name;
        $demo->password = $request->password;
        $demo->username = $request->username;
        $demo->email = $request->email;
        $demo->save();
        return to_route('adminLogin');
        // return view("admin_register");
    }
    public function adminChangePwd(Request $request){
        $userId = Auth::guard('Admin_table')->user();
      
        $test = Hash::check($request->currentPassword, $userId->password);

        if($test){
            $user = Admin_table::find($userId->id);
            $user->password = $request->newpassword;
            $user->save();
            echo "<script>alert('Password updated successfully!!');document.location='"."/admin-profile"."'</script>";
        }else{
            return back();
        }
    }
    public function editAdmin(Request $request){
        
        $userId = Auth::guard('Admin_table')->user();
      
        $path = $request->file("profile_photo")->store('uploads', "public");
        // dd(''. $path);
        
        //         header("Location: /Project/login.php") ;
        
            $user = Admin_table::find($userId->id);
            $user->name = $request->fullName;
            $user->profile_photo = $path;
            $user->email = $request->email;
            $user->save();
            echo "<script>alert('Profile updated successfully!!');document.location='"."/admin-profile"."'</script>";
        
    }
    public function test(Request $request){
        return view("test");
    }

    public function test2(Request $request){
        return view("test2");
    }
    public function test3(Request $request){
        return view("test3");
    }
    public function test4(Request $request){
        return view("test4");
    }
    public function test5(Request $request){
        return view("test5");
    }
}
