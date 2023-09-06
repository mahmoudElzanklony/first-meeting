<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function changecountry() {
        if(request()->has('country_id')){
            $all_cities = \App\cities::where('country_id','=', request('country_id'))->get();
            if(!empty($all_cities)){
                
                $status = $all_cities;
                echo json_encode($status);
            }else{
                $status = 0;
            }
        }else{
            $status = 0;
        }
        
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
            'username' => 'required|string|min:3|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'gender' => 'required|string|max:255',
            'city_id' => 'required|numeric|max:255',
            'phone' => 'required|unique:users',
           ],[],[
            'username'=> trans('errors.username'),
            'email'=> trans('errors.email'),
            'password'=> trans('errors.password'),
            'phone'=> trans('errors.phone'),
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if(isset($data['image'])){
            $info = $this->validate(request(), [
               'image'=>'required|image|mimes:jpg,jpeg,png,gif' 
            ]);
            $file = request()->file('image');
            $extension = $file->extension();
            $image = 'image.'. date('y-m-d'). rand(0, 99999).'.'.$extension;
            $file->move(public_path('images/users'), $image);
            
        }else{
            $image = 'default.png';
        }
        $city = \App\cities::find($data['city_id']);
        $country = \App\countries::find($city->country_id);
        $key = rand(0, 9999);
        if($country->mobile_message_status == 1){
            $mobile_mobile_msg = 5;
            $activation_phone_status = 0;
            // verify
            
            $verify = 'رمز التفعيل الخاص بك في موقع اللقاء الاول هو '.$key;
            $endpoint = "https://smssmartegypt.com/sms/api/?username=9Wl#7c1&password=zanklony202017&sendername=First Meet&mobiles=20".intval($data['phone'])."&message=".urlencode($verify)."&Content-Type=application/json;charset=utf-8";
            $client = new \GuzzleHttp\Client();
            

            $response = $client->request('GET', $endpoint);

            $statusCode = $response->getStatusCode();
            $content = json_decode($response->getBody(), true);
            //var_dump($content);
        }else{
            $mobile_mobile_msg = 0;
            $activation_phone_status = 1;
        }
        
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'gender'=>$data['gender'],
            'city_id'=>$data['city_id'],
            'phone'=>$data['phone'],
            'activation_phone'=> $key,
            'activation_phone_status'=>$activation_phone_status,
            'image'=> $image,
            'no_points'=>20,
            'no_mobile_messages'=>$mobile_mobile_msg,
            'short_note'=>'hi i am using first meeting',
            'key'=> rand(1111,9999),
            'active'=>1,
            'block'=>0,
            'type'=>'client'
        ]);
    }
}