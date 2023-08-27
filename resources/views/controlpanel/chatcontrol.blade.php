
  @extends('indexadmin')
  @section('content')
    <div class="control-panel chatcontrol">
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
                            <img src="{{asset('images/icons/chat.png')}}">
                            <span>مراقبة الرسائل</span>                    
                           
                        </div>
                        <div class="project-plan-status-filter">
                            <form>
                                
                                <div>
                                    <input class="form-control" placeholder="من فضلك ادخل رقم الطلب">
                                </div>
                                <div>
                                    <div class="form-group">
                                        <input class="custom-switch" type="checkbox"  name="public_posting">
                                        <span class="span_after_switch">حاله الرساله</span>
                                    </div>                                </div>
                                <div>
                                    <input type="image" src="{{asset("images/icons/search.png")}}">
                                </div>
                            </form>
                       </div>
                        
                        
                        <div class="video-details notifications chat">
    
                            <div class="header"></div>
                                <div class="content">
                                    <div class="data-box text-center">
                                        <div class="data">         
                                            <img src="{{asset('/images/icons/chat.png')}}">
                                            <span>مراقبه الرسائل</span>
                                        </div>
                                        
                                    </div>
                                    <div class="info">

                                        <div class="details">
                                            <div class="row">
                                                
                                                <div class="col-md-12 col-xs-12">
                                                       <div class="message-content">
                                                           <div class="message-header">
                                                               
                                                               <div class="float-right">
                                                                   <img src="{{asset('/images/users/client.jpg')}}">
                                                                   <span>خالد بدر</span>
                                                                   <span>العميل</span>
                                                               </div>
                                                               <div class="float-left">
                                                                   <img src="{{asset('/images/users/user.png')}}">
                                                                   <span>خالد علي</span>
                                                                   <span>المصور</span>
                                                               </div>
                                                               
                                                           </div>
                                                           <div class="message-body">
                                                               <div class="message-sender">
                                                                   <div class="msg">
                                                                       <p>
                                                                           <span>السلام عليكم </span>
                                                                           <span>2020-05-21 20:57:18</span>
                                                                       </p>
                                                                   </div>
                                                               </div>
                                                               <div class="clear-msg-fix"></div>
                                                               <div class="message-sender">
                                                                   <div class="msg">
                                                                       <p>
                                                                           <span>شكرا لك لتكليفي لتصوير مطعك</span>
                                                                           <span>2020-05-21 20:57:21</span>
                                                                       </p>
                                                                   </div>
                                                               </div>
                                                               <div class="clear-msg-fix"></div>
                                                               <div class="message-reciver">
                                                                   <div class="msg">
                                                                       <p>
                                                                           <span>اتمني ان يكون بأفضل جوده</span>
                                                                           <span>2020-05-21 21:01:36</span>
                                                                       </p>
                                                                   </div>
                                                               </div>
                                                               <div class="clear-msg-fix"></div> 
                                                               <div class="message-sender">
                                                                   <div class="msg">
                                                                       <p>
                                                                           <span>لا تقلق فأنا مدرب منذ سنوات عديده في هذا المجال</span>
                                                                           <span>2020-05-21 20:57:21</span>
                                                                       </p>
                                                                   </div>
                                                               </div>
                                                               <div class="clear-msg-fix"></div>
                                                               <div class="message-reciver">
                                                                   <div class="msg">
                                                                       <p>
                                                                           <span>سنري ذلك وان كان عملك جيدا ستعمل معي دوما فيما بعد</span>
                                                                           <span>2020-05-21 21:01:36</span>
                                                                       </p>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="clear"></div>
                                                       <div class="message-form" style="display: none;">
                                                           <form method="post" id="">
                                                                <input type="image" name="send" src="/public/icons/chat-send.png">
                                                                <input type="text" name="message" placeholder="قمت بكتابه ما تريد لصديقك" required>
                                                            </form>
                                                       </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                        </div>
                    </div>
                  
                </div>
            </div>
            
        </div>
    </div>
   
 
  
  @endsection

