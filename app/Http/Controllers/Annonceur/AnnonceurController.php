<?php

namespace App\Http\Controllers\Annonceur;

use App\Http\Controllers\Controller;
use App\Mail\ForgetPasswordMailAnnonceur;
use Illuminate\Http\Request;

use App\Models\Annonceur;
use App\Models\Mpass_reset;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Mail;

class AnnonceurController extends Controller
{
    //
    function create(Request $request){
        //Validate Inputs
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:annonceurs,email',
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $user = new Annonceur();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $save = $user->save();

        if( $save ){
            return redirect()->back()->with('success','You are now registered successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong, failed to register');
        }
    }

    function check(Request $request){
        //Validate inputs
        $request->validate([
           'email'=>'required|email|exists:annonceurs,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists on users table'
        ]);

        $creds = $request->only('email','password');
        if( Auth::guard('annonceur')->attempt($creds) ){
            return redirect()->route('annonceur.home');
        }else{
            return redirect()->route('annonceur.annonceur_login')->with('fail','Incorrect credentials');
        }
    }

    public function home()
    {
        return view('annonceur.home');
    }

    function logout(){
        Auth::guard('annonceur')->logout();
        return redirect('/');
    }

    public function forget_password()
    {
      return view('annonceur.modal.forget_password');
    }
  
      public function postForget_password(Request $request)
      {
          $request->validate([
              'email'=>'required|email'
          ]);
          $user=Annonceur::where('email', $request->email)->first();
          if (!$user) {
              return redirect()->back()->with('fail','Annonceur non trouvé.');
          }else{
              $reset_code= Str::random(200);
              Mpass_reset::create([
                  'userid' => $user->id,
                  'reset_code' => $reset_code
              ]);
              Mail::to($user->email)->send(new ForgetPasswordMailAnnonceur($user->name, $reset_code));
              return redirect()->back()->with('success','Nous avons envoyé un lien de renitialisation de votre mot de passe. Veuillez consulter votre mail.'); 
          }
      }

    public function getResetPassword($reset_code){
        $password_reset_data =Mpass_reset::where('reset_code', $reset_code)->first();

        if (!$password_reset_data || Carbon::now()->subMinutes(10)> $password_reset_data->created_at) {
        return redirect()->route('annonceur.get_forget_password')->with('fail','lien invalide ou expiré');
        } else {
        return view('annonceur.modal.reset_password', compact('reset_code'));
        }
    }

    public function postResetPassword($reset_code, Request $request){
        $password_reset_data =Mpass_reset::where('reset_code', $reset_code)->first();
        if (!$password_reset_data || Carbon::now()->subMinutes(10)> $password_reset_data->created_at) {
            return redirect()->route('annonceur.get_forget_password')->with('fail','lien invalide ou expiré');
        } else {
            $request->validate([
                'email'=>'required|email',
                'password'=>'required|min:5|max:30',
                'cpassword'=>'required|min:5|max:30|same:password'
            ]);
            $user=Annonceur::find($password_reset_data->userid);
            if ($user->email != $request->email){
                return redirect()->back()->with('fail','Entrer un mail correct.'); 
            } else {
                $password_reset_data->delete();
                $user->update([
                    'password'=> \Hash::make($request->password)
                ]);
                return redirect()->route('annonceur.annonceur_login')->with('success','mot de passe renitialiser veuillez vous connecter');
            }
        }
    }

      

    


}
