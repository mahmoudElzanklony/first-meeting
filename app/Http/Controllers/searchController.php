<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class searchController extends Controller
{
    public function search() {
        $meta_description = 'تستطيع البحث عن صديق لك عن طريق كتابه اسمه او الايمل الخاص به لارسال رساله نصيه علي الهاتف المحمول او علي حسابه الشخصي في سريه تامه كما تستطيع اضافه اي شخص مقرب لك في المفضله الخاصه لديك';
        $keywords = 'search page , first meeting | search page , search , صفحه البحث عن صديق , البحث , اللقاء الاول | البحث عن صديق ';
        $url = 'first-meeting.net/search';
        $all_users = \App\User::where('id','!=', auth()->user()->id)->limit(8)->get();
        // get country id of user login
        //$user_country = \App\cities::find(auth()->user()->city_id);
        //$all_cities = \App\cities::where('country_id','=',$user_country->country_id)->get();
        $all_countries = \App\countries::all();
        $og_image = 'first-meeting.net/public/images/icons/logo.png';
        return view('search/default',
                [
                    'title'=>'البحث عن صديق',             
                    'meta_description'=>$meta_description,
                    'keywords'=>$keywords,
                    'url'=>$url,
                    'og_image'=>$og_image,
                    'all_users'=>$all_users,
                    'all_countries'=>$all_countries
                ]
        );
    }
    
    
    public function searchitem() {
        $search_item = request('search');
        if($search_item == "users"){
            //search about user
            if(request()->has('id')){
                $id = request('id');
            }else{
                $id = 0;
            }
            if(request()->has('gender')){
                $data  = \DB::table('users')
                        ->join('cities', 'cities.id', '=', 'users.city_id')
                        ->select('users.id','users.username','users.short_note','users.image')
                        ->where('users.id','!=', auth()->user()->id)
                        ->where('users.city_id','LIKE',request('city_id'))
                        ->where('users.username','LIKE', '%'.request('user_info').'%')
                        ->where('users.gender','=', request('gender'))
                        ->where('users.id','>',$id)
                        ->limit(8)
                        ->distinct()
                        ->get();
            }else{
                $data  = \DB::table('users')
                        ->join('cities', 'cities.id', '=', 'users.city_id')
                        ->select('users.id','users.username','users.short_note','users.image')
                        ->where('users.id','!=', auth()->user()->id)
                        ->where('users.city_id','LIKE',request('city_id'))
                        ->where('users.username','LIKE', '%'.request('user_info').'%')
                        ->where('users.id','>',$id)
                        ->limit(8)
                        ->distinct()
                        ->get();
            }
            if($data != null){
                $html = view('ajax_response.search.filter_search',['data'=>$data])->render();
            }else{
                $html = null;
            }
            echo json_encode($html,JSON_UNESCAPED_UNICODE);
        }
    }
}
