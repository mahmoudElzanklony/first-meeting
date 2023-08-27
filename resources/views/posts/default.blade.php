@extends('index')
@section('content')
<div class="social-media">
    <div class="tags-info">
        <div class="container">
            <span>الكلمات المفتاحيه</span>
            <form>
                <input type="text" placeholder="كلمه مفتاحيه">
                <span><i class="las la-plus"></i></span>
            </form>
            <div class="tags">
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-sm-4 col-xs-12">
            <div class="filters">
                
                    <div class="search-filter">
                        <div class="filter" itemscope itemtype="https://schema.org/City">
                            <p>
                                <span>المدينه</span>
                                <span><i class="las la-caret-square-down"></i></span>
                            </p>
                            <div>
                                <div class="form-group">
                                    <input  type="checkbox" name='city' value="zagaizg">
                                    <span itemprop="address">الزقازيق</span>
                                </div>
                                <div class="form-group">
                                    <input  type="checkbox" name='city' value="cairo">
                                    <span itemprop="address">القاهره</span>
                                </div>
                                <div class="form-group">
                                    <input  type="checkbox" name='city' value="alex">
                                    <span itemprop="address">اسكندريه</span>
                                </div>
                                <div class="form-group">
                                    <input  type="checkbox" name='city' value="banha">
                                    <span itemprop="address">بنها</span>
                                </div>
                                <div class="form-group">
                                    <input  type="checkbox" name='city' value="aswan">
                                    <span itemprop="address">اسوان</span>
                                </div>
                                <div class="form-group">
                                    <input  type="checkbox" name='city' value="giza">
                                    <span itemprop="address">الجيزه</span>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="filter">
                            <p>
                                <span>المفضله</span>
                                <span><i class="las la-caret-square-down"></i></span>
                            </p>
                            <div>
                                <div class="form-group">
                                    <input  type="checkbox" name='sending-msg' value="0">
                                    <span>نعم</span>
                                </div>
                                <div class="form-group">
                                    <input  type="checkbox" name='sending-msg' value="1">
                                    <span>لا</span>
                                </div>
                            </div>
                                
                        </div>
                        <div class="filter" itemscope itemtype="https://schema.org/gender">
                            <p>
                                <span>النوع</span>
                                <span><i class="las la-caret-square-down"></i></span>
                            </p>
                            <div>
                                <div class="form-group">
                                    <input  type="checkbox" name='gender' value="male">
                                    <span itemtype="GenderType">ذكر</span>
                                </div>
                                <div class="form-group">
                                    <input  type="checkbox" name='gender' value="female">
                                    <span itemtype="GenderType">انثي</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-md-10 col-sm-8 col-xs-12">
            <div class="parent">
            <div class="share">
                <form>
                    <div class="form-group">
                        <img src="{{asset('images/user.jpg')}}">
                        <textarea class="form-control" placeholder="انشاء انطباع عن صديق لك"></textarea>
                    </div>
                    <div class="form-group">
                        <select>
                            <option>من فضلك اختر المدينه التي حدث بها الانطباع</option>
                            <option>الزقازيق</option>
                            <option>اسكندريه</option>
                            <option>القاهره</option>
                        </select>
                    </div>
                
                <div class="requirments">
                    <div class="bk-text-icon bk-blue">
                        <span>تحميل صوره</span>
                        <span class="icon"><i class="las la-image"></i></span>
                        <input type="file">
                    </div>
                    <div class="bk-text-icon bk-green">
                        <span>اشاره للاصدقاء</span>
                        <span class="icon"><i class="las la-users"></i></span>
                    </div>
                    <div class="bk-text-icon bk-purple">
                        <span>كلمات مفتاحيه</span>
                        <span class="icon"><i class="las la-tag"></i></span>
                    </div>
                    <div class="bk-text-icon bk-sky">
                        <span>نشر الانطباع</span>
                        <span class="icon"><i class="las la-paper-plane"></i></span>
                    </div>
                </div>
               </form>
            </div>
            <div class="posts">
                @for($i = 0; $i<10; $i++)
                <div class="post"  itemscope itemtype="https://schema.org/person">
                    <p>12/20/2020</p>
                    <span itemprop="address">الزقازيق</span>
                    <div class="personal-info">
                        <img src='{{asset("images/user.jpg")}}'>
                        <div>
                            <span class="bold" itemprop="name">احمد علي</span>
                            <p itemprop="description">دكتور في جماعه طب خريج منذ سبع سنوات حلمه جعل الطب متاح للجميع بالمجان</p>
                        </div>
                        
                    </div>
                    <p>
                            كنت حابب اعترف لصديقي احمد انه من احسن الناس الى عرفتها في حياتي رغم انه زعلان مني بسبب شويه مشاكل بسببي حابب اقولك متزعلش مني انت استحملتني كتير ومش هلومك علي أي حاجه تعملها وليك الحق في أي حاجه بس اهم حاجه متضايقش لاني مش هسامح نفسي انت بجد حد طيب وجميل وربنا هيكرمك وتبقي متفوق في حياتك وسعيد ودي الرسالة الي حابب اوجها ليك وشكرا ليك ي احمد علي كل حاجه
                    </p>
                    <img src="{{asset('images/posts/15.png')}}">
                    <div class="tags">
                        <div class="bk-text-icon bk-green">
                            <span>دعاء</span>
                            <span class="icon"><i class="las la-tag"></i></span>
                        </div>
                       
                        <div class="bk-text-icon bk-red">
                            <span>خوف</span>
                            <span class="icon">
                                <i class="las la-tag"></i>
                            </span>
                        </div>
                        <div class="bk-text-icon bk-purple">
                            <span>testing</span>
                            <span class="icon">
                                <i class="las la-tag"></i>
                            </span>
                        </div>
                        <div class="bk-text-icon bk-orange">
                            <span>حب</span>
                            <span class="icon"><i class="las la-tag"></i></span>
                        </div>
                        <div class="bk-text-icon">
                            <span>هديه</span>
                            <span class="icon"><i class="las la-tag"></i></span>
                        </div>
                    </div>
                    <div class="reactions">
                        <div class="no-reactions">
                            <span class="heart"><i class="las la-heart"></i></span>
                            <span class="pray"><i class="las la-sad-tear"></i></span>
                            <span class="hand"><i class="las la-handshake"></i></span>
                            <span class="angry">
                                <i class="fas fa-angry"></i>
                            </span>
                            <span>410</span>
                        </div>
                        <div class="do-react">
                            <div>
                                <p>
                                    <span class="heart"><i class="las la-heart"></i></span>
                                    <span class="heart">احببته</span>
                                </p>
                            </div>
                            <div>
                                <p>
                                    <span class="pray"><i class="las la-sad-tear"></i></span>
                                    <span class="pray">احزنني</span>
                                </p>
                            </div>
                            <div>
                                <p>
                                    <span class="hand"><i class="las la-handshake"></i></span>
                                    <span class="hand">اتفق</span>
                                </p>
                            </div>
                            <div>
                                <p>
                                    <span class="angry">
                                        <i class="fas fa-angry"></i>
                                    </span>
                                    <span class="angry">اغضبني</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
        </div>
    </div>
</div>
<div class="bk-layout">
    
    <div class="mention-friends search">
        <div class="header-title">
            <p>
                <span>الاشاره للاصدقاء</span>
                <span><i class="las la-users"></i></span>
            </p>
        </div>
        <form>
            <input class="form-control" type="text" placeholder="ابحث عن اسم صديق لك للأشاره اليه ">
        
        <div class="friends-mentions">
            
        </div>
        <ul class="list-unstyled">
        @for ($i = 0; $i< 10; $i++)
        <li id="{{$i}}">
            <img src="{{asset('images/home/2.jpg')}}">
            <div>
                <p class="bold">احمد {{$i}}</p>
                <p>دكتور في جماعه طب خريج منذ سبع سنوات حلمه جعل الطب متاح للجميع بالمجان</p>
            </div>
        </li>
        @endfor
        </ul>
        
             <input class="btn btn-primary form-control" type="submit" value="ارسال">
        
       </form>
    </div>
</div>


<div class="bk-layout">
    
    <div class="keys_words search">
        <div class="header-title">
            <p>
                <span>كلمات مفتاحيه</span>
                <span><i class="las la-tags"></i></span>
            </p>
        </div>
        <form>
            <input class="form-control" type="text" placeholder="اضف كلمه مفتاحيه جديده">
        
        <div class="friends-mentions">
            <p>
                <span class="icon-remove"><i class="las la-times"></i></span>
                <span>احمد</span>
            </p>
        </div>
        <ul class="list-unstyled">
        @for ($i = 0; $i< 10; $i++)
        <li id="{{$i}}">
            <span>
                <i class="las la-tag"></i>
            </span>
            <div>
                <p class="bold">كلمه مفتاحيه {{$i}}</p>
                <p><span>عدد مستخدمين تلك الكلمه المفتاحيه هو </span><span>{{$i}}</span></p>
            </div>
        </li>
        @endfor
        </ul>
        
             <input class="btn btn-primary form-control" type="submit" value="ارسال">
        
       </form>
    </div>
</div>


<div class="bk-layout">
    
    <div class="big_image">
        <img src="{{asset('images/posts/15.png')}}">
    </div>
</div>

<div class="bk-layout">
    
    <div class="reactions_list listing search">
        <div class="header-data">
            <p class="gray">
                <span>التفاعلات</span>
                <span>(120)</span>
            </p>
            <p>
                <span>5</span>
                <span><i class="las la-heart"></i></span>
            </p>
            <p>
                <span>15</span>
                <span><i class="fas fa-sad-tear"></i></span>
            </p>
            <p>
                <span>35</span>
                <span><i class="fas fa-handshake"></i></span>
            </p>
            <p>
                <span>10</span>
                <span><i class="fas fa-angry"></i></span>
            </p>
        </div>
        <div class="body-data-info">
            <div>
                <ul>
                    @for ($i = 0; $i< 2; $i++)
                        <li id="{{$i}}">
                            
                            <img src="{{asset('images/home/2.jpg')}}">
                            <span><i class="las la-heart blue"></i></span>
                            <div>
                                <p class="bold">احمد {{$i}}</p>
                                <p>دكتور في جماعه طب خريج منذ سبع سنوات حلمه جعل الطب متاح للجميع بالمجان</p>
                            </div>
                            <a href="#" class="btn blue-background">ارسال رساله</a>
                        </li>
                    @endfor
                    @for ($i = 0; $i< 10; $i++)
                        <li id="{{$i}}">
                            
                            <img src="{{asset('images/home/2.jpg')}}">
                            <img src="{{asset('images/icons/angry.webp')}}">
                            <div>
                                <p class="bold">احمد {{$i}}</p>
                                <p>دكتور في جماعه طب خريج منذ سبع سنوات حلمه جعل الطب متاح للجميع بالمجان</p>
                            </div>
                            <a href="#" class="btn red-background">ارسال رساله</a>
                        </li>
                    @endfor
                    @for ($i = 0; $i< 10; $i++)
                        <li id="{{$i}}">
                            
                            <img src="{{asset('images/home/2.jpg')}}">
                            <img src="{{asset('images/icons/agree.png')}}">
                            <div>
                                <p class="bold">احمد {{$i}}</p>
                                <p>دكتور في جماعه طب خريج منذ سبع سنوات حلمه جعل الطب متاح للجميع بالمجان</p>
                            </div>
                            <a href="#" class="btn green-background">ارسال رساله</a>
                        </li>
                    @endfor
                </ul>
            </div>
            <div>
                <ul>
                    @for ($i = 0; $i< 10; $i++)
                        <li id="{{$i}}">
                            <img src="{{asset('images/home/2.jpg')}}">
                            <span><i class="las la-heart blue"></i></span>
                            <div>
                                <p class="bold">احمد {{$i}}</p>
                                <p>دكتور في جماعه طب خريج منذ سبع سنوات حلمه جعل الطب متاح للجميع بالمجان</p>
                            </div>
                            <a href="#" class="btn blue-background">ارسال رساله</a>
                        </li>
                    @endfor
                </ul>
            </div>
            <div>
                <ul>
                    @for ($i = 0; $i< 14; $i++)
                        <li id="{{$i}}">
                            <img src="{{asset('images/home/2.jpg')}}">
                            <img src="{{asset('images/icons/sad.webp')}}">
                            <div>
                                <p class="bold">احمد {{$i}}</p>
                                <p>دكتور في جماعه طب خريج منذ سبع سنوات حلمه جعل الطب متاح للجميع بالمجان</p>
                            </div>
                            <a href="#" class="btn yellow-background">ارسال رساله</a>
                        </li>
                    @endfor
                </ul>
            </div>
            <div>
                <ul>
                    @for ($i = 0; $i< 14; $i++)
                        <li id="{{$i}}">
                            <img src="{{asset('images/home/2.jpg')}}">
                            <img src="{{asset('images/icons/agree.png')}}">
                            <div>
                                <p class="bold">احمد {{$i}}</p>
                                <p>دكتور في جماعه طب خريج منذ سبع سنوات حلمه جعل الطب متاح للجميع بالمجان</p>
                            </div>
                            <a href="#" class="btn green-background">ارسال رساله</a>
                        </li>
                    @endfor
                </ul>
            </div>
            <div>
                <ul>
                    @for ($i = 0; $i< 14; $i++)
                        <li id="{{$i}}">
                            <img src="{{asset('images/home/2.jpg')}}">
                            <img src="{{asset('images/icons/angry.webp')}}">
                            <div>
                                <p class="bold">احمد {{$i}}</p>
                                <p>دكتور في جماعه طب خريج منذ سبع سنوات حلمه جعل الطب متاح للجميع بالمجان</p>
                            </div>
                            <a href="#" class="btn red-background">ارسال رساله</a>
                        </li>
                    @endfor
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection