@extends('index')
    @section('content')
<div class="login">
    <div class="container">
         <div class="login-box">
              <p>منطقه التحكم</p>
              <div class="login-header">
                  <div class="image">
                     <img src="{{asset('/images/icons/logo.png')}}">
                  </div>
                  <div>
                      <p>اللقاء الاول</p>
                      <p>first meeting</p>
                  </div>
              </div>
              <form role="form" method="post" action="{{ route('admin.login.submit') }}">
                 {{csrf_field()}}
                 
                 @if ($errors->any() )
                 
                 <p class="alert alert-danger">{{$errors->first()}}</p>
                 @endif
                 <div class="form-group">
                     <input type="email" name="email" class="form-control" required>
                      <span class="input-icon-right"><i class="fas fa-envelope"></i></span>
                 </div>
                 <div class="form-group">
                     <input type="password" name="password" class="form-control" required>
                     <span class="input-icon-right"><i class="fas fa-lock"></i></span>
                </div>
                <div class="form-group" style="display: block;">
                    <input  type="submit" value="الدخول" class="btn btn-primary btn-block"> 
                </div>
            </form>
             <p><a href="#"> نسيت كلمه المرور!!</a></p>
             <div class="shape" >        
                <div></div>
               <div></div>
               <div></div>
             </div>
         </div>
        </div>
       </div>
@endsection