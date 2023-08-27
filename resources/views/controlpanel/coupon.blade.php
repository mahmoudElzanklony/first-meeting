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
                            <img src="{{asset('images/icons/coupon.png')}}">
                            <span>الكوبونات</span>                    
                            <span><i class="fa fa-plus"></i></span>
                            <span>اضافه</span>
                        </div>
                        <div class="project-plan-status-filter">
                            <form>
                                <div>
                                    <input class="form-control" placeholder="عضويه الكوبون">
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
                                                <span>حفل زواج</span>
                                            </p>
                                            <p>
                                                <span class="edit-icon"><i class="fa fa-edit"></i></span>
                                                <a href="#" class="delete-icon"><span><i class="fa fa-times"></i></span></a>
                                                <span>#{{$i}}</span>
                                            </p>
                                        </div>
                                        <div class="order-body">
                                            <p>
                                                <span><i class="fa fa-tag"></i></span>
                                                <span>2020copounfree</span>
                                            </p>
                                            <div class="clear"></div>
                                            <p class="float-right">
                                                <span><i class="fa fa-percent"></i></span>
                                                <span>10</span>
                                            </p>
                                            <p class="float-left">
                                                <span><i class="fas fa-calendar"></i></span>
                                                <span>12/12/2020</span>
                                                
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
  <div class="adding-process">
          <header>
              <span><i class="fa fa-plus"></i></span>
              <span>كوبون جديد</span>
              <span><i class="fa fa-times"></i></span>
          </header>
          <div class="body-data">
              <form>
                  <div class="form-group">
                      <span class="input-icon-right"><i class="fa fa-info-circle"></i></span>
                      <input class="form-control" name="name" placeholder="الرقم المميز للخدمه" required>
                  </div>
                  <div class="clear"></div>
                  <div class="form-group-half tag">
                      <span class="input-icon-right"><i class="fa fa-phone"></i></span>
                      <input class="form-control" name="phone" placeholder="الرقم السري للكوبون">
                  </div>
                  <div class="form-group-half">
                      <span class="input-icon-right"><i class="fa fa-percent"></i></span>
                      <input class="form-control" type="number" placeholder="نسبه الخصم">
                  </div>
                  <div class="clearfix"></div>
                  
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
                  <span><i class="fa fa-tag"></i></span>
                  <span>بيانات الكوبون</span>
              </p>
              <form>
                  <div class="form-group">
                      <span class="input-icon-right"><i class="fa fa-info-circle"></i></span>
                      <input class="form-control" name="name" placeholder="20" required>
                  </div>
                  <div class="clear"></div>
                  <div class="form-group-half tag">
                      <span class="input-icon-right"><i class="fa fa-phone"></i></span>
                      <input class="form-control" name="phone" placeholder="312312312">
                  </div>
                  <div class="form-group-half">
                      <span class="input-icon-right"><i class="fa fa-percent"></i></span>
                      <input class="form-control" type="number" placeholder="10">
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
