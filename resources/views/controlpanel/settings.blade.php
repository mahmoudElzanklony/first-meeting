@extends('indexadmin')
  @section('content')
    <div class="control-panel settings">
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
                            <img src="{{asset('images/icons/settings.png')}}">
                            <span>المميزات</span>                    
                        </div>
                        
                        <div class="configs">
                            <div class="row">
                                <form>
                                    <div class="all_features">
                                        <div class="col-md-4 col-sm-6">
                                          <input class="custom-switch work" type="checkbox"  name="public_posting">
                                          <span class="span_after_switch">رسائل الموبيل</span>
                                        </div>
                                        @for($i= 0; $i<5; $i++)
                                          <div class="col-md-4 col-sm-6">
                                              <input class="custom-switch work" type="checkbox"  name="public_posting">
                                              <span class="span_after_switch">ارسال نقاط</span>
                                          </div>
                                        @endfor
                                        @for($i= 0; $i<4; $i++)
                                          <div class="col-md-4 col-sm-6">
                                              <input class="custom-switch work" type="checkbox"  name="public_posting">
                                              <span class="span_after_switch">التوقعات</span>
                                          </div>
                                        @endfor

                                    </div>
                                    <div class="clear"></div>
                                   

                                   <div class="form-group">
                                       <input class="form-control btn btn-primary" type="submit" name="save" value="حفظ">
                                   </div>
                                </form>
                            </div>
                        </div>
                       

                    </div>
                </div>
            </div>
        </div>
    </div>
  <div class="outpage-bk-gray settings">
    <div class="adding-process">
            <header>
                <span><i class="fa fa-plus"></i></span>
                <span></span>
                <span><i class="fa fa-times"></i></span>
            </header>
            <div class="body-data">
                <form>

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
  <div class="preview-box listed-ordered box_fixed edit-box">
      <span class="close_box"><i class="fa fa-times"></i></span>
      
      <div class="content">
          
          <div>
              <p>
                  <span><i class="fa fa-tags"></i></span>
                  <span>المدن المدعمه في الموقع</span>
              </p>
              <form>
                  <div class="inputs-container">
                  <div class="form-group-half">
                      <span class="input-icon-right icon-removing-input red"><i class="fa fa-times-circle"></i></span>
                      <input class="form-control" name="city" placeholder="من فضلك ادخل مدينه جديده">
                  </div>
                  
                </div>
                  <div class="form-group">
                      <input class="btn btn-info form-control adding_selection" adding="text_city" type="button" value="اضافه حقل ادخال جديد">
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
