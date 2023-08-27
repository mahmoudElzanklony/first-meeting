    <?php $__env->startSection('content'); ?>
    <div class="search">
        <div class="video">
            <img src="<?php echo e(asset('videos/chatting.gif')); ?>" alt="ابحث عن صديق لك لارسال رساله له ">
        </div>
        <div class="container">
            <form method="post">
              
              <input class="form-control" name="user_info" placeholder="ابحث عن اسم صديقك هنا   ">
              <?php echo e(csrf_field()); ?>

              <input class="btn btn-success" type="submit" value="بحث">
              <div class="clear"></div>
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="search-filter">
                        <div class="filter" itemscope itemtype="https://schema.org/City">
                            <p>
                                <span>الدوله</span>
                                <span><i class="las la-caret-square-down"></i></span>
                            </p>
                            <div>
                            <?php $__currentLoopData = $all_countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="country">
                                    <p>
                                        <span><?php echo e($country->name); ?></span>
                                        <span><i class="las la-caret-square-down"></i></span>
                                    </p>
                                    <?php if($country->id == \App\cities::find(auth()->user()->city_id)->country_id): ?>
                                        <?php
                                            $class = "open"
                                        ?>
                                    <?php else: ?> 
                                        <?php
                                            $class = "none"
                                        ?>
                                    <?php endif; ?>
                                    <div class="<?php echo e($class); ?>">
                                        <?php $__currentLoopData = \App\cities::where('country_id','=',$country->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="form-group">
                                            <input  type="radio" name='city_id' value="<?php echo e($city->id); ?>">
                                            <span itemprop="address"><?php echo e($city->name); ?></span>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                            
                                
                            </div>
                            
                        </div>
                       
                        <div class="filter">
                            <p>
                                <span>النوع</span>
                                <span><i class="las la-caret-square-down"></i></span>
                            </p>
                            <div itemscope itemtype="https://schema.org/gender">
                                <div class="form-group">
                                    <input  type="radio" name='gender' value="male">
                                    <span itemtype="GenderType">ذكر</span>
                                </div>
                                <div class="form-group">
                                    <input  type="radio" name='gender' value="female">
                                    <span itemtype="GenderType">انثي</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-sm-8 col-xs-12">
                    <div class="persons">
                    <?php $__currentLoopData = $all_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3 col-sm-6 col-xs-12" id="<?php echo e($user->id); ?>">
                            <div class="person" itemscope itemtype="https://schema.org/person">
                                <div class="image">
                                    <span id="<?php echo e($user->id); ?>" class="<?php if(\App\favourite::where('user_id','=', auth()->user()->id)->where('favourite_id','=',$user->id)->count() > 0): ?>fav <?php endif; ?>">
                                        <i class="<?php if(empty(\App\favourite::where('user_id','=', auth()->user()->id)->where('favourite_id','=',$user->id)->count() > 0)): ?>lar la-heart <?php else: ?> las la-heart <?php endif; ?>"></i></span>
                                    <img src="<?php echo e(asset('images/users')); ?>/<?php echo e($user->image); ?>">
                                    <button><span><?php echo e(\App\messages::where('sender_id','=',auth()->user()->id)->where('receiver_id','=',$user->id)->count()); ?></span><span>من الرسائل ارسلتها له</span></button>
                                </div>
                                <p class="text-center" itemprop="name"><?php echo e($user->username); ?></p>
                                <p itemprop="description" title="<?php echo e($user->short_note); ?>"><?php echo e($user->short_note); ?></p>
                                <button><a href="/sending/<?php echo e($user->id); ?>">ارسل رساله</a></button>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    </div>
                    <div class="clear"></div>
                    <div class="see-more" id="">
                        <a>
                            <span><i class="fas fa-chevron-down"></i></span>
                            <span>اظهار المزيد</span>
                        </a>
                    </div>
                </div>
            </div>
         </form>
        </div>
    </div>
    <div class="bk-layout">
    <div class="fav-person">
        <img src="<?php echo e(asset('images/gif/heart.gif')); ?>">
        <p class="text-center">تم اضافته الي المفضله</p>
        
    </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\first-meeting.com\resources\views/search/default.blade.php ENDPATH**/ ?>