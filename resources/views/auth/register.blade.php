@extends('index')
  @section('content')
<div class="login">
    <div class="container">
        
         <div class="login-box">
              
              <div class="login-header">
                  <div class="image">
                     <img src="{{asset('/images/icons/logo.png')}}">
                  </div>
                  <div>
                      <p>First Meeting</p>
                      <p>اللقاء الاول</p>
                  </div>
              </div>
             <form role="form" method="post" action="{{ route('register') }}" enctype="multipart/form-data">
                 {{ csrf_field() }}
                 
                 <div>
                    <div class="clear"></div><div class="clear"></div>
                    <div class="form-group-half">
                        <input type="text" name="username" class="form-control " value="{{old('username')}}" placeholder="اسم المستخدم">
                        <span class="input-icon-right"><i class="fas fa-user"></i></span>
                        @if ($errors->has('username'))
                        <p class="alert alert-danger error-msg">اسم المستخدم لابد ان يكون علي الاقل 3 احرف</p>
                        @endif
                    </div>
                    <div class="form-group-half text-center">
                         <span>ذكر</span><input type="radio" name="gender" value="male" @if(old('gender') == 'male') checked @endif/>
                         <span>انثي</span><input type="radio" name="gender" value="female" @if(old('gender') == 'female') checked @endif/>
                         @if ($errors->has('gender'))
                        <p class="alert alert-danger error-msg">حقل النوع اجباري</p>
                        @endif
                    </div>
                    <p class="clear"></p>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="البريد الالكتروني">
                        <span class="input-icon-right"><i class="fas fa-envelope"></i></span>
                        @if ($errors->has('email'))
                        <p class="alert alert-danger error-msg">البريد الالكتروني تم استخدامه من قبل يرجي اختيار بريد الكتروني اخر</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" value="{{old('password')}}" class="form-control" placeholder="كلمله المرور">
                        <span class="input-icon-right"><i class="fas fa-lock"></i></span>
                        @if ($errors->has('password') && $errors->has('password') != 'The password confirmation does not match.')
                          <p class="alert alert-danger error-msg">كلمه المرور لابد ان تكون علي الاقل 6 حروف</p>
                        @endif
                   </div>
                   <div class="form-group">
                       <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" placeholder="تأكيد كلمه المرور" class="form-control">
                       <span class="input-icon-right"><i class="fas fa-lock"></i></span>
                        @if ($errors->has('password') && $errors->has('password') == 'The password confirmation does not match.' )
                          <p class="alert alert-danger error-msg">كلمتان المرور غير متطابقتان</p>
                        @endif
                   </div>
                    <div class="form-group">
                         <div class="upload gray-bk">
                               <span>رفع صوره شخصيه</span>
                               <span class="input-icon-right"><i class="fa fa-image"></i></span>
                               <input type="file" name="image">
                         </div>
                     </div>
                   <div class="clear"></div>
                   <div class="form-group-half">
                         <span class="input-icon-right"><i class="fa fa-building"></i></span>
                         <select class="form-control" name="country_id" required>
                             <option value="">الدوله</option>
                             @foreach($countries as $country)
                             <option value="{{$country->id}}" @if(old('country_id') == $country->id) selected @endif>{{$country->name}}</option>
                             @endforeach
                         </select>
                         @if ($errors->has('country_id'))
                        <p class="alert alert-danger error-msg">حقل الدوله اجباري</p>
                        @endif
                    </div>
                   <div class="form-group-half">
                         <span class="input-icon-right"><i class="fa fa-building"></i></span>
                         <select class="form-control" name="city_id">
                             <option value="">المدينه</option>
                             @foreach($cities as $city)
                             <option value="{{$city->id}}" @if(old('city_id') == $city->id) selected @endif>{{$city->name}}</option>
                             @endforeach
                         </select>
                         @if ($errors->has('city_id'))
                        <p class="alert alert-danger error-msg">حقل المدينه اجباري</p>
                        @endif
                    </div>
                   <div class="clear"></div>
                    <div class="form-group">
                        <input type="number" name="phone" class="form-control" value="{{old('phone')}}" placeholder="رقم الهاتف">
                        <span class="input-icon-right"><i class="fas fa-phone"></i></span>
                        @if ($errors->has('phone'))
                        <p class="alert alert-danger error-msg">لابد ان يكون رقم الهاتف علي الاقل تسعه احرف</p>
                        @endif
                    </div>
                    <p class="clear"></p>

                   <div class="form-group">
                       <button type="button" class="btn btn-primary btn-block">التالي</button> 
                   </div>
                    <p class="note-text">لديك حساب بالفعل ؟ <a href="/auth/login">تسجيل دخول</a></p>
                 </div>
                 <div>
                     <span>تعهدي امام الله</span><br>
                     <p>اتعهد امام الله اني لا اقوم بأرسال اي رسال مخله او مؤذيه او قد تسبب المشاكل او تسئ للدين او العرض او الجنس او الشكل</p>
                     <div class="form-group">
                         <input name="agree" type="checkbox"><span>اوافق علي جميع الشروط</span>
                     </div>
                     <div class="form-group">
                         <input class="btn btn-success form-control" type="submit" disabled value="تسجيل عضويه جديده" />
                     </div>
                  </div>
            </form>
              <div class="shape" >        
                <div></div>
               <div></div>
               <div></div>
             </div>
            
            
         </div>
        </div>
       
  @endsection