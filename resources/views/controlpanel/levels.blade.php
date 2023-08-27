@extends('indexadmin')
  @section('content')
    <div class="control-panel clientsdata levels">
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
                            <img src="{{asset('images/icons/levels.png')}}">
                            <span>المستويات</span>                    
                        </div>
                        <div class="project-plan-status-filter">
                            <form>
                                <span class="search-icon-slide"><i class="fas fa-filter"></i></span>
                                <div>
                                    <input class="form-control" placeholder="البحث برقم  ID" />
                                </div>
                                <div>
                                    <input class="form-control" placeholder="اسم الشخص" />
                                </div>
                                <div>
                                    <select class="form-control">
                                        <option value=""> المدينه</option>
                                        <option value="1">مكه</option>
                                        <option value="2">المدينه</option>
                                        <option value="3">دبي</option>
                                    </select>
                                </div>
                               <div>
                                    <select class="form-control">
                                        <option value=""> الجنس</option>
                                        <option value="1">رجال</option>
                                        <option value="2">نساء</option>
                                        <option value="3">الكل</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="image" src="{{asset('images/icons/search.png')}}">
                                </div>
                            </form>
                        </div>
                        <div class="last_orders levels_data">
                            <table class="table table-bordered table-hover table-responsive table-striped table-data tableExcel">
                                <thead>
                                    <tr>
                                        <td><span>الرقم المميز للمستخدم</span></td>
                                        <td><span>اسم المستخدم</span></td>
                                        <td><span>رسائل الموقع</span></td>
                                        <td><span>رسائل الموبيل</span></td>
                                        <td><span>التوقعات الصحيحه</span></td>
                                        <td><span>التوقعات الخاطئه</span></td>
                                        <td><span>النقاط الحاليه</span></td>
                                        <td><span>الانطباعات</span></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for($i = 0; $i<15; $i++)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>احمد علي</td>
                                        <td>20</td>
                                        <td>40</td>
                                        <td>60</td>
                                        <td>10</td>
                                        <td>50</td>
                                        <td>32</td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>

  @endsection
