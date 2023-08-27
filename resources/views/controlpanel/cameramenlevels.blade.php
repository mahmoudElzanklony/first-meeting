@extends('indexadmin')
  @section('content')
    <div class="control-panel money cameramenlevels">
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
                            <img src="{{asset('images/icons/camera.png')}}">
                            <span>مستويات رجال الكاميرا</span>                    
                            
                        </div>
                        <div class="project-plan-status-filter">
                            <form>
                                <div>
                                    <select class="form-control">
                                        <option value="">المستوي</option>
                                        <option value="1">الاول</option>
                                        <option value="2">الثاني</option>
                                        <option value="3">الثالث</option>
                                    </select>
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
                                    <select class="form-control">
                                        <option value="">الخدمه</option>
                                        <option value="1">حفل زفاف</option>
                                        <option value="2">تصوير مطاعم</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <select class="form-control">
                                        <option value="">التقييم</option>
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="1">5</option>
                                    </select>
                                </div>
                                
                               <div>
                                    <select class="form-control">
                                        <option value="">الفتره الزمنيه</option>
                                        <option value="1">اسبوي</option>
                                        <option value="2">شهري</option>
                                        <option value="3">سنوي</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <input type="image" src="{{asset('images/icons/search.png')}}">
                                </div>
                            </form>
                       </div>
                        <form class="formOuterTable">
                            
                            <div>  
                                <button class="btn print-btn  gray-bk" title="طباعه">
                                    <span><i class="fa fa-print"></i></span>
                                    <span>طباعه</span>                               
                                </button>
                            </div>
                           
                            <div class="clear"></div>
                        <div class="table-data">
                            <table id="example" class="tableExcel table table-bordered table-hover table-responsive text-center">
                                <thead>
                                    <tr>
                                        <td>الترتيب</td>
                                        <td>المصور</td>
                                        <td>النقاط</td>
                                        <td>التقييم</td>
                                        
                                    </tr>
                                </thead>   
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>احمد علي</td>
                                        <td>210</td>
                                        <td>4/5</td>
                                    </tr>
                                    @for($i = 0; $i<3; $i++)
                                    <tr>
                                        <td>{{$i+2}}</td>
                                        <td>سعد جمال</td>
                                        <td>110</td>
                                        <td>3/5</td>
                                    </tr>
                                    @endfor
                                    <tr>
                                        <td>5</td>
                                        <td>علي محمود</td>
                                        <td>60</td>
                                        <td>3/5</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>عبد الله سعد</td>
                                        <td>110</td>
                                        <td>2/5</td>
                                    </tr>
                                </tbody>
                                
                            </table>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
  
  @endsection
