  <?php $__env->startSection('content'); ?>
<div class="login">
    <div class="container">
        
         <div class="login-box">
              
              <div class="login-header">
                  <div class="image">
                     <img src="<?php echo e(asset('/images/icons/logo.png')); ?>">
                  </div>
                  <div>
                      <p>First Meeting</p>
                      <p>اللقاء الاول</p>
                  </div>
              </div>
             <form role="form" method="post" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data">
                 <?php echo e(csrf_field()); ?>

                 
                 <div>
                    <div class="clear"></div><div class="clear"></div>
                    <div class="form-group-half">
                        <input type="text" name="username" class="form-control " value="<?php echo e(old('username')); ?>" placeholder="اسم المستخدم">
                        <span class="input-icon-right"><i class="fas fa-user"></i></span>
                        <?php if($errors->has('username')): ?>
                        <p class="alert alert-danger error-msg">اسم المستخدم لابد ان يكون علي الاقل 3 احرف</p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group-half text-center">
                         <span>ذكر</span><input type="radio" name="gender" value="male" <?php if(old('gender') == 'male'): ?> checked <?php endif; ?>/>
                         <span>انثي</span><input type="radio" name="gender" value="female" <?php if(old('gender') == 'female'): ?> checked <?php endif; ?>/>
                         <?php if($errors->has('gender')): ?>
                        <p class="alert alert-danger error-msg">حقل النوع اجباري</p>
                        <?php endif; ?>
                    </div>
                    <p class="clear"></p>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="البريد الالكتروني">
                        <span class="input-icon-right"><i class="fas fa-envelope"></i></span>
                        <?php if($errors->has('email')): ?>
                        <p class="alert alert-danger error-msg">البريد الالكتروني تم استخدامه من قبل يرجي اختيار بريد الكتروني اخر</p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" value="<?php echo e(old('password')); ?>" class="form-control" placeholder="كلمله المرور">
                        <span class="input-icon-right"><i class="fas fa-lock"></i></span>
                        <?php if($errors->has('password') && $errors->has('password') != 'The password confirmation does not match.'): ?>
                          <p class="alert alert-danger error-msg">كلمه المرور لابد ان تكون علي الاقل 6 حروف</p>
                        <?php endif; ?>
                   </div>
                   <div class="form-group">
                       <input type="password" name="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>" placeholder="تأكيد كلمه المرور" class="form-control">
                       <span class="input-icon-right"><i class="fas fa-lock"></i></span>
                        <?php if($errors->has('password') && $errors->has('password') == 'The password confirmation does not match.' ): ?>
                          <p class="alert alert-danger error-msg">كلمتان المرور غير متطابقتان</p>
                        <?php endif; ?>
                   </div>
                    <div class="form-group">
                         <div class="upload gray-bk">
                               <span>رفع صوره شخصيه</span>
                               <span class="input-icon-right"><i class="fa fa-image"></i></span>
                               <input type="file" name="image">
                         </div>
                     </div>
                   <div class="clear"></div>
                   <div class="form-group-half">
                         <span class="input-icon-right"><i class="fa fa-building"></i></span>
                         <select class="form-control" name="country_id" required>
                             <option value="">الدوله</option>
                             <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option value="<?php echo e($country->id); ?>" <?php if(old('country_id') == $country->id): ?> selected <?php endif; ?>><?php echo e($country->name); ?></option>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </select>
                         <?php if($errors->has('country_id')): ?>
                        <p class="alert alert-danger error-msg">حقل الدوله اجباري</p>
                        <?php endif; ?>
                    </div>
                   <div class="form-group-half">
                         <span class="input-icon-right"><i class="fa fa-building"></i></span>
                         <select class="form-control" name="city_id">
                             <option value="">المدينه</option>
                             <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option value="<?php echo e($city->id); ?>" <?php if(old('city_id') == $city->id): ?> selected <?php endif; ?>><?php echo e($city->name); ?></option>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </select>
                         <?php if($errors->has('city_id')): ?>
                        <p class="alert alert-danger error-msg">حقل المدينه اجباري</p>
                        <?php endif; ?>
                    </div>
                   <div class="clear"></div>
                    <div class="form-group">
                        <input type="number" name="phone" class="form-control" value="<?php echo e(old('phone')); ?>" placeholder="رقم الهاتف">
                        <span class="input-icon-right"><i class="fas fa-phone"></i></span>
                        <?php if($errors->has('phone')): ?>
                        <p class="alert alert-danger error-msg">لابد ان يكون رقم الهاتف علي الاقل تسعه احرف</p>
                        <?php endif; ?>
                    </div>
                    <p class="clear"></p>

                   <div class="form-group">
                       <button type="button" class="btn btn-primary btn-block">التالي</button> 
                   </div>
                    <p class="note-text">لديك حساب بالفعل ؟ <a href="/auth/login">تسجيل دخول</a></p>
                 </div>
                 <div>
                     <span>تعهدي امام الله</span><br>
                     <p>اتعهد امام الله اني لا اقوم بأرسال اي رسال مخله او مؤذيه او قد تسبب المشاكل او تسئ للدين او العرض او الجنس او الشكل</p>
                     <div class="form-group">
                         <input name="agree" type="checkbox"><span>اوافق علي جميع الشروط</span>
                     </div>
                     <div class="form-group">
                         <input class="btn btn-success form-control" type="submit" disabled value="تسجيل عضويه جديده" />
                     </div>
                  </div>
            </form>
              <div class="shape" >        
                <div></div>
               <div></div>
               <div></div>
             </div>
            
            
         </div>
        </div>
       
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\first-meeting.com\resources\views/auth/register.blade.php ENDPATH**/ ?>