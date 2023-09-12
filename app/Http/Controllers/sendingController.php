<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sendingController extends Controller
{
    public function send() {
        $meta_description = 'تستطيع ارسال رساله لصديقك المقرب تخبره انطباعك عن اول لقاء شاهدته فيه ثم تقوم بارسال الرساله اما عن طريق حسابه الشخصي علي الموقع او عن طريق هاتفه المحمول في سريه تامه';
        $keywords = 'sending message , sending message | first meeting , ارسال رساله لصديقك المقرب , اخبر صديقك المقرب عن انطابعك عنه في سريه تامه , ارسل رساله علي الموبيل لصديقك في اللقاء الاول';
        $url = 'first-meeting.net/sending';
        $og_image = 'first-meeting.net/public/images/users/default.png';
        $id = request()->segment(2);
        $user_to_send = \App\User::find($id);
       if($user_to_send != null){
           $og_image = 'first-meeting.net/public/images/users/'.$user_to_send->image;
       }


        if(auth()->check()){
            if(auth()->user()->id == $id){
                return redirect('/profile/default');
            }
        }
            if(!empty(\App\User::find($id))){
                $info = \App\User::find($id);
                // check he is auth
                if(auth()->check()){
                // check two persons are from the same country to use mobile message
                    if(\App\cities::find(auth()->user()->city_id)->country_id == \App\cities::find($info->city_id)->country_id){
                        // they are from the same country
                        $mobile_msg_status = 1;
                        // check if your country allow for you to send message
                        if(\App\countries::find(\App\cities::find(auth()->user()->city_id)->country_id)->mobile_message_status == 1){
                            // you allowed here to send 
                            $mobile_msg_status = 1;
                        }else{
                            $mobile_msg_status = 0;
                        }
                    }else{
                        // they are from different country
                        $mobile_msg_status = 0;
                }
                
                }else{
                    $mobile_msg_status = 0;
                }
                return view('sending/default',
                    [
                        'title'=>'اخبرنا عن انطباعك الاول عني في رساله سريه',             
                        'meta_description'=>$meta_description,
                        'keywords'=>$keywords,
                        'url'=>$url,
                        'og_image'=>$og_image,
                        'mobile_msg_status'=>$mobile_msg_status,
                        'info' => $info
                    ]
                );
            }else{
                redirect('/profile/default')->send();
            }
            
        
    }
}