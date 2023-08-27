@extends('indexadmin')
  @section('content')
    <div class="control-panel clientsdata">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-xs-12">
                    @admin_navbar
                </div>
                <div class="col-lg-10 col-md-8 col-xs-12">
                    <div class="data-content">
                        <div class="admin-area">
                            <p>منطقة التحكم </p>
                             <div class="shape">
                                 <div></div>
                                 <div></div>
                                 <div></div>
                             </div>
                        </div>
                        <div class="page-title">
                            <img src="{{asset('images/icons/client_files.png')}}">
                            <span>ملفات العملاء</span>                    
                            
                        </div>
                        <div class="project-plan-status-filter">
                            <form>
                                <div>
                                    <input class="form-control" placeholder="عضويه العميل">
                                </div>
                                
                                <div>
                                    <select class="form-control">
                                        <option value="">المدينه</option>
                                        <option value="1">مكه</option>
                                        <option value="2">الرياض</option>
                                        <option value="3">جده</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <select class="form-control">
                                        <option value="">الجنس</option>
                                        <option value="1">رجال</option>
                                        <option value="2">نساء</option>
                                    </select>
                                </div>
                               
                              
                                
                                <div>
                                    <input type="image" src="{{asset('images/icons/search.png')}}">
                                </div>
                            </form>
                       </div>
                        
                        <div class="last_orders">
                            <div class="row">
                                @for($i = 0; $i<12; $i++)
                                <div class="col-md-4 col-xs-12">
                                    <div class="order">
                                        <div class="order-header">
                                            <p>
                                                <span>محمد علي</span>
                                            </p>
                                            <p>
                                                <span class="preview-icon"><i class="fas fa-expand"></i></span>
                                                <a href="#" class="delete-icon"><span><i class="fa fa-times"></i></span></a>
                                                <span>#{{$i}}</span>
                                            </p>
                                        </div>
                                        <div class="order-body">
                                            <p>
                                                <span><i class="fa fa-envelope"></i></span>
                                                <span>mohamed_ali@yahoo.com</span>
                                            </p>
                                            <div class="clear"></div>
                                            <p class="float-right">        
                                                <span><i class="fa fa-phone"></i></span>
                                                <span>0512312312312</span>
                                            </p>
                                            <p class="float-left">
                                                <span><i class="fas fa-calendar"></i></span>
                                                <span>12/12/2020</span>
                                                
                                            </p>
                                            <div class="clear"></div>
                                            <p>        
                                                <span><i class="fa fa-location-arrow"></i></span>
                                                <span>الزقازيق حي مبارك بجوار كليه حاسبات</span>
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
  <div class="preview-box showing listed-ordered box_fixed">
      <span class="close_box"><i class="fa fa-times"></i></span>
     
      <div class="content">
          <div>
              <p>
                  <span><i class="fa fa-user"></i></span>
                  <span>بيانات العميل</span>
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
              </ul>
          </div>
          
          <div>
              <p>
                  <span><i class="fa fa-dollar-sign"></i></span>
                  <span>عدد الرسائل التي قام بارسالها</span>
              </p>
              <ul class="list-unstyled">
                  <li class="float-right">
                      <span><i class="fa fa-envelope"></i></span>
                      <span>500</span>
                  </li>
                  <li class="float-left">
                      <span>140</span>
                      <span class="spanicon"><i class="fa fa-phone"></i></span>
                  </li>
                  <div class="clear"></div>
              </ul>
            </div>
          
      </div>
  </div>
  </div>
 
  @endsection
