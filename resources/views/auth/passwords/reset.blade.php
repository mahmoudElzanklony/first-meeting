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
                      <p>اللقاء الاول</p>
                      <p>first meeting</p>
                  </div>
              </div>
             <form class="form-horizontal" method="POST" action="{{ route('reset.emaill.pass') }}">
                 {{ csrf_field() }}
                 @if (session()->has('error'))
                 <p class="alert alert-danger">لا يوجد مستخدم مسجل لدينا بهذا الايمل الالكتروني</p>
                 @endif
                 @if (session()->has('success'))
                 <p class="alert alert-success">تم ارسال الرساله بنجاح اذ لم تجدها في صندوق الوارد ابحث عنها في مجلد ال spam</p>
                 @endif
                 
                 <div class="form-group">
                     <input type="email" name="email" class="form-control" placeholder="ادخل الايمل الالكتروني الخاص لديك ليتم ارسال رساله تعيين كلمه المرور اليه">
                      <span class="input-icon-right"><i class="fas fa-envelope"></i></span>
                 </div>
                 
                 <div class="form-group" style="display: block;">
                    <input type="submit" value="ارسال للايمل" class="btn btn-primary btn-block"> 
                </div>
            </form>
             <p><a href="/auth/login">تسجيل الدخول</a></p>
             <div class="shape" >        
                <div></div>
               <div></div>
               <div></div>
             </div>
         </div>
        </div>
       </div>
  @endsection