@extends('index')
@section('content')
<div class="sending">
    <div class="video">
        <img src="{{asset('videos/send-msg.gif')}}" alt="ارسال رساله لصديقك المقرب لاخباره عن انطباعك عنه">
    </div>
    <div class="container">
        <div class="content" itemscope itemtype="https://schema.org/person">
            <div class="image">
               <img src='{{asset("images/users")}}/{{$info->image}}'>
            
            </div>
            <p class="text-center bold" itemprop="name">{{$info->username}}</p>
            <form method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="اخبر صديقك عن انطباعك عنه في اول لقاء به" required></textarea>
                    <p><span>0</span></p>
                </div>
                <p>الرساله تصل عن طريق استخدام</p>
                @if($mobile_msg_status == 1)
                <div class="form-group-half">
                    <span><i class="las la-mobile-alt"></i></span>
                    <input type="radio" class="special-radio btn-success" name="type" value="mobile" required>          
                </div>
                <div class="form-group-half">
                    <span><i class="las la-envelope-open"></i></span>
                    <input type="radio" class="special-radio btn-primary" name="type" value="web" required>
                </div>
                <div class="clear"></div>
                @else 
                <p class="alert alert-info">رسائل الموبايل غير مفعله في الوقت الحالي هنا في هذه الدوله سيتم تفعيلها في اقرب وقت</p>
                <div class="clear"></div>
                <div class="form-group-half">
                    <span style="right:50px;"><i class="las la-envelope-open"></i></span>
                    <input style="width:100%" type="radio" class="special-radio btn-primary" name="type" value="web" checked required>
                </div>
                <div class="clear"></div>
                @endif
                <div class="form-group">
                    <input type="submit" class="btn btn-primary form-control" value="ارسال">
                </div>
            </form>
        </div>
   </div>
</div>
@if(!auth()->check())
<div class="bk-layout show">
    <div class="remove-fav">
        <img src="{{asset('images/gif/login.gif')}}">
        <p>من فضلك قم بتسجيل الدخول اولا او بالانضمام معنا اذا كانت هذه اول زياره لك لنا حتي تتمكن من كتابه انطباعاتك لاصدقائك</p>
        <button class="btn btn-primary closeBtn"><a href="/auth/login">تسجيل دخول</a></button>
        <button class="btn btn-info closeBtn"><a href="/auth/register">تسجيل عضويه جديده</a></button>
    </div>
</div>
@endauth


@endsection