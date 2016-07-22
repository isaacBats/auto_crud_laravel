<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;
use Validator;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'username' => 'required|max:20|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
     protected function create(array $data)
     {
         return User::create([
             'username' => $data['username'],
             'email' => $data['email'],
             'password' => bcrypt($data['password']),
             'verification_code' => bcrypt($data['verification_code']),
         ]);
     }

     /**
    * Handle a registration request for the application.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function register(Request $request)
   {
       $validator = $this->validator($request->all());

       if ($validator->fails()) {
           $this->throwValidationException(
               $request, $validator
           );
       }

      $input = $request->all();
      $input['verification_code'] = str_random(30);

      $user = $this->create($input);
      Auth::guard($this->getGuard())->login($user);

      Mail::send('emails.verify-email', ['user' => $user], function ($m) use ($user) {
          $m->from('support@bootstrapguru.com', 'Knot Laravel Admin Kit');
          $m->to($user->email, $user->name)->subject('Please verify your email id!');
      });


      return redirect($this->redirectPath());
   }

   public function verify_email(Request $request){

      $user = User::where('email','=',$request->email)->where('verification_code','=',$request->code)->first();

      if($user->email_verified)
      {
        return Redirect::to('login')
          ->with('login_notice', '<div class="alert alert-success">You have already verified your email</div>');
      }
      else if($user)
      {
        $user->email_verified = 1;
        $user->update();
        return Redirect::to('login')
        ->with('login_notice', '<div class="alert alert-success">You have successfully verified your email. Please login now.</div>');
      }
      else
      {
        echo "Invalid verification code or request";
      }
    }

    //Redirect user to the facebook website
    public function facebook_redirect()
    {
      return Socialite::with('facebook')->redirect();
    }

    // to get authenticate user data
    public function facebook() {

        $facebook_user = Socialite::with('facebook')->user();

        //create if user with that email id doesn't exist
        $user = User::firstOrNew(array('email' => $facebook_user->email));
        if(!$user->id)
        {
            $user->email = $facebook_user->email;
            $user->name = $facebook_user->user['name'];
        }
        $user->remember_token = $facebook_user->token;
        $user->save();

        if(Auth::loginUsingId($user->id))
        {
            return redirect('/');
        }
        else
        {
            return redirect('login')->with(['message'=>'User authentication problem','status'=>'error']);
        }
    }

  public function google_redirect() {
      return Socialite::with('google')->redirect();
  }

  // to get authenticate user data
  public function google() {
      $google_user = Socialite::with('google')->user();

      $user = User::firstOrNew(array('email' => $google_user->email));
      if(!$user->id)
      {
              $user->email = $google_user->email;
              $user->username = $google_user->id;
              $user->name = $google_user->name;
      }
      $user->remember_token = $google_user->token;
      $user->save();


      if(Auth::loginUsingId($user->id))
      {
          return redirect('/');
      }
      else
      {
          return redirect('login')->with(['message'=>'User authentication problem','status'=>'error']);
      }

  }
  public function twitter_redirect() {
      return Socialite::with('twitter')->redirect();
  }

  // to get authenticate user data
  public function twitter() {
      $twitter_user = Socialite::with('twitter')->user();

      $user = User::firstOrNew(array('email' => $twitter_user->email));
      if(!$user->id)
      {
          //since twitter doesn't return email, you need to request user. for now I am going to hardcode it
          $user->email = $twitter_user->nickname.'@twitter.com';
          $user->username = $twitter_user->nickname;
          $user->name = $twitter_user->name;
      }
      $user->remember_token = $twitter_user->token;
      $user->save();


      if(Auth::loginUsingId($user->id))
      {
          return redirect('/');
      }
      else
      {
          return redirect('login')->with(['message'=>'User authentication problem','status'=>'error']);
      }

  }

}
