<?php $__env->startSection('content'); ?>
<div class="sending">
    <div class="video">
        <img src="<?php echo e(asset('videos/send-msg.gif')); ?>" alt="ارسال رساله لصديقك المقرب لاخباره عن انطباعك عنه">
    </div>
    <div class="container">
        <div class="content" itemscope itemtype="https://schema.org/person">
            <div class="image">
               <img src='<?php echo e(asset("images/users")); ?>/<?php echo e($info->image); ?>'>
            
            </div>
            <p class="text-center bold" itemprop="name"><?php echo e($info->username); ?></p>
            <form method="post">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="اخبر صديقك عن انطباعك عنه في اول لقاء به" required></textarea>
                    <p><span>0</span></p>
                </div>
                <p>الرساله تصل عن طريق استخدام</p>
                <?php if($mobile_msg_status == 1): ?>
                <div class="form-group-half">
                    <span><i class="las la-mobile-alt"></i></span>
                    <input type="radio" class="special-radio btn-success" name="type" value="mobile" required>          
                </div>
                <div class="form-group-half">
                    <span><i class="las la-envelope-open"></i></span>
                    <input type="radio" class="special-radio btn-primary" name="type" value="web" required>
                </div>
                <div class="clear"></div>
                <?php else: ?> 
                <p class="alert alert-info">رسائل الموبايل غير مفعله في الوقت الحالي هنا في هذه الدوله سيتم تفعيلها في اقرب وقت</p>
                <div class="clear"></div>
                <div class="form-group-half">
                    <span style="right:50px;"><i class="las la-envelope-open"></i></span>
                    <input style="width:100%" type="radio" class="special-radio btn-primary" name="type" value="web" checked required>
                </div>
                <div class="clear"></div>
                <?php endif; ?>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary form-control" value="ارسال">
                </div>
            </form>
        </div>
   </div>
</div>
<?php if(!auth()->check()): ?>
<div class="bk-layout show">
    <div class="remove-fav">
        <img src="<?php echo e(asset('images/gif/login.gif')); ?>">
        <p>من فضلك قم بتسجيل الدخول اولا او بالانضمام معنا اذا كانت هذه اول زياره لك لنا حتي تتمكن من كتابه انطباعاتك لاصدقائك</p>
        <button class="btn btn-primary closeBtn"><a href="/auth/login">تسجيل دخول</a></button>
        <button class="btn btn-info closeBtn"><a href="/auth/register">تسجيل عضويه جديده</a></button>
    </div>
</div>
<?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\first-meeting.com\resources\views/sending/default.blade.php ENDPATH**/ ?>