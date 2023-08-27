@extends('index')
    @section('content')
    <div class="search">
        <div class="video">
            <img src="{{asset('videos/chatting.gif')}}" alt="ابحث عن صديق لك لارسال رساله له ">
        </div>
        <div class="container">
            <form method="post">
              
              <input class="form-control" name="user_info" placeholder="ابحث عن اسم صديقك هنا   ">
              {{csrf_field()}}
              <input class="btn btn-success" type="submit" value="بحث">
              <div class="clear"></div>
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="search-filter">
                        <div class="filter" itemscope itemtype="https://schema.org/City">
                            <p>
                                <span>الدوله</span>
                                <span><i class="las la-caret-square-down"></i></span>
                            </p>
                            <div>
                            @foreach($all_countries as $country)
                                <div class="country">
                                    <p>
                                        <span>{{$country->name}}</span>
                                        <span><i class="las la-caret-square-down"></i></span>
                                    </p>
                                    @if($country->id == \App\cities::find(auth()->user()->city_id)->country_id)
                                        @php
                                            $class = "open"
                                        @endphp
                                    @else 
                                        @php
                                            $class = "none"
                                        @endphp
                                    @endif
                                    <div class="{{$class}}">
                                        @foreach(\App\cities::where('country_id','=',$country->id)->get() as $city)
                                        <div class="form-group">
                                            <input  type="radio" name='city_id' value="{{$city->id}}">
                                            <span itemprop="address">{{$city->name}}</span>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach                            
                                
                            </div>
                            
                        </div>
                       
                        <div class="filter">
                            <p>
                                <span>النوع</span>
                                <span><i class="las la-caret-square-down"></i></span>
                            </p>
                            <div itemscope itemtype="https://schema.org/gender">
                                <div class="form-group">
                                    <input  type="radio" name='gender' value="male">
                                    <span itemtype="GenderType">ذكر</span>
                                </div>
                                <div class="form-group">
                                    <input  type="radio" name='gender' value="female">
                                    <span itemtype="GenderType">انثي</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-sm-8 col-xs-12">
                    <div class="persons">
                    @foreach($all_users as $user)
                        <div class="col-md-3 col-sm-6 col-xs-12" id="{{$user->id}}">
                            <div class="person" itemscope itemtype="https://schema.org/person">
                                <div class="image">
                                    <span id="{{$user->id}}" class="@if(\App\favourite::where('user_id','=', auth()->user()->id)->where('favourite_id','=',$user->id)->count() > 0)fav @endif">
                                        <i class="@if(empty(\App\favourite::where('user_id','=', auth()->user()->id)->where('favourite_id','=',$user->id)->count() > 0))lar la-heart @else las la-heart @endif"></i></span>
                                    <img src="{{asset('images/users')}}/{{$user->image}}">
                                    <button><span>{{\App\messages::where('sender_id','=',auth()->user()->id)->where('receiver_id','=',$user->id)->count()}}</span><span>من الرسائل ارسلتها له</span></button>
                                </div>
                                <p class="text-center" itemprop="name">{{$user->username}}</p>
                                <p itemprop="description" title="{{$user->short_note}}">{{$user->short_note}}</p>
                                <button><a href="/sending/{{$user->id}}">ارسل رساله</a></button>
                            </div>
                        </div>
                    @endforeach
                    
                    </div>
                    <div class="clear"></div>
                    <div class="see-more" id="">
                        <a>
                            <span><i class="fas fa-chevron-down"></i></span>
                            <span>اظهار المزيد</span>
                        </a>
                    </div>
                </div>
            </div>
         </form>
        </div>
    </div>
    <div class="bk-layout">
    <div class="fav-person">
        <img src="{{asset('images/gif/heart.gif')}}">
        <p class="text-center">تم اضافته الي المفضله</p>
        
    </div>
    </div>
    @endsection