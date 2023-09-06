<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meta_description = 'اللقاء الاول هو موقع يعبر فيه كل صديق عن رائيه في اول لقاء بين اقرب الاصدقاء له بدون معرفه هويته   كما  يستطيع اخباره بأنطباعه عنه  عن طريق ارسال رساله الي الحساب الخاص به او علي جواله في سريه تامه ';
        $keywords = 'first meeting , first , meeting , اللقاء الاول , الانطباعات , اول لقاء , اول انطباع عن صديقك المقرب';
        $url = 'first-meeting.com';
        $og_image = 'first-meeting.com/public/images/icons/logo.png';
        return view('index/welcome',
                [
                    'title'=>'اللقاء الاول | الصفحه الرئيسيه',
                    'meta_description'=>$meta_description,
                    'keywords'=>$keywords,
                    'url'=>$url,
                    'og_image'=>$og_image,
                ]
        );
    }
}
