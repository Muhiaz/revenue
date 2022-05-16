<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
         
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => 'User',
            'class' => $data['class'],
            'password' => Hash::make($data['password']),
        ]);
         $this->user = $user;
   $mail_data = [
          'recipient'=> $user["email"],
          'fromEmail' => 'davidmuhia87@gmail.com',
          'fromName' => 'Kidel',
          'subject' =>'Welcome',
          'body'=>'Hi '. $user["name"].'.
          '
          ];
          // \Mail::send('mail_template',$mail_data,function($message) use($mail_data){
          //     $message->to($mail_data['recipient'])
          //           ->from($mail_data['fromEmail'],$mail_data['fromName'])
          //           ->subject($mail_data['subject']);
          // });
          return $user;
     
    }
}
