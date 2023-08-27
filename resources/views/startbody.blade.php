<body>
    <div class="body-data">
    <div class="navbar">
        <div class="container-normal container">
            <span><i class="las la-bars"></i></span>
            <div class="logo right">
                <img src="{{asset('/images/icons/logo.png')}}">
            </div>
            <div>
                
                <div class="list">
                    <!-- 
                    <a href="#" class="btn btn-primary">انضم الينا</a>
                    <a href="#" class="btn">دخول</a>
                    -->
                    <div class="inner-list">
                    <ul class="list-unstyled">
                        <li class="normal_li_nav"><a href="/">اﻟﺮﺋﻴﺴﻴﻪ</a></li>
                        @auth()
                        <li class="normal_li_nav"><a href="/profile/default">اﻟﻤﻠﻒ اﻟﺸﺨﺼﻲ</a></li>
                        <li class="normal_li_nav"><a href="/search/">البحث عن صديق</a></li>
                        @endauth()
                        <li class="normal_li_nav"><a href="/policy">سياسه الخوصيه</a></li>
                        <li class="normal_li_nav"><a href="/whous">من نحن</a></li>
                        <li class="normal_li_nav"><a href="/usage-agreement">اتفاقيه الاستخدام</a></li>
                        <li class="normal_li_nav"><a href="/contactus">تواصل معنا</a></li>
                        <li class="articles_nav">
                            <a>مقالاتنا</a>
                            <ul>
                                
                                @foreach(\App\categories::all() as $cat)
                                <li>
                                    <a>{{$cat->name}}</a>
                                    <?php
                                      $sub = \App\article_type::where('category_id','=',$cat->id)->get();
                                      if($sub != null){
                                    ?>
                                    <span><i class="las la-chevron-left"></i></span>
                                    <ul>
                                    @foreach($sub as $type)
                                    
                                        <li>
                                            <a href="/articles/{{urlencode($cat->name)}}/{{urlencode($type->name)}}">{{$type->name}}</a>
                                            <?php
                                              $articles = \App\articles::where('article_type_id','=',$type->id)->get();
                                              if($articles != null){
                                                  echo '<span class="xs-hide"><i class="las la-chevron-left"></i></span><ul>';
                                           ?>
                                            @foreach($articles as $article)
                                                 <li>
                                                     <a href="/articles/{{urlencode($cat->name)}}/{{urlencode($type->name)}}/{{urlencode($article->name)}}">{{$article->name}}</a>
                                                 </li>                                             
                                            @endforeach
                                           <?php
                                           echo '</ul>';
                                              }
                                            ?>
                                            
                                           
                                        </li>
                                    
                                    @endforeach
                                    </ul>
                                    <?php
                                      }
                                    ?>
                                    
                                </li>
                                @endforeach
                                <li><a href="/articles/all">جميع المقالات</a><span><i class="las la-chevron-left"></i></span></li>
                            </ul>
                        </li>
                        @if(auth()->check())
                            @if(auth()->user()->type == 'admin')<li><a href="/controlpanel">لوحه التحكم</a></li>@endif
                           <li><a href="/auth/logout">تسجيل خروج</a></li>
                            <li class="nav-icon">
                            <span><i class="fa fa-circle"></i></span>
                            <img src="{{asset('images/icons/notification.png')}}">
                            <ul>
                                @foreach(\App\notifications::where('receiver_id','=',auth()->user()->id)->get() as $noti)
                                <li>
                                    <a>
                                        <img src="{{asset('/images/icons/logo.png')}}">
                                        <div>
                                            <p>{{$noti->text}}</p>
                                            <p><span>{{$noti->created_at}}</span></p>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                                <li>
                                    <a>
                                        <img src="{{asset('/images/icons/logo.png')}}">
                                        <div>
                                            <p>مبروك لانضمامك معنا في مجتمع اللقاء الاول</p>
                                            <p><span>{{auth()->user()->created_at}}</span></p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                      
                        @else
                            
                         <li class="nav-icon">
                             <a href="/auth/register" class="btn btn-primary">انضم الينا</a>
                         </li>
                         <li class="nav-icon">
                              <a href="/auth/login" class="btn">دخول</a>
                         </li>
                        @endif
                       
                        
                        
                        
                    </ul>
                   </div>
                    
                </div>             
            </div>
        </div>
    </div>
	