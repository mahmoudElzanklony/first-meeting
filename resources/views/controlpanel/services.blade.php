@extends('indexadmin')
  @section('content')
    <div class="control-panel services">
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
                            <img src="{{asset('images/icons/bag-gray.png')}}">
                            <span>أنواع الخدمه</span>                    
                            <span><i class="fa fa-plus"></i></span>
                            <span>اضافه</span>
                        </div>
                        @project_plan_status_filter
                        
                        <div class="last_services">
                            <div class="row">
                                <!--
                                <div class="service">
                                    <p><span>اسم الخدمه</span></p>
                                    <p><span>السعر الافتراضي</span></p>
                                </div>
                                -->
                                @for($i = 0; $i<12; $i++)
                                <div class="col-md-4 col-xs-12">
                                    <div class="service">
                                        <p><span>حفل زواج</span></p>
                                        <p>
                                            <span>1500</span>
                                            <span>SAR</span>
                                        </p>
                                        <p>
                                            <span> #{{$i}} </span>
                                            <a class="delete-icon"><i class="fa fa-times"></i></a>
                                        </p>
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
  <div class="adding-process small">
          <header>
              <span><i class="fa fa-plus"></i></span>
              <span>خدمه جديده</span>
              <span><i class="fa fa-times"></i></span>
          </header>
          <div class="body-data">
              <form>
                  <div class="form-group-half">
                      <span class="input-icon-right"><i class="fa fa-info-circle"></i></span>
                      <input class="form-control" name="name" placeholder="اسم الخدمه">
                  </div>
                 <div class="form-group-half">
                      <span class="input-icon-right"><i class="fa fa-dollar-sign"></i></span>
                      <input class="form-control" type="number" name="price" placeholder="السعر الافتراضي">
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group">
                       <textarea class="form-control" name="conditions" placeholder="تفاصيل الخدمه المنفذه   والشروط الفنيه لتنفيذها"></textarea>
                  </div>
                
                  <div class="form-group">
                      <input class="form-control btn btn-primary" type="submit" name="save" value="حفظ">
                  </div>
              </form>
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
                  <span>بيانات الخدمه</span>
              </p>
              <form>
                  <div class="form-group-half">
                      <span class="input-icon-right"><i class="fa fa-tag"></i></span>
                      <input class="form-control" type="text" value="حفل زواج" />
                  </div>
                  <div class="form-group-half">
                      <span class="input-icon-right"><i class="fa fa-dollar-sign"></i></span>
                      <input class="form-control" type="number" value="20" />
                  </div>
                  <div class="form-group">
                       <textarea class="form-control" name="conditions" value="تفاصيل الخدمه المنفذه   والشروط الفنيه للتنفيذ هي .... و ..."></textarea>
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
