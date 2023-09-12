<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function showreset() {
        $meta_description = 'اذا كنت قد نسيت كلمه المرور الخاصه بك يمكنك اعاده تعيينها من هنا';
        $keywords = 'اعاده تعيين كلمه المرور , reset password , نسيت كلمه المرور';
        $url = 'first-meeting.net';
        $og_image = 'first-meeting.net/public/images/icons/logo.png';
        return view('auth.passwords.reset',
                [
                    'title'=>'اعاده تعيين كلمه المرور',
                    'meta_description'=>$meta_description,
                    'keywords'=>$keywords,
                    'url'=>$url,
                    'og_image'=>$og_image,
                ]
        );
    }
    
    public function reset() {
        $this->validate(request(), [
           'email'=>'required', 
        ]);
        $email = request('email');
        $user = \App\User::where('email','=',$email)->first();
        if(!empty($user)){
            \Illuminate\Support\Facades\Mail::to($email)->send(new \App\Mail\sendMail($user));
            return back()->with('success','تم ارسال الرساله بنجاح');
        }else{
            session()->flash('error', 'لا يوجد مستخدم بهذا البريد الالكتروني');
            return back();
        }
    }
    
    public function showPass() {
        $id = request()->segment(3);
        $key = request()->segment(4);
        $user = \App\User::find($id);
        if(!empty($user)){
            if($user->key == $key){
                $meta_description = 'اذا كنت قد نسيت كلمه المرور الخاصه بك يمكنك اعاده تعيينها من هنا';
                $keywords = 'اعاده تعيين كلمه المرور , reset password , نسيت كلمه المرور';
                $url = 'first-meeting.net';
                $og_image = 'first-meeting.net/public/images/icons/logo.png';
                return view('auth.passwords.newpass',
                        [
                            'title'=>'اعاده تعيين كلمه المرور',
                            'meta_description'=>$meta_description,
                            'keywords'=>$keywords,
                            'url'=>$url,
                            'og_image'=>$og_image,
                        ]
                );
            }else{
                return redirect('/auth/reset/')->with('error','هذا المستخدم غير موجود بالنظام')->send();
            }
        }else{
            return redirect('/auth/reset/')->with('error','هذا المستخدم غير موجود بالنظام')->send();
        }
    }
    
    public function insertPass() {
        $data = $this->validate(request(), [
          'password' => 'required|string|min:6|confirmed',
        ]);
        $user  = \App\User::find(request()->segment(3));
        if(!empty($user)){
            $user->password = bcrypt(request('password'));
            $user->save();
            session()->flash('success', 'تم تحديث كلمه المرور الخاصه بك');
        }
        return back();
    }
}
