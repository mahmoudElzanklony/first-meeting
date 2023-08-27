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
             <form class="form-horizontal" method="POST">
                 {{ csrf_field() }}
                  
                 @if(!empty($errors->first()))
                    @if ($errors->first() == "The password must be at least 6 characters.")
                    <p class="alert alert-danger">كلمه المرور لابد ان تكون 6 احرف علي الاقل</p>
                    @else
                    <p class="alert alert-danger">كلمتا المرور غير متشابهتين</p>
                    @endif
                 @endif
                 
                 @if (session()->has('success'))
                 <p class="alert alert-success">تم تحديث كلمه المرور  بنجاح</p>
                 @endif
                 
                 <div class="form-group">
                     <input type="password" name="password" class="form-control" placeholder="كلمه المرور لابد ان تكون علي الاقل 6 احرف">
                      <span class="input-icon-right"><i class="fas fa-envelope"></i></span>
                 </div>
                 <div class="form-group">
                     <input type="password" name="password_confirmation" class="form-control" placeholder="تأكيد كلمه المرور">
                      <span class="input-icon-right"><i class="fas fa-envelope"></i></span>
                 </div>
                 <div class="form-group" style="display: block;">
                    <input type="submit" value="حفظ" class="btn btn-primary btn-block"> 
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