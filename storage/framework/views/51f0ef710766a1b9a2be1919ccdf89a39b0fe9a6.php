<body>
    <div class="body-data">
    <div class="navbar">
        <div class="container-normal container">
            <span><i class="las la-bars"></i></span>
            <div class="logo right">
                <img src="<?php echo e(asset('/images/icons/logo.png')); ?>">
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
                        <?php if(auth()->guard()->check()): ?>
                        <li class="normal_li_nav"><a href="/profile/default">اﻟﻤﻠﻒ اﻟﺸﺨﺼﻲ</a></li>
                        <li class="normal_li_nav"><a href="/search/">البحث عن صديق</a></li>
                        <?php endif; ?>
                        <li class="normal_li_nav"><a href="/policy">سياسه الخوصيه</a></li>
                        <li class="normal_li_nav"><a href="/whous">من نحن</a></li>
                        <li class="normal_li_nav"><a href="/usage-agreement">اتفاقيه الاستخدام</a></li>
                        <li class="normal_li_nav"><a href="/contactus">تواصل معنا</a></li>
                        <li class="articles_nav">
                            <a>مقالاتنا</a>
                            <ul>
                                
                                <?php $__currentLoopData = \App\categories::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a><?php echo e($cat->name); ?></a>
                                    <?php
                                      $sub = \App\article_type::where('category_id','=',$cat->id)->get();
                                      if($sub != null){
                                    ?>
                                    <span><i class="las la-chevron-left"></i></span>
                                    <ul>
                                    <?php $__currentLoopData = $sub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                        <li>
                                            <a href="/articles/<?php echo e(urlencode($cat->name)); ?>/<?php echo e(urlencode($type->name)); ?>"><?php echo e($type->name); ?></a>
                                            <?php
                                              $articles = \App\articles::where('article_type_id','=',$type->id)->get();
                                              if($articles != null){
                                                  echo '<span class="xs-hide"><i class="las la-chevron-left"></i></span><ul>';
                                           ?>
                                            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                 <li>
                                                     <a href="/articles/<?php echo e(urlencode($cat->name)); ?>/<?php echo e(urlencode($type->name)); ?>/<?php echo e(urlencode($article->name)); ?>"><?php echo e($article->name); ?></a>
                                                 </li>                                             
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           <?php
                                           echo '</ul>';
                                              }
                                            ?>
                                            
                                           
                                        </li>
                                    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <?php
                                      }
                                    ?>
                                    
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="/articles/all">جميع المقالات</a><span><i class="las la-chevron-left"></i></span></li>
                            </ul>
                        </li>
                        <?php if(auth()->check()): ?>
                            <?php if(auth()->user()->type == 'admin'): ?><li><a href="/controlpanel">لوحه التحكم</a></li><?php endif; ?>
                           <li><a href="/auth/logout">تسجيل خروج</a></li>
                            <li class="nav-icon">
                            <span><i class="fa fa-circle"></i></span>
                            <img src="<?php echo e(asset('images/icons/notification.png')); ?>">
                            <ul>
                                <?php $__currentLoopData = \App\notifications::where('receiver_id','=',auth()->user()->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noti): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a>
                                        <img src="<?php echo e(asset('/images/icons/logo.png')); ?>">
                                        <div>
                                            <p><?php echo e($noti->text); ?></p>
                                            <p><span><?php echo e($noti->created_at); ?></span></p>
                                        </div>
                                    </a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a>
                                        <img src="<?php echo e(asset('/images/icons/logo.png')); ?>">
                                        <div>
                                            <p>مبروك لانضمامك معنا في مجتمع اللقاء الاول</p>
                                            <p><span><?php echo e(auth()->user()->created_at); ?></span></p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                      
                        <?php else: ?>
                            
                         <li class="nav-icon">
                             <a href="/auth/register" class="btn btn-primary">انضم الينا</a>
                         </li>
                         <li class="nav-icon">
                              <a href="/auth/login" class="btn">دخول</a>
                         </li>
                        <?php endif; ?>
                       
                        
                        
                        
                    </ul>
                   </div>
                    
                </div>             
            </div>
        </div>
    </div>
	<?php /**PATH E:\first-meeting.net\resources\views/startbody.blade.php ENDPATH**/ ?>