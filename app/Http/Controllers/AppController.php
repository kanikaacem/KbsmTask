<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function register(Request $request)
    { 
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email:strict',
            'mobile_number' => 'required|digits:10',
            'password' => 'required|min:8|max:16'
        ]);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        $user = User::where('email', $request->email)->first();
        if($user){
            return redirect()->back()->withInput()->with('already_registered', 'Email is already Registered');   
        }
        $User = new User;
        $User->name = $request->name;
        $User->email = $request->email;
        $User->mobile_number = $request->mobile_number;
        $User->password = Hash::make($request->password);
        $User->save();

        return redirect("/login");
    }

    public function login(Request $request)
    { 
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        
        $user = User::where('email', $request->email)->first();
        if($user){
            $pass = Hash::check($request->password, $user->password);
            if ($pass) {
                session(['userlogin' => $user]);
                // session()->forget('userlogin');
                return redirect('/dashboard');
            } else {
                return redirect()->back()->withInput()->with('login_error', 'Password does not found');   

            }
        }
        else{
            return redirect()->back()->withInput()->with('login_error', 'User not found');   

        }
      
    }

    public function userLogin(){
        if(session('userlogin')){
            $user_events = Event::where('user_id', session('userlogin')->id)->get();
            return view('dashboard', compact('user_events'));
            // return view('dashboard');
        }else{
            return redirect()->back()->with('login_error', 'Login First');   
     
        }
    }

    public function userLogout(){
      session()->forget('userlogin');
      return redirect("/login")->with('login_error','user is logged out !!, Login Again');
    }

    public function addEvent(Request $request){
       
        $validator = Validator::make($request->all(), [
            'event_name' => 'required',
            'event_description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
      
        $Event = new Event;
        $Event->user_id = session('userlogin')->id;
        $Event->event_name = $request->event_name;
        $Event->event_description = $request->event_description;
        $Event->event_category = implode(',', (array) $request->category);
        $Event->start_date = $request->start_date;
        $Event->end_date = $request->end_date;
        $Event->save();
        return redirect("/dashboard")->with('event_message','Event is created');
    }

    public function deleteEvent(Request $request){
        $Event = Event::find($request->id);
        $Event->delete();
        return redirect("/dashboard")->with('event_message','Event is deleted');

    }

    public function EditEvent(Request $request){
        $Event = Event::find($request->id);
     
        return view("editagenda",compact('Event'));
    }

    public function updateEvent(Request $request){
        dd($request->all());
        exit();
    }
       
}