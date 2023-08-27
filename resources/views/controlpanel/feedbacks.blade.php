@extends('indexadmin')
  @section('content')
    <div class="control-panel">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-xs-12">
                    @admin_navbar
                </div>
                 <div class="col-lg-10 col-md-8 col-xs-12">
                   
               <div class="content feedbacks">
                  
        <!-- ************************ start shape ************************ -->
                <div class="admin-area">
                    <p>منطقة التحكم </p>
                     <div class="shape">
                         <div></div>
                         <div></div>
                         <div></div>
                     </div>
                </div>
                <div class="page-title">
                    <img src="{{asset('images/icons/contactus.png')}}">
                    <span>شكاوي العملاء</span>                    
                    
                </div>
                 <div class="project-plan-status-filter">
                            <form>
                                <span class="search-icon-slide"><i class="fas fa-filter"></i></span>
                                <div>
                                    <input class="form-control" placeholder="البحث برقم  ID" />
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
                                    <input type="image" src="{{asset("images/icons/search.png")}}">
                                </div>
                            </form>
                 </div>
                 <div class="row">
                     <div class="col-md-4 col-xs-12">
                    <div class="box-content-shadow">
                      <p> 
                       <img src="{{asset('images/icons/chat.png')}}">
                       <span>#65978</span>
                       <img src="{{asset('images/icons/profile.png')}}">
                       <span>صلاح أحمد </span>
                        <span>#12</span>
                        <span><i class="fas fa-trash-alt"></i></span>
                        <span class="edit-icon"><i class="fa fa-edit"></i></span>
                        <span class="preview-icon"><i class="fas fa-expand"></i></span>
                      </p>
                      <div>
                        <p class="client"><span>نص الشكوي كم محرره العميل ..</span></p>
                        <p class="support"><span>شكرا لك سنقوم بحل المشكله قريبا نعتذر لك عما حدث</span></p>
                        <p class="client"><span>نص الشكوي كم محرره العميل ..</span></p>
                        <p class="support"><span>شكرا لك سنقوم بحل المشكله قريبا نعتذر لك عما حدث هي شويه مشاكل بتحصل غصب عننا لكن نوعدك في اقرب وقت نحلها ليك </span></p>
                        <p class="client"><span>نص الشكوي كم محرره العميل ..</span></p>
                        <p class="support"><span>شكرا لك سنقوم بحل المشكله قريبا نعتذر لك عما حدث</span></p>
                        <p class="client"><span>نص الشكوي كم محرره العميل ..</span></p>
                        <p class="support"><span>شكرا لك سنقوم بحل المشكله قريبا نعتذر لك عما حدث هي شويه مشاكل بتحصل غصب عننا لكن نوعدك في اقرب وقت نحلها ليك </span></p>
                      </div>
                        
                      <p class="border"> 
                          <span><i class="fas fa-user"></i></span>
                          <span>عطر العود</span>
                          <span><i class="far fa-calendar-check"></i></span>
                          <span> 17jan2019 4:30م</span>        
                      </p>
                          
                    
                   </div>
                     </div>
                 @for($i= 0; $i<5; $i++)
                 <div class="col-md-4 col-xs-12">
                    <div class="box-content-shadow">
                      <p> 
                       <img src="{{asset('images/icons/chat.png')}}">
                       <span>#65978</span>
                       <img src="{{asset('images/icons/profile.png')}}">
                       <span>#654 صلاح أحمد </span>
                        <span>#12</span>
                        <span><i class="fas fa-trash-alt"></i></span>
                        <span class="edit-icon"><i class="fa fa-edit"></i></span>
                        <span class="preview-icon"><i class="fas fa-expand"></i></span>
                      </p>
                      <div>
                        <p class="client"><span>نص الشكوي كم محرره العميل ..</span></p>
                        <p class="support"><span>شكرا لك سنقوم بحل المشكله قريبا</span></p>
                      </div>
                        
                      <p class="border"> 
                          <span><i class="fas fa-user"></i></span>
                          <span>عطر العود</span>
                          <span><i class="far fa-calendar-check"></i></span>
                          <span> 17jan2019 4:30م</span>        
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
   <div class="outpage-bk-gray">
    <div class="preview-box showing listed-ordered box_fixed">
      <span class="close_box"><i class="fa fa-times"></i></span>
      <div class="content">
          <div>
             <p>
                 <span><i class="fa fa-comment"></i></span>
                 <span>شكوي العميل</span>
             </p>
            <p class="client"><span>نص الشكوي كم محرره العميل ..</span></p>
            <p class="support"><span>شكرا لك سنقوم بحل المشكله قريبا نعتذر لك عما حدث</span></p>
            <p class="client"><span>نص الشكوي كم محرره العميل ..</span></p>
            <p class="support"><span>شكرا لك سنقوم بحل المشكله قريبا نعتذر لك عما حدث هي شويه مشاكل بتحصل غصب عننا لكن نوعدك في اقرب وقت نحلها ليك </span></p>
            <p class="client"><span>نص الشكوي كم محرره العميل ..</span></p>
            <p class="support"><span>شكرا لك سنقوم بحل المشكله قريبا نعتذر لك عما حدث</span></p>
            <p class="client"><span>نص الشكوي كم محرره العميل ..</span></p>
            <p class="support"><span>شكرا لك سنقوم بحل المشكله قريبا نعتذر لك عما حدث هي شويه مشاكل بتحصل غصب عننا لكن نوعدك في اقرب وقت نحلها ليك </span></p>
          </div>
      </div>
    </div>
  </div>
  <div class="outpage-bk-gray">
  <div class="preview-box listed-ordered box_fixed edit-box">
          <div class="preview-box listed-ordered box_fixed edit-box">
      <span class="close_box"><i class="fa fa-times"></i></span>
      
      <div class="content">
          
          <div>
              <p>
                  <span><i class="fa fa-comment"></i></span>
                  <span>رد جديد</span>
              </p>
              <form>
                   <div class="form-group">
                       <textarea class="form-control" name="new_answer" placeholder="اضف رد جديد"></textarea>
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
   </div>
  @endsection
