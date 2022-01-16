<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Mail\ForgetPasswordMail;
use Illuminate\Http\Request;

use App\Models\Doctor;
use App\Models\Mpass_reset;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Mail;

class DoctorController extends Controller
{
    //
    function create(Request $request){
        //Validate inputs
        $request->validate([
           'name'=>'required',
           'email'=>'required|email|unique:doctors,email',
           'hospital'=>'required',
           'password'=>'required|min:5|max:30',
           'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $doctor = new Doctor();
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->hospital = $request->hospital;
        $doctor->password = \Hash::make($request->password);
        $save = $doctor->save();

        if( $save ){
            return redirect()->back()->with('success','You are now registered successfully as Doctor');
        }else{
            return redirect()->back()->with('fail','Something went Wrong, failed to register');
        }
  }

  function check(Request $request){
      //Validate Inputs
      $request->validate([
         'email'=>'required|email|exists:doctors,email',
         'password'=>'required|min:5|max:30'
      ],[
          'email.exists'=>'This email is not exists in doctors table'
      ]);

      $creds = $request->only('email','password');

      if( Auth::guard('doctor')->attempt($creds) ){
          return redirect()->route('doctor.home');
      }else{
          return redirect()->route('doctor.login')->with('fail','Incorrect Credentials');
      }
  }

  public function home()
  {
      return view('doctor.doctor_home');
  }

  function logout(){
      Auth::guard('doctor')->logout();
      return redirect('/');
  }

  public function forget_password()
  {
    return view('doctor.modal.forget_password');
  }

    public function postForget_password(Request $request)
    {
        $request->validate([
            'email'=>'required|email'
        ]);
        $user=Doctor::where('email', $request->email)->first();
        if (!$user) {
            return redirect()->back()->with('fail','Doctor non trouvé.');
        }else{
            $reset_code= Str::random(200);
            Mpass_reset::create([
                'userid' => $user->id,
                'reset_code' => $reset_code
            ]);
            Mail::to($user->email)->send(new ForgetPasswordMail($user->name, $reset_code));
            return redirect()->back()->with('success','Nous avons envoyé un lien de renitialisation de votre mot de passe. Veuillez consulter votre mail.'); 
        }
    }

    public function getResetPassword($reset_code){
        $password_reset_data =Mpass_reset::where('reset_code', $reset_code)->first();

        if (!$password_reset_data || Carbon::now()->subMinutes(10)> $password_reset_data->created_at) {
        return redirect()->route('doctor.get_forget_password')->with('fail','lien invalide ou expiré');
        } else {
        return view('doctor.modal.reset_password', compact('reset_code'));
        }
    }


    public function postResetPassword($reset_code, Request $request){
        $password_reset_data =Mpass_reset::where('reset_code', $reset_code)->first();
        if (!$password_reset_data || Carbon::now()->subMinutes(10)> $password_reset_data->created_at) {
            return redirect()->route('doctor.get_forget_password')->with('fail','lien invalide ou expiré');
        } else {
            $request->validate([
                'email'=>'required|email',
                'password'=>'required|min:5|max:30',
                'cpassword'=>'required|min:5|max:30|same:password'
            ]);
            $user=Doctor::find($password_reset_data->userid);
            if ($user->email != $request->email){
                return redirect()->back()->with('fail','Entrer un mail correct.'); 
            } else {
                $password_reset_data->delete();
                $user->update([
                    'password'=> \Hash::make($request->password)
                ]);
                return redirect()->route('doctor.login')->with('success','mot de passe renitialiser');
            }
        }
    }


    

}
