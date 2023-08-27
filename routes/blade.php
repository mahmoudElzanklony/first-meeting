<?php

// admin navbar
Blade::directive('admin_navbar',function(){
    return '<div class="admin-nav">
                        <div class="logo">
                            <a href="/"><img src="{{asset("images/icons/logo.png")}}"></a>
                        </div>
                        <span><i class="fa fa-bars"></i></span>
                        <ul class="list-unstyled">
                            <li id="">
                                <a href="/controlpanel">
                                    <span>حاله النظام</span>
                                    <img src="{{asset("images/icons/load.png")}}">
                                </a>
                            </li>
                            <li id="feedbacks">
                                <a href="/controlpanel/feedbacks">
                                    <span>شكاوي العملاء</span>
                                    <img src="{{asset("images/icons/contactus.png")}}">
                                </a>
                            </li>
                            
                            <li id="requests"> 
                                <a href="/controlpanel/requests">
                                    <span>جميع الرسائل</span>
                                    <span class="notification-circle">5</span>
                                    <img src="{{asset("images/icons/chat.png")}}">
                                </a>
                            </li>
                            
                            
                            <li id="clientsdata">
                                <a href="/controlpanel/clientsdata">
                                    <span>ملفات العملاء</span>
                                    <img src="{{asset("images/icons/client_files.png")}}">
                                </a>
                            </li>
                           
                            <li id="levels">
                                <a href="/controlpanel/levels">
                                    <span>المستويات</span>
                                    <img src="{{asset("images/icons/levels.png")}}">
                                </a>
                            </li>
                             <li id="levels">
                                <a href="/controlpanel/articles">
                                    <span>المقالات</span>
                                    <img src="{{asset("images/icons/note.png")}}">
                                </a>
                            </li>
                            <li id="settings">
                                <a href="/controlpanel/settings">
                                    <span>المميزات</span>
                                    <img src="{{asset("images/icons/settings.png")}}">
                                </a>
                            </li>
                            <li id="profile">
                                <a href="/profile/client/2">
                                    <span>الملف الشخصي</span>
                                    <img src="{{asset("images/icons/profile.png")}}">
                                </a>
                            </li>
                        </ul>
                    </div>'; 
});

// filter admin
Blade::directive('project_plan_status_filter',function(){
   return '<div class="project-plan-status-filter">
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
                                    <select class="form-control">
                                        <option value="">الجنس</option>
                                        <option value="1">رجال</option>
                                        <option value="2">نساء</option>
                                        <option value="3">الكل</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="image" src="{{asset("images/icons/search.png")}}">
                                </div>
                            </form></form>
                       </div>'; 
});
