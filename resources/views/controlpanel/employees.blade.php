@extends('indexadmin')
  @section('content')
    <div class="control-panel employees">
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
                            <img src="{{asset('images/icons/employee.png')}}">
                            <span>الموظفين</span>                    
                            <span><i class="fa fa-plus"></i></span>
                            <span>اضافه</span>
                        </div>
                        <div class="project-plan-status-filter">
                            <form>
                                <span><i class="fas fa-filter"></i></span>
                                <div>
                                    <input class="form-control" placeholder="البحث برقم ID">
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
                                                <span>احمد علي</span>
                                            </p>
                                            <p>
                                                <span class="preview-icon"><i class="fas fa-expand"></i></span>
                                                <span class="edit-icon"><i class="fa fa-edit"></i></span>
                                                <a href="#" class="delete-icon"><span><i class="fa fa-times"></i></span></a>
                                            </p>
                                        </div>
                                        <div class="order-body">
                                            <p>
                                                <span><i class="fa fa-envelope"></i></span>
                                                <span>ahmed_ali@yahoo.com</span>
                                            </p>
                                            <p>
                                                <span><i class="fa fa-calendar"></i></span>
                                                <span>16/6/2015</span>
                                            </p>
                                            <div class="clear"></div>
                                            <p>
                                                <span>خطه العمل  , رجال الكاميرا , الخدمات  , الاعدادت , الطلبات , الرئيسيه </span>
                                                
                                            </p>
                                             
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
    <div class="adding-process">
          <header>
              <span><i class="fa fa-plus"></i></span>
              <span>موظف جديد</span>
              <span><i class="fa fa-times"></i></span>
          </header>
          <div class="body-data">
              <form method="post">
                  <div class="form-group-half">
                      <span class="input-icon-right"><i class="fa fa-user-circle"></i></span>
                      <input class="form-control" name="name" placeholder="اسم الموظف ">
                  </div>
                  <div class="form-group-half">
                      <span>ذكر</span><input type="radio" name="gender" value="male" />
                      <span>انثي</span><input type="radio" name="gender" value="female" />
                  </div>
                  <div class="clear"></div>
                  <div class="form-group-half phone">
                      <span class="input-icon-right"><i class="fa fa-phone"></i></span>
                      <input class="form-control" name="phone" placeholder="+996">
                  </div>
                  <div class="form-group-half">
                      <span class="input-icon-right"><i class="fa fa-envelope"></i></span>
                      <input class="form-control" name="email" placeholder="sj1241@gmail.com">
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group">
                      <span class="input-icon-right"><i class="fa fa-building"></i></span>
                      <select class="form-control" name="country_city">
                          <option value="">المنطقه الدوله</option>
                          <option>السعوديه , مكه</option>
                          <option>السعوديه , الرياض</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <div class="upload gray-bk">
                            <span>رفع صوره شخصيه</span>
                            <span class="input-icon-right"><i class="fa fa-image"></i></span>
                            <input type="file">
                      </div>
                  </div>
                  
                  <div class="clearfix"></div>
                  <div class="form-group">
                      <input type="text" value="" id="tags-input" data-role="tagsinput"  class="form-control" placeholder="حدد الصلاحيات"/>
                  </div>
                  
                  <div class="clearfix"></div>
                  <div class="form-group">
                      <textarea class="form-control" name="address" placeholder="العنوان"></textarea>
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
                  <span><i class="fa fa-user"></i></span>
                  <span>بيانات الموظف</span>
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
                  <span><i class="fa fa-check-circle"></i></span>
                  <span>الصفحات التي يديرها</span>
              </p>
              <ul class="list-unstyled">
                  <li class="float-right">
                      <span><i class="fa fa-check-circle"></i></span>
                      <span>الطلبات</span>
                  </li>
                  <li class="float-left">                    
                      <span>التقيمات والردود</span>
                      <span class="spanicon"><i class="fa fa-check-circle"></i></span>
                  </li>
                  <div class="clear"></div>
                  <li class="float-right">
                      <span><i class="fa fa-check-circle"></i></span>
                      <span>الاعمال</span>
                  </li>
                  <li class="float-left">                    
                      <span>رجال الكاميرا</span>
                      <span class="spanicon"><i class="fa fa-check-circle"></i></span>
                  </li>
                  <div class="clear"></div>
                  
              </ul>
          </div>
          
          
      </div>
  </div>
  </div>
  <div class="outpage-bk-gray">
  <div class="preview-box listed-ordered box_fixed edit-box">
      <span class="close_box"><i class="fa fa-times"></i></span>
      
      <div class="content">
          <div>
              <p>
                  <span><i class="fa fa-user"></i></span>
                  <span>بيانات الموظف</span>
              </p>
              <form>
                  <div class="form-group-half">
                      <span class="input-icon-right"><i class="fa fa-user"></i></span>
                      <input class="form-control" type="text" value="احمد علي " />
                  </div>
                  <div class="form-group-half">
                      <span class="input-icon-right"><i class="fa fa-envelope"></i></span>
                      <input class="form-control" type="email" value="ahmed_ali@yahoo.com" />
                  </div>
                  <div class="form-group-half">
                      <span class="input-icon-right"><i class="fa fa-phone"></i></span>
                      <input class="form-control" type="text" value="9951231232123" />
                  </div>
                  <div class="form-group-half">
                      <span class="input-icon-right"><i class="fa fa-building"></i></span>
                      <input class="form-control" type="text" value="جده , السعوديه" />
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
                  <span>الصفحات التي يديرها</span>
              </p>
              <form>
                  <div class="inputs-container">
                  <div class="form-group-half">
                      <span class="input-icon-right icon-removing-input red"><i class="fa fa-times-circle"></i></span>
                      <select class="form-control">
                          <option value="">اختر الصفحه المناسبة للاداره</option>
                          <option>الأعمال</option>
                          <option selected>التقيمات والردود</option>
                          <option>الافتراضيه</option>
                          <option>كشف المستحقات</option>
                          <option>رجال الكاميرا</option>
                      </select>
                  </div>
                  <div class="form-group-half">
                      <span class="input-icon-right icon-removing-input red"><i class="fa fa-times-circle"></i></span>
                      <select class="form-control">
                          <option value="">اختر الصفحه المناسبة للاداره</option>
                          <option>الأعمال</option>
                          <option>التقيمات والردود</option>
                          <option>الافتراضيه</option>
                          <option>كشف المستحقات</option>
                          <option selected>رجال الكاميرا</option>
                      </select>
                  </div>
                  <div class="form-group-half">
                      <span class="input-icon-right icon-removing-input red"><i class="fa fa-times-circle"></i></span>
                      <select class="form-control">
                          <option value="">اختر الصفحه المناسبة للاداره</option>
                          <option selected>الأعمال</option>
                          <option>التقيمات والردود</option>
                          <option>الافتراضيه</option>
                          <option>كشف المستحقات</option>
                          <option>رجال الكاميرا</option>
                      </select>
                  </div>
                  <div class="form-group-half">
                      <span class="input-icon-right icon-removing-input red"><i class="fa fa-times-circle"></i></span>
                      <select class="form-control">
                          <option value="">اختر الصفحه المناسبة للاداره</option>
                          <option>الأعمال</option>
                          <option>التقيمات والردود</option>
                          <option>الافتراضيه</option>
                          <option selected>كشف المستحقات</option>
                          <option>رجال الكاميرا</option>
                      </select>
                  </div>
                </div>
                  <div class="form-group">
                      <input class="btn btn-info form-control adding_selection" adding="selection_pages" type="button" value="اضافه حقل ادخال جديد">
                  </div>
                  
                  <div class="clear"></div>
                  <div class="form-group">
                      <input class="form-control btn btn-success" type="submit" value="حفظ">
                  </div>
              </form>    
              
          </div>
          
            
          
      </div>
  </div>
  </div>
  @endsection
