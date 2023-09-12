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
             <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                 {{ csrf_field() }}
                 @if ($errors->has('email') || $errors->has('password'))
                 <p class="alert alert-danger">البريد الالكتروني او كلمه المرور غير صحيحه</p>
                 @endif
                 <div class="form-group">
                     <input type="email" name="email" class="form-control ">
                      <span class="input-icon-right"><i class="fas fa-envelope"></i></span>
                 </div>
                 <div class="form-group">
                     <input type="password" name="password" class="form-control">
                     <span class="input-icon-right"><i class="fas fa-lock"></i></span>
                </div>
                 <div class="form-group" style="display: block;">
                    <input type="submit" value="تسجيل الدخول" class="btn btn-primary btn-block"> 
                </div>
            </form>
             <p><a href="/auth/reset"> نسيت كلمه المرور!!</a></p>
             <p>
                 <span>ليس لديك حساب</span>
                 <a href="/auth/register">تسجيل مستخدم  جديد</a>
             </p>
             <div class="shape" >
                <div></div>
               <div></div>
               <div></div>
             </div>
         </div>
        </div>
       </div>
  @endsection