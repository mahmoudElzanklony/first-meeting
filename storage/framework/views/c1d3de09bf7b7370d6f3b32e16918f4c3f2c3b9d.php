<?php $__env->startSection('content'); ?>


<div class="profile">
    <div class="video" itemscope>
        <img src="<?php echo e(asset('videos/view-profile.gif')); ?>" alt="عرض بياناتي الشخصيه">
    </div>
    <div class="container">
        <div class="profile-content">
            <div class="profile-header" itemscope itemtype="https://schema.org/ProfilePage">
                <ul class="list-unstyled tabs">
                    <li custom-data='personal-info' class="active" itemprop="about">
                        <span><i class="las la-address-card"></i></span>
                        <span>بياناتي</span>
                    </li>
                    <li custom-data='website-messages'>
                        <span><i class="las la-envelope-open"></i></span>
                        <span>الرسائل</span>
                    </li>
                    <li class="imgLi">
                        <img itemprop="primaryImageOfPage" src="<?php echo e(asset('images/users')); ?>/<?php echo e($personal_info->image); ?>">
                    </li>
                    <li custom-data='favourite'>
                        <span><i class="las la-heart"></i></span>
                        <span>المفضله</span>
                    </li>
                    <li custom-data='statics'>
                        <span><i class="las la-chart-bar"></i></span>
                        <span>احصائيات عامه</span>
                    </li>
                </ul>
            </div>
            <div class="profile-body">
                <div id='personal-info'>
                    <div itemscope itemtype="https://schema.org/Person">
                        <span>بياناتي الشخصيه</span>
                        <div class="clear"></div>
                        <p class="float-right">
                            <span><i class="las la-user"></i></span>
                            <span itemprop="name"><?php echo e($personal_info->username); ?></span>
                        </p>
                        <p class="float-left">
                            <span><i class="las la-map-marked-alt"></i></span>
                            <span itemprop="address"><?php echo e(\App\cities::find($personal_info->city_id)->name); ?></span>
                        </p>
                        <div class="clear"></div>
                        <p class="float-right">
                            <span><i class="las la-envelope"></i></span>
                            <span itemprop="email"><?php echo e($personal_info->email); ?></span>
                        </p>
                        <p class="float-left">
                            <span><i class="las la-mobile-alt"></i></span>
                            <span itemprop="telephone"><?php echo e($personal_info->phone); ?></span>
                        </p>
                        <div class="clear"></div>
                        <p class="float-right">
                            <span><i class="las la-pen-nib"></i></span>
                            <span><?php echo e($personal_info->short_note); ?></span>
                        </p>
                        <p class="float-left">
                            <span><i class="las la-transgender"></i></span>
                            <span itemprop="gender"><?php if($personal_info->gender == "female"): ?> انثي <?php else: ?> ذكر <?php endif; ?></span>
                        </p>
                        <div class="clear"></div>
                        <button class="btn btn-primary">
                            <span><i class="las la-edit"></i></span>
                            <span>تعديل</span>
                        </button>
                    </div>
                  
                    <div>
                        <span>مشاركه الملف الشخصي</span>
                        <div class="clear"></div>
                        <p>
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://first-meeting.com/sending/<?php echo e(auth()->user()->id); ?>"><img src='<?php echo e(asset("images/icons/facebook.png")); ?>'></a>
                            <a target="_blank" href="https://twitter.com/intent/tweet?url=https://first-meeting.com/sending/<?php echo e(auth()->user()->id); ?>"><img src='<?php echo e(asset("images/icons/twitter.png")); ?>'></a>
                            <a target="_blank" href="https://web.whatsapp.com/send?text=https://first-meeting.com/sending/<?php echo e(auth()->user()->id); ?>"><img style="width: 100px;margin-right: 0;" src='<?php echo e(asset("images/icons/whatsapp.png")); ?>'></a>
                        </p>
                    </div>
                    <div>
                        <span>حاله الحساب الشخصي</span>
                        <br>
                        <input type="checkbox" name="profile-status" class="check-special-mobshape <?php if(auth()->user()->active == 1): ?> checked <?php endif; ?>">
                        <span><?php if(auth()->user()->active == 1): ?> نشط <?php else: ?> معطل  <?php endif; ?></span>
                        <br>
                        <button class="btn btn-primary">
                            <span><i class="la la-chalkboard-teacher"></i></span>
                            <span>رؤيه التعليمات</span>
                        </button>
                    </div>
                </div>
                <div id='website-messages'>
                    <div class="header-tabs">
                        <ul class="list-unstyled tabs">
                            <li custom-data='inbox' class="active">
                                <span><i class="las la-inbox"></i></span>
                                <span>صندوق الوارد</span>
                            </li>
                            <li custom-data='sending-messages'>
                                <span><i class="las la-sms"></i></span>
                                <span>الرسائل المرسله</span>
                            </li>
                            
                            
                            <li custom-data='guess-who'>
                                <span><i class="las la-question"></i></span>
                                <span>خمن من</span>
                            </li>
                        </ul>
                    </header>
                    <div class="content">
                        
                    </div>
                </div>
                <div class="content">
                    <div id='inbox'>
                        <?php if(!empty($my_inbox)): ?>
                            <?php $__currentLoopData = $my_inbox; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div>
                                    <img src='<?php echo e(asset("images/icons/unkown-user.png")); ?>'>
                                    <div parent="<?php echo e($msg->id); ?>" itemscope itemtype="https://schema.org/Message">
                                        <p itemprop="description"><?php echo e($msg->message); ?></p>
                                        <?php if(!\App\expectations::where('message_id','=',$msg->id)->first()): ?>
                                        <button class="guess-who btn btn-success" id="<?php echo e($msg->id); ?>">
                                            <span><i class="las la-question"></i></span>
                                            <span>توقع من</span>
                                        </button>
                                        <?php endif; ?>
                                        <span itemprop="dateSent"><?php echo e($msg->created_at); ?></span>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        
                    </div>
                    <div id='sending-messages'>
                        <?php if(!empty($sending_messages)): ?>
                            <?php $__currentLoopData = $sending_messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div itemscope itemtype="https://schema.org/Message">
                                    <a target="_blank" href="/sending/<?php echo e($msg->receiver_info->id); ?>"><img src='<?php echo e(asset("images/users")); ?>/<?php echo e($msg->receiver_info->image); ?>'></a>
                                    <div>
                                        <p itemprop="sender"><?php echo e($msg->message); ?></p>

                                        <span itemprop="dateSent"><?php echo e($msg->created_at); ?></span>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        
                    </div>
                    <div id='guess-who'>
                        <?php if(!empty($expectations)): ?>
                            <?php $__currentLoopData = $expectations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div>
                                    <?php if($msg->user_id == auth()->user()->id): ?>
                                        <img src='<?php echo e(asset("images/icons/unkown-user.png")); ?>'>
                                    <?php else: ?> 
                                        <img  src='<?php echo e(asset("images/users")); ?>/<?php echo e($msg->sender_info->image); ?>'>
                                    <?php endif; ?>
                                    
                                    <div  itemscope itemtype="https://schema.org/Message">
                                        <p itemprop="description"><?php echo e($msg->message_info->message); ?></p>
                                          
                                        <span itemprop="dateSent"><?php echo e($msg->message_info->created_at); ?></span>
                                    </div>
                                    <div class="clear"></div>
                                    <div itemscope itemtype="https://schema.org/Person">
                                        <p>
                                            <span><i class="las la-user-circle"></i></span>
                                            <span itemprop="name"><?php echo e($msg->expected_name); ?></span>
                                        </p>
                                        <p>
                                            <?php if($msg->message_info->message_type == "web"): ?>
                                                <span><i class="las la-envelope"></i></span>
                                                <span>رساله للموقع</span>
                                            <?php else: ?>
                                                <span><i class="las la-mobile-alt"></i></span>
                                                <span>رساله للموبيل</span>
                                            <?php endif; ?>
                                        </p>
                                        
                                            <!-- user is sending expectation -->
                                            <?php if($msg->user_id == auth()->user()->id): ?>
                                                <?php if($msg->status == 2): ?>
                                                  <p>
                                                    <span><i class="las la-hourglass-end"></i></span>
                                                    <span>لم يتم الرد علي توقعك</span>
                                                  </p>
                                                <?php elseif($msg->status == 1): ?>
                                                  <p class="right">
                                                    <span><i class="las la-check-circle"></i></span>
                                                    <span>توقع صحيح</span>
                                                  </p>
                                                <?php else: ?>
                                                  <p class="wrong">
                                                    <span><i class="las la-times-circle"></i></span>
                                                    <span>توقع خاطئ</span>
                                                  </p>
                                                <?php endif; ?>
                                                <p></p>
                                            <?php else: ?>
                                                <?php if($msg->status == 2): ?>
                                                    <!-- user is received expectation -->
                                                    <p class="right" patent_id="<?php echo e($msg->id); ?>">
                                                        <button id="<?php echo e($msg->id); ?>">
                                                            <span><i class="las la-check-circle"></i></span>
                                                            <span>توقع صحيح</span>
                                                        </button>
                                                    </p>
                                                    <p class="wrong" patent_id="<?php echo e($msg->id); ?>">
                                                        <button id="<?php echo e($msg->id); ?>">
                                                            <span><i class="las la-times-circle"></i></span>
                                                            <span>توقع خاطئ</span>
                                                        </button>
                                                    </p>
                                                <?php elseif($msg->status == 1): ?>
                                                    <p class="right">
                                                        <span><i class="las la-check-circle"></i></span>
                                                        <span>توقع صحيح</span>
                                                    </p>
                                                    <p></p>
                                                <?php elseif($msg->status == 0): ?>
                                                    <p class="wrong">
                                                        <span><i class="las la-times-circle"></i></span>
                                                        <span>توقع خاطئ</span>
                                                    </p>
                                                    <p></p>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            
                                           
                                        
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        
                        
                    </div>
                </div>
            </div>
            <div id="favourite">
                    <div class="row">
                      <?php if(!empty($my_fav)): ?>
                        <?php $__currentLoopData = $my_fav; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="person">
                                <div class="image">
                                    <span id="<?php echo e($person->favourite_id); ?>"><i class="las la-heart"></i></span>
                                    <img src="<?php echo e(asset('images/users/')); ?>/<?php echo e($person->favourite_info->image); ?>">
                                    <button><span><?php echo e(\App\messages::where('sender_id','=',auth()->user()->id)->where('receiver_id','=',$person->favourite_id)->count()); ?></span><span>من الرسائل ارسلتها له</span></button>
                                </div>
                                <p class="text-center"><?php echo e($person->favourite_info->username); ?></p>
                                <p title="<?php echo e($person->favourite_info->short_note); ?>"><?php echo e($person->favourite_info->short_note); ?></p>
                                <button><a href="/sending/<?php echo e($person->favourite_id); ?>">ارسال رساله</a></button>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>
                    </div>
            </div>
            <div id='statics'>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="col-xs-12">
                            <div class="statics-info bk-sky">
                                <p>عدد الاشخاص في المفضله</p>
                                <p><?php echo e($my_fav->count()); ?></p>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="statics-info bk-red">
                                <p>رسائل الموقع الذي ارسلتها</p>
                                <p><?php echo e(\App\messages::where('sender_id','=', auth()->user()->id)->where('message_type','=','web')->count()); ?></p>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="statics-info bk-red">
                                <p>رسائل الموقع الذي استلمتها</p>
                                <p><?php echo e(\App\messages::where('receiver_id','=', auth()->user()->id)->where('message_type','=','web')->count()); ?></p>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="statics-info bk-green">
                                <p>رسائل الموبيل الذي ارسلتها</p>
                                <p><?php echo e(\App\messages::where('sender_id','=', auth()->user()->id)->where('message_type','=','mobile')->count()); ?></p>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="statics-info bk-green">
                                <p>رسائل الموبيل الذي استلمتها</p>
                                <p><?php echo e(\App\messages::where('receiver_id','=', auth()->user()->id)->where('message_type','=','mobile')->count()); ?></p>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="statics-info bk-purple">
                                <p>التوقعات الصحيحه</p>
                                <p><?php echo e(\App\expectations::where('user_id','=',auth()->user()->id)->where('status','=',1)->count()); ?></p>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="statics-info bk-purple">
                                <p>التوقعات الخاطئه</p>
                                <p><?php echo e(\App\expectations::where('user_id','=',auth()->user()->id)->where('status','=',0)->count()); ?></p>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="statics-info bk-orange">
                                <p>الرسائل المتبقيه للموبيل</p>
                                <p><?php echo e($personal_info->no_mobile_messages); ?></p>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="statics-info bk-orange">
                                <p>النفاط الحاليه</p>
                                <p><?php echo e($personal_info->no_points); ?></p>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="statics-info bk-blue">
                                <p>الباقه الحاليه لديك</p>
                                <p>
                                    <span>الباقه</span>
                                    <span>الافتراضيه</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="chart">
                            <canvas id="myChart"  height="335"></canvas>
                        </div>
                    </div>
                </div>
                
                <!--
                <button class="btn btn-primary">
                    <span><i class="las la-coins"></i></span>
                    <span>استبدال النقاط بالرسائل</span>
                </button>
                <button class="btn btn-primary">
                    <span><i class="las la-users"></i></span>
                    <span>ارسال نقاط للاصدقاء</span>
                </button>
                -->
            </div>
        </div>
    </div>
 </div>
</div>
<div class="bk-layout">
    <div class="inner-msg">
        <img src="<?php echo e(asset('images/gif/sad.gif')); ?>">
        <p>تم تعطيل الحساب الخاص بك وهذا يعني انك لا تستطيع استقبال اي رسائل من اي شخص كمان انك لن تظهر ف محرك البحث الخاص بالموقع</p>
        <button class="btn btn-primary closeBtn">افهم ذلك</button>
    </div>
</div>

<div class="bk-layout">
    <div class="guess-who">
        <img src="<?php echo e(asset('images/gif/who-are-you.gif')); ?>">
        <form method="post" name='guess-who'>
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="msg_id" value="">
            <div class="form-group">
                <label>توقع من هو صاحب الرساله</label>
                <input class="form-control" type="text" name="name" placeholder="اكتب الاسم الذي تتوقعه هنا .." required>
            </div>
            <div class="form-group">
                <input class="btn btn-success" type="submit" value="ارسال">
            </div>
        </form>
        
    </div>
</div>
<div class="bk-layout">
    <div class="edit-info">
        <img src="<?php echo e(asset('images/profile/profile_edit.gif')); ?>">
        <form method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <div class="clear"></div>
            <div class="form-group-half">
                <label>اسم المستخدم</label>
                <input class="form-control" type="text" name="username" placeholder="اسم المستخدم" value="<?php echo e($personal_info->username); ?>" required>
            </div>
            <div class="form-group-half">
                <label>كلمه المرور</label>
                <input class="form-control" type="password" name="password" placeholder="اترك كلمه المرور فارغه اذ لم تود تغييرها">
            </div>
            <div class="form-group-half">
                <label>مدينه السكن</label>
                <select class="form-control" name="city_id" required>
                    <option>من فضلك اختر مدينه السكن</option>
                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($city->id); ?>" <?php if($city->id == $personal_info->city_id): ?> selected <?php endif; ?>><?php echo e($city->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group-half">
                <label>نبذه مختصره</label>
                <input class="form-control" type="text" max="151" name="short_note" placeholder="نبذه مختصره" value="<?php echo e($personal_info->short_note); ?>" required>
            </div>
            <div class="clear"></div>
            <div class="form-group">
                <div class="upload gray-bk">
                      <span>رفع صوره شخصيه</span>
                      <span class="input-icon-right"><i class="fa fa-image"></i></span>
                      <input type="file" name="image">
                </div>
            </div>
            <div class="form-group">
                <input class="btn btn-success" type="submit" value="حفظ التغيرات">
            </div>
        </form>
        
    </div>
</div>



<div class="bk-layout">
    <div class="remove-fav">
        <img src="<?php echo e(asset('images/gif/broke-heart.gif')); ?>">
        <p>تم ازاله الشخص الذي اخترته من المفضله الخاصه لديك تتمني اداره الموقع عدم وجود مشاكل بينكما وبالسعاده دوما لك</p>
        <button class="btn btn-primary closeBtn">افهم ذلك</button>
    </div>
</div>

<div class="bk-layout">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
          <li data-target="#carousel-example-generic" data-slide-to="5"></li>
          <li data-target="#carousel-example-generic" data-slide-to="6"></li>
          <li data-target="#carousel-example-generic" data-slide-to="7"></li>
          <li data-target="#carousel-example-generic" data-slide-to="8"></li>
          
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
             <img src='<?php echo e(asset("images/profile/attention.gif")); ?>'>
             <p>يسعدنا انضمامك الي مجتمعنا اللقاء الاول ولكن هناك بعض المعلومات التي نود اخبارك بها لذا من فضلك الانتباه الينا </p>
              <button class="btn btn-success float-right">التالي</button>
              <button class="btn btn-primary float-left">السابق</button>
          </div>  
          <div class="item">
              <img src='<?php echo e(asset("images/profile/search.gif")); ?>'>
              <p>تستطيع الذهاب لصفحه البحث عن اصدقاء تبحث عن صديقك بالبحث عن اسمه او البحث عن اقرب الناس لي حيث سيظهر لك خريطه تبين لك من اهم اقرب الناس لك في المسافه الذين سجلو في الموقع</p>
              <button class="btn btn-success float-right">التالي</button>
              <button class="btn btn-primary float-left">السابق</button>
          </div>
          
          <div class="item">
              <img src='<?php echo e(asset("images/profile/chatting.gif")); ?>'>
              <p>بعد اختيار صديقك الذي تود ارسال له رساله تخبره عن اطباعك الاول قم بتحديد بطريقه الوصول هل هي رساله نصيه علي الهاتف ام رساله تصل الي حسابه في الموقع وتأكد ان في الحالتين ستكون هويتك مجهوله</p>
              <button class="btn btn-success float-right">التالي</button>
              <button class="btn btn-primary float-left">السابق</button>
          </div>
          <div class="item">
              <img src='<?php echo e(asset("images/profile/happy_msg.gif")); ?>'>
              <p>احرص دائما علي ان تكون رسالتك جميله لا يوجد بها كلمات مخله او كلمات قد تسبب الاذي النفسي للشخص الاخر وتأكد ان الكلمه الجميله تسعد الانسان فلا تبخل بها عن صديقك</p>
              <button class="btn btn-success float-right">التالي</button>
              <button class="btn btn-primary float-left">السابق</button>
          </div>
          <div class="item">
              <img src='<?php echo e(asset("images/profile/sad.gif")); ?>'>
              <p>في حاله ارسالك اي رسائل مؤذيه سنقوم بحظرك حتي وان كانت رسالتك كل ما بها حقيقه وتأكد دوما نحن مليئون بالعيوب وايامنا مليئه بالهموم لا تكن رسالتك سببا في زياده الهم </p>
              <button class="btn btn-success float-right">التالي</button>
              <button class="btn btn-primary float-left">السابق</button>
          </div>
          <div class="item">
              <img src='<?php echo e(asset("images/profile/gift.gif")); ?>'>
              <p>تستطيع توقع من هو صاحب الرساله ومن ثم الضغط علي ارسال وعلي الفور سيتم ارسال توقعك الي صاحب الرساله ومن ثم صاحب الرساله يحدد اذا كان توقعك صحيح فستكسب عشر نقاط وان كان خاطئا سيتم خصم منك عشر نقاط</p>
              <button class="btn btn-success float-right">التالي</button>
              <button class="btn btn-primary float-left">السابق</button>
          </div>
          <div class="item">
              <img src='<?php echo e(asset("images/profile/support2.gif")); ?>'>
              <p>من فضلك ان واجهك اي مشكله في اي شئ ما لا تتردد في التواصل مع الدعم الفني واخبارنا مشكلتك فنحن دوما في خدمتك</p>
              <button class="btn btn-success float-right">التالي</button>
              <button class="btn btn-primary float-left">السابق</button>
          </div>
          <div class="item">
              <img src='<?php echo e(asset("images/profile/ok.gif")); ?>'>
              <p>نشكرك لرؤيه التعليمات ونعتذر علي الاطاله نتمني اننا قد قمنا بشئ بسيط كان سببا في اسعادك ولا تنسي تنفيذ التعليمات والتعهد الذي تعدته عند التسجيل في الموقع</p>
              <button class="btn btn-success float-right">التالي</button>
              <button class="btn btn-primary float-left">السابق</button>
          </div>
          
         
        </div>

        
      </div>
</div>

<div class="note-top-left">
    <span class="close"><i class="las la-times-circle"></i></span>
    <p>تم ارسال اسم المتوقع بنجاح الي صاحب الرساله</p>
</div>
<script src='https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js'></script>
<script>
                    var element = document.getElementById('myChart'); if (typeof(element) != 'undefined' && element != null) {
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['المفضله', 'رسائل الموقع', 'رسائل الموبيل', 'التوقعات الصحيحه', 'النقاط', 'الرسائل المتبقيه للموبيل'],
            datasets: [{
                label: '# of Votes',
                data: [<?php echo $my_fav->count(); ?>,
                    <?php echo \App\messages::where('sender_id','=', auth()->user()->id)->count() ?>,
                     <?php echo \App\messages::where('sender_id','=', auth()->user()->id)->where('message_type','=','mobile')->count() ?>,
                     <?php echo \App\expectations::where('user_id','=',auth()->user()->id)->where('status','=',1)->count() ?>,
                     <?php echo $personal_info->no_points ?>,
                     <?php echo $personal_info->no_mobile_messages ?>],
                backgroundColor: [
                    '#03a9f459',
                    '#e74c3c4a',
                    '#00b89442',
                    '#8b698d40',
                    '#fef7e0',
                    '#3e50c752'
                ],
                borderColor: [
                    '#00BCD4',
                    '#E74C3C',
                    '#00B894',
                    '#a57ba8',
                    '#ffce2e',
                    '#3E50C7'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}
                </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\first-meeting.com\resources\views/profile/default.blade.php ENDPATH**/ ?>