<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function home() {
        $meta_description = 'الملف الشخصي حيث تستطيع معرفه صندوق الوارد الخاص بك وتتوقع هويه الاشخاص الذين قامو بارسال رسائل لك كما تستطيع رؤيه الرسائل الذي قمت بأرسالها لأصدقائك ومعرفه نقاطك والاحصائيات الخاصه بك  ';
        $keywords = 'first meeting | profile page ,profile,profile page, my information ,الملف الشخصي ,اللقاء الاول | الملف الشخصي,معلوماتي الشخصيه';
        $url = 'https://first-meeting.net/profile/default';
        $personal_info = auth()->user();
        $my_inbox = \App\messages::where('receiver_id','=', auth()->user()->id)->orderBy('id','DESC')->get();
        $sending_messages = \App\messages::where('sender_id','=', auth()->user()->id)->orderBy('id','DESC')->get();
        $my_fav = \App\favourite::where('user_id','=', auth()->user()->id)->orderBy('id','DESC')->get();
        $expectations = \App\expectations::where('user_id','=', auth()->user()->id)->orWhere('receiver_id','=', auth()->user()->id)->orderBy('id','DESC')->get();
         $cities = \App\cities::all();
        $og_image = 'https://first-meeting.net/public/images/users/'.auth()->user()->image;
        return View('profile.default',
              [
                'title'=>'الملف الشخصي',
                'meta_description'=>$meta_description,
                'keywords'=>$keywords,
                'url'=>$url,
                'personal_info'=>$personal_info,
                'og_image'=>$og_image,
                'my_inbox'=>$my_inbox,
                'sending_messages'=>$sending_messages,
                'expectations'=>$expectations,
                'my_fav'=>$my_fav,
                'cities'=>$cities,
            ]
        );
    }
    
    public function additem() {
        $table = request('table');
        if($table == "guess-who"){
            $this->validate(request(), [
               'name'=>'required', 
            ]);
            $msg = \App\messages::find(request('msg_id'));
            \App\expectations::create(
               array(
                   'user_id'=> auth()->user()->id,
                   'receiver_id'=>$msg->sender_id,
                   'expected_name'=> request('name'),
                   'message_id'=>$msg->id,
                   'status'=>2
               )        
            );
        }else if($table == "messages"){
            $this->validate(request(), [
               'receiver_id'=>'required',
               'type'=>'required',
               'message'=>'required',
            ]);
            $sender_id = auth()->user()->id;
            $receiver_id = request('receiver_id');
            $msg = request('message');
            $type = request('type');
            if($type == "mobile"){
                $no_characters = request('no_characters');
                // number of user mobile messages
                $user = \App\User::find($sender_id);
                if($user->no_mobile_messages > 0){
                    // user can send using mobile
                    $no_messages_sent = ceil(intval($no_characters) / 70);
                    // check if user has enough message to send
                    if($user->no_mobile_messages >= $no_messages_sent){
                        // he can send but check if he verify his number ?
                        if(auth()->check()){
                            if(auth()->user()->activation_phone_status == 1){
                                // check receiver from his country
                                $sender_country = \App\cities::find(auth()->user()->city_id)->country_id;
                                $receiver_country = \App\cities::find(\App\User::find($receiver_id)->city_id)->country_id;
                                if($sender_country == $receiver_country){
                                    $user->no_mobile_messages = $user->no_mobile_messages - $no_messages_sent;
                                    $user->save();
                                    $endpoint = "https://smssmartegypt.com/sms/api/?username=9Wl%237c1&password=zanklony202017&sendername=First Meet&mobiles=20".intval(\App\User::find($receiver_id)->phone)."&message=". urlencode(request('message'))."&Content-Type=application/json;charset=utf-8";
                                    
                                    $client = new \GuzzleHttp\Client();


                                    $response = $client->request('GET', $endpoint);

                                    $statusCode = $response->getStatusCode();
                                    $content = json_decode($response->getBody(), true);
                                    \App\messages::create(
                                    array(
                                        'sender_id'=> auth()->user()->id,
                                        'receiver_id'=>$receiver_id,
                                        'message'=> request('message'),
                                        'message_type'=>'mobile',
                                        'status'=>0
                                    )        
                                 );
                        
           /*---------------------------------api of mobile-------------------------------------------------*/
                        
                                    \App\notifications::create(
                                    array(
                                        'sender_id'=> auth()->user()->id,
                                        'receiver_id'=>$receiver_id,
                                        'text'=> 'تم ارسال رساله جديده لهاتفك الشخصي',
                                        'status'=>0
                                    )        
                                 );
                                    $status = 1;
                                }else{
                                    $status = 2;
                                }
                            }else{
                                $status = 0;
                            }
                        }else{
                            $status = 0;
                        }
                    }else{
                        // he has not enough messages
                        $status = 0;
                    }
                }else{
                    // user cant send using mobile
                    $status = 0;
                }
            }elseif($type == "web"){
                \App\messages::create(
                array(
                    'sender_id'=> auth()->user()->id,
                    'receiver_id'=>$receiver_id,
                    'message'=> request('message'),
                    'message_type'=>'web',
                    'status'=>0
                )        
             );
             \App\notifications::create(
                array(
                    'sender_id'=> auth()->user()->id,
                    'receiver_id'=>$receiver_id,
                    'text'=> 'تم ارسال رساله جديده لحسابك الشخصي',
                    'status'=>0
                )        
             );
              $status = 1;  
            }
            echo $status;
        }else if($table == "favourites"){
            $id = request('id');
            // check if user has this person in favourite
            $fav_check = \App\favourite::where('user_id','=', auth()->user()->id)->where('favourite_id','=',$id)->count();
            if($fav_check == 0){
                // add it
                 \App\favourite::create(
                    array(
                        'user_id'=> auth()->user()->id,
                        'favourite_id'=>$id,
                    )
                );
            }
        }
    }
    
    public function edititem() {
        
        $table_editing = request('table');
        if($table_editing == 'user_active'){
            $active = request('active');
            $user = \App\User::find(auth()->user()->id);
            $user->active = $active;
            $user->save();
        }elseif($table_editing == "expectations"){
            $status = request('status');
            $expectation = \App\expectations::find(request('id'));
            $expectation->status = $status;
            $expectation->save();
            
            // get sender of expectation
            $user = \App\User::find($expectation->user_id);
            if($status == 1){
                $user->no_points = intval($user->no_points) + 10;
                $user->save();
                // sending notification
                \App\notifications::create([
                   'sender_id'=> auth()->user()->id,
                   'receiver_id'=>$user->id,
                   'text'=>'تم الرد علي توقعك باجابه صحيحه واضافه عشر نقاط الي نقاطك',
                   'status'=>0
                ]);
            }else{
                $user->no_points = intval($user->no_points) - 10;
                $user->save();
                // sending notification
                \App\notifications::create([
                   'sender_id'=> auth()->user()->id,
                   'receiver_id'=>$user->id,
                   'text'=>'تم الرد علي توقعك باجابه خاطئه وخصم عشر نقاط من نقاطك',
                   'status'=>0
                ]);
            }
        }elseif($table_editing == "users"){
            $user = \App\User::find(auth()->user()->id);
            $user->username = request('username');
            $user->city_id = request('city_id');
            $user->short_note = request('short_note');
            if(request()->has('password')){
                $user->password = bcrypt(request('password'));
            }
            if(request()->hasFile('image')){
                $file = request()->file('image');
                $exten = $file->extension();
                $image = 'image.'. date('y-m-d'). rand(0, 99999).'.'.$exten;
                $file->move(public_path('/images/users'), $image);
                $user->image = $image;
            }
            $user->save();
            $status = 1;
        }elseif($table_editing == "users_activation"){
            // check user if login
            if(auth()->check()){
                // check activation is 0 
                if(auth()->user()->activation_phone_status == 0){
                    if(request()->has('phone_activation')){
                        if(auth()->user()->activation_phone == request('phone_activation')){
                            $user = \App\User::find(auth()->user()->id);
                            $user->activation_phone_status = 1;
                            $user->save();
                            $status = 1;
                        }else{
                            $status = 2;
                        }
                    }else{
                        $status = 0;
                    }
                }else{
                    $status = 1;
                }
            }else{
                $status = 0;
            }
        }
        echo $status;
    }
    
    public function deleteitem() {
        $table = request('table');
        if($table == "favourites"){
            $id = request('id');
            // check if user has this recored
            $favourite = \App\favourite::where('user_id','=', auth()->user()->id)->where('favourite_id','=',$id)->first();
            if(!empty($favourite)){
                $favourite->delete();
                $status = 1;
            }else{
                $status = 0;
            }
        }
        echo $status;
    }
    
}