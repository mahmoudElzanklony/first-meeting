@extends('indexadmin')
  @section('content')
    <div class="control-panel">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-xs-12">
                    @admin_navbar
                </div>
                <div class="col-lg-10 col-md-8 col-xs-12">
                    <div class="data-content">
                        <div class="admin-area">
                             <p>منطقه التحكم</p>
                             <div class="shape">
                                 <div></div>
                                 <div></div>
                                 <div></div>
                             </div>
                        </div>
                        <div class="page-title">
                            <img src="{{asset('images/icons/chat.png')}}">
                            <span>الرسائل</span>                    
                            
                        </div>
                        @project_plan_status_filter
                        
                        <div class="last_orders">
                            <div class="row">
                                @for($i = 0; $i<12; $i++)
                                <div class="col-md-4 col-xs-12">
                                    <div class="order">
                                        <div class="order-header">
                                            
                                            <p>
                                                <img src="{{asset('images/icons/chat.png')}}">
                                                <span>رساله للموبيل</span>
                                            </p>
                                            
                                            <p>
                                                <span class="preview-icon"><i class="fas fa-expand"></i></span>
                                                <a class="delete-icon"><span><i class="fa fa-times"></i></span></a>
                                            </p>
                                             
                                           
                                        </div>
                                        <div class="order-body">
                                            <p class="float-right">
                                                <span><i class="fa fa-user"></i></span>
                                                <span>احمد علي</span>
                                            </p>
                                            <p class="float-left">
                                                <span>سعد عبد الله</span>
                                                <span><i class="fas fa-user-check"></i></span>
                                            </p>
                                            <div class="clear"></div>
                                            <p class="float-right">
                                                <span><i class="fas fa-phone"></i></span>
                                                <span>31231293123</span>
                                            </p>
                                            
                                            <p class="float-left">
                                                
                                                <span>الهاتف المحمول</span>
                                                <span class="green"><i class="fas fa-envelope-open"></i></span>
                                            </p>
                                            <div class="clear"></div>
                                            <p>
                                                <span class="red"><i class="fas fa-calendar"></i></span>
                                                <span>18/12/2020 5:60</span>
                                            </p>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                @endfor
                            </div>
                        </div>
                        <div class="see-more">
                            <a>
                                <span><i class="fas fa-chevron-down"></i></span>
                                <span>اظهار المزيد</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="outpage-bk-gray">
  <div class="preview-box showing listed-ordered box_fixed myDivToPrint">
      <span class="close_box"><i class="fa fa-times"></i></span>
     
      <div class="content">
          <div>
              <p>
                  <span><i class="fa fa-user"></i></span>
                  <span>بيانات المرسل</span>
              </p>
             
              <ul class="list-unstyled">
                  <li class="float-right">
                      <span><i class="fa fa-user"></i></span>
                      <span>احمد علي </span>
                  </li>
                  <li class="float-left">      
                      <span>ahmed_ali@yahoo.com</span>
                      <span class="spanicon"><i class="fa fa-envelope"></i></span>
                  </li>
                  <div class="clear"></div>
                  <li class="float-right">
                      <span><i class="fa fa-phone"></i></span>
                      <span>+9951231232123</span>
                  </li>
                  <li class="float-left">                    
                      <span>السعوديه , جده</span>
                      <span class="spanicon"><i class="fa fa-building"></i></span>
                  </li>
                  <div class="clear"></div>
                  <li class="float-right">
                      <span><i class="fas fa-mobile-alt"></i></span>
                      <span>40</span>
                  </li>
                  <li class="float-left">                    
                      <span>19</span>
                      <span class="spanicon"><i class="fas fa-laptop-code"></i></span>
                  </li>
                  <div class="clear"></div>
              </ul>
          </div>
          <div>
              <p>
                  <span><i class="fas fa-user-check"></i></span>
                  <span>بيانات المستلم</span>
              </p>
             
              <ul class="list-unstyled">
                  <li class="float-right">
                      <span><i class="fa fa-user"></i></span>
                      <span>احمد علي </span>
                  </li>
                  <li class="float-left">      
                      <span>ahmed_ali@yahoo.com</span>
                      <span class="spanicon"><i class="fa fa-envelope"></i></span>
                  </li>
                  <div class="clear"></div>
                  <li class="float-right">
                      <span><i class="fa fa-phone"></i></span>
                      <span>+9951231232123</span>
                  </li>
                  <li class="float-left">                    
                      <span>السعوديه , جده</span>
                      <span class="spanicon"><i class="fa fa-building"></i></span>
                  </li>
                  <div class="clear"></div>
                  <li class="float-right">
                      <span><i class="fas fa-mobile-alt"></i></span>
                      <span>40</span>
                  </li>
                  <li class="float-left">                    
                      <span>19</span>
                      <span class="spanicon"><i class="fas fa-laptop-code"></i></span>
                  </li>
                  <div class="clear"></div>
              </ul>
          </div>
          <div>
              <p>
                   <span><i class="fa fa-envelope-open"></i></span>
                    <span>محتوي الرساله</span>
              </p>
              <ul class="list-unstyled">
                  <li class="float-right">
                      <span><i class="fa fa-envelope-square"></i></span>
                      <span>الشرقيه حي الخليج السابع بجوار مطعم الأنوار</span>
                  </li>
                  <div class="clear"></div>
              </ul>
          </div>
          <div>
              <p>
                  <span><i class="fa fa-calendar-check"></i></span>
                  <span>بيانات الرساله</span>
              </p>
              <ul class="list-unstyled">
                  <li class="float-right">
                      <span><i class="fa fa-info"></i></span>
                      <span>رساله موقع</span>
                  </li>
                  <li class="float-left">             
                      <span class="spanicon">12/02/2020</span>
                      <span class="spanicon"><i class="fa fa-calendar-alt"></i></span>
                  </li>
                  <div class="clear"></div>
                  
              </ul>
            </div>
          
          <button class="btn btn-primary print-btn form-control">طباعه</button>
      </div>
  </div>
  </div>
  @endsection
