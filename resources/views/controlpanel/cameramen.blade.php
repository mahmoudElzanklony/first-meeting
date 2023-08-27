@extends('indexadmin')
  @section('content')
  <?php
    $days_names = [
          'Sat'=>'السبت',
          'Sun'=>'الأحد',
          'Mon'=>'الأثنين',
          'Tue'=>'الثلاثاء',
          'Wed'=>'الأربعاء',
          'Thu'=>'الخميس',
          'Fri'=>'الجمعه'
          ];
      $list=array();
      $month =  date('m');
      $year =  date('Y');
     
      
?>
    <div class="control-panel camermenInfo">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-xs-12">
                    @admin_navbar
                </div>
                <div class="col-lg-10 col-md-8 col-xs-12">
                    <div class="admin-area">
                            <p>منطقة التحكم </p>
                             <div class="shape">
                                 <div></div>
                                 <div></div>
                                 <div></div>
                             </div>
                        </div>
                    <div class="data-content camera-men-data">
                        
                        <div class="page-title">
                            <img src="{{asset('images/icons/cameraman.png')}}">
                            <span>رجال الكاميرا</span>                    
                            <span><i class="fa fa-plus"></i></span>
                            <span>اضافه</span>
                        </div>
                        <div class="overflow_hidden">
                            <p class="float-left">
                                <span>ارسال رساله</span>
                                <span><i class="fa fa-envelope"></i></span>
                            </p>
                        </div>
                        <div class="project-plan-status-filter">
                            <form>
                                <span><i class="fas fa-filter"></i></span>
                                <div>
                                    <input class="form-control" placeholder="عضويه المصور">
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
                                        <option value="">الخدمه</option>
                                        <option value="1">خدمه 1</option>
                                        <option value="2">خدمه 2</option>
                                        <option value="3">خدمه 3</option>
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
                                    <div class="order camera-man-info">
                                        <div class="order-header">
                                            <p>                                           
                                                <span>احمد علي</span>
                                            </p>
                                            <p>
                                                <span class="preview-icon"><i class="fas fa-expand"></i></span>
                                                <span><i class="fa fa-edit"></i></span>
                                                <span class="calendar-icon-edit"><i class="fa fa-calendar-check"></i></span>
                                                <span class="mail-icon-send"><i class="fa fa-envelope"></i></span>
                                                <a class="delete-icon"><span><i class="fa fa-times"></i></span></a>
                                                <span class="box-number">#12</span>
                                            </p>
                                        </div>
                                        <div class="order-body">
                                            <p>
                                                <span><i class="fa fa-envelope"></i></span>
                                                <span>ahmed_ali@yahoo.com</span>
                                            </p>
                                            <div class="clear"></div>
                                            <p>
                                                <span><i class="fa fa-phone"></i></span>
                                                <span>+966 12312312312312</span>
                                            </p>
                                            <div class="clear"></div>
                                            <p>
                                                <span><i class="fa fa-video"></i></span>
                                                <span>Nikon d7200 , Nikon d 5120</span>
                                            </p>
                                            <div class="clear"></div>
                                            <p>
                                                <span><i class="fas fa-calendar"></i></span>
                                                <span>12/12/2020 5:60</span>
                                            </p>                                            
                                            <div class="clear"></div>
                                            <hr>
                                            <p class="float-left">                                               
                                                <span>محمد علي</span>
                                                <span><i class="fas fa-edit"></i></span>
                                            </p>
                                            <p class="float-right">
                                                <span><i class="fas fa-calendar"></i></span>
                                                <span>12/12/2020 5:60</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                @endfor
                            </div>
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
  <div class="outpage-bk-gray">
  <div class="adding-process add_newcamera_man_info">
          <header>
              <span><i class="fa fa-plus"></i></span>
              <span>رجل جديد</span>
              <span><i class="fa fa-times"></i></span>
          </header>
          <div class="body-data">
              <form method="post" action="{{ route('cameraman.adding')}}">
                  {{csrf_field()}}
                  <div class="clear"></div>
                  <div class="form-group-half">
                      <span class="input-icon-right"><i class="fa fa-user-circle"></i></span>
                      <input class="form-control" name="first_name" placeholder="الاسم الاول" required>
                  </div>
                  <div class="form-group-half">
                      <span class="input-icon-right"><i class="fa fa-user-circle"></i></span>
                      <input class="form-control" name="last_name" placeholder="الاسم الاخير" required>
                  </div>
                  <div class="form-group-half">
                      <span class="input-icon-right"><i class="fa fa-envelope"></i></span>
                      <input class="form-control" name="email" placeholder="sj1241@gmail.com" required>
                  </div>
                  <div class="form-group-half">
                      <span>ذكر</span><input type="radio" name="gender" value="male" />
                      <span>انثي</span><input type="radio" name="gender" value="female" />
                  </div>
                  <div class="clear"></div><div class="clear"></div>
                  <div class="form-group-half">
                      <img class="input-icon-right" src="{{asset('images/icons/shield_check.png')}}">
                      <select name="level" class="form-control" >
                          <option value="">اختر المستوي</option>
                          @foreach($levels as $level)
                          <option value="{{$level->id}}">{{$level->name}}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group-half">
                      <span class="input-icon-right"><i class="fa fa-phone"></i></span>
                      <input class="form-control" name="phone" placeholder="+996" required>
                  </div>
                  <div class="clear"></div>
                  
                  <div class="form-group">
                      <span class="input-icon-right"><i class="fa fa-location-arrow"></i></span>
                      <input  class="form-control" name="address" placeholder="عنوان السكن" required> 
                  </div>
                  <div class="append_new_inputs">
                      <div class="form-group-half">
                        <span class="input-icon-right icon-removing-input red"><i class="fa fa-times-circle"></i> </span>
                        <select name="cities[]" class="form-control" >
                            <option value="">مدينه العمل</option>
                            @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
                       </div>
                     
                  </div>
                   <div class="clear"></div>
                  <div class="form-group">
                      <button adding="adding_selection_camera_man_city" class="form-control btn btn-primary adding_selection">اضافه حقل جديد</button>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group">
                      <div class="upload gray-bk">
                            <span>رفع اعمال الصور</span>
                            <span class="input-icon-right"><i class="fa fa-image"></i></span>
                            <input name="images[]" type="file" multiple>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="upload gray-bk">
                            <span>رفع اعمال الفديو</span>
                            <span class="input-icon-right"><i class="fa fa-video"></i></span>
                            <input name="videos[]" type="file" multiple>
                      </div>
                  </div>
                  
                  <div class="form-group">
                      <textarea class="form-control" name="tools" placeholder="وصف المعدات"></textarea>
                  </div>
                  
                  <div class="form-group">
                      <input type="text" name="services" id="skill" class="form-control" placeholder="ادخل الخدمات" />
                  </div>
                 
                  <!--
                  <div class="detect-price">
                      
                  </div>
                  -->
                  <div class="clearfix"></div>
                  <div class="form-group">
                      <textarea class="form-control" name="resume" placeholder="وصف مختصر للسيره المهنيه"></textarea>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                        <span class="percentage">0%</span>
                    </div>
                  </div>
                  <div class="form-group">
                      <input class="form-control btn btn-primary" type="submit" name="save" value="حفظ">
                  </div>
              </form>
          </div>
      
  </div>
  </div>
  
  
  
  <div class="outpage-bk-gray">
  <div class="preview-box showing listed-ordered box_fixed">
      <span class="close_box"><i class="fa fa-times"></i></span>
     
      <div class="content">
          <div>
              <p>
                  <span><i class="fa fa-camera"></i></span>
                  <span>بيانات المصور</span>
              </p>
              <ul class="list-unstyled">
                  <li class="float-right">
                      <span><i class="fa fa-user"></i></span>
                      <span>سعد علي </span>
                  </li>
                  <li class="float-left">                    
                      <span>saad_ali@yahoo.com</span>
                      <span class="spanicon"><i class="fa fa-envelope"></i></span>
                  </li>
                  <div class="clear"></div>
                  <li class="float-right">
                      <span><i class="fa fa-phone"></i></span>
                      <span>+9951123231232123</span>
                  </li>
                  <li class="float-left">                    
                      <span>السعوديه , جده</span>
                      <span class="spanicon"><i class="fa fa-building"></i></span>
                  </li>
                  <div class="clear"></div>
                  <li class="float-right">
                      <span><i class="fa fa-level-up-alt"></i></span>
                      <span>متقدم</span>
                  </li>
                  <li class="float-left">                
                      <span>متوسط تقيمات <span>5 نجوم</span></span>
                      <span class="spanicon"><i class="fa fa-star"></i></span>
                  </li>
                  <div class="clear"></div>
              </ul>
          </div>
          <div>
              <p>
                   <span><i class="fa fa-tags"></i></span>
                    <span>خدمات المصور</span>
              </p>
              <ul class="list-unstyled">
                  <li class="float-right">
                      <span><i class="fa fa-tag"></i></span>
                      <span>تصوير مطاعم</span>
                  </li>
                  <li class="float-left">            
                      <span>تصوير سيارات</span>
                      <span class="spanicon"><i class="fa fa-tag"></i></span>
                  </li>
                  <div class="clear"></div>
                  <li class="float-right">
                      <span><i class="fa fa-tag"></i></span>
                      <span>تصوير منتجات</span>
                  </li>
                  <li class="float-left">            
                      <span>تصوير زفافات</span>
                      <span class="spanicon"><i class="fa fa-tag"></i></span>
                  </li>
                  <div class="clear"></div>
              </ul>
          </div>
          <div>
              <p>
                  <span><i class="fa fa-building"></i></span>
                  <span>المدن التي يعمل بها</span>
              </p>
              <ul class="list-unstyled">
                  <li class="float-right">
                      <span><i class="fa fa-building"></i></span>
                      <span>مكه</span>
                  </li>
                  <li class="float-left">                               
                      <span>المدينه</span>
                      <span class="spanicon"><i class="fa fa-building"></i></span>
                  </li>
                  <div class="clear"></div>
                  <li class="float-right">
                      <span><i class="fa fa-building"></i></span>
                      <span>الرياض</span>
                  </li>
                  <li class="float-left">   
                      <span>جده</span>
                      <span class="spanicon"><i class="fa fa-building"></i></span>     
                  </li>
                  <div class="clear"></div>
              </ul>
            </div>
          <div>
             <p>
                 <span><i class="fa fa-star"></i></span>
                 <span>متوسط التقيمات</span>
             </p>
              <ul class="list-unstyled">
                  <li class="float-right">
                      <span><i class="fa fa-star"></i></span>
                      <span>4.2</span>
                  </li>
                 
                  <div class="clear"></div>
              </ul>
          </div>
          <div>
             <p>
                 <span><i class="fa fa-toggle-on"></i></span>
                 <span>حاله المصور</span>
             </p>
              <ul class="list-unstyled">
                  <li class="float-right">
                      <span><i class="fa fa-check-circle"></i></span>
                      <span>يعمل</span>
                  </li>
                 
                  <div class="clear"></div>
              </ul>
          </div>
      </div>
  </div>
  </div>
  
  
  <div class="outpage-bk-gray">
  <div class="preview-box listed-ordered box_fixed edit-box public-info">
      <span class="close_box"><i class="fa fa-times"></i></span>
      
      <div class="content">
          
          <div>
              <p>
                  <span><i class="fa fa-camera"></i></span>
                  <span>بيانات المصور</span>
                  <span>/</span>
                  <span>اعمال المصور</span>
              </p>
              <form>
                  <div class="form-group-half">
                      <span class="input-icon-right"><i class="fa fa-user"></i></span>
                      <select class="form-control">
                          <option>المصور</option>
                          <option>عبد الله احمد</option>
                          <option selected>سعد علي</option>
                          <option>حسن عبد الله</option>
                      </select>
                  </div>
                  <div class="form-group-half">
                      <span class="input-icon-right"><i class="fa fa-envelope"></i></span>
                      <input class="form-control" type="email" value="saad_ali@yahoo.com" />
                  </div>
                  <div class="form-group-half">
                      <span class="input-icon-right"><i class="fa fa-phone"></i></span>
                      <input class="form-control" type="text" value="9951231232123" />
                  </div>
                  <div class="form-group-half">
                      <span class="input-icon-right"><i class="fa fa-building"></i></span>
                      <input class="form-control" type="text" value="جده , السعوديه" />
                  </div>
                  <div class="form-group-half">
                      <span class="input-icon-right"><i class="fa fa-level-up-alt"></i></span>
                      <select class="form-control">
                          <option>المستوي</option>
                          <option>مبتدا</option>
                          <option>متوسط</option>
                          <option selected>متفدم</option>
                      </select>
                  </div>
                  <div class="clear"></div>
                  <div class="form-group">
                      <input class="form-control btn btn-success" type="submit" value="حفظ">
                  </div>
              </form>    
              
          </div>
          <div>
              <p>
                   <span><i class="fa fa-tags"></i></span>
                    <span>خدمات المصور</span>
              </p>
              <form>
                  <div>
                    <div class="form-group-half">
                        <span class="input-icon-right icon-removing-input red"><i class="fa fa-times-circle"></i></span>
                        <select class="form-control">
                            <option>اختر الخدمه المناسبه</option>
                            <option>تصوير مطاعم</option>
                            <option>تصوير منتجات</option>
                            <option>تصوير حفل زفاف</option>
                            <option selected>تصوير سباقات</option>
                        </select>
                    </div>
                    <div class="form-group-half">
                        <span class="input-icon-right icon-removing-input red"><i class="fa fa-times-circle"></i></span>
                        <select class="form-control">
                            <option>اختر الخدمه المناسبه</option>
                            <option>تصوير مطاعم</option>
                            <option>تصوير منتجات</option>
                            <option selected>تصوير حفل زفاف</option>
                            <option>تصوير سباقات</option>
                        </select>
                    </div>
                    <div class="form-group-half">
                        <span class="input-icon-right icon-removing-input red"><i class="fa fa-times-circle"></i></span>
                        <select class="form-control">
                            <option>اختر الخدمه المناسبه</option>
                            <option>تصوير مطاعم</option>
                            <option selected>تصوير منتجات</option>
                            <option>تصوير حفل زفاف</option>
                            <option>تصوير سباقات</option>
                        </select>
                    </div>
                    <div class="form-group-half">
                      <span class="input-icon-right icon-removing-input red"><i class="fa fa-times-circle"></i></span>
                       <select class="form-control">
                          <option>اختر الخدمه المناسبه</option>
                          <option selected>تصوير مطاعم</option>
                          <option>تصوير منتجات</option>
                          <option>تصوير حفل زفاف</option>
                          <option >تصوير سباقات</option>
                      </select>        
                  </div>
                  </div>
                  <div class="clear"></div>
                  <div class="form-group">
                      <button class="form-control btn btn-primary adding_selection_camera_men">اضافه حقل جديد</button>
                  </div>
                  <div class="form-group">
                      <input class="form-control btn btn-success" type="submit" value="حفظ">
                  </div>
              </form>
              
          </div>   
            <div>
                <p>
                  <span><i class="fa fa-building"></i></span>
                  <span>ايام العمل</span>
                </p>
                <form>
                    <div class="append_new_inputs">
                    <div class="form-group-half">
                         <span class="input-icon-right icon-removing-input red"><i class="fa fa-times-circle"></i></span>
                         <select class="form-control" name="cities">
                             <option>اختر المدينه التي يعمل بها المصور</option>
                             <option value="1" selected>جده</option>
                             <option value="2">الرياض</option>
                             <option value="3">مكه</option>
                             <option value="4">المدينه</option>
                         </select>
                    </div>
                    <div class="form-group-half">
                        <span class="input-icon-right icon-removing-input red"><i class="fa fa-times-circle"></i></span>
                         <select class="form-control" name="cities">
                             <option>اختر المدينه التي يعمل بها المصور</option>
                             <option value="1">جده</option>
                             <option value="2" selected>الرياض</option>
                             <option value="3">مكه</option>
                             <option value="4">المدينه</option>
                         </select>                    </div>
                    <div class="form-group-half">
                         <span class="input-icon-right icon-removing-input red"><i class="fa fa-times-circle"></i></span>
                         <select class="form-control" name="cities">
                             <option>اختر المدينه التي يعمل بها المصور</option>
                             <option value="1">جده</option>
                             <option value="2">الرياض</option>
                             <option value="3" selected>مكه</option>
                             <option value="4">المدينه</option>
                         </select>
                    </div>
                    <div class="form-group-half">
                        <span class="input-icon-right icon-removing-input red"><i class="fa fa-times-circle"></i></span>
                        <select class="form-control" name="cities">
                             <option>اختر المدينه التي يعمل بها المصور</option>
                             <option value="1">جده</option>
                             <option value="2">الرياض</option>
                             <option value="3" >مكه</option>
                             <option value="4" selected>المدينه</option>
                        </select>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="form-group">
                      <button adding="adding_selection_camera_man_city" class="form-control btn btn-primary adding_selection">اضافه حقل جديد</button>
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-success" type="submit" value="حفظ">
                </div>
            </form>
          </div>
          
          <div>
                <p>
                  <span><i class="fa fa-check-square"></i></span>
                  <span>حاله المصور</span>
                </p>
                <form>
                    <div class="form-group">
                      <input class="custom-switch" type="checkbox"  name="public_posting">
                      <span class="span_after_switch">حاله العمل</span>
                  </div> 
                   
                <div class="form-group">
                    <input class="form-control btn btn-success" type="submit" value="حفظ">
                </div>
            </form>
          </div>
          
      </div>
  </div>
  </div>
  
  
  <div class="outpage-bk-gray">
  <div class="preview-box listed-ordered box_fixed edit-box works-info">
      <span class="close_box"><i class="fa fa-times"></i></span>
      
      <div class="content">
          
         
          <div>
                <p>
                  <span><i class="fa fa-check-square"></i></span>
                  <span>الاعمال السابقه</span>
                </p>
                <form>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group">
                                  <div class="take-part-of">
                                      <img src="https://source.unsplash.com/random/1000x400">
                                  </div>
                                  <input type="file">
                                  <button class="form-control btn btn-danger">مسح</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="take-part-of">
                                  <img src="https://source.unsplash.com/random/1000x500">
                                </div>
                                  <input type="file">
                                  <button class="form-control btn btn-danger">مسح</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="take-part-of">
                                  <img src="https://source.unsplash.com/random/1000x600">
                                </div>
                                  <input type="file">
                                  <button class="form-control btn btn-danger">مسح</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="take-part-of">
                                  <video controls contextmenu  >
                                    <source src="{{asset('videos/2.mp4')}}" type="video/mp4" />
                                  </video>
                                </div>
                                  <input type="file">
                                  <button class="form-control btn btn-danger">مسح</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="take-part-of">
                                    <video controls contextmenu  >
                                    <source  src="{{asset('videos/1.mp4')}}" type="video/mp4" />
                                  </video>
                                </div>
                                  <input type="file">
                                  <button class="form-control btn btn-danger">مسح</button>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="form-group">
                          <input class="btn btn-primary form-control" type="submit" name="send" value="حفظ">
                     </div>
                  </div>
                </form>
          </div>
          
      </div>
  </div>
  </div>
  
  
  
  <div class="outpage-bk-gray">
    <div class="sending-email">
          <header>
              <span><i class="fa fa-plus"></i></span>
              <span>رساله جديده</span>
              <span><i class="fa fa-times"></i></span>
          </header>
          <div class="body-data">
              <form>
                  <div class="form-group">
                      <span class="input-icon-right"><i class="fa fa-info-circle"></i></span>
                      <input class="form-control" placeholder="عنوان الرساله" required>
                  </div>
                  <div class="form-group">
                      <textarea class="form-control" name="camera_type" placeholder="ارفق رسالتك هنا"></textarea>
                  </div>
                  
                 
                  <div class="form-group">
                      <div class="upload gray-bk">
                            <span>ارفارق صوره</span>
                            <span class="input-icon-right"><i class="fa fa-image"></i></span>
                            <input type="file">
                      </div>
                  </div>
                  <div class="form-group">
                      <p class="float-right"><input type="checkbox" name="email" required><span>الي الايميل</span></p>
                      <p class="float-right"><input type="checkbox" name="notification"><span>الي الموقع</span></p>
                  </div>
                  <div class="form-group">
                      <input class="form-control btn btn-primary" type="submit" name="save" value="ارسال">
                  </div>
              </form>
          </div>
      
  </div>
  </div>
  
  <div class="outpage-bk-gray cp">
      <div class="client_order">
          <form>
              {{ csrf_field() }}
                    <p>
                        
                        <select name="month">
                            <option value="">من فضلك اختر الشهر</option>
                            @for($i = 1; $i<13; $i++)
                            <option value="{{$i}}">{{$i}}</option>
                            @endfor 
                        </select>
                        <select name="year">
                            <option value="">من فضلك اختر السنه</option>
                            @for($i = 0; $i<13; $i++)
                            <option value="<?php echo intval(date('Y-m-d')) + $i ?>"><?php echo intval(date('Y-m-d')) + $i ?></option>
                            @endfor 
                        </select>
                    </p>
              
              <div class="form-group">
                   <div class="calendar">
                        <div class="calendar-header">
                            <p>
                                <span class="fa fa-calendar-alt"></span>
                                <span class="red">حدد ايام ايقاف المصور</span>
                            </p>
                        </div>
                        <div class="calendar-body">
                            <table class="text-center">
                                <thead>
                                    <tr>
                                        @foreach($days_names as $dayEnglish => $dayArabic)
                                        <td>{{$dayArabic}}</td>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                   @include('profile.calendar')
                                </tbody>
                            </table>
                            <div class="notes-dates">
                                <p>
                                    <span><i class="fa fa-circle"></i></span>
                                    <span>متاح</span>
                                </p>
                                <p>
                                    <span><i class="fa fa-circle"></i></span>
                                    <span>غير متاح</span>
                                </p>
                                <p>
                                    <span><i class="fa fa-circle"></i></span>
                                    <span>محدد</span>
                                </p>
                                <p>
                                    <span><i class="fa fa-circle"></i></span>
                                    <span>محجوز من الاداره</span>
                                </p>
                            </div>
                        </div>
                    </div>
              </div>
               <div class="form-group">
                    <input class="btn btn-primary form-control" type="submit" name="send" value="تأكيد">
               </div>
          </form>
      </div>
  </div>
  <div class="outpage-bk-gray">
       <div class="_big_photo_showing">
        <div class="photo">
         <img src="https://source.unsplash.com/random/1000x400">
       </div>
     </div>
    </div>
  @endsection
